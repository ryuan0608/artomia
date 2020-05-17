function setUpProductItemPage(id) {
	getProductWithId(id);
	listRecommendations();
}

function setUpProductListPage(){
	listAllProducts();

}

function getProductWithId(id) {
	$.post("../Model/requestHandler.php",
		{
			request:"getProductWithId",
			id: id
		},
		function(data, status){
			// get first product
			var product = JSON.parse(data);

			//add to html
			$('.product_image').attr("src", product.image);
			$('.product_title').text(product.name);
			$('.product_artist').text(product.artist);
			$('.product_intro').text(product.description);
			$('.product_material').text(product.material);
			$('.product_size').text(product.size);
			$('.product_price').text(product.price);
		}
	);
}

function listRecommendations() {

	$.post("../Model/requestHandler.php",
		{
			request:"getAllProducts"
		},

		function(data, status){
			// get all products
			var products = JSON.parse(data);

			//add to html
			for(var i = 0; i < 8; i++) {

				// Add ith image to ith img tag
				var src = products[i + 10].image;
				$('.product_recommend').eq(i).attr("src", src);

				var name = products[i].name;
				$('.recommend_title').eq(i).text(name);

				var author = products[i].artist;
				$('.recommend_artist').eq(i).text(author);

				var intro = products[i].description;
				$('.recommend_intro').eq(i).text(intro);

			}
		}
	);
}

function listAllProducts() {
	$.post("../Model/requestHandler.php",
		{
			request:"getAllProducts",
			
		},
		function(data, status){
			// get first product
			var products = JSON.parse(data);
			
			var numberOfProducts = products.length;

			//add to html
			var colCount = 0;
			$('.product-list .column').html('');
			for(var i = 0; i < numberOfProducts; i++) {
				// ith product
				var product = products[i];

				// build html template
				var htmlTemplate = buildProductTemplate(product);

				$('.product-list .column').eq(colCount).append(htmlTemplate);

				colCount += 1;
				if(colCount == 4) {
					colCount = 0;
				}
			}
		}
	);
}

function sortProductsByPrice() {
	var order_arrow = $('.sort_by_price option:selected').text();
	var order;
	if(order_arrow == "⬆️"){
		order = "ASC";
	} 
	if(order_arrow == "⬇️"){
		order = "DESC";
	} 
	$.post("../Model/requestHandler.php",
		{
			request:"getAllProductsSortedByPrice",
			order: order
			
		},
		function(data, status){
			// get first product
			var products = JSON.parse(data);

			
			var numberOfProducts = products.length;

			//add to html
			var colCount = 0;
			$('.product-list .column').html('');
			for(var i = 0; i < numberOfProducts; i++) {
				// ith product
				var product = products[i];

				// build html template
				var htmlTemplate = buildProductTemplate(product);

				$('.product-list .column').eq(colCount).append(htmlTemplate);

				colCount += 1;
				if(colCount == 4) {
					colCount = 0;
				}
			}
		}
	);
}

function buildProductTemplate(product) {
	// TODO: build html template for product
	var template = "<div class='template'>" + 
						"<img class='thumbnail' style='width: 50px;' src='" + product.image + "'><br/>" + 
						"<p class='template_price'>" + product.price + "</p>" + 
					"</div>";
	return template;
}

function addToCart(id){
	var amount = $('select[name="amount"] option:selected').text();
	var price = $('.product_price').text();
	var image = $('.product_image').attr("src");
	var name = $('.product_title').text();

	$.post("../Model/requestHandler.php",
		{
			request:"addToCart",
			id: id,
			image: image,
			name: name,
			amount: amount,
			price: price
		},
		function(data, status){
			// todo: add to cart animation
			displayCart();
			setTimeout(function(){
				hideCart();
				}, 2000);
			
		}
	);
}

function hideCart() {
	$('.popuptext').hide('fast');

	$('.cover').css('z-index', 0);
}

// When the user clicks on div, open the popup
function displayCart() {
	// get cart items
	$.post("../Model/requestHandler.php",
		{
			request:"getCartItems"

		},
		function(data, status){
			// get first product
			var items = JSON.parse(data);

			// todo: add to cart animation
			$('.popuptext').html('');
			for(var i = 0; i < items.length; i++) {
				// templatize
				var htmlTemplate = buildCartItemTemplate(items[i]);

				$('.popuptext').append(htmlTemplate);
			}

			var popup = document.getElementById("myPopup");
	popup.classList.toggle("show");

	$('#myPopup').show('fast');

	$('.cover').css('z-index', 3);
		}
	);
}




function buildCartItemTemplate(item) {
	return "<div class='cart_item'>" + 
				"<div class='cart_image_xs'><img class='thumbnail_xs' src='" + item.image + "'/></div>" + 
				"<div class='cart_info_xs'>" +
					"<strong class='product_title_xs'>" + item.name + "</strong><br>" + 
					"<label class='product_amout_xs'>" + "x" + item.amount + "</label><br>" + 
					"<label class='product_subtotal_xs'>" + "$" + item.total + "</label>" + 
				"</div>"
		   "</div>";		 
}

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
			$('.product_recommend').attr(product.image);

		}
	);

}
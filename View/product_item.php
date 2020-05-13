<?
	include_once "../Model/functions.php";
	include_once "partials/header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width">
	 <!-- <link rel="stylesheet" href="css/styleguide.css">
	 <link rel="stylesheet" href="css/gridsystem.css">
	 <link rel="stylesheet" href="css/storetheme.css"> -->
	<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="js/functions.js"></script>
	<script>
		getProductWithId(<? echo $_GET['id']?>);
	</script>
	<title>Artomia</title>
</head>
<body>
	<nav class="nav-crumds">
	  	<ul>
			<li><a href=" ">Back</a></li>
	   	</ul>
  	</nav>
	<div class="product_info grid gap xs-medium">
		 <div class="image_card col-xs-12 col-md-7">
		 	<div class="product-imagemain">
		 		<img class="product_image image-fit" src="" alt="">
     		</div>
     		<div>
				<p class="product_intro"></p>	
			</div>
     	</div>

     	<div class="col-xs-12 col-md-5">
			<form action="product_addtocart.php" class="card-basic card-flat" method="get">
		 		<div class="card-section">	
					<div>
						<h4 class="product_title"></h4>
					</div>
					<div>
						<p class="product_artist"></p>
					</div>
					<div>
						<p class="product_material"></p>	
					</div>
					<div>
						<p class="product_size"></p>
					</div>
					<div>
						<p class="product_price"></p>	
					</div>
				</div>
				<div class="card-section">
	      		<div class="display-flex">
	       			<div class="flex-stretch">
	        			<strong>Amount</strong>
	       			</div>
					<div class="flex-none form-select">
						<select name="amount">
						 <option >1</option>
						 <option >2</option>
						 <option >3</option>
						 <option >4</option>
						 <option >5</option>
						 <option >6</option>
						 <option >7</option>
						 <option >8</option>
						 <option >9</option>
						 <option >10</option>
						</select>
				    </div>
	      		</div>
	      		<div class="card-section">
	      			<input type="hidden" name="id" value="<?= $product->id?>">
	      			<input type="submit" class="form-button" value="Add To Cart">
	     		</div>
	     	</form>
    	</div>
			
		</div>

		

    	
	</div>


     
     
    
   </div>
  </div>
  <hr class="spacer">
  <h2>Related Products</h2>
  <div class="container-flex grid gap xs-small md-medium product product-list">
  	<div>
  		<img class="product_recommend" src="" alt="">
  		<div class="product_recommend_info">
  			<h6></h6>
  			<h5></h5>
  			<h6></h6>
  		</div>
  	</div>
  	<div>
  		<img class="product_recommend" src="" alt="">
  	</div>
  	<div>
  		<img class="product_recommend" src="" alt="">
  	</div>
  	<div>
  		<img class="product_recommend" src="" alt="">
  	</div>
  	<div>
  		<img class="product_recommend" src="" alt="">
  	</div>
  	<div>
  		<img class="product_recommend" src="" alt="">
  	</div>
  	<div>
  		<img class="product_recommend" src="" alt="">
  	</div>
  	<div>
  		<img class="product_recommend" src="" alt="">
  	</div>
  	<div>
  		<img class="product_recommend" src="" alt="">
  	</div>
  </div>
</body>
</html>
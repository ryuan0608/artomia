<?
	include_once "../Model/functions.php";
	include_once "partials/header.php";

	session_start();
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
		setUpProductItemPage(<? echo $_GET['id']?>);
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
		 <div class="col-xs-12 col-md-7">
		 	<div class="product-imagemain">
		 		<img class="product_image image-fit" src="" alt="">
     		</div>
     		<div>
				<p class="product_intro"></p>	
			</div>
     	</div>

     	<div class="intro_card col-xs-12 col-md-5">
	 		<div class="card-section">	
				<div>
					<h1 class="product_title"></h1>
				</div>
				<div>
					<p class="product_artist product_intro_body"></p>
				</div>
				<div>
					<p class="product_materia product_intro_body"></p>	
				</div>
				<div>
					<p class="product_size product_intro_body"></p>
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
      			<input type="submit" class="form-button" value="Add To Cart" onclick="addToCart(<? echo $_GET['id']; ?>)">
     		</div>
    	</div>
			
		</div>

		

    	
	</div>


     
     
    
   </div>
  </div>
  <hr class="spacer">
  <h2 class="subtitle1">Related Products</h2>
  <div class="container-flex xs-small md-medium product product-list">
  	<div class="column">
  		<div>
  			<img class="product_recommend" src="" alt="">
  			<div class="product_recommend_info">
	  			<p class="recommend_title"></p>
	  			<p class="recommend_artist"></p>
	  			<p class="recommend_intro"></p>
  			</div>
  		</div> 		
		<div>
			<img class="product_recommend" src="" alt="">
			<div class="product_recommend_info">
	  			<p class="recommend_title"></p>
		  		<p class="recommend_artist"></p>
		  		<p class="recommend_intro"></p>
			</div>
		</div>
	</div>
  	  	<div class="column">
  		<div>
  			<img class="product_recommend" src="" alt="">
  			<div class="product_recommend_info">
	  			<p class="recommend_title"></p>
	  			<p class="recommend_artist"></p>
	  			<p class="recommend_intro"></p>
  			</div>
  		</div> 		
		<div>
			<img class="product_recommend" src="" alt="">
			<div class="product_recommend_info">
	  			<p class="recommend_title"></p>
		  		<p class="recommend_artist"></p>
		  		<p class="recommend_intro"></p>
			</div>
		</div>
	</div>
  	<div class="column">
  		<div>
  			<img class="product_recommend" src="" alt="">
  			<div class="product_recommend_info">
	  			<p class="recommend_title"></p>
	  			<p class="recommend_artist"></p>
	  			<p class="recommend_intro"></p>
  			</div>
  		</div> 		
		<div>
			<img class="product_recommend" src="" alt="">
			<div class="product_recommend_info">
	  			<p class="recommend_title"></p>
		  		<p class="recommend_artist"></p>
		  		<p class="recommend_intro"></p>
			</div>
		</div>
	</div>
  	<div class="column">
  		<div>
  			<img class="product_recommend" src="" alt="">
  			<div class="product_recommend_info">
	  			<p class="recommend_title"></p>
	  			<p class="recommend_artist"></p>
	  			<p class="recommend_intro"></p>
  			</div>
  		</div> 		
		<div>
			<img class="product_recommend" src="" alt="">
			<div class="product_recommend_info">
	  			<p class="recommend_title"></p>
		  		<p class="recommend_artist"></p>
		  		<p class="recommend_intro"></p>
			</div>
		</div>
	</div>
  </div>
</body>

<footer><? include_once "partials/footer.php"; ?></footer>
</html>
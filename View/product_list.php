<?php
	include_once "../Model/functions.php";
	include_once "partials/header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width">
	 <!-- <link rel="stylesheet" href="css/styleguide.css"> -->
	 <!-- <link rel="stylesheet" href="css/gridsystem.css"> -->
	 <!-- <link rel="stylesheet" href="css/storetheme.css"> -->
	 <!-- <link rel="stylesheet" href="css/select.css"> -->
	<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="js/functions.js"></script>
	<script src="js/select.js"></script>
	<script>
		setUpProductListPage();
	</script>
	<title>Artomia Gallery</title>
</head>
<body>
	<nav class="nav-crumds">
	  	<ul>
			<li><a href=" ">Back</a></li>
	   	</ul>
  	</nav>
	</div>
	<hr class="spacer">
	<div class="subtitle">
		<div style="text-align: center;">
			<label style="font-size: 50pt; font-weight: 900;">Original art for sale</label>
			<p>Art for the soul. Art for life. Art for your home. Artfinder connects passionate artists with art lovers around the world.</p>
		</div>
	</div>

	<div class="sorting">
		<div class="sorting-select">
			<button class="selected" onclick="changeSortingToPrice(); sortProducts();">price</button>
			<button onclick="changeSortingToDate(); sortProducts();">date</button>
			<button onclick="changeSortingToPopular(); sortProducts();">popular</button>
		</div>
		<button  class="sorting-order sorting-ascending" onclick="changeOrder(); sortProducts();" style="outline: none; border: none; background-color: white; margin-left: auto;">
		</button>
	</div>
	<div class="container-flex xs-small md-medium product product-list">
		<div class="column">
				
		</div>
		<div class="column">
				
		</div>
		<div class="column">
				
		</div>
		<div class="column">
				
		</div>
	</div>	  	
</body>

<footer><? include_once "partials/footer.php"; ?></footer>
</html>
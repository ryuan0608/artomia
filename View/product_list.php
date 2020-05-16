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
	<h2 class="subtitle1">Gallery</h2>
	<select class="sort_by_price" onchange="sortProductsByPrice();">
		<option>⬆️</option>
		<option>⬇️</option>
	</select>
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
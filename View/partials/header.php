<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Artomia</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/styleguide.css">
	<link rel="stylesheet" href="css/gridsystem.css">
	<link rel="stylesheet" href="css/storetheme.css">
	<link href="https://fonts.googleapis.com/css2?family=Amaranth:ital,wght@1,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">

	<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>

</head>

<div class="nav">
	<ul class="nav-pills">
		<li id="nav-logo">
		  	<img src='../Images/artomia_logo.png' alt="artomia_logo">
		</li>  
		<li id="search-bar">
			<div class="searchbar-container">
  				<input type="text" placeholder="Search...">
 				<div class="search"></div>
			</div>
		</li>
		<div class="nav-li">
			<li><a href="#customize">Customize</a></li>
			<li><a href="#gallery">Gallery</a></li>
		    <li class="popup">
		    	<a href="#Cart" onclick="displayCart()">Cart</a>
		    	<span style="display: none;" class="popuptext" id="myPopup">
		    	</span>
			</li>
			
			<li><a href="#about">About</a></li>	 
			<li class="menu-icon dropdown">
				<button class="dropbtn">
				</button>
				<div class="dropdown-content">
					<a href="#">Customize</a>
					<a href="#">Gallery</a>
					<a href="#">Event</a>
				</div>
			</li> 	
		</div>
	  	
  	</ul>
</div>

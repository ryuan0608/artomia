<?php
	include_once "functions.php";

	//handle request
	if(!isset($_POST['request'])){
		echo "Request not defined.";
	}else{
		switch ($_POST['request']) {
			case 'getAllProducts':
				$result = getAllProducts();
				echo $result;
				break;
			case 'getProductWithId':
				$result = getProductWithId($_POST['id']);
				echo $result;
				break;
			case 'getAllProductsSortedByPrice':
				$result = getAllProductsSortedByPrice($_POST['order']);
				echo $result;
				break;
			case 'getAllProductsSortedByDate':
				$result = getAllProductsSortedByDate($_POST['order']);
				echo $result;
				break;
			case 'getAllProductsSortedByPurchase':
				$result = getAllProductsSortedByPurchase($_POST['order']);
				echo $result;
				break;
			case 'addToCart':
				$result = addToCart($_POST['id'], $_POST['amount'], $_POST['price']);
				echo $result;
				break;
			case 'displayCart':
				$result = getCartItems();
				echo json_encode($result);
				break;
			default:
				# code...
				break;
		}
	}


?>
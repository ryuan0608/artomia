<?
	include_once "functions.php";

	//handle request
	if(!isset($_POST['request'])){
		echo "Request not defined.";
	}else{
		switch ($_POST['request']) {
			case 'getProductWithId':
				$result = getProductWithId($_POST['id']);
				echo $result;
				break;
			
			default:
				# code...
				break;
		}
	}


?>
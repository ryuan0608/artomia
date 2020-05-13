<?php

	// 3. Return result
	function getAllProducts(){
		$serverName = "localhost";
		$username = "Alice";
		$password = "2Zhlmcl?";
		$dbName = "Artomia_product";
		$conn = new mysqli($serverName, $username, $password, $dbName);

		//2. Read form table
		$arr = array();
		$sql = "SELECT *
				FROM products";
		$result = $conn->query($sql);
		while ($row = $result->fetch_object()){
			$arr[] = $row;
		}
		return json_encode($arr);
	}

	function getProductWithId($id){
		$serverName = "localhost";
		$username = "Alice";
		$password = "2Zhlmcl?";
		$dbName = "Artomia_product";
		$conn = new mysqli($serverName, $username, $password, $dbName);

		//2. Read form table
		$arr = array();
		$sql = "SELECT *
				FROM products
				WHERE Id = '" . $id . "'";
		$result = $conn->query($sql);
		$product = $result->fetch_object();
	
		return json_encode($product);
	}

?>
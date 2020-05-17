<?php
	include_once "auth.php";

	session_start();

	function getRows($conn,$sql) {
	    $a = [];

	    $result = $conn->query($sql);

	    if($conn->errno) die($conn->error);

	    while($row = $result->fetch_object()) {
	        $a[] = $row;
	    }

	    return $a;
	}

	// 3. Return result
	function getAllProducts(){
		$conn = connectToDB();

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
		$conn = connectToDB();

		//2. Read form table
		$arr = array();
		$sql = "SELECT *
				FROM products
				WHERE Id = '" . $id . "'";
		$result = $conn->query($sql);
		$product = $result->fetch_object();
	
		return json_encode($product);
	}

	function getAllProductsSortedByPrice($order){
		$conn = connectToDB();

		//2. Read form table
		$arr = array();
		$sql = "SELECT *
				FROM products
				ORDER BY price " . $order;
		$result = $conn->query($sql);
		$products = array();
		while ($row = $result->fetch_object()){
			$products[] = $row;
		}
	
		return json_encode($products);
	}

	// CART FUNCTIONS

	// Array find loops an array looking for the first object that matches a boolean function
	function array_find($array, $fn) {
	    foreach($array as $o) if($fn($o)) return $o;
	    return false;
	}

	function getCart() {
	    return isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
	}

	function addToCart($id, $image, $name, $amount, $price) {
	    $cart = getCart();
	    
	    $p = array_find(
	        $cart,
	        function($o) use ($id) { return $o->id==$id; }
	    );

	    if($p) {
	        $p->amount += $amount;
	    } else {
	        $_SESSION['cart'][] = (object)[
	            "id"=>$id,
	            "image"=>$image,
	            "name"=>$name,
	            "amount"=>$amount,
	            "price"=>$price
	        ];
	    }

	    return "success";
	}

	function getCartItems() {
	    $cart = getCart();

	    if(empty($cart)) return [];

	    $ids = implode(",",array_map(function($o){return $o->id;},$cart));
	    $data = getRows(connectToDB(),
	        "SELECT * FROM `products` WHERE `id` in ($ids)"
	    );

	    return array_map(function($o) use ($cart) {
	        $p = array_find($cart,function($co) use ($o){ return $co->id==$o->id; });
	        $o->amount = $p->amount;
	        $o->total = $p->amount * $o->price;
	        return $o;
	    },$data);
	}

	function getCartTotal($fn) {
	    $cart = isset($_SESSION['cart'])?$_SESSION['cart']:[];
	    return array_reduce($cart,function($r,$o) use ($fn) {return $fn($r,$o);},0);
	}
	function getCartTotalItems() {
	    return getCartTotal(function($r,$o){return $r+$o->amount;});
	}
	function  getCartTotalPrice() {
	    $cart = isset($_SESSION['cart'])?$_SESSION['cart']:[];
	    return array_reduce($cart,function($r,$o){return $r+($o->amount*$o->price);});
	}

?>
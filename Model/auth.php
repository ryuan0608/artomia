<?	

	function connectToDB() { //mysquli
		$serverName = "localhost";
		$username = "Alice";
		$password = "2Zhlmcl?";
		$dbName = "Artomia_product";
		$conn = new mysqli($serverName, $username, $password, $dbName);

		return $conn;
	}
?>
<?php
	function connectDB(){
		$serverName = "localhost";
		$username = "root";
		$password = "root";
		$dbName = "Artomia";
		$conn = new mysqli($serverName, $username, $password, $dbName);

		return $conn;
	}

	function query($conn, $sql) {
		$conn->set_charset("utf8");
		$arr = array();
		if($result = $conn->query($sql)) {
			while ($row = $result->fetch_object()) {
				$arr[] = $row;
			}
		}
		return $arr;
	}

	function commit($conn, $sql) {
		$conn->set_charset("utf8");
		return $conn->query($sql);
	}
?>
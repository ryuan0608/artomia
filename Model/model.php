<?php
	include "dbConnection.php";

	/** Model
	 *  Handles all database request
	 */
	class Model {
		function __construct() {
			$this->dbConnection = connectDB();
		}
		// ----- Public access
		public function getProducts() {
			return $this->getProductsWithConstraints([]);
		}

		public function getProductsWithConstraints($constraints) {
			return $this->queryTableWithConstraints('Products', $constraints);
		}


		// ------ Internal use only -------
		// Templatizes db query
		private function queryTableWithConstraints($table, $constraints) {
			$sql = "SELECT *
					FROM " . $table . " 
					WHERE 1 ";
			for($i = 0; $i < count($constraints); $i++) {
				$constraint = $constraints[$i];
				$key = $constraint->key;
				$values = $constraint->values;
				$sql .= " AND (";
				for($j = 0; $j < count($values); $j++) {
					if($j > 0) {
						$sql .= ' OR ';
					}
					$sql .= $key . " = '" . $values[$j] . "' ";
				}
				$sql .= ") ";
			}

			return $this->query($sql);
		}
		// Handles db query requests
		private function query($sql) {
			return query($this->dbConnection, $sql);
		}
		// Handles db insert/update/delete requests
		private function commit($sql) {
			return commit($this->dbConnection, $sql);
		}
	}
?>
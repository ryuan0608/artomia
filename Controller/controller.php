<?php

	include_once "../Model/model.php";

	/** Controller
	 *  Handles requests from view and model
	 */

	class Controller {		
		function __construct() {
			$this->model = new Model();
		}

		public function getAllProducts() {
			return $this->model->getProducts();
		}

		public function getProductsWithConstraints($constraints) {
			return $this->model->getProductsWithConstraints($constraints);
		}
	}
?>
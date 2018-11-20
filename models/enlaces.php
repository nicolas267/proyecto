<?php

class EnlacesModels{

	public function enlacesModel($enlaces)
	{

		if( $enlaces == "admin"||
			$enlaces == "catalog" ||
			$enlaces == "ingreso" ||
			$enlaces == 'gestorProducts' ||
			$enlaces == "createproducts" ||
			$enlaces == "editproducts" ||
			$enlaces == "delete"
		  )
		{

			$module = "views/modules/".$enlaces.".php";

		} elseif($enlaces == "index") {
			$module = "views/modules/index.php";
		} elseif($enlaces == "product" && isset($_GET['action2'])) {
			$module = "views/modules/".$enlaces.".php";
		} else {
			$module = "views/modules/err404.html";
		}

		return $module;

	}


}
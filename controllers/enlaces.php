<?php

class Enlaces
{



	public function enlacesController()
	{


		if(isset($_GET["action2"]))
		{

			$enlaces = $_GET["action"];
			$product = $_GET["action2"];

		} elseif (isset($_GET["action"])) {

			$enlaces = $_GET["action"];
			$product = null;
			
		} else {

			$enlaces = "index";
			$product = null;
		}
		
		$respuesta = EnlacesModels::enlacesModel($enlaces, $product);
		include $respuesta;

	}
}
<?php

class EnlacesModels{

	public function enlacesModel($enlaces){

		if( $enlaces == "admin")
		{

			$module = "views/modules/".$enlaces.".php";

		}
		else if($enlaces == "index"){
			$module = "views/modules/index.php";
		}else {
			$module = "views/modules/page_404.html";
		}

		return $module;

	}


}
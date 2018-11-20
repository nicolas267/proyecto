<?php

class ingreso
{



	public function ingresoController()
	{

		$respuesta = UserModel::ingreso($_POST['user'], $_POST['password']);
		if ($respuesta !== FALSE) {
			session_start();
			$_SESSION["validar"] = true;
			header("Location: admin");
		}
	}	
}
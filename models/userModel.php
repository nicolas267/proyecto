<?php

/**
 * 
 */
class userModel
{
	
	function ingreso($user, $password)
	{
		$consulta = new Consulta();

		$user = $consulta->ver_registros("select * from users WHERE user = '$user' && password = '$password'");

		return $user;

	}
}
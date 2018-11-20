<?php  

/**
 * 
 */
class CategoriesModel
{
	
	function Showcategories()
	{
		$consulta = new Consulta();

		$categories = $consulta->ver_registros("select * from categories");

		return $categories;
	}
}
<?php  


	require_once 'controllers/enlaces.php';
	require_once 'controllers/ShowProduct.php';
	require_once 'controllers/template.php';
	require_once 'controllers/ingreso.php';

	require_once 'models/enlaces.php';
	require_once 'models/conexion.php';
	require_once 'models/consulta.php';
	require_once 'models/ProductsModel.php';
	require_once 'models/CategoriesModel.php';
	require_once 'models/userModel.php';

$template = new templateControllers();
$template -> template();
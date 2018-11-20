<?php

/**
 * 
 */
class ProductsModel
{
	
	public function showProducts()
	{
		$consulta = new Consulta();

		$products = $consulta->ver_registros("select * from products INNER JOIN categories ON products.category_id=categories.category_id;");

		return $products;
	}

	public function showProduct($id)
	{
		$consulta = new Consulta();

		$prducts = $consulta->ver_registros("select * from products INNER JOIN categories ON products.category_id=categories.category_id WHERE id = $id");

		return $prducts;
	}

	public function createProducts($title, $description, $categories, $price)
	{
		$consulta = new Consulta();

		$prducts = $consulta->guardar_registro("INSERT INTO products (title, description, category_id, price) VALUES ('$title', '$description', '$categories', '$price')");
		header("Location: catalog");
	}

	public function deleteProducts($id)
	{
		$consulta = new Consulta();

		$consulta -> borrar_registro("delete from products where id = '$id'");

		return 'ok';
	}

	public function editProducts($title, $description, $categories, $price, $id)
	{
		$consulta = new Consulta();

		$prducts = $consulta->actualizar_registro("UPDATE products set title = '$title', description = '$description', category_id = '$categories', price = '$price' where id = '$id'");

		header("Location: ../catalog");
	}
}
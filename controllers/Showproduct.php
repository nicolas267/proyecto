<?php

/**
 *
 */
class ShowProduct
{

    public function ShowProducts()
    {
        $products   = ProductsModel::showProducts();
        $categories = CategoriesModel::showCategories();
        var_dump($products);
        die();
        foreach ($products as $product) {
            echo ' <!-- Catalog Items - start -->
<div class="section-list">
	<div class="sectls">
		<a href="product/'.$product['id'].'" class="sectls-img">
			<img src="http://placehold.it/203x190" alt="">
		</a>
		<div class="sectls-cont">
			<div class="sectls-ttl-wrap">
				<p><a href="views/#">'.$product['category'].'</a></p>
				<h3><a href="product/'.$product['id'].'">'.$product['title'].'</a></h3>
			</div>
			<div class="sectls-price-wrap">
				<p>Price</p>
				<p class="sectls-price">'.$product['price'].'</p>
			</div>
			<div class="sectls-qnt-wrap">
				<p>Quantity</p>
				<p class="qnt-wrap sectls-qnt">
					<a href="views/#" class="qnt-minus sectls-minus">-</a>
					<input type="text" value="1">
					<a href="views/#" class="qnt-plus sectls-plus">+</a>
				</p>
			</div>
		</div>
		<div class="sectls-info">
			<div class="sectls-rating-wrap">
				<p class="sectls-rating">
					<i class="fa fa-star-o" title="5"></i><i class="fa fa-star-o" title="4"></i><i class="fa fa-star-o" title="3"></i><i class="fa fa-star-o" title="2"></i><i class="fa fa-star-o" title="1"></i>
				</p>
				<p><span class="sectls-rating-count">89</span> reviews</p>
			</div>
			<p class="sectls-id">id 5376445</p>
			<p class="sectls-add">
				<a href="views/#">Add to cart</a>
			</p>
			<p class="sectls-favorites">
				<a href="views/#"></a>
			</p>
			<p class="sectls-compare">
				<a href="views/#"></a>
			</p>
		</div>
	</div>
</div>';
        }
    }


    public function Showproducta()
    {
    	$products   = ProductsModel::showProduct($_GET['action2']);

    	return $products;
    }

    public function create()
    {
    	$products   = ProductsModel::createProducts($_POST['title'], $_POST['description'], $_POST['category'], $_POST['price']);
    }

    public function edit()
    {
    	$products   = ProductsModel::editProducts($_POST['title'], $_POST['description'], $_POST['category'], $_POST['price'], $_GET['action2']);

    }

    public function delete()
    {
    	$products   = ProductsModel::deleteProducts($_GET['action2']);
    	header("Location: catalog");
    }
}

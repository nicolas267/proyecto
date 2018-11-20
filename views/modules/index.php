<!doctype html>
<html lang="en">
<head>

<meta charset="UTF-8">
<title>Motor</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewsport" content="width=device-width, initial-scale=1.0">

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic,300italic,300&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="views/css/font-awesome.min.css">
<link rel="stylesheet" href="views/css/zabuto_calendar.css">
<link rel="stylesheet" href="views/css/flexslider.css">
<link rel="stylesheet" href="views/css/jquery.fancybox.css">
<link rel="stylesheet" href="views/css/ion.rangeSlider.css">
<link rel="stylesheet" href="views/css/ion.rangeSlider.skinFlat.css">
<link rel="stylesheet" href="views/css/style.css">
<link rel="stylesheet" href="views/css/media.css">


<!--[if lt IE 9]>
<script src="views/js/html5shiv.js"></script>
<![endif]-->

</head>
<body>


<!-- Header - start -->
<div class="header">

	<!-- Navmenu Mobile Toggle Button -->
	<a href="views/#" class="header-menutoggle" id="header-menutoggle">Menu</a>

	<div class="header-info">

		<!-- Personal Menu -->
		<div class="header-personal">
			<a href="views/#" class="header-gopersonal"></a>
			<ul>
				<li>
					<a href="views/message.html">Messages <span>12</span></a>
				</li>
				<li>
					<a href="views/#">Bookmarks <span>6</span></a>
				</li>
				<li>
					<a href="views/cart.html">Shopping Cart <span>5</span></a>
				</li>
				<li class="header-order">
					<a href="views/orders.html">Order Status</a>
				</li>
				<li>
					<a href="views/#">Settings</a>
				</li>
				<li>
					<a href="views/#">Log out</a>
				</li>
			</ul>
		</div>

		<!-- Small Cart -->
		<a href="views/cart.html" class="header-cart">
			<div class="header-cart-inner">
				<p class="header-cart-count">
					<img src="views/img/cart.png" alt="">
					<span>0</span>
				</p>
				<p class="header-cart-summ">$0</p>
			</div>
		</a>

		<a href="views/#" class="header-compare"></a>
		<a href="views/#" class="header-favorites"></a>

		<!-- Search Form -->
		<a href="views/#" class="header-searchbtn" id="header-searchbtn"></a>
		<form action="#" class="header-search" id="header-search">
			<input type="text" placeholder="Search parts or vehicles">
			<button type="submit"><i class="fa fa-search"></i></button>
		</form>

	</div>

	<!-- Logotype -->
	<p class="header-logo">
		<a href="views/index.html"><img src="views/img/logo.png" alt=""></a>
	</p>

	<!-- Navmenu - start -->
	<nav id="top-menu">
		<ul>
			<li>
				<a href="views/index.html">Home</a>
			</li>
			<li class="has-child active">
				<a href="views/catalog.html">Catalog</a>
			</li>
			<li class="has-child">
				<a href="views/blog.html">Blog</a>
				<i class="fa fa-angle-down"></i>
				<ul>
					<li><a href="views/blog.html">Blog: Standart</a></li>
				</ul>
			</li>
			<li>
				<a href="views/contacts.html">Contacts</a>
			</li>
			<li class="has-child">
				<a href="views/orders.html">Orders</a>
				<i class="fa fa-angle-down"></i>
				<ul>
					<li><a href="views/orders.html">Orders</a></li>
					<li><a href="views/message.html">Messages</a></li>
					<li><a href="views/cart.html">Shopping Cart</a></li>
				</ul>
			</li>
		</ul>
	</nav>
	<!-- Navmenu - end -->

</div>
<!-- Header - end -->

<!-- Main Content - start -->
<main>


<!-- Frontpage Slider -->
<div class="frontslider-wrap">
	<div class="responisve-container">
		<div class="slider" id="front-slider">
			<div class="slide">
				<img 	src="views/img/front-slider/1.png"
						data-position="45,430" data-in="fade" data-delay="0" data-out="fade" alt="American Legends">
				<p 		class="caption1"			
						data-position="50,0" data-in="right" data-step="0" data-out="fade" data-delay="0">AMERICAN</p>
				<p 		class="caption2" 	
						data-position="150,0" data-in="right" data-step="0" data-out="fade" data-delay="0">LEGENDS</p>		
			</div>
			<div class="slide">
				<img 	src="views/img/front-slider/2.png"
						data-position="50,518" data-in="fade" data-delay="0" data-out="fade" alt="Legendary Bike">
				<p 		class="caption1"			
						data-position="50,0" data-in="right" data-step="0" data-out="fade" data-delay="0">OFFROAD</p>
				<p 		class="caption2" 	
						data-position="150,0" data-in="right" data-step="0" data-out="fade" data-delay="0">KING</p>	
			</div>
			<div class="slide">
				<img 	src="views/img/front-slider/3.png"
						data-position="21,480" data-in="fade" data-delay="0" data-out="fade" alt="Dream Car">
				<p 		class="caption1"			
						data-position="50,0" data-in="right" data-step="0" data-out="fade" data-delay="0">DREAM</p>
				<p 		class="caption2" 	
						data-position="150,0" data-in="right" data-step="0" data-out="fade" data-delay="0">CARS</p>	
			</div>
		</div>
	</div>
</div>


<!-- Categories List -->
<div class="cont">
<ul class="frontcategs">
	<li>
		<a href="views/catalog.html">
			<span class="frontcategs-img">
				<img src="views/img/front-categories/frcateg1.png" alt="">
				<img src="views/img/front-categories/frcateg1h.png" alt="">
			</span>
			<p>Automobiles</p>
		</a>
	</li>
	<li>
		<a href="views/catalog.html">
			<span class="frontcategs-img">
				<img src="views/img/front-categories/frcateg2.png" alt="">
				<img src="views/img/front-categories/frcateg2h.png" alt="">
			</span>
			<p>Motorcycles</p>
		</a>
	</li>
	<li>
		<a href="views/catalog.html">
			<span class="frontcategs-img">
				<img src="views/img/front-categories/frcateg3.png" alt="">
				<img src="views/img/front-categories/frcateg3h.png" alt="">
			</span>
			<p>ATVs</p>
		</a>
	</li>
	<li>
		<a href="views/catalog.html">
			<span class="frontcategs-img">
				<img src="views/img/front-categories/frcateg4.png" alt="">
				<img src="views/img/front-categories/frcateg4h.png" alt="">
			</span>
			<p>Snowmobiles</p>
		</a>
	</li>
	<li>
		<a href="views/catalog.html">
			<span class="frontcategs-img">
				<img src="views/img/front-categories/frcateg5.png" alt="">
				<img src="views/img/front-categories/frcateg5h.png" alt="">
			</span>
			<p>UTVs</p>
		</a>
	</li>
	<li>
		<a href="views/catalog.html">
			<span class="frontcategs-img">
				<img src="views/img/front-categories/frcateg6.png" alt="">
				<img src="views/img/front-categories/frcateg6h.png" alt="">
			</span>
			<p>Scooters</p>
		</a>
	</li>
	<li>
		<a href="views/catalog.html">
			<span class="frontcategs-img">
				<img src="views/img/front-categories/frcateg7.png" alt="">
				<img src="views/img/front-categories/frcateg7h.png" alt="">
			</span>
			<p>Watercrafts</p>
		</a>
	</li>
</ul>
</div>


<!-- Frontpage Filter -->
<div class="frontsearch-wrap">
	<div class="cont frontsearch">
		<h2>Search</h2>
		<p class="frontsearch-count">21900 ITEMS</p>
		<div class="frontsearch-wrap">
			<div class="frontsearch-selects">
				<div class="dropdown-wrap frontsearch-select">
					<p class="dropdown-title frontsearch-select-ttl">Motorcycles</p>
					<ul class="dropdown-list">
						<li>
							<a href="views/#">Choose Type</a>
						</li>
 						<li>
							<a href="views/#">Automobiles</a>
						</li>
						<li class="active">
							<a href="views/#">Motorcycles</a>
						</li>
						<li>
							<a href="views/#">ATVs</a>
						</li>
						<li>
							<a href="views/#">Snowmobiles</a>
						</li>
						<li>
							<a href="views/#">UTVs</a>
						</li>
						<li>
							<a href="views/#">Scooters</a>
						</li>
						<li>
							<a href="views/#">Watercrafts</a>
						</li>
					</ul>
				</div>
				<div class="dropdown-wrap frontsearch-select">
					<p class="dropdown-title frontsearch-select-ttl">Enzo</p>
					<ul class="dropdown-list">
						<li>
							<a href="views/#">Choose Model</a>
						</li>
						<li>
							<a href="views/#">Jetmax</a>
						</li>
						<li>
							<a href="views/#">Speeder</a>
						</li>
						<li>
							<a href="views/#">PCG</a>
						</li>
						<li>
							<a href="views/#">Sanchez</a>
						</li>
						<li>
							<a href="views/#">Vader</a>
						</li>
						<li class="active">
							<a href="views/#">Enzo</a>
						</li>
						<li>
							<a href="views/#">Nex</a>
						</li>
					</ul>
				</div>
				<div class="dropdown-wrap frontsearch-select">
					<p class="dropdown-title frontsearch-select-ttl">GT-Z600</p>
					<ul class="dropdown-list">
						<li>
							<a href="views/#">Choose Version</a>
						</li>
						<li>
							<a href="views/#">GT-Z10</a>
						</li>
						<li>
							<a href="views/#">GT-Z400</a>
						</li>
						<li class="active">
							<a href="views/#">GT-Z600</a>
						</li>
						<li>
							<a href="views/#">H-200</a>
						</li>
						<li>
							<a href="views/#">H-300</a>
						</li>
						<li>
							<a href="views/#">F10</a>
						</li>
						<li>
							<a href="views/#">F20</a>
						</li>
						<li>
							<a href="views/#">A120</a>
						</li>
					</ul>
				</div>
				<div class="dropdown-wrap frontsearch-select dropdown-wrap-range">
					<p id="range_year_ttl" class="dropdown-title frontsearch-select-ttl">2013 - 2016</p>
					<ul class="dropdown-list">
						<li>
							<input type="text" id="range_year" value="">
						</li>
					</ul>
				</div>
				<div class="dropdown-wrap frontsearch-select dropdown-wrap-range">
					<p id="range_cost_ttl" class="dropdown-title frontsearch-select-ttl">$200 - $14.000</p>
					<ul class="dropdown-list">
						<li>
							<input type="text" id="range_cost" value="">
						</li>
					</ul>
				</div>
			</div>
			<div class="frontsearch-cont" id="frontsearch-cont" data-lines-count="20">
				<p class="frontsearch-img">
					<img src="views/img/filter-img.png" alt="">
				</p>
				<p class="frontsearch-model">GT-Z600</p>

				<div class="frontsearch-res frontsearch-res1"><a href="views/catalog.html"><span>260</span> Hand Controls</a></div>
				<div class="frontsearch-point frontsearch-point1"></div>

				<div class="frontsearch-res frontsearch-res2"><a href="views/catalog.html"><span>14</span> Seats</a></div>
				<div class="frontsearch-point frontsearch-point2"></div>

				<div class="frontsearch-res frontsearch-res3"><a href="views/catalog.html"><span>2</span> Windshields</a></div>
				<div class="frontsearch-point frontsearch-point3"></div>

				<div class="frontsearch-res frontsearch-res4"><a href="views/catalog.html">Exhausts <span>103</span></a></div>
				<div class="frontsearch-point frontsearch-point4"></div>

				<div class="frontsearch-res frontsearch-res5"><a href="views/catalog.html"><span>267</span> Lightings</a></div>
				<div class="frontsearch-point frontsearch-point5"></div>

				<div class="frontsearch-res frontsearch-res6"><a href="views/catalog.html">Brake Shoes <span>6</span></a></div>
				<div class="frontsearch-point frontsearch-point6"></div>

				<div class="frontsearch-res frontsearch-res7"><a href="views/catalog.html"><span>34</span> Wheels</a></div>
				<div class="frontsearch-point frontsearch-point7"></div>

				<div class="frontsearch-res frontsearch-res8"><a href="views/catalog.html"><span>874</span> Engines</a></div>
				<div class="frontsearch-point frontsearch-point8"></div>

				<div class="frontsearch-res frontsearch-res9"><a href="views/catalog.html"><span>54</span> Filtres</a></div>
				<div class="frontsearch-point frontsearch-point9"></div>

				<div class="frontsearch-res frontsearch-res10"><a href="views/catalog.html"><span>15</span> Tires</a></div>
				<div class="frontsearch-point frontsearch-point10"></div>

			</div>
		</div>
		<span class="frontsearch-line1"></span>
		<span class="frontsearch-line2"></span>
	</div>
</div>




<!-- Special Deals Items -->
<div class="specials-wrap">
	<div class="cont specials">
		<h2>Special Deals</h2>
		<p class="specials-count">350 ITEMS</p>
		<div class="specials-list">
			<div class="special special-pseudo">
				<a href="views/#" class="special-link"></a>
			</div>
			<div class="special special-first">
				<a href="views/product.html" class="special-link">
					<p class="special-img">
						<img src="views/img/spec1.jpg" alt="">
					</p>
					<h3><span>Nulla lacinia lectus</span></h3>
				</a>
				<p class="special-info">
					<a href="views/#" class="special-categ">Suspensions</a>
					<span class="special-price">$200</span>
					<del>$400</del>
					<a href="views/#" class="special-add">+ Add to cart</a>
				</p>
			</div>
			<div class="special">
				<a href="views/product.html" class="special-link">
					<p class="special-img">
						<img src="views/img/spec2.jpg" alt="">
					</p>
					<h3><span>Praesent amet mollis</span></h3>
				</a>
				<p class="special-info">
					<a href="views/#" class="special-categ">Brakes</a>
					<span class="special-price">$312</span>
					<a href="views/#" class="special-add">+ Add to cart</a>
				</p>
			</div>
			<div class="special">
				<a href="views/product.html" class="special-link">
					<p class="special-img">
						<img src="views/img/spec3.jpg" alt="">
					</p>
					<h3><span>Mauris suscipit tellus</span></h3>
				</a>
				<p class="special-info">
					<a href="views/#" class="special-categ">Gauges</a>
					<span class="special-price">$230.50</span>
					<a href="views/#" class="special-add">+ Add to cart</a>
				</p>
			</div>
			<div class="special">
				<a href="views/product.html" class="special-link">
					<p class="special-img">
						<img src="views/img/spec4.jpg" alt="">
					</p>
					<h3><span>Suspendisse lobortis</span></h3>
				</a>
				<p class="special-info">
					<a href="views/#" class="special-categ">Filters</a>
					<span class="special-price">$1290</span>
					<a href="views/#" class="special-add">+ Add to cart</a>
				</p>
			</div>
			<div class="special">
				<a href="views/product.html" class="special-link">
					<p class="special-img">
						<img src="views/img/spec5.jpg" alt="">
					</p>
					<h3><span>Nam iaculis risus nisi</span></h3>
				</a>
				<p class="special-info">
					<a href="views/#" class="special-categ">Sprockets</a>
					<span class="special-price">$1180</span>
					<a href="views/#" class="special-add">+ Add to cart</a>
				</p>
			</div>
			<div class="special">
				<a href="views/product.html" class="special-link">
					<p class="special-img">
						<img src="views/img/spec6.jpg" alt="">
					</p>
					<h3><span>Sed fermentum elit</span></h3>
				</a>
				<p class="special-info">
					<a href="views/#" class="special-categ">Spark Plugs</a>
					<span class="special-price">$305</span>
					<a href="views/#" class="special-add">+ Add to cart</a>
				</p>
			</div>
			<div class="special">
				<a href="views/product.html" class="special-link">
					<p class="special-img">
						<img src="views/img/spec7.jpg" alt="">
					</p>
					<h3><span>Mauris suscipit tellus</span></h3>
				</a>
				<p class="special-info">
					<a href="views/#" class="special-categ">Springs</a>
					<span class="special-price">$230.30</span>
					<a href="views/#" class="special-add">+ Add to cart</a>
				</p>
			</div>
		</div>
		<p class="special-more">
			<a href="views/#">show more</a>
		</p>
		<span class="special-line1"></span>
		<span class="special-line2"></span>
	</div>
</div>



<!-- Get a Special Deals -->
<div class="getspec-wrap">
	<div class="cont getspec">
		<div class="getspec-cont">
			<h3>Winter is coming</h3>
			<p>New snowmobile parts</p>
			<form action="#" class="form-validate">
				<input data-required="text" data-required-email="email" type="text" placeholder="Email address" name="email3">
				<input type="submit" value="Get a special deals">
			</form>
		</div>
		<a href="views/#" class="getspec-img">
			<img src="views/img/getspec.jpg" alt="">
		</a>
	</div>
</div>



<!-- Popular Items -->
<div class="populars-wrap">
	<div class="cont populars">
		<h2>Popular</h2>
		<p class="populars-count">7 ITEMS</p>
		<div class="populars-list">
			<div class="popular">
				<a href="views/product.html" class="popular-link">
					<p class="popular-img">
						<img src="views/img/pop1.jpg" alt="">
					</p>
					<h3><span>Suspendisse lobortis</span></h3>
				</a>
				<p class="popular-info">
					<a href="views/#" class="popular-categ">Helmets</a>
					<span class="popular-price">$290</span>
					<a href="views/#" class="popular-add">+ Add to cart</a>
				</p>
			</div>
			<div class="popular">
				<a href="views/product.html" class="popular-link">
					<p class="popular-img">
						<img src="views/img/pop2.jpg" alt="">
					</p>
					<h3><span>Nulla lacinia lectus</span></h3>
				</a>
				<p class="popular-info">
					<a href="views/#" class="popular-categ">Filtres</a>
					<span class="popular-price">$1180</span>
					<a href="views/#" class="popular-add">+ Add to cart</a>
				</p>
			</div>
			<div class="popular">
				<a href="views/product.html" class="popular-link">
					<p class="popular-img">
						<img src="views/img/pop3.jpg" alt="">
					</p>
					<h3><span>Praesent amet mollis</span></h3>
				</a>
				<p class="popular-info">
					<a href="views/#" class="popular-categ">Batteries</a>
					<span class="popular-price">$312</span>
					<a href="views/#" class="popular-add">+ Add to cart</a>
				</p>
			</div>
			<div class="popular">
				<a href="views/product.html" class="popular-link">
					<p class="popular-img">
						<img src="views/img/pop4.jpg" alt="">
					</p>
					<h3><span>Mauris suscipit tellus</span></h3>
				</a>
				<p class="popular-info">
					<a href="views/#" class="popular-categ">Boots</a>
					<span class="popular-price">$230.50</span>
					<a href="views/#" class="popular-add">+ Add to cart</a>
				</p>
			</div>
			<div class="popular">
				<a href="views/product.html" class="popular-link">
					<p class="popular-img">
						<img src="views/img/pop5.jpg" alt="">
					</p>
					<h3><span>Suspendisse lobortis</span></h3>
				</a>
				<p class="popular-info">
					<a href="views/#" class="popular-categ">Breaks</a>
					<span class="popular-price">$1290</span>
					<a href="views/#" class="popular-add">+ Add to cart</a>
				</p>
			</div>
			<div class="popular">
				<a href="views/product.html" class="popular-link">
					<p class="popular-img">
						<img src="views/img/pop6.jpg" alt="">
					</p>
					<h3><span>Nam iaculis risus nisi</span></h3>
				</a>
				<p class="popular-info">
					<a href="views/#" class="popular-categ">Bearings</a>
					<span class="popular-price">$1180</span>
					<a href="views/#" class="popular-add">+ Add to cart</a>
				</p>
			</div>
			<div class="popular">
				<a href="views/product.html" class="popular-link">
					<p class="popular-img">
						<img src="views/img/pop7.jpg" alt="">
					</p>
					<h3><span>Sed fermentum elit</span></h3>
				</a>
				<p class="popular-info">
					<a href="views/#" class="popular-categ">Parts</a>
					<span class="popular-price">$305</span>
					<a href="views/#" class="popular-add">+ Add to cart</a>
				</p>
			</div>
			<div class="popular">
				<a href="views/product.html" class="popular-link">
					<p class="popular-img">
						<img src="views/img/pop8.jpg" alt="">
					</p>
					<h3><span>Mauris suscipit tellus</span></h3>
				</a>
				<p class="popular-info">
					<a href="views/#" class="popular-categ">Lights</a>
					<span class="popular-price">$230.30</span>
					<a href="views/#" class="popular-add">+ Add to cart</a>
				</p>
			</div>
		</div>
		<p class="popular-more">
			<a href="views/#">show more</a>
		</p>
		<span class="popular-line1"></span>
		<span class="popular-line2"></span>
	</div>
</div>


<!-- Frontpage Article -->
<div class="botarticle-wrap">
	<div class="cont botarticle">
		<div class="botarticle-cont">
			<h3>Kings of the dirt</h3>
			<p>Best motocross gear</p>
			<a href="views/#" class="botarticle-more">Read more</a>
		</div>
		<a href="views/blog.html" class="botarticle-img">
			<img src="views/img/article1.jpg" alt="">
		</a>
	</div>
</div>


</main>
<!-- Main Content - end -->


<!-- Footer - start -->
<footer class="footer">
	<div class="cont footer-top">

		<!-- Footer Menu -->
		<div class="footer-menu">
			<p>Company</p>
			<ul>
				<li><a href="views/#">Shipping</a></li>
				<li><a href="views/#">Careers</a></li>
				<li><a href="views/#">About us</a></li>
			</ul>
		</div>
		<div class="footer-menu">
			<p>Information</p>
			<ul>
				<li><a href="views/#">Affiliate Program</a></li>
				<li><a href="views/#">Privacy Policy</a></li>
				<li><a href="views/#">Site Map</a></li>
				<li><a href="views/#">Search Terms</a></li>
			</ul>
		</div>
		<div class="footer-menu">
			<p>Account & Orders</p>
			<ul>
				<li><a href="views/#">My Account</a></li>
				<li><a href="views/#">My Garage</a></li>
				<li><a href="views/#">Shopping Cart</a></li>
				<li><a href="views/#">Order Status</a></li>
			</ul>
		</div>

		<div class="footer-info">
			<p class="footer-msg">Our online support is available <a class="callback" href="views/#">Send us a message</a></p>
			<ul class="footer-social">
				<li>
					<a rel="nofollow" target="_blank" href="views/http://facebook.com">
						<i class="fa fa-facebook"></i>
					</a>
				</li>
				<li>
					<a rel="nofollow" target="_blank" href="views/mailto:email@email.com">
						<i class="fa fa-paper-plane"></i>
					</a>
				</li>
				<li>
					<a rel="nofollow" target="_blank" href="views/http://pinterest.com">
						<i class="fa fa-pinterest-p"></i>
					</a>
				</li>
				<li>
					<a rel="nofollow" target="_blank" href="views/http://youtube.com">
						<i class="fa fa-youtube-play"></i>
					</a>
				</li>
				<li>
					<a rel="nofollow" target="_blank" href="views/http://twitter.com">
						<i class="fa fa-twitter"></i>
					</a>
				</li>
				<li>
					<a rel="nofollow" target="_blank" href="views/http://google.com">
						<i class="fa fa-google-plus"></i>
					</a>
				</li>
				<li>
					<a rel="nofollow" target="_blank" href="views/http://twitter.com">
						<i class="fa fa-share-alt"></i>
					</a>
				</li>
			</ul>
			<form action="#" class="form-validate">
				<input data-required="text" data-required-email="email" type="text" placeholder="Email address" name="email1">
				<input type="submit" value="Subscribe">
			</form>
		</div>

	</div>
	<div class="copyright">
		<p class="cont">© 2016 Stockware All Right Received</p>
	</div>
</footer>
<!-- Footer - end -->


<!-- Modal Form -->
<div id="modal-form" class="modal-form">
	<p class="modal-form-ttl">Contact Us</p>
	<form action="#" class="form-validate">
		<input data-required="text" type="text" placeholder="Name" name="name2">
		<input data-required="text" type="text" placeholder="Phone" name="phone2">
		<input data-required="text" data-required-email="email" type="text" placeholder="Email" name="email2">
		<textarea placeholder="Your message" name="mess2"></textarea>
		<input type="submit" value="Send">
	</form>
</div>


<script src="views/js/jquery-1.12.3.min.js"></script>
<script src="views/js/fancybox/fancybox.js"></script>
<script src="views/js/fancybox/helpers/jquery.fancybox-thumbs.js"></script>
<script src="views/js/jquery.flexslider-min.js"></script>
<script src="views/js/masonry.pkgd.min.js"></script>

<script src="views/js/jquery.fractionslider.min.js"></script>
<script src="views/js/ion.rangeSlider.min.js"></script>

<script src="views/js/main.js"></script>

<script>
"use strict";
// Range Slider
$(document).ready(function () {
	var $range_cost = $("#range_cost");
	$range_cost.ionRangeSlider({
	    type: "double",
	    grid: true,
	    min: 0,
	    max: 20000,
	    from: 200,
	    to: 14000,
	    prefix: "$",
	});
	$range_cost.on("change", function () {
	    var $this = $(this),
	        value = $this.prop("value").split(";");

	    $('#range_cost_ttl').html("$" + value[0] + " - $" + value[1]);
	});
	var $range_year = $("#range_year");
	$range_year.ionRangeSlider({
	    type: "double",
	    grid: true,
	    min: 1990,
	    max: 2016,
	    from: 2013,
	    to: 2016,
	});
	$range_year.on("change", function () {
	    var $this = $(this),
	        value = $this.prop("value").split(";");

	    $('#range_year_ttl').html(value[0] + " - " + value[1]);
	});
});
</script>

</body>
</html>
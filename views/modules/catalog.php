<!doctype html>
<html lang="en">
<head>

<meta charset="UTF-8">
<title>Motor</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

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
					<span>3</span>
				</p>
				<p class="header-cart-summ">$300</p>
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
				<a href="index">Home</a>
			</li>
			<li class="has-child active">
				<a href="catalog">Catalog</a>
			</li>
			<li>
				<a href="views/contacts.html">Contacts</a>
			</li>
			<li class="has-child">
				<a href="orders">Orders</a>
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

<!-- Breadcrumbs -->
<div class="b-crumbs-wrap">
	<div class="cont b-crumbs">
		<ul>
			<li>
				<a href="views/index.html">Motor</a>
			</li>
			<li>
				<a href="views/catalog.html">Catalog</a>
			</li>
			<li>
				<span>Main Parts</span>
			</li>
		</ul>
		<div class="b-crumbs-menu">
			<a id="b-crumbs-menu" href="views/#"></a>
			<ul class="b-crumbs-menulist">
				<li><a href="#">Catalog: List Mode</a></li>
			</ul>
		</div>
	</div>
</div>

<div class="cont maincont">

<h1><span>Main parts</span></h1>
<p class="section-count">4535 ITEMS</p>
<span class="maincont-line1 maincont-line12"></span>
<span class="maincont-line2 maincont-line22"></span>

<!-- Catalog Sections -->
<ul class="cont-sections">
	<li class="active">
		<a href="views/#">All</a>
	</li>
	<li>
		<a href="views/#">Suspensions</a>
	</li>
	<li>
		<a href="views/#">Breaks</a>
	</li>
	<li>
		<a href="views/#">Instruments</a>
	</li>
	<li>
		<a href="views/#">Filters</a>
	</li>
	<li>
		<a href="views/#">Boots</a>
	</li>
</ul>

<!-- Catalog Filter - start -->
<div class="section-top">
	<a href="views/#" class="section-menu-btn" id="section-menu-btn">Catalog</a>
	<div class="section-view">
		<p>View</p>
		<div class="dropdown-wrap">
			<p class="dropdown-title section-view-ttl">List</p>
			<ul class="dropdown-list">
				<li class="active">
					<a href="views/catalog.html">List</a>
				</li>
				<li>
					<a href="views/catalog-gallery.html">Gallery</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="section-sort">
		<p>Sort</p>
		<div class="dropdown-wrap">
			<p class="dropdown-title section-sort-ttl">Price: highest first</p>
			<ul class="dropdown-list">
				<li class="active">
					<a href="views/#">Price: highest first</a>
				</li>
				<li>
					<a href="views/#">Price: lowest first</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="section-prices">
		<div class="dropdown-wrap dropdown-wrap-range">
			<p id="range_cost_ttl" class="dropdown-title section-prices-ttl">$100 - $10000</p>
			<ul class="dropdown-list">
				<li>
					<input type="text" id="range_cost" value="">
				</li>
			</ul>
		</div>
	</div>
	<div class="section-shipping">
		<input checked="checked" type="checkbox" id="section-shipping">
		<label for="section-shipping">Free Shipping</label>
	</div>
	<div class="section-menu-wrap" id="section-menu-wrap">
		<div class="section-menu">
			<p class="section-menu-ttl">Main Parts</p>
			<ul class="section-menu-list">
				<?php $products = new ShowProduct;?>
				<?php $products->ShowProducts();?>
			</ul>
		</div>
	</div>
</div>
<!-- Catalog Filter - end -->

<?php $products = new ShowProduct;?>
<?php $products->ShowProducts();?>
<!-- Catalog Items - end -->

<!-- Pagination -->
<ul class="pager">
	<li>
		<a href="views/#">1</a>
	</li>
	<li class="dots">
		<a href="views/#">...</a>
	</li>
	<li>
		<a href="views/#">1</a>
	</li>
	<li class="active">
		<a href="views/#">2</a>
	</li>
	<li>
		<a href="views/#">3</a>
	</li>
	<li>
		<a href="views/#">4</a>
	</li>
	<li>
		<a href="views/#">5</a>
	</li>
	<li class="dots">
		<a href="views/#">...</a>
	</li>
	<li>
		<a href="views/#">12</a>
	</li>
</ul>

</div>

<!-- Get a Special Deals -->
<div class="getspec-wrap">
	<div class="cont getspec">
		<div class="getspec-cont">
			<h3>Winter is coming</h3>
			<p>New snowmobile parts</p>
			<form action="#">
				<input type="text" placeholder="Email address">
				<input type="submit" value="Get a special deals">
			</form>
		</div>
		<a href="views/#" class="getspec-img">
			<img src="http://placehold.it/573x319" alt="">
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
					<a rel="nofollow" target="_blank" href="http://facebook.com">
						<i class="fa fa-facebook"></i>
					</a>
				</li>
				<li>
					<a rel="nofollow" target="_blank" href="views/mailto:email@email.com">
						<i class="fa fa-paper-plane"></i>
					</a>
				</li>
				<li>
					<a rel="nofollow" target="_blank" href="http://pinterest.com">
						<i class="fa fa-pinterest-p"></i>
					</a>
				</li>
				<li>
					<a rel="nofollow" target="_blank" href="http://youtube.com">
						<i class="fa fa-youtube-play"></i>
					</a>
				</li>
				<li>
					<a rel="nofollow" target="_blank" href="http://twitter.com">
						<i class="fa fa-twitter"></i>
					</a>
				</li>
				<li>
					<a rel="nofollow" target="_blank" href="http://google.com">
						<i class="fa fa-google-plus"></i>
					</a>
				</li>
				<li>
					<a rel="nofollow" target="_blank" href="http://twitter.com">
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

<script src="views/js/ion.rangeSlider.min.js"></script>

<script src="views/js/main.js"></script>

<script>
"use strict";
$(document).ready(function () {
	var $range_cost = $("#range_cost");
	$range_cost.ionRangeSlider({
	    type: "double",
	    grid: true,
	    min: 0,
	    max: 20000,
	    from: 100,
	    to: 10000,
	    prefix: "$",
	});
	$range_cost.on("change", function () {
	    var $this = $(this),
	        value = $this.prop("value").split(";");

	    $('#range_cost_ttl').html("$" + value[0] + " - $" + value[1]);
	});
});
</script>

</body>
</html>
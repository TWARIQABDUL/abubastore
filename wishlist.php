<!DOCTYPE HTML>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Wishlist - swiftshop</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700;800&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" /> -->
	<link rel="stylesheet" href="css/font-awesome.css" />
	<link rel="stylesheet" href="css/themify-icons.css" />
	<link rel="stylesheet" href="css/pe-icon-7-stroke.css" />
	<link rel="stylesheet" href="css/animate.css" />
	<link rel="stylesheet" href="css/owl.carousel.css" />
	<link rel="stylesheet" href="css/owl.theme.default.css" />
	<link rel="stylesheet" href="css/meanmenu.min.css" />
	<link rel="stylesheet" href="css/remodal.css" />
	<link rel="stylesheet" href="css/remodal-default-theme.css" />
	<link rel="stylesheet" href="css/venobox.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/responsive.css" />
</head>

<body>

	<!--  Start Header  -->
	<?php
	include "headel.php"
	?>
	<!--  End Header  -->

	<!-- Page item Area -->
	<div id="page_item_area">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 text-left">
					<h3>Wishlist</h3>
				</div>

				<div class="col-sm-6 text-end">
					<ul class="p_items">
						<li><a href="#">home</a></li>
						<li><a href="#">category</a></li>
						<li><span>Wishlist</span></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Wishlist Page -->
	<div class="wishlist-page">
		<div class="container">
			<div class="table-responsive">
				<table class="table cart-table cart_prdct_table text-center">
					<thead>
						<tr>
							<th class="cpt_no">#</th>
							<th class="cpt_img">image</th>
							<th class="cpt_pn">product name</th>
							<th class="stock">stock status</th>
							<th class="cpt_p">price</th>
							<th class="add-cart">add to cart</th>
							<th class="cpt_r">remove</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><span class="cart-number">1</span></td>
							<td><a href="#" class="cp_img"><img src="img/product/bag.jpg" alt="" /></a></td>
							<td><a href="#" class="cart-pro-title">This is Product Title</a></td>
							<td>
								<p class="stock in-stock">Out of stock</p>
							</td>
							<td>
								<p class="cart-pro-price">$204.00</p>
							</td>
							<td><a href="#" class="btn border-btn">add to cart</a></td>
							<td><a class="cp_remove"><i class="fa fa-trash"></i></a></td>
						</tr>
						<tr>
							<td><span class="cart-number">2</span></td>
							<td><a href="#" class="cp_img"><img src="img/product/shoes.jpg" alt="" /></a></td>
							<td><a href="#" class="cart-pro-title">This is Product Title</a></td>
							<td>
								<p class="stock in-stock">in stock</p>
							</td>
							<td>
								<p class="cart-pro-price">$89.00</p>
							</td>
							<td><a href="#" class="btn border-btn">add to cart</a></td>
							<td><a class="cp_remove"><i class="fa fa-trash"></i></a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>


	<!--  FOOTER START  -->
	<?php
	include "footer.php"
	?>
	<!--  FOOTER END  -->

	<script src="js/modernizr-3.11.7.min.js"></script>
	<script src="js/vendor/jquery-min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
	<!-- <script src="bootstrap/js/bootstrap.min.js"></script> -->
	<script src="js/jquery.meanmenu.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.mixitup.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<script src="js/remodal.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.countdown.js"></script>
	<script src="js/venobox.min.js"></script>
	<script src="js/simplePlayer.js"></script>
	<script src="js/scrolltopcontrol.js"></script>
	<script src="js/main.js"></script>
</body>

</html>
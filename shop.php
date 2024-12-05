<!DOCTYPE HTML>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Shop - swiftshop</title>
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
					<h3>Shop</h3>
				</div>

				<div class="col-sm-6 text-end">
					<ul class="p_items">
						<li><a href="#">home</a></li>
						<li><a href="#">category</a></li>
						<li><span>Shop</span></li>
					</ul>
				</div>

			</div>
		</div>
	</div>


	<!-- Shop Product Area -->
	<div class="shop_page_area">
		<div class="container">
			<div class="shop_bar_tp fix">
				<div class="row">
					<div class="col-sm-6 col-xs-12 short_by_area">
						<div class="short_by_inner">
							<label>short by:</label>
							<select class="sort-select">
								<option>Name Descending</option>
								<option>Date Descending</option>
								<option>Price Descending</option>
							</select>
						</div>
					</div>

					<div class="col-sm-6 col-xs-12 show_area">
						<div class="show_inner">
							<label>show:</label>
							<select class="show-select">
								<option>8</option>
								<option>12</option>
								<option>30</option>
								<option>ALL</option>
							</select>
						</div>
					</div>
				</div>
			</div>

			<div class="shop_details text-center">
				<div class="row" id="allproduct">
					<!-- dinamic Product -->
					<!-- End Col -->
				</div>
			</div>

			<!-- Blog Pagination -->
			<div class="col-12">
				<div class="blog_pagination pgntn_mrgntp fix">
					<div class="pagination text-center">
						<ul>
							<li><a href="#"><i class="fa fa-angle-left"></i></a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#" class="active">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
						</ul>
					</div>
				</div>
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
	<script src="js/interacting.js" defer></script>

</body>

</html>
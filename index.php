<!DOCTYPE HTML>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SwiftShop - eCommerce Bootstrap Template</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700;800&display=swap" rel="stylesheet">
	<link rel="icon" href="img/favicon.jpg" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" /> -->
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
	<!--  Start Preloader  -->
	<div class="preloader">
		<div class="status-mes">
			<div class="lds-roller">
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
			</div>
		</div>
	</div>
	<!-- End Preloader -->

	<!--  Start Header  -->
	<?php 
	include "headel.php"
	?>
	<!--  End Header  -->


	<!-- Start Slider Area -->
	<section id="slider_area">
		<div class="slider_active owl-carousel">
			<div class="single_slide">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-12">
							<div class="single-slide-item-table">
								<div class="single-slide-item-tablecell">
									<div class="slider_content text-start slider-animated-2">
										<h4 class="animated">New Men Collections </h4>
										<h1 class="animated">Foot Ball Shoe</h1>
										<a href="pro" class="main_btn animated">Shop Now</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-6 col-12 text-end">
							<img src="img/product/shoes.jpg" alt="Slider Image">
						</div>
					</div>
				</div>
			</div>

			<div class="single_slide">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-12">
							<div class="single-slide-item-table">
								<div class="single-slide-item-tablecell">
									<div class="slider_content text-start slider-animated-2">
										<h4 class="animated">New Women Collections </h4>
										<h1 class="animated">Levis Jeans</h1>
										<a href="product-details.php" class="main_btn animated">Shop Now</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-6 col-12">
							<img src="img/product/jeans.webp" alt="Slider Image">
						</div>
					</div>

				</div>
			</div>

			<div class="single_slide">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-12">
							<div class="single-slide-item-table">
								<div class="single-slide-item-tablecell">
									<div class="slider_content text-start slider-animated-2">
										<h4 class="animated">New Men Collections </h4>
										<h1 class="animated">Summer Sale 2021</h1>
										<a href="product-details.php" class="main_btn animated">Shop Now</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-6 col-12">
							<img src="img/product/bag.jpg" alt="Slider Image">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Slider Area -->

	<!--  Promo ITEM STRAT  -->
	<section id="promo_area" class="section_padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single_promo bg-color">
						<img src="img/product/bag.jpg" alt="promo image">
						<div class="box-content">
							<div class="promo-content">
								<span class="post">2021 Collection</span>
								<h3 class="title">Shoes</h3>
								<a href="product-details.php">Shop Now</a>
							</div>
						</div>
					</div>
				</div><!--  End Col -->

				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single_promo bg-color2">
						<img src="img/product/jeans.webp" alt="promo image">
						<div class="box-content">
							<div class="promo-content">
								<span class="post">Sprint Collection</span>
								<h3 class="title">Watch</h3>
								<a href="product-details.php">Shop Now</a>
							</div>
						</div>
					</div>
				</div><!--  End Col -->

				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single_promo bg-color3">
						<img src="img/product/shoes.jpg" alt="promo image">
						<div class="box-content">
							<div class="promo-content">
								<span class="post">Exclusive Desgin</span>
								<h3 class="title">Bags</h3>
								<a href="product-details.php">Shop Now</a>
							</div>
						</div>
					</div>
				</div><!--  End Col -->
			</div>
		</div>
	</section>
	<!--  Promo ITEM END -->


	<!-- Start product Area -->
	<section id="product_area" class="section_padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="section_title">
						<span class="sub-title">All Products</span>
						<h2>Our Products</h2>
						<div class="divider"></div>
					</div>
				</div>
			</div>

			<div class="text-center">
				<div class="product_filter">
					<ul>
						<li class=" active filter" data-filter="all">All</li>
						<li class="filter" data-filter=".sale">Sale</li>
						<li class="filter" data-filter=".bslr">Bestseller</li>
						<li class="filter" data-filter=".ftrd">Featured</li>
					</ul>
				</div>

				<div class="product_item">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12 mix sale">
							<div class="product-grid">
								<div class="product-image">
									<a href="#">
										<img class="pic-1" src="img/product/p1.jpg" alt="product image">
										<img class="pic-2" src="img/product/p1.jpg" alt="product image">
									</a>
									<ul class="social">
										<li><a href="" data-tip="Quick View"><i class="pe-7s-search"></i></a></li>
										<li><a href="" data-tip="Add to Wishlist"><i class="pe-7s-like"></i></a></li>
										<li><a href="" data-tip="Add to Cart"><i class="pe-7s-cart"></i></a></li>
									</ul>

								</div>

								<div class="product-content">
									<ul class="rating">
										<li class="fa fa-star"></li>
										<li class="fa fa-star"></li>
										<li class="fa fa-star"></li>
										<li class="fa fa-star"></li>
										<li class="fa fa-star"></li>
									</ul>

									<h3 class="title"><a href="#">Product Title</a></h3>
									<div class="price">$15.00

									</div>
								</div>
							</div>
						</div><!-- End Col -->

						<div class="col-lg-3 col-md-6 col-12 mix ftrd">
							<div class="product-grid">
								<div class="product-image">
									<a href="#">
										<img class="pic-1" src="img/product/p1.jpg" alt="product image">
										<img class="pic-2" src="img/product/p1.jpg" alt="product image">
									</a>
									<ul class="social">
										<li><a href="" data-tip="Quick View"><i class="pe-7s-search"></i></a></li>
										<li><a href="" data-tip="Add to Wishlist"><i class="pe-7s-like"></i></a></li>
										<li><a href="" data-tip="Add to Cart"><i class="pe-7s-cart"></i></a></li>
									</ul>
									<span class="product-new-label">-20%</span>
								</div>
								<div class="product-content">
									<ul class="rating">
										<li class="fa fa-star"></li>
										<li class="fa fa-star"></li>
										<li class="fa fa-star"></li>
										<li class="fa fa-star"></li>
										<li class="fa fa-star"></li>
									</ul>

									<h3 class="title"><a href="#">canvas</a></h3>
									<div class="price">$23.00
										<span>$25.00</span>
									</div>
								</div>
							</div>
						</div><!-- End Col -->

						<div class="col-lg-3 col-md-6 col-12 mix">
							<div class="product-grid">
								<div class="product-image">
									<a href="#">
										<img class="pic-1" src="img/product/p1.jpg" alt="product image">
										<img class="pic-2" src="img/product/p1.jpg" alt="product image">
									</a>
									<ul class="social">
										<li><a href="" data-tip="Quick View"><i class="pe-7s-search"></i></a></li>
										<li><a href="" data-tip="Add to Wishlist"><i class="pe-7s-like"></i></a></li>
										<li><a href="" data-tip="Add to Cart"><i class="pe-7s-cart"></i></a></li>
									</ul>

								</div>

								<div class="product-content">
									<ul class="rating">
										<li class="fa fa-star"></li>
										<li class="fa fa-star"></li>
										<li class="fa fa-star"></li>
										<li class="fa fa-star"></li>
										<li class="fa fa-star"></li>
									</ul>

									<h3 class="title"><a href="#">Product Title</a></h3>
									<div class="price">$40.00
									</div>
								</div>
							</div>
						</div><!-- End Col -->


						<div class="col-lg-3 col-md-6 col-12 mix sale bslr">
							<div class="product-grid">
								<div class="product-image">
									<a href="#">
										<img class="pic-1" src="img/product/p1.jpg" alt="product image">
										<img class="pic-2" src="img/product/p1.jpg" alt="product image">
									</a>
									<ul class="social">
										<li><a href="" data-tip="Quick View"><i class="pe-7s-search"></i></a></li>
										<li><a href="" data-tip="Add to Wishlist"><i class="pe-7s-like"></i></a></li>
										<li><a href="" data-tip="Add to Cart"><i class="pe-7s-cart"></i></a></li>
									</ul>
									<span class="product-new-label">New</span>
								</div>
								<div class="product-content">
									<ul class="rating">
										<li class="fa fa-star"></li>
										<li class="fa fa-star"></li>
										<li class="fa fa-star"></li>
										<li class="fa fa-star"></li>
										<li class="fa fa-star"></li>
									</ul>

									<h3 class="title"><a href="#">Product Title</a></h3>
									<div class="price">$80.00
										<span>$60.00</span>
									</div>
								</div>
							</div>
						</div><!-- End Col -->


						<div class="col-lg-3 col-md-6 col-12 mix ftrd">
							<div class="product-grid">
								<div class="product-image">
									<a href="#">
										<img class="pic-1" src="img/product/p1.jpg" alt="product image">
										<img class="pic-2" src="img/product/p1.jpg" alt="product image">
									</a>
									<ul class="social">
										<li><a href="" data-tip="Quick View"><i class="pe-7s-search"></i></a></li>
										<li><a href="" data-tip="Add to Wishlist"><i class="pe-7s-like"></i></a></li>
										<li><a href="" data-tip="Add to Cart"><i class="pe-7s-cart"></i></a></li>
									</ul>
									<span class="product-new-label">Sale</span>
								</div>
								<div class="product-content">
									<ul class="rating">
										<li class="fa fa-star"></li>
										<li class="fa fa-star"></li>
										<li class="fa fa-star"></li>
										<li class="fa fa-star"></li>
										<li class="fa fa-star"></li>
									</ul>

									<h3 class="title"><a href="#">Product Title</a></h3>
									<div class="price">$30.00

									</div>
								</div>
							</div>
						</div><!-- End Col -->

						<div class="col-lg-3 col-md-6 col-12 mix sale bslr">
							<div class="product-grid">
								<div class="product-image">
									<a href="#">
										<img class="pic-1" src="img/product/p1.jpg" alt="product image">
										<img class="pic-2" src="img/product/p1.jpg" alt="product image">
									</a>
									<ul class="social">
										<li><a href="" data-tip="Quick View"><i class="pe-7s-search"></i></a></li>
										<li><a href="" data-tip="Add to Wishlist"><i class="pe-7s-like"></i></a></li>
										<li><a href="" data-tip="Add to Cart"><i class="pe-7s-cart"></i></a></li>
									</ul>
									<span class="product-new-label">-30%</span>
								</div>
								<div class="product-content">
									<ul class="rating">
										<li class="fa fa-star"></li>
										<li class="fa fa-star"></li>
										<li class="fa fa-star"></li>
										<li class="fa fa-star"></li>
										<li class="fa fa-star"></li>
									</ul>

									<h3 class="title"><a href="#">Product Title</a></h3>
									<div class="price">$70.00
										<span>$25.00</span>
									</div>
								</div>
							</div>
						</div><!-- End Col -->

						<div class="col-lg-3 col-md-6 col-12 mix sale bslr">
							<div class="product-grid">
								<div class="product-image">
									<a href="#">
										<img class="pic-1" src="img/product/p1.jpg" alt="product image">
										<img class="pic-2" src="img/product/p1.jpg" alt="product image">
									</a>
									<ul class="social">
										<li><a href="" data-tip="Quick View"><i class="pe-7s-search"></i></a></li>
										<li><a href="" data-tip="Add to Wishlist"><i class="pe-7s-like"></i></a></li>
										<li><a href="" data-tip="Add to Cart"><i class="pe-7s-cart"></i></a></li>
									</ul>

								</div>
								<div class="product-content">
									<ul class="rating">
										<li class="fa fa-star"></li>
										<li class="fa fa-star"></li>
										<li class="fa fa-star"></li>
										<li class="fa fa-star"></li>
										<li class="fa fa-star"></li>
									</ul>

									<h3 class="title"><a href="#">Product Title</a></h3>
									<div class="price">$100.00

									</div>
								</div>
							</div>
						</div><!-- End Col -->


						<div class="col-lg-3 col-md-6 col-12 mix sale bslr">
							<div class="product-grid">
								<div class="product-image">
									<a href="#">
										<img class="pic-1" src="img/product/p1.jpg" alt="product image">
										<img class="pic-2" src="img/product/p1.jpg" alt="product image">
									</a>
									<ul class="social">
										<li><a href="" data-tip="Quick View"><i class="pe-7s-search"></i></a></li>
										<li><a href="" data-tip="Add to Wishlist"><i class="pe-7s-like"></i></a></li>
										<li><a href="" data-tip="Add to Cart"><i class="pe-7s-cart"></i></a></li>
									</ul>
									<span class="product-new-label">-50%</span>
								</div>
								<div class="product-content">
									<ul class="rating">
										<li class="fa fa-star"></li>
										<li class="fa fa-star"></li>
										<li class="fa fa-star"></li>
										<li class="fa fa-star"></li>
										<li class="fa fa-star"></li>
									</ul>

									<h3 class="title"><a href="#">Product Title</a></h3>
									<div class="price">$100.00
										<span>$50.00</span>
									</div>
								</div>
							</div>
						</div><!-- End Col -->

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End product Area -->

	<!-- Special Offer Area -->
	<div class="special_offer_area section_padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12 col-12 text-left">
					<div class="special_info">
						<span>Hurry Up! Offer Ends In</span>
						<h3>Summer Flash Sale </h3>
						<p>Don’t miss out on our exclusive summer deals! Grab your 
							favorites at unbeatable prices before time runs out.
							 Act fast and enjoy incredible savings! </p>
						<div id="countdown" class="text-center"></div>
						<div class="clearfix"></div>
						<a href="#" class="main_btn">Shop Now</a>
					</div>
				</div>

				<div class="col-lg-6 col-md-12 col-12">
					<div class="special_img_wrap text-end">
						<div class="special_img">
							<img src="img/product/bag.jpg" width="350" alt="Offer Image" class="img-responsive">
							<span class="off_baudge text-center">30% <br /> <span>Discount</span></span>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- End Special Offer Area -->

	<!-- Start Featured product Area -->
	<section id="featured_product" class="featured_product_area section_padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="section_title">
						<span class="sub-title">Featured Products From Shop</span>
						<h2>Featured Products</h2>
						<div class="divider"></div>
					</div>
				</div>
			</div>

			<div class="row text-center">
				<div class="col-lg-3 col-md-6 col-12">
					<div class="product-grid">
						<div class="product-image">
							<a href="#">
								<img class="pic-1" src="img/product/p1.jpg" alt="product image">
								<img class="pic-2" src="img/product/p1.jpg" alt="product image">
							</a>
							<ul class="social">
								<li><a href="" data-tip="Quick View"><i class="pe-7s-search"></i></a></li>
								<li><a href="" data-tip="Add to Wishlist"><i class="pe-7s-like"></i></a></li>
								<li><a href="" data-tip="Add to Cart"><i class="pe-7s-cart"></i></a></li>
							</ul>
							<span class="product-new-label">Sale</span>
						</div>

						<div class="product-content">
							<ul class="rating">
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
							</ul>

							<h3 class="title"><a href="#">Product Title</a></h3>
							<div class="price">$15.00
								<span>$30.00</span>
							</div>
						</div>
					</div>
				</div><!-- End Col -->

				<div class="col-lg-3 col-md-6 col-12">
					<div class="product-grid">
						<div class="product-image">
							<a href="#">
								<img class="pic-1" src="img/product/p1.jpg" alt="product image">
								<img class="pic-2" src="img/product/p1.jpg" alt="product image">
							</a>
							<ul class="social">
								<li><a href="" data-tip="Quick View"><i class="pe-7s-search"></i></a></li>
								<li><a href="" data-tip="Add to Wishlist"><i class="pe-7s-like"></i></a></li>
								<li><a href="" data-tip="Add to Cart"><i class="pe-7s-cart"></i></a></li>
							</ul>
							<span class="product-new-label">-20%</span>
						</div>
						<div class="product-content">
							<ul class="rating">
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
							</ul>

							<h3 class="title"><a href="#">Product Title</a></h3>
							<div class="price">$23.00
								<span>$25.00</span>
							</div>
						</div>
					</div>
				</div><!-- End Col -->

				<div class="col-lg-3 col-md-6 col-12">
					<div class="product-grid">
						<div class="product-image">
							<a href="#">
								<img class="pic-1" src="img/product/p1.jpg" alt="product image">
								<img class="pic-2" src="img/product/p1.jpg" alt="product image">
							</a>
							<ul class="social">
								<li><a href="" data-tip="Quick View"><i class="pe-7s-search"></i></a></li>
								<li><a href="" data-tip="Add to Wishlist"><i class="pe-7s-like"></i></a></li>
								<li><a href="" data-tip="Add to Cart"><i class="pe-7s-cart"></i></a></li>
							</ul>
							<span class="product-new-label">Sale</span>
						</div>

						<div class="product-content">
							<ul class="rating">
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
							</ul>

							<h3 class="title"><a href="#">Product Title</a></h3>
							<div class="price">$40.00
								<span>$35.00</span>
							</div>
						</div>
					</div>
				</div><!-- End Col -->


				<div class="col-lg-3 col-md-6 col-12">
					<div class="product-grid">
						<div class="product-image">
							<a href="#">
								<img class="pic-1" src="img/product/p1.jpg" alt="product image">
								<img class="pic-2" src="img/product/p1.jpg" alt="product image">
							</a>
							<ul class="social">
								<li><a href="" data-tip="Quick View"><i class="pe-7s-search"></i></a></li>
								<li><a href="" data-tip="Add to Wishlist"><i class="pe-7s-like"></i></a></li>
								<li><a href="" data-tip="Add to Cart"><i class="pe-7s-cart"></i></a></li>
							</ul>
							<span class="product-new-label">New</span>
						</div>
						<div class="product-content">
							<ul class="rating">
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
							</ul>

							<h3 class="title"><a href="#">Product Title</a></h3>
							<div class="price">$80.00
								<span>$60.00</span>
							</div>
						</div>
					</div>
				</div><!-- End Col -->


				<div class="col-lg-3 col-md-6 col-12">
					<div class="product-grid">
						<div class="product-image">
							<a href="#">
								<img class="pic-1" src="img/product/p1.jpg" alt="product image">
								<img class="pic-2" src="img/product/p1.jpg" alt="product image">
							</a>
							<ul class="social">
								<li><a href="" data-tip="Quick View"><i class="pe-7s-search"></i></a></li>
								<li><a href="" data-tip="Add to Wishlist"><i class="pe-7s-like"></i></a></li>
								<li><a href="" data-tip="Add to Cart"><i class="pe-7s-cart"></i></a></li>
							</ul>
							<span class="product-new-label">Sale</span>
						</div>
						<div class="product-content">
							<ul class="rating">
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
							</ul>

							<h3 class="title"><a href="#">Product Title</a></h3>
							<div class="price">$30.00
								<span>$21.00</span>
							</div>
						</div>
					</div>
				</div><!-- End Col -->

				<div class="col-lg-3 col-md-6 col-12">
					<div class="product-grid">
						<div class="product-image">
							<a href="#">
								<img class="pic-1" src="img/product/p1.jpg" alt="product image">
								<img class="pic-2" src="img/product/p1.jpg" alt="product image">
							</a>
							<ul class="social">
								<li><a href="" data-tip="Quick View"><i class="pe-7s-search"></i></a></li>
								<li><a href="" data-tip="Add to Wishlist"><i class="pe-7s-like"></i></a></li>
								<li><a href="" data-tip="Add to Cart"><i class="pe-7s-cart"></i></a></li>
							</ul>
							<span class="product-new-label">-30%</span>
						</div>
						<div class="product-content">
							<ul class="rating">
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
							</ul>

							<h3 class="title"><a href="#">Product Title</a></h3>
							<div class="price">$70.00
								<span>$25.00</span>
							</div>
						</div>
					</div>
				</div><!-- End Col -->

				<div class="col-lg-3 col-md-6 col-12">
					<div class="product-grid">
						<div class="product-image">
							<a href="#">
								<img class="pic-1" src="img/product/p1.jpg" alt="product image">
								<img class="pic-2" src="img/product/p1.jpg" alt="product image">
							</a>
							<ul class="social">
								<li><a href="" data-tip="Quick View"><i class="pe-7s-search"></i></a></li>
								<li><a href="" data-tip="Add to Wishlist"><i class="pe-7s-like"></i></a></li>
								<li><a href="" data-tip="Add to Cart"><i class="pe-7s-cart"></i></a></li>
							</ul>
							<span class="product-new-label">Sale</span>
						</div>
						<div class="product-content">
							<ul class="rating">
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
							</ul>

							<h3 class="title"><a href="#">Product Title</a></h3>
							<div class="price">$100.00
								<span>$80.00</span>
							</div>
						</div>
					</div>
				</div><!-- End Col -->


				<div class="col-lg-3 col-md-6 col-12">
					<div class="product-grid">
						<div class="product-image">
							<a href="#">
								<img class="pic-1" src="img/product/p1.jpg" alt="product image">
								<img class="pic-2" src="img/product/p1.jpg" alt="product image">
							</a>
							<ul class="social">
								<li><a href="" data-tip="Quick View"><i class="pe-7s-search"></i></a></li>
								<li><a href="" data-tip="Add to Wishlist"><i class="pe-7s-like"></i></a></li>
								<li><a href="" data-tip="Add to Cart"><i class="pe-7s-cart"></i></a></li>
							</ul>
							<span class="product-new-label">-50%</span>
						</div>
						<div class="product-content">
							<ul class="rating">
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
							</ul>

							<h3 class="title"><a href="#">Product Title</a></h3>
							<div class="price">$100.00
								<span>$50.00</span>
							</div>
						</div>
					</div>
				</div><!-- End Col -->
			</div>
		</div>
	</section>
	<!-- End Featured Products Area -->

	<!-- Testimonials Area -->
	<section id="testimonials" class="testimonials_area"
		style="background: url(img/product/bg.jpg); background-size: cover; background-attachment: fixed;">
		<div class="container">
			<div class="row">
				<div class="col-md-12 center-block">
					<div id="testimonial-slider" class="owl-carousel text-center">
						<div class="testimonial">
							<div class="testimonial-content">
								<div class="pic">
									<img src="img/product/babu.jpg" alt="">
								</div>

								<p class="description">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam risus felis, bibendum
									eu finibus semper tincidunt.
								</p>

								<div class="test-bottom text-center">
									<div class="test-des-area">
										<h3 class="testimonial-title">williamson</h3>
										<small class="post"> - Themesvila</small>
									</div>
								</div>
							</div>
						</div>

						<div class="testimonial">
							<div class="testimonial-content">
								<div class="pic">
									<img src="img/product/babu.jpg" alt="">
								</div>

								<p class="description">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam risus felis, bibendum
									eu finibus semper tincidunt.
								</p>
								<div class="test-bottom text-center">
									<div class="test-des-area">
										<h3 class="testimonial-title">Susana</h3>
										<small class="post"> - Themesvila</small>
									</div>
								</div>
							</div>
						</div>


						<div class="testimonial">
							<div class="testimonial-content">
								<div class="pic">
									<img src="img/product/babu.jpg" alt="">
								</div>
								<p class="description">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam risus felis, bibendum
									eu finibus semper tincidunt.
								</p>
								<div class="test-bottom text-center">
									<div class="test-des-area">
										<h3 class="testimonial-title">Michel</h3>
										<small class="post"> - Themesvila</small>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End STestimonials Area -->

	<!--  Blog -->
	<section id="blog_area" class="section_padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="section_title">
						<span class="sub-title">News From Blog</span>
						<h2>News & Articles</h2>
						<div class="divider"></div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single_blog">
						<div class="single_blog_img">
							<img src="img/product/ai2.jpg" alt="">
							<div class="blog_date text-center">
								<div class="bd_day"> 28</div>
								<div class="bd_month">Sep</div>
							</div>
						</div>

						<div class="blog_content">
							<ul class="post-meta">
								<li><i class="ti-user"></i> <a href="#">Admin</a></li>
								<li><i class="ti-comments"></i> <a href="#">2 comments</a></li>
							</ul>
							<h4 class="post_title"><a href="#">A Woman Holding Shopping Bags</a> </h4>
							<p>Proin in blandit lacus. Nam pellentesque tortor eget dui feugiat venenatis ....</p>
						</div>
					</div>
				</div> <!--  End Col -->

				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single_blog">
						<div class="single_blog_img">
							<img src="img/product/ai2.jpg" alt="">
							<div class="blog_date text-center">
								<div class="bd_day"> 20</div>
								<div class="bd_month">JUl</div>
							</div>
						</div>

						<div class="blog_content">
							<ul class="post-meta">
								<li><i class="ti-user"></i> <a href="#">Admin</a></li>
								<li><i class="ti-comments"></i> <a href="#">2 comments</a></li>
							</ul>
							<h4 class="post_title"><a href="#">Offer 50% off on all Clothes </a> </h4>
							<p>Proin in blandit lacus. Nam pellentesque tortor eget dui feugiat venenatis ....</p>
						</div>
					</div>
				</div> <!--  End Col -->

				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single_blog">
						<div class="single_blog_img">
							<img src="img/product/ai2.jpg" alt="">
							<div class="blog_date text-center">
								<div class="bd_day"> 26</div>
								<div class="bd_month">Aug</div>
							</div>
						</div>

						<div class="blog_content">
							<ul class="post-meta">
								<li><i class="ti-user"></i> <a href="#">Admin</a></li>
								<li><i class="ti-comments"></i> <a href="#">2 comments</a></li>
							</ul>
							<h4 class="post_title"><a href="#">Family Doing Grocery Shopping</a> </h4>
							<p>Proin in blandit lacus. Nam pellentesque tortor eget dui feugiat venenatis ....</p>
						</div>
					</div>
				</div> <!--  End Col -->

			</div>
		</div>
	</section>
	<!--  Blog end -->


	<!--  Process -->
	<section class="process_area section_padding">
		<div class="container">
			<div class="row text-center">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-process">
						<!-- process Icon -->
						<div class="picon"><i class="ti-truck"></i></div>
						<!-- process Content -->
						<div class="process_content">
							<h3>Free Shipping</h3>
							<p>Best Shipping Service</p>
						</div>
					</div>
				</div> <!-- End Col -->

				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-process">
						<!-- process Icon -->
						<div class="picon"><i class="ti-credit-card"></i></div>
						<!-- process Content -->
						<div class="process_content">
							<h3>Cash On Delivery</h3>
							<p>Fast Delivery Method</p>
						</div>
					</div>
				</div> <!-- End Col -->

				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-process">
						<!-- process Icon -->
						<div class="picon"><i class="ti-headphone-alt"></i></div>
						<!-- process Content -->
						<div class="process_content">
							<h3>Support 24/7</h3>
							<p>24 Hours a Day</p>
						</div>
					</div>
				</div> <!-- End Col -->

				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-process">
						<!-- process Icon -->
						<div class="picon"><i class="ti-alarm-clock"></i></div>
						<!-- process Content -->
						<div class="process_content">
							<h3>30 Days Return</h3>
							<p>Simply Return 30 Days</p>
						</div>
					</div>
				</div> <!-- End Col -->

			</div>
		</div>
	</section>
	<!--  End Process -->

	<!--  Brand -->
	<section id="brand_area" class="text-center">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="brand_slide owl-carousel">
						<div class="item text-center"> <a href="#"><img src="img/logo1.png" alt=""
									class="img-responsive" /></a> </div>
						<div class="item text-center"> <a href="#"><img src="img/logo1.png" alt=""
									class="img-responsive" /></a> </div>
						<div class="item text-center"> <a href="#"><img src="img/logo1.png" alt=""
									class="img-responsive" /></a> </div>
						<div class="item text-center"> <a href="#"><img src="img/logo1.png" alt=""
									class="img-responsive" /></a> </div>
						<div class="item text-center"> <a href="#"><img src="img/logo1.png" alt=""
									class="img-responsive" /></a> </div>
						<div class="item text-center"> <a href="#"><img src="img/logo1.png" alt=""
									class="img-responsive" /></a> </div>
						<div class="item text-center"> <a href="#"><img src="img/logo1.png" alt=""
									class="img-responsive" /></a> </div>
						<div class="item text-center"> <a href="#"><img src="img/logo1.png" alt=""
									class="img-responsive" /></a> </div>
						<div class="item text-center"> <a href="#"><img src="img/logo1.png" alt=""
									class="img-responsive" /></a> </div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--   Brand end  -->

	<!--  FOOTER START  -->
	<?php 
	include "footer.php"
	?>
	<!--  FOOTER END  -->

	<!-- Start jQuery -->
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
	<!-- End jQuery -->

</body>

</html>
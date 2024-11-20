<!DOCTYPE HTML>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Product Details - swiftshop</title>
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
					<h3>Shop Details</h3>
				</div>

				<div class="col-sm-6 text-end">
					<ul class="p_items">
						<li><a href="#">home</a></li>
						<li><a href="#">category</a></li>
						<li><span>Product Title</span></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Product Details Area  -->
	<div class="prdct_dtls_page_area">
		<div class="container">
			<div class="row">
				<!-- Product Details Image -->
				<div class="col-md-6 col-xs-12">
					<div class="pd_img fix">
						<a class="venobox" href="img/product/bag.jpg"><img src="img/product/bag.jpg" alt="" /></a>
					</div>
				</div>
				<!-- Product Details Content -->
				<div class="col-md-6 col-xs-12">
					<div class="prdct_dtls_content">
						<h3 class="title">Product Title</a></h3>
						<div class="pd_price_dtls fix">
							<!-- Product Price -->
							<div class="pd_price">
								<span class="new">$ 20.00</span>
								<span class="old">(60.00)</span>
							</div>
							<!-- Product Ratting -->
							<div class="pd_ratng">
								<div class="rtngs">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
								</div>
							</div>
						</div>
						<div class="pd_text">
							<h4>overview:</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem portul indunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
						</div>
						<div class="pd_img_size fix">
							<h4>size:</h4>
							<a href="#">s</a>
							<a href="#">m</a>
							<a href="#">l</a>
							<a href="#">xl</a>
							<a href="#">xxl</a>
						</div>
						<div class="pd_clr_qntty_dtls fix">
							<div class="pd_clr">
								<h4>color:</h4>
								<a href="#" class="active" style="background: #ffac9a;">color 1</a>
								<a href="#" style="background: #ddd;">color 2</a>
								<a href="#" style="background: #000000;">color 3</a>
							</div>
							<div class="pd_qntty_area">
								<h4>quantity:</h4>
								<div class="pd_qty fix">
									<input value="1" name="qttybutton" class="cart-plus-minus-box" type="number">
								</div>
							</div>
						</div>
						<!-- Product Action -->
						<div class="pd_btn fix">
							<a class="btn btn-default acc_btn">add to bag</a>
							<a class="btn btn-default acc_btn btn_icn"><i class="fa fa-heart"></i></a>
							<a class="btn btn-default acc_btn btn_icn"><i class="fa fa-refresh"></i></a>
						</div>
						<div class="pd_share_area fix">
							<h4>share this on:</h4>
							<div class="pd_social_icon">
								<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
								<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
								<a class="vimeo" href="#"><i class="fa fa-vimeo"></i></a>
								<a class="google_plus" href="#"><i class="fa fa-google-plus"></i></a>
								<a class="tumblr" href="#"><i class="fa fa-tumblr"></i></a>
								<a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12">
					<div class="pd_tab_area fix">

						<ul class="nav nav-pills mb-3 text-center" id="pills-tab" role="tablist">
							<li class="nav-item" role="presentation">
								<button class="nav-link active" id="pills-description-tab" data-bs-toggle="pill" data-bs-target="#pills-description" type="button" role="tab" aria-controls="pills-description" aria-selected="true">Description</button>
							</li>

							<li class="nav-item" role="presentation">
								<button class="nav-link" id="pills-information-tab" data-bs-toggle="pill" data-bs-target="#pills-information" type="button" role="tab" aria-controls="pills-information" aria-selected="false">Information</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="pills-reviews-tab" data-bs-toggle="pill" data-bs-target="#pills-reviews" type="button" role="tab" aria-controls="pills-reviews" aria-selected="false">Reviews</button>
							</li>
						</ul>

						<div class="tab-content" id="pills-tabContent">
							<div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">

								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
									incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
									exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
									dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
									Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
									anim id est laborum.</p>

								<ul>
									<li>Lorem ipsum dolor sit amet, consectetur product</li>
									<li>Duis aute irure dolor in reprehenderit in voluptate velit esse</li>
									<li>Excepteur sinted occaecat cupidatat non proident products</li>
									<li>Voluptate velit esse cillum.</li>
								</ul>
							</div>

							<div class="tab-pane fade" id="pills-information" role="tabpanel" aria-labelledby="pills-information-tab">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
									incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
									exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
									dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
							</div>

							<div class="tab-pane fade" id="pills-reviews" role="tabpanel" aria-labelledby="pills-reviews-tab">
								<div class="pda_rtng_area fix">
									<h4>4.5 <span>(Overall)</span></h4>
									<span>Based on 9 Comments</span>
								</div>

								<div class="rtng_cmnt_area fix">
									<div class="single_rtng_cmnt">
										<div class="rtngs">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<span>(4)</span>
										</div>
										<div class="rtng_author">
											<h3>John Doe</h3>
											<span>11:20</span>
											<span>6 January 2017</span>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam, quis nost rud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam, quis nost.</p>
									</div>

								</div>

								<div class="col-md-6 rcf_pdnglft">
									<div class="rtng_cmnt_form_area fix">
										<h3>Add your Comments</h3>
										<div class="rtng_form">
											<form action="#">
												<div class="input-area"><input type="text" placeholder="Type your name" /></div>
												<div class="input-area"><input type="text" placeholder="Type your email address" /></div>
												<div class="input-area"><textarea name="message" placeholder="Write a review"></textarea></div>
												<input class="btn border-btn" type="submit" value="Add Review" />
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Related Product Area -->
	<div class="related_prdct_area text-center">
		<div class="container">
			<!-- Section Title -->
			<div class="rp_title text-center">
				<h3>Related products</h3>
			</div>

			<div class="row">
				<div class="col-lg-3 col-md-4 col-sm-6">
					<div class="product-grid">
						<div class="product-image">
							<a href="#">
								<img class="pic-1" src="img/product/bag.jpg" alt="Product Image">
								<img class="pic-2" src="img/product/bag.jpg" alt="Product Image">
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
							<div class="price">$23.00
								<span>$25.00</span>
							</div>
						</div>
					</div>
				</div><!-- End Col -->

				<div class="col-lg-3 col-md-4 col-sm-6">
					<div class="product-grid">
						<div class="product-image">
							<a href="#">
								<img class="pic-1" src="img/product/jeans.webp" alt="Product Image">
								<img class="pic-2" src="img/product/jeans.webp" alt="Product Image">
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
							<div class="price">$29.00
								<span>$25.00</span>
							</div>
						</div>
					</div>
				</div><!-- End Col -->

				<div class="col-lg-3 col-md-4 col-sm-6">
					<div class="product-grid">
						<div class="product-image">
							<a href="#">
								<img class="pic-1" src="img/product/shoes.jpg" alt="Product Image">
								<img class="pic-2" src="img/product/shoes.jpg" alt="Product Image">
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
							<div class="price">$35.00
								<span>$30.00</span>
							</div>
						</div>
					</div>
				</div><!-- End Col -->


				<div class="col-lg-3 col-md-4 col-sm-6">
					<div class="product-grid">
						<div class="product-image">
							<a href="#">
								<img class="pic-1" src="img/product/womendres.jpg" alt="Product Image">
								<img class="pic-2" src="img/product/womendres.jpg" alt="Product Image">
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
							<div class="price">$150.00
								<span>$100.00</span>
							</div>
						</div>
					</div>
				</div><!-- End Col -->
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
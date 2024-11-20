<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Account - swiftshop</title>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700;800&display=swap" rel="stylesheet"> 
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">

		<!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />	 -->
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
						<h3>Account</h3>
					</div>		

					<div class="col-sm-6 text-end">
						<ul class="p_items">
							<li><a href="#">home</a></li>
							<li><a href="#">category</a></li>
							<li><span>Login</span></li>
						</ul>					
					</div>	
				</div>
			</div>
		</div>
		
		
		<!-- Login Page -->
		<div class="login_page_area">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="create_account_area caa_pdngbtm">
							<h2 class="caa_heading">Create an account</h2>
							<div class="caa_form_area">
								<p>Please enter your email address to create an account.</p>
								<div class="caa_form_group">
									<div class="caf_form">
										<label>Email address</label>
										<div class="input-area"><input type="email" /></div>
									</div>
									<button class="btn btn-default acc_btn" type="submit" id="acc_Create"> 
										<span> <i class="fa fa-user btn_icon"></i> Create an account </span> 
									</button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="create_account_area">
							<h2 class="caa_heading">Already registered?</h2>
							<div class="caa_form_area">
								<div class="caa_form_group">
									<div class="login_email">
										<label>Email address</label>
										<div class="input-area"><input type="email" /></div>
									</div>
									<div class="login_password">
										<label>Password</label>
										<div class="input-area"><input type="password" /></div>
									</div>
									<p class="forgot_password">
										<a href="#" title="Recover your forgotten password" rel="">Forgot your password?</a>
									</p>
									<button type="submit" id="acc_Login" class="btn btn-default acc_btn"> 
										<span> <i class="fa fa-lock btn_icon"></i> Sign in </span> 
									</button>
								</div>
							</div>
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
	</body>
</html>
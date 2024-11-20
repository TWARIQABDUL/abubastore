<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Contact Us - Swiftshop</title>
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
						<h3>Contact</h3>
					</div>		

					<div class="col-sm-6 text-end">
						<ul class="p_items">
							<li><a href="#">home</a></li>
							<li><span>Contact</span></li>
						</ul>					
					</div>	
				</div>
			</div>
		</div>
		
		<!-- Contact Page -->
		<div class="contact_page_area fix">
			<div class="container">					
				<div class="row">
					<div class="contact_frm_area text-left col-lg-6 col-md-12 col-xs-12">
						<h3>Get in Touch</h3>
						<form method="POST" action="contact.php">
							<div class="row">
								<div class="form-group col-lg-6"><input type="text" name="name" class="form-control" placeholder="Name*" required="required"  /></div>
								<div class="form-group col-lg-6"><input type="email" name="email" class="form-control" placeholder="Email*" required="required" /></div>
							</div>

							<div class="form-group">
								<input type="text" name="subject" class="form-control" placeholder="Subject" />
							</div>
				
							<div class="form-group">
								<textarea name="message" class="form-control" placeholder="Message" required="required"></textarea>
							</div>
							
							<div class="input-area submit-area"><button class="main_btn" type="submit" name="submit" >Send Message</button></div>
							
						</form>		
					</div>	
				
					<div class="contact_info col-lg-6 col-md-12 col-xs-12">
						<h3>Contact Info</h3>
						<p class="subtitle">
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
							Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
						</p>
						<div class="single_info">
							<div class="con_icon"><i class="pe-7s-map-marker"></i></div>
							<p>1660 Travis Street <br />Miramar, FL 33025 </p>
						</div>
						<div class="single_info">
							<div class="con_icon"><i class="pe-7s-headphones"></i></div>
							<p>Phone : +772-607-0042</p>
							<p>Fax : +772-607-0042</p>
						</div>
						<div class="single_info">
							<div class="con_icon"><i class="pe-7s-mail"></i></div>
							<a href="#">sales@example.com </a> <br />
							<a href="#">support@example.com </a>
						</div>
						
					</div>
				</div>
			</div>
		
							
			<div class="fix">
				<div id="contact_map_area">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8352535722433!2d144.9537353148307!3d-37.817327679751706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sbd!4v1550438711298" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
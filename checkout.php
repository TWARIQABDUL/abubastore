<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Checkout - swiftshop</title>
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
					<h3>Shop Details</h3>
				</div>		

				<div class="col-sm-6 text-end">
					<ul class="p_items">
						<li><a href="#">home</a></li>
						<li><a href="#">category</a></li>
						<li><span>Checkout</span></li>
					</ul>					
				</div>	
			</div>
		</div>
	</div>
		
		
	<!-- Checkout Page -->
	<section class="checkout_page">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="title">
                            <h3>Billing Details</h3>
                        </div>
                        <form class="checkout_form" action="#" method="post">
							<div class="form-row">
								<div class="form-group col-md-6">
									<input name="first_name" placeholder="First name" class="form-control" type="text">
								</div>
								
								 <div class="form-group col-md-6">								
									<input name="last_name" placeholder="Last name" class="form-control" type="text">
								</div>
							</div>
							
                            <div class="form-group">      
                                  <input name="company_name" placeholder="Company name" class="form-control" type="text">                         
                            </div>
							
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input name="email" placeholder="Email address" class="form-control" type="email">
                                </div>
                           
      
                                <div class="form-group col-md-6">
                                    <input name="phone" placeholder="Phone number" class="form-control" type="text">
                                </div>
							</div>
								
                            <div class="form-group">  
								<label for="country">Country:</label>
								<div class="custom-select-wrapper" >
									<select id="country" class="custom-select" >
										<option value="canada">Canada *</option>
										<option value="american">American</option>
										<option value="australia">Australia</option>
									</select>
								</div>
                            </div>
							
							
                            <div class="form-group">
								<label for="address">Address:</label>    
								<textarea rows="3" name="street" id="address" placeholder="Street address. Apartment, suite, unit etc. (optional)" class="form-control"></textarea>
                            </div>
							
                             <div class="form-row">
                               <div class="form-group col-md-6">
                                    <input name="code" placeholder="Post code / Zip" class="form-control" type="text">
                                </div>
								
								 <div class="form-group col-md-6">
                                    <input name="city" placeholder="Town / City" class="form-control" type="text">
                                </div>								
                            </div>

                            <div class="form-group">
								<label for="address">Order note:</label>    
								<textarea rows="3" name="street" placeholder="Order note" class="form-control"></textarea>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="customCheck1">
									<label class="custom-control-label" for="customCheck1">SHIP TO A DIFFERENT ADDRESS?</label>
								</div>                             
                            </div>
                        </form>
                    </div>
					
					
                    <div class="col-md-6">
                        <div class="title">
                            <h3>your order</h3>
                        </div>
						
						<div class="your-order-table table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th class="product-name">Product Name</th>
										<th class="product-total">Total</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="product-name">Pack</td>
										<td class="product-total"><span>$20.00</span></td>
									</tr>
									<tr>
										<td class="product-name">Deluxe Pack</td>
										<td class="product-total"><span>$80.00</span></td>
									</tr>
									<tr>
										<td class="product-name">Anti Mask</td>
										<td class="product-total"><span>$40.00</span></td>
									</tr>
									<tr class="sub-total">
										<td class="product-name">Sub Total</td>
										<td class="product-total"><span>$140.00</span></td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<th>Total</th>
										<td><span class="amount">$140.00</span></td>
									</tr>
								</tfoot>
							</table>
						</div>
						
                        <div class="payment_method">           
							<ul>
								<li>
									<div class="custom-control custom-radio">
										<input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
										<label class="custom-control-label" for="customRadio1">Direct Bank Transfer</label>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed lobortis sem. Quisque at 
										sapien ut odio</p>
									</div>						
						
								</li>
								
								<li>
									<div class="custom-control custom-radio">
										<input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
										<label class="custom-control-label" for="customRadio2">PayPal</label>
									</div>	
								</li>
							</ul>     
                        </div>
						
                        <div class="qc-button">
                            <a href="#" class="btn border-btn" tabindex="0">Place Order</a>
                        </div>
                    </div>
					
                </div>
            </div>
        </section>


 
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
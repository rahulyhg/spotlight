<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<!-- Mirrored from webdesign-finder.com/html/models/features.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Jul 2018 07:46:13 GMT -->
<head>
	<title>Title</title>
	<meta charset="utf-8">
	<!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css" id="color-switcher-link">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/fonts.css">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>

	<!--[if lt IE 9]>
        <script src="js/vendor/html5shiv.min.js"></script>
        <script src="js/vendor/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!--[if lt IE 9]>
        <div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
    <![endif]-->

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>

	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<div class="widget widget_search">
			<form method="get" class="searchform form-inline" action="http://webdesign-finder.com/">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Type search keyword here..." id="modal-search-input">
				</div>
				<button type="submit" class="theme_button input_button">Search</button>
			</form>
		</div>
	</div>

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->


			<?php  include("header.php");  ?>

		
			<section class="page_breadcrumbs changeable ls gradient gorizontal_padding section_padding_20 columns_padding_5 table_section">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-3 text-center text-sm-left darklinks">
							<a href="#">
								<em><span class="__cf_email__" data-cfemail="aacbcdcfc4c9d3ead9dfdadac5d8de84c9c5c7">[email&#160;protected]</span></em>
							</a>
						</div>
						<div class="col-sm-6 text-center">
							<ol class="breadcrumb">
								<li>
									<a href="index-2.html">
										Home
									</a>
								</li>
								<li>
									<a href="#">Pages</a>
								</li>

								<li class="active">
									<span>Features</span>
								</li>
							</ol>
						</div>
						<div class="col-sm-3 text-center text-sm-right">
							<ul class="inline-dropdown inline-block">

								<li class="dropdown cart-dropdown">
									<div class="total-quantity text-center">0 items -
										<span class="total-amount">$0.00</span>
									</div>
									<a class="topline-button" id="cart" data-target="#" href="index-2.html" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
										<i class="rt-icon2-basket"></i>

									</a>
									<div class="dropdown-menu ds" aria-labelledby="cart">
										<span class="grey">Recently added item(s)</span>
										<div class="widget widget_shopping_cart">
											<div class="widget_shopping_cart_content">
												<ul class="cart_list product_list_widget media-list darklinks">
													<li class="media">
														<div class="media-left media-middle">
															<a href="product-right.html">
																<img src="images/models_square/01.jpg" alt="">
															</a>
														</div>
														<div class="media-body media-middle">
															<h4>
																<a href="product-right.html">Stet clitad gubergren</a>
															</h4>
															<span class="quantity">1 ×
																<span class="amount">$90</span>
															</span>
														</div>
														<div class="media-body media-middle">
															<a href="#" class="remove" title="Remove this item">
																<i class="rt-icon2-trash highlight"></i>
															</a>
														</div>
													</li>
													<li class="media">
														<div class="media-left media-middle">
															<a href="product-right.html">
																<img src="images/models_square/02.jpg" alt="">
															</a>
														</div>

														<div class="media-body media-middle">
															<h4>
																<a href="product-right.html">Takimata san bctus</a>
															</h4>
															<span class="quantity">1 ×
																<span class="amount">$90</span>
															</span>
														</div>
														<div class="media-body media-middle">
															<a href="#" class="remove" title="Remove this item">
																<i class="rt-icon2-trash highlight"></i>
															</a>
														</div>
													</li>
												</ul>
												<!-- end product list -->

												<p class="total">
													<span class="grey">Cart Subtotal:
														<span class="amount">$180</span>
													</span>
												</p>

												<p class="buttons">
													<a href="cart-right.html" class="theme_button color1">View All</a>
													<a href="checkout-right.html" class="theme_button inverse">Checkout</a>
												</p>

											</div>
										</div>
									</div>
								</li>
								<li class="dropdown login-dropdown">
									<a class="topline-button" id="login" data-target="#" href="index-2.html" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
										<i class="rt-icon2-user"></i>
									</a>
									<div class="dropdown-menu ds" aria-labelledby="login">
										<form role="form" action="http://webdesign-finder.com/">
											<div class="form-group">
												<label for="login_email" class="sr-only">Email address</label>
												<input type="email" class="form-control" id="login_email" placeholder="Email address">
											</div>
											<div class="form-group">
												<label for="login_password" class="sr-only">Password</label>
												<input type="password" class="form-control" id="login_password" placeholder="Password">
											</div>
											<button type="button" class="theme_button color1 bottommargin_0">
												Log in
											</button>
											<div class="checkbox-inline">
												<input type="checkbox" id="remember">
												<label for="remember" class="bottommargin_0"> Remember Me</label>
											</div>
										</form>
										<div class="topmargin_25">
											<a href="register.html" class="text-uppercase">Forgot Your Password?</a>
										</div>
									</div>
								</li>
								<li class="dropdown">
									<a href="#" class="search_modal_button topline-button">
										<i class="rt-icon2-search2"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section>

			<section class="ds section_padding_top_100 section_padding_bottom_100">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 to_animate" data-animation="scaleAppear">

							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li class="active">
									<a href="#tab1" role="tab" data-toggle="tab">Solar Panels</a>
								</li>
								<li>
									<a href="#tab2" role="tab" data-toggle="tab">Wind Turbines</a>
								</li>
							</ul>

							<!-- Tab panes -->
							<div class="tab-content no-border top-color-border">
								<div class="tab-pane fade in active" id="tab1">

									<div class="table-responsive">
										<table class="table_template">
											<thead class="light">
												<tr>
													<th>Solar Panel (Watts)</th>
													<th>Amps</th>
													<th>Length (in.)</th>
													<th>Width (in.)</th>
													<th>Height (in.)</th>
													<th>Weight (lbs.)</th>
												</tr>
											</thead>
											<tbody class="grey">

												<tr>
													<td>
														5 Watt Panel
													</td>
													<td>
														0.29
													</td>
													<td>
														11
													</td>
													<td>
														7.5
													</td>
													<td>
														5/8
													</td>
													<td>
														1.45
													</td>
												</tr>

												<tr>
													<td>
														10 Watt Panel
													</td>
													<td>
														0.57
													</td>
													<td>
														17.5
													</td>
													<td>
														7.5
													</td>
													<td>
														1
													</td>
													<td>
														2.55
													</td>
												</tr>

												<tr>
													<td>
														20 Watt Panel
													</td>
													<td>
														0.29
													</td>
													<td>
														11
													</td>
													<td>
														7.5
													</td>
													<td>
														5/8
													</td>
													<td>
														1.45
													</td>
												</tr>

												<tr>
													<td>
														30 Watt Panel
													</td>
													<td>
														0.57
													</td>
													<td>
														17.5
													</td>
													<td>
														7.5
													</td>
													<td>
														1
													</td>
													<td>
														2.55
													</td>
												</tr>
												<tr>
													<td>
														40 Watt Panel (Black Frame)
													</td>
													<td>
														0.29
													</td>
													<td>
														11
													</td>
													<td>
														7.5
													</td>
													<td>
														5/8
													</td>
													<td>
														1.45
													</td>
												</tr>

												<tr>
													<td>
														60 Watt Panel
													</td>
													<td>
														0.57
													</td>
													<td>
														17.5
													</td>
													<td>
														7.5
													</td>
													<td>
														1
													</td>
													<td>
														2.55
													</td>
												</tr>
												<tr>
													<td>
														80 Watt Panel 13.5″x58″ (Black Frame)
													</td>
													<td>
														0.29
													</td>
													<td>
														11
													</td>
													<td>
														7.5
													</td>
													<td>
														5/8
													</td>
													<td>
														1.45
													</td>
												</tr>

												<tr>
													<td>
														100 Watt Panel
													</td>
													<td>
														0.57
													</td>
													<td>
														17.5
													</td>
													<td>
														7.5
													</td>
													<td>
														1
													</td>
													<td>
														2.55
													</td>
												</tr>

												<tr>
													<td>
														150 Watt Panel
													</td>
													<td>
														0.29
													</td>
													<td>
														11
													</td>
													<td>
														7.5
													</td>
													<td>
														5/8
													</td>
													<td>
														1.45
													</td>
												</tr>

												<tr>
													<td>
														160 Watt Panel (Black Frame)
													</td>
													<td>
														0.57
													</td>
													<td>
														17.5
													</td>
													<td>
														7.5
													</td>
													<td>
														1
													</td>
													<td>
														2.55
													</td>
												</tr>

											</tbody>
										</table>
									</div>

								</div>
								<!-- .tab-pane -->


								<div class="tab-pane fade" id="tab2">


									<div class="table-responsive">
										<table class="table_template">
											<thead class="light">
												<tr>
													<th>Turbines (Watts)</th>
													<th>Amps</th>
													<th>Length (in.)</th>
													<th>Width (in.)</th>
													<th>Height (in.)</th>
													<th>Weight (lbs.)</th>
												</tr>
											</thead>
											<tbody class="grey">

												<tr>
													<td>
														5 Watt Panel
													</td>
													<td>
														0.29
													</td>
													<td>
														11
													</td>
													<td>
														7.5
													</td>
													<td>
														5/8
													</td>
													<td>
														1.45
													</td>
												</tr>

												<tr>
													<td>
														10 Watt Panel
													</td>
													<td>
														0.57
													</td>
													<td>
														17.5
													</td>
													<td>
														7.5
													</td>
													<td>
														1
													</td>
													<td>
														2.55
													</td>
												</tr>

												<tr>
													<td>
														20 Watt Panel
													</td>
													<td>
														0.29
													</td>
													<td>
														11
													</td>
													<td>
														7.5
													</td>
													<td>
														5/8
													</td>
													<td>
														1.45
													</td>
												</tr>

												<tr>
													<td>
														30 Watt Panel
													</td>
													<td>
														0.57
													</td>
													<td>
														17.5
													</td>
													<td>
														7.5
													</td>
													<td>
														1
													</td>
													<td>
														2.55
													</td>
												</tr>
												<tr>
													<td>
														40 Watt Panel (Black Frame)
													</td>
													<td>
														0.29
													</td>
													<td>
														11
													</td>
													<td>
														7.5
													</td>
													<td>
														5/8
													</td>
													<td>
														1.45
													</td>
												</tr>

												<tr>
													<td>
														60 Watt Panel
													</td>
													<td>
														0.57
													</td>
													<td>
														17.5
													</td>
													<td>
														7.5
													</td>
													<td>
														1
													</td>
													<td>
														2.55
													</td>
												</tr>
												<tr>
													<td>
														80 Watt Panel 13.5″x58″ (Black Frame)
													</td>
													<td>
														0.29
													</td>
													<td>
														11
													</td>
													<td>
														7.5
													</td>
													<td>
														5/8
													</td>
													<td>
														1.45
													</td>
												</tr>

												<tr>
													<td>
														100 Watt Panel
													</td>
													<td>
														0.57
													</td>
													<td>
														17.5
													</td>
													<td>
														7.5
													</td>
													<td>
														1
													</td>
													<td>
														2.55
													</td>
												</tr>

												<tr>
													<td>
														150 Watt Panel
													</td>
													<td>
														0.29
													</td>
													<td>
														11
													</td>
													<td>
														7.5
													</td>
													<td>
														5/8
													</td>
													<td>
														1.45
													</td>
												</tr>

												<tr>
													<td>
														160 Watt Panel (Black Frame)
													</td>
													<td>
														0.57
													</td>
													<td>
														17.5
													</td>
													<td>
														7.5
													</td>
													<td>
														1
													</td>
													<td>
														2.55
													</td>
												</tr>

											</tbody>
										</table>
									</div>


								</div>
								<!-- .tab-pane -->

							</div>

						</div>
					</div>
				</div>
			</section>

			<section class="ds ms section_padding_30 page_social">
				<div class="container">
					<div class="row topmargin_20 bottommargin_10">
						<div class="col-sm-12 text-center">
							<div class="page_social_icons">
								<a class="social-icon color-bg-icon soc-facebook" href="#" title="Facebook"></a>
								<a class="social-icon color-bg-icon soc-twitter" href="#" title="Twitter"></a>
								<a class="social-icon color-bg-icon soc-google" href="#" title="Google"></a>
								<a class="social-icon color-bg-icon soc-linkedin" href="#" title="LinkedIn"></a>
								<a class="social-icon color-bg-icon soc-pinterest" href="#" title="Pinterest"></a>
							</div>
						</div>
					</div>
				</div>
			</section>

			<?php include("footer.php");  ?>


			<?php include("copyright2.php");  ?> 


		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->

	<script data-cfasync="false" src="../../cdn-cgi/scripts/f2bf09f8/cloudflare-static/email-decode.min.js"></script><script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
	<script src="js/switcher.js"></script>

</body>


<!-- Mirrored from webdesign-finder.com/html/models/features.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Jul 2018 07:46:13 GMT -->
</html>
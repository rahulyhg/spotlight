<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<!-- Mirrored from webdesign-finder.com/html/models/appointment.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Jul 2018 07:48:18 GMT -->
<head>
	<title>Appointment</title>
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

			<?php  include('header.php');  ?>

			<section class="page_breadcrumbs changeable ls gradient gorizontal_padding section_padding_20 columns_padding_5 table_section">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-3 text-center text-sm-left darklinks">
							<a href="#">
								<em><span class="__cf_email__" data-cfemail="0d6c6a68636e744d7e787d7d627f79236e6260">[email&#160;protected]</span></em>
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
									<span>Rates</span>
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


			<section class="ds section_padding_70">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="big topmargin_0 bottommargin_30">Photo Session Appointment</h2>
							<p class="fontsize_20 maxwidth_570 inline-block bottommargin_40">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="calendar appointment-calendar">
								<div class="calendar-header text-center">
									<a href="#" class="prev pull-left">
										<i class="rt-icon2-angle-left"></i>
									</a>
									<h2 class="inline-block">December 2016</h2>
									<a href="#">Back to November</a>
									<a href="#" class="next pull-right">
										<i class="rt-icon2-angle-right"></i>
									</a>
								</div>
								<div class="week-days">
									<div class="sunday">Sun</div>
									<div class="monday">Mon</div>
									<div class="tuesday">Tue</div>
									<div class="wednesday">Wed</div>
									<div class="thursday">Thu</div>
									<div class="friday">Fri</div>
									<div class="saturday">Sat</div>
								</div>
								<div class="month-box">
									<div class="week-row">
										<div class="day-cell not-cur-month">
											<span class="day-date">28</span>
										</div>
										<div class="day-cell not-cur-month">
											<span class="day-date">29</span>
										</div>
										<div class="day-cell">
											<span class="day-date">1</span>
										</div>
										<div class="day-cell">
											<span class="day-date">2</span>
										</div>
										<div class="day-cell">
											<span class="day-date">3</span>
										</div>
										<div class="day-cell">
											<span class="day-date">4</span>
										</div>
										<div class="day-cell">
											<span class="day-date">5</span>
										</div>
									</div>
									<div class="week-row">
										<div class="day-cell">
											<span class="day-date">6</span>
										</div>
										<div class="day-cell">
											<span class="day-date">7</span>
										</div>
										<div class="day-cell">
											<span class="day-date">8</span>
										</div>
										<div class="day-cell">
											<span class="day-date">9</span>
										</div>
										<div class="day-cell">
											<span class="day-date">10</span>
										</div>
										<div class="day-cell">
											<span class="day-date">11</span>
										</div>
										<div class="day-cell">
											<span class="day-date">12</span>
										</div>
									</div>
									<div class="week-row selected-row">
										<div class="day-cell">
											<span class="day-date">13</span>
										</div>
										<div class="day-cell">
											<span class="day-date">14</span>
										</div>
										<div class="day-cell">
											<span class="day-date">15</span>
										</div>
										<div class="day-cell">
											<span class="day-date">16</span>
										</div>
										<div class="day-cell selected-day">
											<span class="day-date">17</span>
										</div>
										<div class="day-cell">
											<span class="day-date">18</span>
										</div>
										<div class="day-cell">
											<span class="day-date">19</span>
										</div>
									</div>
									<div class="appointment-list">
										<p class="grey bottommargin_25">Available Appointment:</p>
										<ul>
											<li class="unavailable">
												<div class="appointment-time">
													<i class="rt-icon2-clock3"></i>
													<span>8:00 am – 9:00 am</span>
												</div>
												<div class="appointment-slots">
													<span>0 time slots available</span>
												</div>
												<div class="book-appointment">
													<a href="#" class="theme_button inverse">Unavailable</a>
												</div>
											</li>
											<li class="unavailable">
												<div class="appointment-time">
													<i class="rt-icon2-clock3"></i>
													<span>8:00 am – 9:00 am</span>
												</div>
												<div class="appointment-slots">
													<span>0 time slots available</span>
												</div>
												<div class="book-appointment">
													<a href="#" class="theme_button inverse">Unavailable</a>
												</div>
											</li>
											<li class="unavailable">
												<div class="appointment-time">
													<i class="rt-icon2-clock3"></i>
													<span>8:00 am – 9:00 am</span>
												</div>
												<div class="appointment-slots">
													<span>0 time slots available</span>
												</div>
												<div class="book-appointment">
													<a href="#" class="theme_button inverse">Unavailable</a>
												</div>
											</li>
											<li>
												<div class="appointment-time">
													<i class="rt-icon2-clock3"></i>
													<span>8:00 am – 9:00 am</span>
												</div>
												<div class="appointment-slots">
													<span>1 time slots available</span>
												</div>
												<div class="book-appointment">
													<a href="#" class="theme_button color1">Book Appointment</a>
												</div>
											</li>
											<li>
												<div class="appointment-time">
													<i class="rt-icon2-clock3"></i>
													<span>8:00 am – 9:00 am</span>
												</div>
												<div class="appointment-slots">
													<span>3 time slots available</span>
												</div>
												<div class="book-appointment">
													<a href="#" class="theme_button color1">Book Appointment</a>
												</div>
											</li>
											<li>
												<div class="appointment-time">
													<i class="rt-icon2-clock3"></i>
													<span>8:00 am – 9:00 am</span>
												</div>
												<div class="appointment-slots">
													<span>5 time slots available</span>
												</div>
												<div class="book-appointment">
													<a href="#" class="theme_button color1">Book Appointment</a>
												</div>
											</li>
											<li>
												<div class="appointment-time">
													<i class="rt-icon2-clock3"></i>
													<span>8:00 am – 9:00 am</span>
												</div>
												<div class="appointment-slots">
													<span>5 time slots available</span>
												</div>
												<div class="book-appointment">
													<a href="#" class="theme_button color1">Book Appointment</a>
												</div>
											</li>
											<li>
												<div class="appointment-time">
													<i class="rt-icon2-clock3"></i>
													<span>8:00 am – 9:00 am</span>
												</div>
												<div class="appointment-slots">
													<span>4 time slots available</span>
												</div>
												<div class="book-appointment">
													<a href="#" class="theme_button color1">Book Appointment</a>
												</div>
											</li>
										</ul>
									</div>
									<div class="week-row">
										<div class="day-cell">
											<span class="day-date">20</span>
										</div>
										<div class="day-cell">
											<span class="day-date">21</span>
										</div>
										<div class="day-cell">
											<span class="day-date">22</span>
										</div>
										<div class="day-cell">
											<span class="day-date">23</span>
										</div>
										<div class="day-cell">
											<span class="day-date">24</span>
										</div>
										<div class="day-cell">
											<span class="day-date">25</span>
										</div>
										<div class="day-cell">
											<span class="day-date">26</span>
										</div>
									</div>
									<div class="week-row">
										<div class="day-cell">
											<span class="day-date">27</span>
										</div>
										<div class="day-cell">
											<span class="day-date">28</span>
										</div>
										<div class="day-cell">
											<span class="day-date">29</span>
										</div>
										<div class="day-cell">
											<span class="day-date">30</span>
										</div>
										<div class="day-cell">
											<span class="day-date">31</span>
										</div>
										<div class="day-cell not-cur-month">
											<span class="day-date">1</span>
										</div>
										<div class="day-cell not-cur-month">
											<span class="day-date">2</span>
										</div>
									</div>
									<div class="week-row">
										<div class="day-cell not-cur-month">
											<span class="day-date">3</span>
										</div>
										<div class="day-cell not-cur-month">
											<span class="day-date">4</span>
										</div>
										<div class="day-cell not-cur-month">
											<span class="day-date">5</span>
										</div>
										<div class="day-cell not-cur-month">
											<span class="day-date">6</span>
										</div>
										<div class="day-cell not-cur-month">
											<span class="day-date">7</span>
										</div>
										<div class="day-cell not-cur-month">
											<span class="day-date">8</span>
										</div>
										<div class="day-cell not-cur-month">
											<span class="day-date">9</span>
										</div>
									</div>
								</div>
							</div>

							<div class="flexslider banner-slider">
								<ul class="slides">
									<li class="gradient_bg_goriz">
										<div class="bg_overlay"></div>
										<img src="images/banner_slide_01.jpg" alt="">
										<div class="media-links">
											<a class="abs-link" href="#"></a>
										</div>
									</li>
									<li class="gradient_bg_goriz">
										<div class="bg_overlay"></div>
										<img src="images/banner_slide_02.jpg" alt="">
										<div class="media-links">
											<a class="abs-link" href="#"></a>
										</div>
									</li>
								</ul>
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


<!-- Mirrored from webdesign-finder.com/html/models/appointment.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Jul 2018 07:48:18 GMT -->
</html>
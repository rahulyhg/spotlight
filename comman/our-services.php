<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<!-- Mirrored from webdesign-finder.com/html/models/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Jul 2018 07:46:13 GMT -->
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

			<?php  include('header.php');  ?>

			<section class="page_breadcrumbs changeable ls gradient gorizontal_padding section_padding_20 columns_padding_5 table_section">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-3 text-center text-sm-left darklinks">
							<a href="#">
								<em><span class="__cf_email__" data-cfemail="8cedebe9e2eff5ccfff9fcfce3fef8a2efe3e1">[email&#160;protected]</span></em>
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
									<span>Services</span>
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


			<section class="ds section_padding_top_100 section_padding_bottom_80 columns_padding_25">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<h2 class="topmargin_0">Our Services</h2>

							<div class="divider_30">
								<img src="images/gallery/06.jpg" alt="">
							</div>

							<div class="entry-excerpt">
								<p>
									Namber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.
								</p>
							</div>
							<p>
								Lorem idolorame conseetur sadipscing elitdiam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam ersed diam voluptua vero eoet accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
								sit amet rem ipsum dolorsit amet consetetur sadipscing elitr:
							</p>
							<p>
								Lorem idolorame conseetur sadipscing elitdiam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam ersed diam voluptua vero eoet accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
								sit amet rem ipsum dolorsit amet consetetur sadipscing elitr:
							</p>
							<p>
								Lorem idolorame conseetur sadipscing elitdiam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam ersed diam voluptua vero eoet accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
								sit amet rem ipsum dolorsit amet consetetur sadipscing elitr:
							</p>

							<ul class="list2 darklinks">
								<li>
									<a href="services.html">Lorem ipsum dolor sit amet</a>
								</li>
								<li>
									<a href="services.html">Sint animi non ut sed</a>
								</li>
								<li>
									<a href="services.html">Eaque blanditiis nemo</a>
								</li>
								<li>
									<a href="services.html">Amet, consectetur adipisicing</a>
								</li>
								<li>
									<a href="services.html">Blanditiis nemo quaerat</a>
								</li>
							</ul>
						</div>

						<div class="col-md-4">

							<div class="panel-group" id="accordion">

								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="icon-tab" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
												<i class="rt-icon2-tv"></i>
												Online Webinars
											</a>
										</h4>
									</div>
									<div id="collapse1" class="panel-collapse collapse in">
										<div class="panel-body">
											<div class="media">
												<div class="media-left">
													<a href="#">
														<img src="images/recent_post1.jpg" alt="">
													</a>
												</div>
												<div class="media-body">
													Consetetur sadipscing elitr, sed diam nonumy eirmod tempor.
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="icon-tab collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
												<i class="rt-icon2-microphone"></i>
												Radio broadcast
											</a>
										</h4>
									</div>
									<div id="collapse2" class="panel-collapse collapse">
										<div class="panel-body">
											<div class="media">
												<div class="media-left">
													<a href="#">
														<img src="images/recent_post2.jpg" alt="">
													</a>
												</div>
												<div class="media-body">
													Consetetur sadipscing elitr, sed diam nonumy eirmod tempor.
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="icon-tab collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
												<i class="rt-icon2-user-outline"></i>
												Personal trainings
											</a>
										</h4>
									</div>
									<div id="collapse3" class="panel-collapse collapse">
										<div class="panel-body">
											<div class="media">
												<div class="media-left">
													<a href="#">
														<img src="images/recent_post1.jpg" alt="">
													</a>
												</div>
												<div class="media-body">
													Consetetur sadipscing elitr, sed diam nonumy eirmod tempor.
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="icon-tab collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse4">
												<i class="rt-icon2-group-outline"></i>
												Group trainings
											</a>
										</h4>
									</div>
									<div id="collapse4" class="panel-collapse collapse">
										<div class="panel-body">
											<div class="media">
												<div class="media-left">
													<a href="#">
														<img src="images/recent_post2.jpg" alt="">
													</a>
												</div>
												<div class="media-body">
													Consetetur sadipscing elitr, sed diam nonumy eirmod tempor.
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="icon-tab collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse5">
												<i class="rt-icon2-book2"></i>
												Books
											</a>
										</h4>
									</div>
									<div id="collapse5" class="panel-collapse collapse">
										<div class="panel-body">
											<div class="media">
												<div class="media-left">
													<a href="#">
														<img src="images/recent_post1.jpg" alt="">
													</a>
												</div>
												<div class="media-body">
													Consetetur sadipscing elitr, sed diam nonumy eirmod tempor.
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>

							<div class="with_background page-meta topmargin_1">
								<div class="media small-teaser">
									<h5 class="grey">Phone:</h5>
									<div class="media-left">
										<i class="rt-icon2-device-phone highlight fontsize_24"></i>
									</div>
									<div class="media-body">
										555-333-222
									</div>
								</div>
								<div class="media small-teaser">
									<h5 class="grey">Fax:</h5>
									<div class="media-left">
										<i class="rt-icon2-printer2 highlight fontsize_24"></i>
									</div>
									<div class="media-body">
										555-222-333
									</div>
								</div>
								<div class="media small-teaser">
									<h5 class="grey">Email:</h5>
									<div class="media-left">
										<i class="rt-icon2-mail2 highlight fontsize_24"></i>
									</div>
									<div class="media-body">
										<a href="http://webdesign-finder.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2d44434b426d40545a484f5e445948034e4240">[email&#160;protected]</a>
									</div>
								</div>

							</div>


							<div class="widget divider_40">
								<h3>Booking</h3>
								<form class="contact-form" method="post" action="http://webdesign-finder.com/">
									<p class="contact-form-name">
										<label for="name">Name
											<span class="required">*</span>
										</label>
										<input type="text" id="name" aria-required="true" size="30" value="" name="name" class="form-control" placeholder="Name">
									</p>
									<p class="contact-form-phone">
										<label for="phone">phone
											<span class="required">*</span>
										</label>
										<input type="text" id="phone" aria-required="true" size="30" value="" name="phone" class="form-control" placeholder="Phone">
									</p>
									<p class="contact-form-email">
										<label for="email">Email
											<span class="required">*</span>
										</label>
										<input type="email" id="email" aria-required="true" size="30" value="" name="email" class="form-control" placeholder="Email">
									</p>
									<p class="contact-form-birthdate">
										<label for="birthdate">Birthdate
											<span class="required">*</span>
										</label>
										<input type="text" id="birthdate" aria-required="true" size="30" value="" name="birthdate" class="form-control" placeholder="Birth Date">
									</p>
									<div class="topmargin_30">
										<button type="submit" name="submit" class="theme_button color1">Book Lesson</button>
									</div>
								</form>
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

			<?php include('footer.php'); ?>

			<?php include('copyright2.php');  ?>

		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->

	<script data-cfasync="false" src="../../cdn-cgi/scripts/f2bf09f8/cloudflare-static/email-decode.min.js"></script><script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
	<script src="js/switcher.js"></script>

</body>


<!-- Mirrored from webdesign-finder.com/html/models/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Jul 2018 07:46:13 GMT -->
</html>
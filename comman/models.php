<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<!-- Mirrored from webdesign-finder.com/html/models/models2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Jul 2018 07:46:46 GMT -->
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

			<?php include('header.php');  ?>
		
			<section class="page_breadcrumbs changeable ls gradient gorizontal_padding section_padding_20 columns_padding_5 table_section">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-3 text-center text-sm-left darklinks">
							<a href="#">
								<em><span class="__cf_email__" data-cfemail="553432303b362c15262025253a27217b363a38">[email&#160;protected]</span></em>
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
									<a href="#">Models</a>
								</li>

								<li class="active">
									<span>Models 2</span>
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

			<section class="ds page_models models_square gorizontal_padding section_padding_80 columns_padding_0">
				<div class="container-fluid">
					<div class="row bottommargin_50 boxed-padding">
						<div class="col-lg-7">
							<div class="filters isotope_filters inline-block margin_0">
								<a href="#" data-filter="*" class="selected">All</a>
								<a href="#" data-filter=".fashion">Fashion</a>
								<a href="#" data-filter=".studio">Studio</a>
								<a href="#" data-filter=".session">Session</a>
							</div>
						</div>
						<div class="col-lg-5 text-lg-right">
							<form class="form-inline models-orderby">
								<div class="form-group select-group">
									<label class="sr-only" for="orderby">Sort By:</label>
									<select class="form-control orderby" name="orderby" id="orderby">
										<option value="default" selected="">Default sorting</option>
										<option value="name">Sort by name</option>
										<option value="date">Sort by date</option>
										<option value="random">Random sorting</option>
									</select>
									<i class="rt-icon2-chevron-thin-down form-button"></i>
								</div>

								<div class="form-group select-group">
									<label class="sr-only" for="orderby1">Sort By:</label>
									<select class="form-control orderby" name="orderby1" id="orderby1">
										<option value="descending" selected="">Descending</option>
										<option value="ascending">Ascending</option>
									</select>
									<i class="rt-icon2-chevron-thin-down form-button"></i>
								</div>
							</form>
						</div>
					</div>

					<div class="isotope_container isotope row masonry-layout bottommargin_20" data-filters=".isotope_filters">


						<div class="isotope-item col-lg-3 col-md-4 col-sm-6 fashion">
							<div class="vertical-item content-absolute">
								<div class="item-media">
									<img src="images/models_square/01.jpg" alt="">
									<div class="media-links">
									</div>
								</div>
								<div class="item-content text-center before_cover cs">
									<div class="links-wrap">
										<a class="p-link" title="" href="model.html">Samantha Hawk</a>
										<a class="p-view prettyPhoto pull-right" title="" data-gal="prettyPhoto[gal]" href="images/models_square/01.jpg"></a>
									</div>
									<div class="bg_overlay"></div>
									<div class="model-parameters">
										<div>
											<span class="bold">Height</span>
											<br>
											<span>185</span>
										</div>
										<div>
											<span class="bold">Bust</span>
											<br>
											<span>79</span>
										</div>
										<div>
											<span class="bold">Waist</span>
											<br>
											<span>59</span>
										</div>
										<div>
											<span class="bold">Hips</span>
											<br>
											<span>87</span>
										</div>
										<div>
											<span class="bold">Shoe</span>
											<br>
											<span>39</span>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="isotope-item col-lg-3 col-md-4 col-sm-6 studio">
							<div class="vertical-item content-absolute">
								<div class="item-media">
									<img src="images/models_square/02.jpg" alt="">
									<div class="media-links">
									</div>
								</div>
								<div class="item-content text-center before_cover cs">
									<div class="links-wrap">
										<a class="p-link" title="" href="model.html">Lana Anderson</a>
										<a class="p-view prettyPhoto pull-right" title="" data-gal="prettyPhoto[gal]" href="images/models_square/02.jpg"></a>
									</div>
									<div class="bg_overlay"></div>
									<div class="model-parameters">
										<div>
											<span class="bold">Height</span>
											<br>
											<span>185</span>
										</div>
										<div>
											<span class="bold">Bust</span>
											<br>
											<span>79</span>
										</div>
										<div>
											<span class="bold">Waist</span>
											<br>
											<span>59</span>
										</div>
										<div>
											<span class="bold">Hips</span>
											<br>
											<span>87</span>
										</div>
										<div>
											<span class="bold">Shoe</span>
											<br>
											<span>39</span>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="isotope-item col-lg-3 col-md-4 col-sm-6 session">
							<div class="vertical-item content-absolute">
								<div class="item-media">
									<img src="images/models_square/03.jpg" alt="">
									<div class="media-links">
									</div>
								</div>
								<div class="item-content text-center before_cover cs">
									<div class="links-wrap">
										<a class="p-link" title="" href="model.html">Pamela Stonem</a>
										<a class="p-view prettyPhoto pull-right" title="" data-gal="prettyPhoto[gal]" href="images/models_square/03.jpg"></a>
									</div>
									<div class="bg_overlay"></div>
									<div class="model-parameters">
										<div>
											<span class="bold">Height</span>
											<br>
											<span>185</span>
										</div>
										<div>
											<span class="bold">Bust</span>
											<br>
											<span>79</span>
										</div>
										<div>
											<span class="bold">Waist</span>
											<br>
											<span>59</span>
										</div>
										<div>
											<span class="bold">Hips</span>
											<br>
											<span>87</span>
										</div>
										<div>
											<span class="bold">Shoe</span>
											<br>
											<span>39</span>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="isotope-item col-lg-3 col-md-4 col-sm-6 fashion">
							<div class="vertical-item content-absolute">
								<div class="item-media">
									<img src="images/models_square/04.jpg" alt="">
									<div class="media-links">
									</div>
								</div>
								<div class="item-content text-center before_cover cs">
									<div class="links-wrap">
										<a class="p-link" title="" href="model.html">Naomy Olsen</a>
										<a class="p-view prettyPhoto pull-right" title="" data-gal="prettyPhoto[gal]" href="images/models_square/04.jpg"></a>
									</div>
									<div class="bg_overlay"></div>
									<div class="model-parameters">
										<div>
											<span class="bold">Height</span>
											<br>
											<span>185</span>
										</div>
										<div>
											<span class="bold">Bust</span>
											<br>
											<span>79</span>
										</div>
										<div>
											<span class="bold">Waist</span>
											<br>
											<span>59</span>
										</div>
										<div>
											<span class="bold">Hips</span>
											<br>
											<span>87</span>
										</div>
										<div>
											<span class="bold">Shoe</span>
											<br>
											<span>39</span>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="isotope-item col-lg-3 col-md-4 col-sm-6 studio">
							<div class="vertical-item content-absolute">
								<div class="item-media">
									<img src="images/models_square/05.jpg" alt="">
									<div class="media-links">
									</div>
								</div>
								<div class="item-content text-center before_cover cs">
									<div class="links-wrap">
										<a class="p-link" title="" href="model.html">Gillian Rowe</a>
										<a class="p-view prettyPhoto pull-right" title="" data-gal="prettyPhoto[gal]" href="images/models_square/05.jpg"></a>
									</div>
									<div class="bg_overlay"></div>
									<div class="model-parameters">
										<div>
											<span class="bold">Height</span>
											<br>
											<span>185</span>
										</div>
										<div>
											<span class="bold">Bust</span>
											<br>
											<span>79</span>
										</div>
										<div>
											<span class="bold">Waist</span>
											<br>
											<span>59</span>
										</div>
										<div>
											<span class="bold">Hips</span>
											<br>
											<span>87</span>
										</div>
										<div>
											<span class="bold">Shoe</span>
											<br>
											<span>39</span>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="isotope-item col-lg-3 col-md-4 col-sm-6 session">
							<div class="vertical-item content-absolute">
								<div class="item-media">
									<img src="images/models_square/06.jpg" alt="">
									<div class="media-links">
									</div>
								</div>
								<div class="item-content text-center before_cover cs">
									<div class="links-wrap">
										<a class="p-link" title="" href="model.html">Sonya Smith</a>
										<a class="p-view prettyPhoto pull-right" title="" data-gal="prettyPhoto[gal]" href="images/models_square/06.jpg"></a>
									</div>
									<div class="bg_overlay"></div>
									<div class="model-parameters">
										<div>
											<span class="bold">Height</span>
											<br>
											<span>185</span>
										</div>
										<div>
											<span class="bold">Bust</span>
											<br>
											<span>79</span>
										</div>
										<div>
											<span class="bold">Waist</span>
											<br>
											<span>59</span>
										</div>
										<div>
											<span class="bold">Hips</span>
											<br>
											<span>87</span>
										</div>
										<div>
											<span class="bold">Shoe</span>
											<br>
											<span>39</span>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="isotope-item col-lg-3 col-md-4 col-sm-6 fashion">
							<div class="vertical-item content-absolute">
								<div class="item-media">
									<img src="images/models_square/07.jpg" alt="">
									<div class="media-links">
									</div>
								</div>
								<div class="item-content text-center before_cover cs">
									<div class="links-wrap">
										<a class="p-link" title="" href="model.html">Rachel Smalders</a>
										<a class="p-view prettyPhoto pull-right" title="" data-gal="prettyPhoto[gal]" href="images/models_square/07.jpg"></a>
									</div>
									<div class="bg_overlay"></div>
									<div class="model-parameters">
										<div>
											<span class="bold">Height</span>
											<br>
											<span>185</span>
										</div>
										<div>
											<span class="bold">Bust</span>
											<br>
											<span>79</span>
										</div>
										<div>
											<span class="bold">Waist</span>
											<br>
											<span>59</span>
										</div>
										<div>
											<span class="bold">Hips</span>
											<br>
											<span>87</span>
										</div>
										<div>
											<span class="bold">Shoe</span>
											<br>
											<span>39</span>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="isotope-item col-lg-3 col-md-4 col-sm-6 studio">
							<div class="vertical-item content-absolute">
								<div class="item-media">
									<img src="images/models_square/08.jpg" alt="">
									<div class="media-links">
									</div>
								</div>
								<div class="item-content text-center before_cover cs">
									<div class="links-wrap">
										<a class="p-link" title="" href="model.html">Joanne Irwin</a>
										<a class="p-view prettyPhoto pull-right" title="" data-gal="prettyPhoto[gal]" href="images/models_square/08.jpg"></a>
									</div>
									<div class="bg_overlay"></div>
									<div class="model-parameters">
										<div>
											<span class="bold">Height</span>
											<br>
											<span>185</span>
										</div>
										<div>
											<span class="bold">Bust</span>
											<br>
											<span>79</span>
										</div>
										<div>
											<span class="bold">Waist</span>
											<br>
											<span>59</span>
										</div>
										<div>
											<span class="bold">Hips</span>
											<br>
											<span>87</span>
										</div>
										<div>
											<span class="bold">Shoe</span>
											<br>
											<span>39</span>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="isotope-item col-lg-3 col-md-4 col-sm-6 session">
							<div class="vertical-item content-absolute">
								<div class="item-media">
									<img src="images/models_square/09.jpg" alt="">
									<div class="media-links">
									</div>
								</div>
								<div class="item-content text-center before_cover cs">
									<div class="links-wrap">
										<a class="p-link" title="" href="model.html">Sarah Quinn</a>
										<a class="p-view prettyPhoto pull-right" title="" data-gal="prettyPhoto[gal]" href="images/models_square/09.jpg"></a>
									</div>
									<div class="bg_overlay"></div>
									<div class="model-parameters">
										<div>
											<span class="bold">Height</span>
											<br>
											<span>185</span>
										</div>
										<div>
											<span class="bold">Bust</span>
											<br>
											<span>79</span>
										</div>
										<div>
											<span class="bold">Waist</span>
											<br>
											<span>59</span>
										</div>
										<div>
											<span class="bold">Hips</span>
											<br>
											<span>87</span>
										</div>
										<div>
											<span class="bold">Shoe</span>
											<br>
											<span>39</span>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="isotope-item col-lg-3 col-md-4 col-sm-6 fashion">
							<div class="vertical-item content-absolute">
								<div class="item-media">
									<img src="images/models_square/10.jpg" alt="">
									<div class="media-links">
									</div>
								</div>
								<div class="item-content text-center before_cover cs">
									<div class="links-wrap">
										<a class="p-link" title="" href="model.html">Barbara Serney</a>
										<a class="p-view prettyPhoto pull-right" title="" data-gal="prettyPhoto[gal]" href="images/models_square/10.jpg"></a>
									</div>
									<div class="bg_overlay"></div>
									<div class="model-parameters">
										<div>
											<span class="bold">Height</span>
											<br>
											<span>185</span>
										</div>
										<div>
											<span class="bold">Bust</span>
											<br>
											<span>79</span>
										</div>
										<div>
											<span class="bold">Waist</span>
											<br>
											<span>59</span>
										</div>
										<div>
											<span class="bold">Hips</span>
											<br>
											<span>87</span>
										</div>
										<div>
											<span class="bold">Shoe</span>
											<br>
											<span>39</span>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="isotope-item col-lg-3 col-md-4 col-sm-6 fashion">
							<div class="vertical-item content-absolute">
								<div class="item-media">
									<img src="images/models_square/13.jpg" alt="">
									<div class="media-links">
									</div>
								</div>
								<div class="item-content text-center before_cover cs">
									<div class="links-wrap">
										<a class="p-link" title="" href="model.html">Samantha Hawk</a>
										<a class="p-view prettyPhoto pull-right" title="" data-gal="prettyPhoto[gal]" href="images/models_square/13.jpg"></a>
									</div>
									<div class="bg_overlay"></div>
									<div class="model-parameters">
										<div>
											<span class="bold">Height</span>
											<br>
											<span>185</span>
										</div>
										<div>
											<span class="bold">Bust</span>
											<br>
											<span>79</span>
										</div>
										<div>
											<span class="bold">Waist</span>
											<br>
											<span>59</span>
										</div>
										<div>
											<span class="bold">Hips</span>
											<br>
											<span>87</span>
										</div>
										<div>
											<span class="bold">Shoe</span>
											<br>
											<span>39</span>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="isotope-item col-lg-3 col-md-4 col-sm-6 studio">
							<div class="vertical-item content-absolute">
								<div class="item-media">
									<img src="images/models_square/14.jpg" alt="">
									<div class="media-links">
									</div>
								</div>
								<div class="item-content text-center before_cover cs">
									<div class="links-wrap">
										<a class="p-link" title="" href="model.html">Lana Anderson</a>
										<a class="p-view prettyPhoto pull-right" title="" data-gal="prettyPhoto[gal]" href="images/models_square/14.jpg"></a>
									</div>
									<div class="bg_overlay"></div>
									<div class="model-parameters">
										<div>
											<span class="bold">Height</span>
											<br>
											<span>185</span>
										</div>
										<div>
											<span class="bold">Bust</span>
											<br>
											<span>79</span>
										</div>
										<div>
											<span class="bold">Waist</span>
											<br>
											<span>59</span>
										</div>
										<div>
											<span class="bold">Hips</span>
											<br>
											<span>87</span>
										</div>
										<div>
											<span class="bold">Shoe</span>
											<br>
											<span>39</span>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="isotope-item col-lg-3 col-md-4 col-sm-6 session">
							<div class="vertical-item content-absolute">
								<div class="item-media">
									<img src="images/models_square/15.jpg" alt="">
									<div class="media-links">
									</div>
								</div>
								<div class="item-content text-center before_cover cs">
									<div class="links-wrap">
										<a class="p-link" title="" href="model.html">Pamela Stonem</a>
										<a class="p-view prettyPhoto pull-right" title="" data-gal="prettyPhoto[gal]" href="images/models_square/15.jpg"></a>
									</div>
									<div class="bg_overlay"></div>
									<div class="model-parameters">
										<div>
											<span class="bold">Height</span>
											<br>
											<span>185</span>
										</div>
										<div>
											<span class="bold">Bust</span>
											<br>
											<span>79</span>
										</div>
										<div>
											<span class="bold">Waist</span>
											<br>
											<span>59</span>
										</div>
										<div>
											<span class="bold">Hips</span>
											<br>
											<span>87</span>
										</div>
										<div>
											<span class="bold">Shoe</span>
											<br>
											<span>39</span>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="isotope-item col-lg-3 col-md-4 col-sm-6 fashion">
							<div class="vertical-item content-absolute">
								<div class="item-media">
									<img src="images/models_square/16.jpg" alt="">
									<div class="media-links">
									</div>
								</div>
								<div class="item-content text-center before_cover cs">
									<div class="links-wrap">
										<a class="p-link" title="" href="model.html">Naomy Olsen</a>
										<a class="p-view prettyPhoto pull-right" title="" data-gal="prettyPhoto[gal]" href="images/models_square/16.jpg"></a>
									</div>
									<div class="bg_overlay"></div>
									<div class="model-parameters">
										<div>
											<span class="bold">Height</span>
											<br>
											<span>185</span>
										</div>
										<div>
											<span class="bold">Bust</span>
											<br>
											<span>79</span>
										</div>
										<div>
											<span class="bold">Waist</span>
											<br>
											<span>59</span>
										</div>
										<div>
											<span class="bold">Hips</span>
											<br>
											<span>87</span>
										</div>
										<div>
											<span class="bold">Shoe</span>
											<br>
											<span>39</span>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="isotope-item col-lg-3 col-md-4 col-sm-6 studio">
							<div class="vertical-item content-absolute">
								<div class="item-media">
									<img src="images/models_square/17.jpg" alt="">
									<div class="media-links">
									</div>
								</div>
								<div class="item-content text-center before_cover cs">
									<div class="links-wrap">
										<a class="p-link" title="" href="model.html">Gillian Rowe</a>
										<a class="p-view prettyPhoto pull-right" title="" data-gal="prettyPhoto[gal]" href="images/models_square/17.jpg"></a>
									</div>
									<div class="bg_overlay"></div>
									<div class="model-parameters">
										<div>
											<span class="bold">Height</span>
											<br>
											<span>185</span>
										</div>
										<div>
											<span class="bold">Bust</span>
											<br>
											<span>79</span>
										</div>
										<div>
											<span class="bold">Waist</span>
											<br>
											<span>59</span>
										</div>
										<div>
											<span class="bold">Hips</span>
											<br>
											<span>87</span>
										</div>
										<div>
											<span class="bold">Shoe</span>
											<br>
											<span>39</span>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="isotope-item col-lg-3 col-md-4 col-sm-6 session">
							<div class="vertical-item content-absolute">
								<div class="item-media">
									<img src="images/models_square/18.jpg" alt="">
									<div class="media-links">
									</div>
								</div>
								<div class="item-content text-center before_cover cs">
									<div class="links-wrap">
										<a class="p-link" title="" href="model.html">Sonya Smith</a>
										<a class="p-view prettyPhoto pull-right" title="" data-gal="prettyPhoto[gal]" href="images/models_square/18.jpg"></a>
									</div>
									<div class="bg_overlay"></div>
									<div class="model-parameters">
										<div>
											<span class="bold">Height</span>
											<br>
											<span>185</span>
										</div>
										<div>
											<span class="bold">Bust</span>
											<br>
											<span>79</span>
										</div>
										<div>
											<span class="bold">Waist</span>
											<br>
											<span>59</span>
										</div>
										<div>
											<span class="bold">Hips</span>
											<br>
											<span>87</span>
										</div>
										<div>
											<span class="bold">Shoe</span>
											<br>
											<span>39</span>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="isotope-item col-lg-3 col-md-4 col-sm-6 fashion">
							<div class="vertical-item content-absolute">
								<div class="item-media">
									<img src="images/models_square/19.jpg" alt="">
									<div class="media-links">
									</div>
								</div>
								<div class="item-content text-center before_cover cs">
									<div class="links-wrap">
										<a class="p-link" title="" href="model.html">Rachel Smalders</a>
										<a class="p-view prettyPhoto pull-right" title="" data-gal="prettyPhoto[gal]" href="images/models_square/19.jpg"></a>
									</div>
									<div class="bg_overlay"></div>
									<div class="model-parameters">
										<div>
											<span class="bold">Height</span>
											<br>
											<span>185</span>
										</div>
										<div>
											<span class="bold">Bust</span>
											<br>
											<span>79</span>
										</div>
										<div>
											<span class="bold">Waist</span>
											<br>
											<span>59</span>
										</div>
										<div>
											<span class="bold">Hips</span>
											<br>
											<span>87</span>
										</div>
										<div>
											<span class="bold">Shoe</span>
											<br>
											<span>39</span>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="isotope-item col-lg-3 col-md-4 col-sm-6 studio">
							<div class="vertical-item content-absolute">
								<div class="item-media">
									<img src="images/models_square/20.jpg" alt="">
									<div class="media-links">
									</div>
								</div>
								<div class="item-content text-center before_cover cs">
									<div class="links-wrap">
										<a class="p-link" title="" href="model.html">Joanne Irwin</a>
										<a class="p-view prettyPhoto pull-right" title="" data-gal="prettyPhoto[gal]" href="images/models_square/20.jpg"></a>
									</div>
									<div class="bg_overlay"></div>
									<div class="model-parameters">
										<div>
											<span class="bold">Height</span>
											<br>
											<span>185</span>
										</div>
										<div>
											<span class="bold">Bust</span>
											<br>
											<span>79</span>
										</div>
										<div>
											<span class="bold">Waist</span>
											<br>
											<span>59</span>
										</div>
										<div>
											<span class="bold">Hips</span>
											<br>
											<span>87</span>
										</div>
										<div>
											<span class="bold">Shoe</span>
											<br>
											<span>39</span>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="isotope-item col-lg-3 col-md-4 col-sm-6 session">
							<div class="vertical-item content-absolute">
								<div class="item-media">
									<img src="images/models_square/21.jpg" alt="">
									<div class="media-links">
									</div>
								</div>
								<div class="item-content text-center before_cover cs">
									<div class="links-wrap">
										<a class="p-link" title="" href="model.html">Sarah Quinn</a>
										<a class="p-view prettyPhoto pull-right" title="" data-gal="prettyPhoto[gal]" href="images/models_square/21.jpg"></a>
									</div>
									<div class="bg_overlay"></div>
									<div class="model-parameters">
										<div>
											<span class="bold">Height</span>
											<br>
											<span>185</span>
										</div>
										<div>
											<span class="bold">Bust</span>
											<br>
											<span>79</span>
										</div>
										<div>
											<span class="bold">Waist</span>
											<br>
											<span>59</span>
										</div>
										<div>
											<span class="bold">Hips</span>
											<br>
											<span>87</span>
										</div>
										<div>
											<span class="bold">Shoe</span>
											<br>
											<span>39</span>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="isotope-item col-lg-3 col-md-4 col-sm-6 fashion">
							<div class="vertical-item content-absolute">
								<div class="item-media">
									<img src="images/models_square/22.jpg" alt="">
									<div class="media-links">
									</div>
								</div>
								<div class="item-content text-center before_cover cs">
									<div class="links-wrap">
										<a class="p-link" title="" href="model.html">Barbara Serney</a>
										<a class="p-view prettyPhoto pull-right" title="" data-gal="prettyPhoto[gal]" href="images/models_square/22.jpg"></a>
									</div>
									<div class="bg_overlay"></div>
									<div class="model-parameters">
										<div>
											<span class="bold">Height</span>
											<br>
											<span>185</span>
										</div>
										<div>
											<span class="bold">Bust</span>
											<br>
											<span>79</span>
										</div>
										<div>
											<span class="bold">Waist</span>
											<br>
											<span>59</span>
										</div>
										<div>
											<span class="bold">Hips</span>
											<br>
											<span>87</span>
										</div>
										<div>
											<span class="bold">Shoe</span>
											<br>
											<span>39</span>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="isotope-item col-lg-3 col-md-4 col-sm-6 session">
							<div class="vertical-item content-absolute">
								<div class="item-media">
									<img src="images/models_square/11.jpg" alt="">
									<div class="media-links">
									</div>
								</div>
								<div class="item-content text-center before_cover cs">
									<div class="links-wrap">
										<a class="p-link" title="" href="model.html">Sonya Smith</a>
										<a class="p-view prettyPhoto pull-right" title="" data-gal="prettyPhoto[gal]" href="images/models_square/11.jpg"></a>
									</div>
									<div class="bg_overlay"></div>
									<div class="model-parameters">
										<div>
											<span class="bold">Height</span>
											<br>
											<span>185</span>
										</div>
										<div>
											<span class="bold">Bust</span>
											<br>
											<span>79</span>
										</div>
										<div>
											<span class="bold">Waist</span>
											<br>
											<span>59</span>
										</div>
										<div>
											<span class="bold">Hips</span>
											<br>
											<span>87</span>
										</div>
										<div>
											<span class="bold">Shoe</span>
											<br>
											<span>39</span>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="isotope-item col-lg-3 col-md-4 col-sm-6 fashion">
							<div class="vertical-item content-absolute">
								<div class="item-media">
									<img src="images/models_square/12.jpg" alt="">
									<div class="media-links">
									</div>
								</div>
								<div class="item-content text-center before_cover cs">
									<div class="links-wrap">
										<a class="p-link" title="" href="model.html">Rachel Smalders</a>
										<a class="p-view prettyPhoto pull-right" title="" data-gal="prettyPhoto[gal]" href="images/models_square/12.jpg"></a>
									</div>
									<div class="bg_overlay"></div>
									<div class="model-parameters">
										<div>
											<span class="bold">Height</span>
											<br>
											<span>185</span>
										</div>
										<div>
											<span class="bold">Bust</span>
											<br>
											<span>79</span>
										</div>
										<div>
											<span class="bold">Waist</span>
											<br>
											<span>59</span>
										</div>
										<div>
											<span class="bold">Hips</span>
											<br>
											<span>87</span>
										</div>
										<div>
											<span class="bold">Shoe</span>
											<br>
											<span>39</span>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="isotope-item col-lg-3 col-md-4 col-sm-6 studio">
							<div class="vertical-item content-absolute">
								<div class="item-media">
									<img src="images/models_square/23.jpg" alt="">
									<div class="media-links">
									</div>
								</div>
								<div class="item-content text-center before_cover cs">
									<div class="links-wrap">
										<a class="p-link" title="" href="model.html">Joanne Irwin</a>
										<a class="p-view prettyPhoto pull-right" title="" data-gal="prettyPhoto[gal]" href="images/models_square/23.jpg"></a>
									</div>
									<div class="bg_overlay"></div>
									<div class="model-parameters">
										<div>
											<span class="bold">Height</span>
											<br>
											<span>185</span>
										</div>
										<div>
											<span class="bold">Bust</span>
											<br>
											<span>79</span>
										</div>
										<div>
											<span class="bold">Waist</span>
											<br>
											<span>59</span>
										</div>
										<div>
											<span class="bold">Hips</span>
											<br>
											<span>87</span>
										</div>
										<div>
											<span class="bold">Shoe</span>
											<br>
											<span>39</span>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="isotope-item col-lg-3 col-md-4 col-sm-6 session">
							<div class="vertical-item content-absolute">
								<div class="item-media">
									<img src="images/models_square/24.jpg" alt="">
									<div class="media-links">
									</div>
								</div>
								<div class="item-content text-center before_cover cs">
									<div class="links-wrap">
										<a class="p-link" title="" href="model.html">Sarah Quinn</a>
										<a class="p-view prettyPhoto pull-right" title="" data-gal="prettyPhoto[gal]" href="images/models_square/24.jpg"></a>
									</div>
									<div class="bg_overlay"></div>
									<div class="model-parameters">
										<div>
											<span class="bold">Height</span>
											<br>
											<span>185</span>
										</div>
										<div>
											<span class="bold">Bust</span>
											<br>
											<span>79</span>
										</div>
										<div>
											<span class="bold">Waist</span>
											<br>
											<span>59</span>
										</div>
										<div>
											<span class="bold">Hips</span>
											<br>
											<span>87</span>
										</div>
										<div>
											<span class="bold">Shoe</span>
											<br>
											<span>39</span>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="isotope-item col-lg-3 col-md-4 col-sm-6 fashion">
							<div class="vertical-item content-absolute">
								<div class="item-media">
									<img src="images/models_square/25.jpg" alt="">
									<div class="media-links">
									</div>
								</div>
								<div class="item-content text-center before_cover cs">
									<div class="links-wrap">
										<a class="p-link" title="" href="model.html">Barbara Serney</a>
										<a class="p-view prettyPhoto pull-right" title="" data-gal="prettyPhoto[gal]" href="images/models_square/25.jpg"></a>
									</div>
									<div class="bg_overlay"></div>
									<div class="model-parameters">
										<div>
											<span class="bold">Height</span>
											<br>
											<span>185</span>
										</div>
										<div>
											<span class="bold">Bust</span>
											<br>
											<span>79</span>
										</div>
										<div>
											<span class="bold">Waist</span>
											<br>
											<span>59</span>
										</div>
										<div>
											<span class="bold">Hips</span>
											<br>
											<span>87</span>
										</div>
										<div>
											<span class="bold">Shoe</span>
											<br>
											<span>39</span>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>


					<div class="row topmargin_60">
						<div class="col-sm-12 text-center">
							<img src="img/loading.png" alt="Loading" class="fa-spin">
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


<!-- Mirrored from webdesign-finder.com/html/models/models2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Jul 2018 07:48:18 GMT -->
</html>
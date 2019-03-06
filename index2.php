<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<!-- Mirrored from webdesign-finder.com/html/models/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Jul 2018 07:38:38 GMT -->

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
    <?php
	include("connect.php");
	
$select_banner =  mysqli_query($connect,"select * from `banner`");

	
	?>
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
            <section class="page_topline ds ms gorizontal_padding table_section">
                <div class="container-fluid with_border">
                    <div class="row">
                        <div class="col-sm-4 col-md-3 col-lg-2 text-xs-center text-left text-lg-right">
                            <a href="#">
								<em><span class="__cf_email__" data-cfemail="452422202b263c05363035352a37316b262a28">[email&#160;protected]</span></em>
							</a>
                        </div>
                        <div class="col-sm-4 col-md-6 col-lg-8 text-center">
                            <div class="page_social_icons">
                                <a class="social-icon color-icon soc-facebook" href="#" title="Facebook"></a>
                                <a class="social-icon color-icon soc-twitter" href="#" title="Twitter"></a>
                                <a class="social-icon color-icon soc-google" href="#" title="Google"></a>
                                <a class="social-icon color-icon soc-linkedin" href="#" title="LinkedIn"></a>
                                <a class="social-icon color-icon soc-pinterest" href="#" title="Pinterest"></a>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-3 col-lg-2 text-xs-center text-right text-lg-left">
                            <ul class="inline-dropdown inline-block">
                                <li class="dropdown cart-dropdown">
                                    <div class="total-quantity text-center">0 items -
                                        <span class="total-amount">$0.00</span>
                                    </div>
                                    <a class="topline-button" id="cart" data-target="#" href="index-2.html" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
										<i class="rt-icon2-basket"></i>

									</a>
                                    <div class="dropdown-menu" aria-labelledby="cart">
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
                                    <div class="dropdown-menu" aria-labelledby="login">
                                        <form role="form" action="http://webdesign-finder.com/">
                                            <div class="form-group">
                                                <label for="login_email" class="sr-only">Email address</label>
                                                <input type="email" class="form-control" id="login_email" placeholder="Email address">
                                            </div>
                                            <div class="form-group">
                                                <label for="login_password" class="sr-only">Password</label>
                                                <input type="password" class="form-control" id="login_password" placeholder="Password">
                                            </div>
                                            <button type="button" class="theme_button color1">
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
            <?php include('header.php');  ?>
            <section class="ds ms intro_section page_mainslider">
                <div class="owl-carousel page_maincarousel" data-margin="0" data-nav="true" data-loop="true" data-items="4">
                    <?php

while($get_banner = mysqli_fetch_assoc($select_banner)){


?>
                    <div>
                        <div class="vertical-item maincarousel-item content-absolute cs">
                            <div class="item-media">
                                <img src="admin/<?php echo $get_banner['b_img'];?>" alt="">
                                <div class="media-links">
                                    <a class="abs-link" title="" href="model.html"></a>
                                </div>
                            </div>
                            <div class="item-content text-center grey gradient_bg_goriz">
                                <div class="bg_overlay"></div>
                                <div class="model-parameters">
                                    <h2>
										<a href="model.html">Jessica Stacy</a>
									</h2>
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
                                    <div>
                                        <span class="bold">Eyes</span>
                                        <br>
                                        <span>blue</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php

}
?>
                </div>
        </div>
    </div>
    <!-- eof Banner -->
    <!-- Testimonials -->
    <div class="row topmargin_40 bottommargin_40">
        <div class="col-sm-12 text-center">
            <h2>
								<span class="big">Our Agency</span>
								<br>
								<span class="highlight muellerhoff">Testimonials &amp; Quotes</span>
							</h2>
            <div class="testimonials-body">
                <?php
$select_test =  mysqli_query($connect,"select * from `testimonials`");
$select_test_two =  mysqli_query($connect,"select * from `testimonials`");

$i = 0;
while($get_test = mysqli_fetch_assoc($select_test)){	
$i++;
$de = $get_test['c_details'];

$c_name= $get_test['c_name'];
echo "
								<blockquote class='blockquote-big' data-slide='$i'>

$de
			</blockquote>
				
";

}
?>
            </div>
            <div class="owl-carousel testimonials-carousel" data-margin="0" data-nav="true" data-loop="true" data-center="true" data-items="3" data-responsive-lg="3" data-responsive-md="3" data-responsive-sm="3" data-responsive-xs="3">
                <?php


while($get_test_two = mysqli_fetch_assoc($select_test_two)){	

$c_name= $get_test_two['c_name'];


?>
                <div class="testimonial">
                    <div class="author-photo">
                        <img src="images/team/01.jpg" alt="">
									</div>
                        <div class="author-meta">
                            <span class="bold highlight"><?php echo $c_name; ?></span>
                            <br>
                        </div>
                    </div>
                    <?php

}
?>
                </div>
            </div>
        </div>
    </div>
    </section>
    <section class="ds ms page_models models_portrait gorizontal_padding section_padding_70">
        <div class="container-fluid">
            <div class="row boxed-padding bottommargin_40">
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
            <div class="isotope_container isotope row masonry-layout" data-filters=".isotope_filters">
                <?php

$gallery =  mysqli_query($connect,"select * from `gallerypic` LIMIT 8");


while($get_img = mysqli_fetch_assoc($gallery)){	



$img_tejas = $get_img['img'];

?>
                <div class="isotope-item col-lg-3 col-md-4 col-sm-6 fashion">
                    <div class="vertical-item content-absolute">
                        <div class="item-media">
                            <img src="admin/<?php echo $img_tejas ?>" alt="">
                            <div class="media-links">
                                <div class="links-wrap">
                                    <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="admin/<?php echo $img_tejas ?>"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-title text-center">
                        <h4>
									<a>Our Shoots</a>
								</h4>
                    </div>
                </div>
                <?php

}
?>
                <div class="item-title text-center">
                    <h4>
									<a href="model.html">Jessica Lee</a>
								</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center margin_0">
                <a href="#" class="theme_button color2 topmargin_20">All Images </a>
            </div>
        </div>
        </div>
    </section>
    <section class="ds intro_section">
        <div class="flexslider vertical-nav">
            <ul class="slides">
                <li>
                    <img src="images/slide01.png" alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center text-md-right">
                                <div class="slide_description_wrapper">
                                    <div class="slide_description">
                                        <div class="intro-layer" data-animation="slideExpandUp">
                                            <h2 class="big margin_0">About Agency</h2>
                                            <h2 class="muellerhoff topmargin_5 bottommargin_50 highlight">Someting You Need to Know</h2>
                                        </div>
                                        <div class="intro-layer" data-animation="slideExpandUp">
                                            <p class="entry-excerpt bottommargin_30">
                                                Nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat, sed diam voluptua.
                                            </p>
                                            <p>
                                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                                                sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.
                                            </p>
                                            <p>
                                                Aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr:
                                            </p>
                                            <a href="about.php" class="theme_button color1 topmargin_20">About us</a>
                                        </div>
                                    </div>
                                    <!-- eof .slide_description -->
                                </div>
                                <!-- eof .slide_description_wrapper -->
                            </div>
                            <!-- eof .col-* -->
                        </div>
                        <!-- eof .row -->
                    </div>
                    <!-- eof .container -->
                </li>
                <li>
                    <img src="images/slide02.png" alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center text-md-right">
                                <div class="slide_description_wrapper">
                                    <div class="slide_description">
                                        <div class="intro-layer" data-animation="slideExpandUp">
                                            <h2 class="big margin_0">Our Services</h2>
                                            <h2 class="muellerhoff topmargin_5 bottommargin_50 highlight">Someting You Need to Know</h2>
                                        </div>
                                        <div class="intro-layer" data-animation="slideExpandUp">
                                            <div class="media bottommargin_30">
                                                <div class="media-left">
                                                    <div class="service-media"></div>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="topmargin_0 bottommargin_5">
																<a href="#">Fashion Shows</a>
															</h4>
                                                    <p class="bottommargin_0">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</p>
                                                </div>
                                            </div>
                                            <div class="media bottommargin_30">
                                                <div class="media-left">
                                                    <div class="service-media"></div>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="topmargin_0 bottommargin_5">
																<a href="#">Corporate Events</a>
															</h4>
                                                    <p class="bottommargin_0">Airmod tempor invidunt ut labore et dolore magna aliquyam erat</p>
                                                </div>
                                            </div>
                                            <div class="media bottommargin_30">
                                                <div class="media-left">
                                                    <div class="service-media"></div>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="topmargin_0 bottommargin_5">
																<a href="#">Commercial Photo Shots</a>
															</h4>
                                                    <p class="bottommargin_0">Vero eos et accusam et justo duo dolores et ea rebum</p>
                                                </div>
                                            </div>
                                            <div class="media bottommargin_30">
                                                <div class="media-left">
                                                    <div class="service-media"></div>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="topmargin_0 bottommargin_5">
																<a href="#">Courses from Professional Models</a>
															</h4>
                                                    <p class="bottommargin_0">Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor</p>
                                                </div>
                                            </div>
                                            <div class="media bottommargin_30">
                                                <div class="media-left">
                                                    <div class="service-media"></div>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="topmargin_0 bottommargin_5">
																<a href="#">Exhibitions / Trade Shows</a>
															</h4>
                                                    <p class="bottommargin_0">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- eof .slide_description -->
                                </div>
                                <!-- eof .slide_description_wrapper -->
                            </div>
                            <!-- eof .col-* -->
                        </div>
                        <!-- eof .row -->
                    </div>
                    <!-- eof .container -->
                </li>
                <li>
                    <img src="images/slide01.png" alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center text-md-right">
                                <div class="slide_description_wrapper">
                                    <div class="slide_description">
                                        <div class="intro-layer" data-animation="slideExpandUp">
                                            <h2 class="big margin_0">About Agency</h2>
                                            <h2 class="muellerhoff topmargin_5 bottommargin_50 highlight">Someting You Need to Know</h2>
                                        </div>
                                        <div class="intro-layer" data-animation="slideExpandUp">
                                            <p class="entry-excerpt bottommargin_30">
                                                Nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat, sed diam voluptua.
                                            </p>
                                            <p>
                                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                                                sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.
                                            </p>
                                            <p>
                                                Aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr:
                                            </p>
                                            <a href="about.html" class="theme_button color1 topmargin_20">About us</a>
                                        </div>
                                    </div>
                                    <!-- eof .slide_description -->
                                </div>
                                <!-- eof .slide_description_wrapper -->
                            </div>
                            <!-- eof .col-* -->
                        </div>
                        <!-- eof .row -->
                    </div>
                    <!-- eof .container -->
                </li>
                <li>
                    <img src="images/slide02.png" alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center text-md-right">
                                <div class="slide_description_wrapper">
                                    <div class="slide_description">
                                        <div class="intro-layer" data-animation="slideExpandUp">
                                            <h2 class="big margin_0">Our Services</h2>
                                            <h2 class="muellerhoff topmargin_5 bottommargin_50 highlight">Someting You Need to Know</h2>
                                        </div>
                                        <div class="intro-layer" data-animation="slideExpandUp">
                                            <div class="media bottommargin_30">
                                                <div class="media-left">
                                                    <div class="service-media"></div>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="topmargin_0 bottommargin_5">
																<a href="#">Fashion Shows</a>
															</h4>
                                                    <p class="bottommargin_0">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</p>
                                                </div>
                                            </div>
                                            <div class="media bottommargin_30">
                                                <div class="media-left">
                                                    <div class="service-media"></div>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="topmargin_0 bottommargin_5">
																<a href="#">Corporate Events</a>
															</h4>
                                                    <p class="bottommargin_0">Airmod tempor invidunt ut labore et dolore magna aliquyam erat</p>
                                                </div>
                                            </div>
                                            <div class="media bottommargin_30">
                                                <div class="media-left">
                                                    <div class="service-media"></div>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="topmargin_0 bottommargin_5">
																<a href="#">Commercial Photo Shots</a>
															</h4>
                                                    <p class="bottommargin_0">Vero eos et accusam et justo duo dolores et ea rebum</p>
                                                </div>
                                            </div>
                                            <div class="media bottommargin_30">
                                                <div class="media-left">
                                                    <div class="service-media"></div>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="topmargin_0 bottommargin_5">
																<a href="#">Courses from Professional Models</a>
															</h4>
                                                    <p class="bottommargin_0">Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor</p>
                                                </div>
                                            </div>
                                            <div class="media bottommargin_30">
                                                <div class="media-left">
                                                    <div class="service-media"></div>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="topmargin_0 bottommargin_5">
																<a href="#">Exhibitions / Trade Shows</a>
															</h4>
                                                    <p class="bottommargin_0">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- eof .slide_description -->
                                </div>
                                <!-- eof .slide_description_wrapper -->
                            </div>
                            <!-- eof .col-* -->
                        </div>
                        <!-- eof .row -->
                    </div>
                    <!-- eof .container -->
                </li>
                <li>
                    <img src="images/slide01.png" alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center text-md-right">
                                <div class="slide_description_wrapper">
                                    <div class="slide_description">
                                        <div class="intro-layer" data-animation="slideExpandUp">
                                            <h2 class="big margin_0">About Agency</h2>
                                            <h2 class="muellerhoff topmargin_5 bottommargin_50 highlight">Someting You Need to Know</h2>
                                        </div>
                                        <div class="intro-layer" data-animation="slideExpandUp">
                                            <p class="entry-excerpt bottommargin_30">
                                                Nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat, sed diam voluptua.
                                            </p>
                                            <p>
                                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                                                sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.
                                            </p>
                                            <p>
                                                Aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr:
                                            </p>
                                            <a href="about.html" class="theme_button color1 topmargin_20">About us</a>
                                        </div>
                                    </div>
                                    <!-- eof .slide_description -->
                                </div>
                                <!-- eof .slide_description_wrapper -->
                            </div>
                            <!-- eof .col-* -->
                        </div>
                        <!-- eof .row -->
                    </div>
                    <!-- eof .container -->
                </li>
            </ul>
        </div>
        <!-- eof flexslider -->
    </section>
    <section class="ds parallax calltoaction section_padding_100" style="background-image: url('images/parallax/call_to_action.jpg')">
        <div class="container">
            <div class="row topmargin_60 bottommargin_60">
                <div class="col-sm-12 text-center">
                    <h2 class="extra-big topmargin_0 bottommargin_30">Do You want to be a
								<span class="highlight">Model?</span>
							</h2>
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8 text-center">
                            <p class="fontsize_20">
                                If you are 5ft 8in and above women and think you have what it takes to be a model send us headshot and full length shot along with your age, contact details, height, bust, waist and hip measurements.
                            </p>
                        </div>
                    </div>
                    <div class="widget widget_mailchimp topmargin_20">
                        <form class="signup form-inline" action="http://webdesign-finder.com/" method="get">
                            <div class="form-group">
                                <input name="email" type="email" class="mailchimp_email form-control" placeholder="Email address">
                            </div>
                            <button type="submit" class="theme_button input_button">Send</button>
                            <div class="response"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ds section_padding_70 gorizontal_padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="owl-carousel top-models-carousel" data-margin="0" data-nav="true" data-loop="true" data-items="3" data-autoplay="false" data-responsive-xs="1" data-responsive-sm="2" data-responsive-md="2" data-responsive-lg="3">
                        <?php

$user_reg =  mysqli_query($connect,"select * from `user_reg`");


while($get_user = mysqli_fetch_assoc($user_reg)){	


$user_name = $get_user['user_name'];
$mode_image1 = $get_user['model_image1'];



?>
                        <div>
                            <div class="vertical-item maincarousel-item content-absolute">
                                <div class="item-media">
                                    <img src="admin/model/<?php echo $mode_image1 ?>" alt="">
                                    <div class="media-links">
                                    </div>
                                </div>
                                <div class="item-content grey gradient_bg_vert before_cover">
                                    <div class="bg_overlay"></div>
                                    <div class="model-parameters vertical-layout">
                                        <h2>
													<a href="model.html"><?php echo $user_name ?>
						
												</h2>
                                        <div>
                                            <span class="bold">Height:</span>
                                            <span>185</span>
                                        </div>
                                        <div>
                                            <span class="bold">Bust:</span>
                                            <span>79</span>
                                        </div>
                                        <div>
                                            <span class="bold">Waist:</span>
                                            <span>59</span>
                                        </div>
                                        <div>
                                            <span class="bold">Hips:</span>
                                            <span>87</span>
                                        </div>
                                        <div>
                                            <span class="bold">Shoe:</span>
                                            <span>39</span>
                                        </div>
                                        <div>
                                            <span class="bold">Eyes:</span>
                                            <span>blue</span>
                                        </div>
                                        <div>
                                            <span class="bold">Hair:</span>
                                            <span>brunet</span>
                                        </div>
                                    </div>
                                    <div class="links-wrap topmargin_40">
                                        <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/models_square/01.jpg"></a>
                                        <a class="p-link" title="" href="model.html"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
}

?>
                    </div>
                </div>
                <div class="row topmargin_50">
                    <div class="col-xs-12 text-center margin_0">
                        <div class="grey">
                            <div class="pages bold" id="top_models_pagination">1 / 12</div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="ds ms section_padding_top_80 columns_padding_0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="owl-carousel blog-carousel theme-owl-carousel" data-margin="30" data-nav="false" data-dots="true" data-center="true" data-loop="true" data-items="5" data-autoplay="false" data-responsive-xs="1" data-responsive-sm="2" data-responsive-md="2" data-responsive-lg="3" data-responsive-xlg="5">
                        <?php


$video =  mysqli_query($connect,"select * from `video`");


while($video_link = mysqli_fetch_assoc($video)){	

$video_name = $video_link['video_name'];

$video_url = $video_link['video_link'];

?>
                        <article class="vertical-item post format-video with_background">
                            <div class="entry-thumbnail">
                                <div class="embed-responsive embed-responsive-3by2">
                                    <?php echo $video_url ?>
                                </div>
                            </div>
                            <div class="item-content entry-content">
                                <h2 class="topmargin_0">
											<a href="blog-single-right.html"><?php echo $video_name ?></a>
										</h2>
                                <div class="highlight fontsize_12 text-uppercase bold bottommargin_25">
                                    <a href="#">Session</a>
                                </div>
                                <p>
                                    Aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum stet clita kasd gubergren.
                                </p>
                                <div class="page_social_icons topmargin_25">
                                    <a class="social-icon color-icon soc-facebook" href="#" title="Facebook"></a>
                                    <a class="social-icon color-icon soc-twitter" href="#" title="Twitter"></a>
                                    <a class="social-icon color-icon soc-google" href="#" title="Google"></a>
                                    <a class="social-icon color-icon soc-linkedin" href="#" title="LinkedIn"></a>
                                    <a class="social-icon color-icon soc-pinterest" href="#" title="Pinterest"></a>
                                </div>
                            </div>
                            <!-- .item-content.entry-content -->
                        </article>
                        <?php
}

?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php  include('footer.php');  ?>
    <?php include('copyright2.php'); ?>
    </div>
    <!-- eof #box_wrapper -->
    
    <!-- eof #canvas -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/f2bf09f8/cloudflare-static/email-decode.min.js"></script>
    <script src="js/compressed.js"></script>
    <script src="js/main.js"></script>
    <script src=""></script>
</body>
<!-- Mirrored from webdesign-finder.com/html/models/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Jul 2018 07:42:58 GMT -->

</html>
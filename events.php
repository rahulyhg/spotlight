<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<!-- Mirrored from webdesign-finder.com/html/models/events-left.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Jul 2018 07:45:42 GMT -->
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

			<?php include("header.php");  ?>
		
			<section class="page_breadcrumbs changeable ls gradient gorizontal_padding section_padding_20 columns_padding_5 table_section">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-3 text-center text-sm-left darklinks">
							<a href="#">
								<em><span class="__cf_email__" data-cfemail="0c6d6b69626f754c7f797c7c637e78226f6361">[email&#160;protected]</span></em>
							</a>
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


			<section class="ds section_padding_70 section_padding_bottom_60 columns_padding_25">
				<div class="container">
					<div class="row bottommargin_20">
						<div class="col-sm-12 text-center">
							<h2 class="big topmargin_-5">
								Event title
							</h2>
							<p class="fontsize_20">
								On Sept 8, 2015 in Conference Hall, LA
							</p>
						</div>
					</div>
					<div class="row">

						<div class="col-sm-7 col-md-8 col-lg-8 col-sm-push-5 col-md-push-4 col-lg-push-4">

							<article class="event-single with_background">
								<div class="item-media entry-thumbnail">
									<img src="images/gallery/01.jpg" alt="">
								</div>

								<div class="item-content with_padding">

									<div class="entry-content">
										<p class="entry-excerpt">
											Nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat, sed diam voluptua vero eos et accusam et justo duo.
										</p>
										<p>
											Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
											dolor sit amet.
										</p>
										<p>
											Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
											sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
											et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus.
										</p>

										<div class="topmargin_30">
											<a href="#" class="social-icon color-bg-icon soc-facebook"></a>
											<a href="#" class="social-icon color-bg-icon soc-twitter"></a>
											<a href="#" class="social-icon color-bg-icon soc-google"></a>
											<a href="#" class="social-icon color-bg-icon soc-linkedin"></a>
											<a href="#" class="social-icon color-bg-icon soc-pinterest"></a>
										</div>

									</div>

									<!-- .entry-content -->
								</div>
								<!-- .item-content -->

							</article>

							<div class="comment-respond" id="respond">
								<h3 class="big">5 Comments</h3>

								<form class="comment-form" id="commentform" method="post" action="/">
									<div class="row columns_padding_5">
										<div class="col-md-6">
											<p class="comment-form-author">
												<label for="author" class="sr-only">Name
													<span class="required">*</span>
												</label>
												<!-- <i class="rt-icon2-user-outline"></i> -->
												<input type="text" aria-required="true" size="30" value="" name="author" id="author" class="form-control with-icon" placeholder="">
												<i class="rt-icon2-user"></i>
											</p>
										</div>
										<div class="col-md-6">
											<p class="comment-form-email">
												<label for="comment_email" class="sr-only">Email
													<span class="required">*</span>
												</label>
												<!-- <i class="rt-icon2-mail2"></i> -->
												<input type="email" aria-required="true" size="30" value="" name="comment_email" id="comment_email" class="form-control with-icon" placeholder="">
												<i class="rt-icon2-mail"></i>
											</p>
										</div>
										<div class="col-md-12">
											<p class="comment-form-chat">
												<label for="comment" class="sr-only">Comment</label>
												<!-- <i class="rt-icon2-pencil3"></i> -->
												<textarea aria-required="true" rows="8" cols="45" name="comment" id="comment" class="form-control with-icon" placeholder=""></textarea>
												<i class="rt-icon2-pen"></i>
											</p>
										</div>
									</div>
									<p class="form-submit">
										<button type="submit" id="submit" name="submit" class="theme_button wide_button color1">Send</button>
										<button type="reset" id="reset" class="theme_button inverse">Clear</button>
									</p>
								</form>
							</div>
							<!-- #respond -->

							<div class="comments-area" id="comments">
								<ol class="comment-list">
									<li class="comment even thread-even depth-1 parent">
										<article class="comment-body media">
											<div class="media-left">
												<img class="media-object" alt="" src="images/team/05.jpg">
											</div>
											<div class="media-body ls">
												<span class="reply">
													<a class="theme_button color1" href="#respond">
														<i class="rt-icon2-arrow-back-outline"></i>
													</a>
												</span>
												<div class="comment-meta darklinks">
													<a class="author_url" rel="external nofollow" href="#">Lena Smalders</a>
													<br>
													<span class="comment-date">
														<time datetime="2015-11-08T15:05:23+00:00" class="entry-date">22.11.2015 at 12:34</time>
													</span>
												</div>
												<p>First Level Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
											</div>
										</article>
										<!-- .comment-body -->

										<ol class="children">
											<li class="comment byuser odd alt depth-2 parent">
												<article class="comment-body media">
													<div class="media-left">
														<img class="media-object" alt="" src="images/team/04.jpg">
													</div>
													<div class="media-body ls">
														<span class="reply">
															<a class="theme_button color1" href="#respond">
																<i class="rt-icon2-arrow-back-outline"></i>
															</a>
														</span>
														<div class="comment-meta darklinks">
															<a class="author_url" rel="external nofollow" href="#">Michael Mondez</a>
															<br>
															<span class="comment-date">
																<time datetime="2015-11-08T15:05:23+00:00" class="entry-date">22.11.2015 at 12:34</time>
															</span>
														</div>
														<p>Second Level Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
													</div>
												</article>
												<!-- .comment-body -->

												<ol class="children">
													<li class="comment byuser even depth-3">
														<article class="comment-body media">
															<div class="media-left">
																<img class="media-object" alt="" src="images/team/06.jpg">
															</div>
															<div class="media-body ls">
																<span class="reply">
																	<a class="theme_button color1" href="#respond">
																		<i class="rt-icon2-arrow-back-outline"></i>
																	</a>
																</span>
																<div class="comment-meta darklinks">
																	<a class="author_url" rel="external nofollow" href="#">Sarah Rose</a>
																	<br>
																	<span class="comment-date">
																		<time datetime="2015-11-08T15:05:23+00:00" class="entry-date">22.11.2015 at 12:34</time>
																	</span>
																</div>
																<p>Third Level Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
															</div>
														</article>
														<!-- .comment-body -->
													</li>
													<!-- #comment-## -->
												</ol>
												<!-- .children -->
											</li>
											<!-- #comment-## -->
										</ol>
										<!-- .children -->
									</li>
									<!-- #comment-## -->

									<li class="comment byuser odd alt thread-odd thread-alt depth-1">
										<article class="comment-body media">
											<div class="media-left">
												<img class="media-object" alt="" src="images/team/07.jpg">
											</div>
											<div class="media-body ls">
												<span class="reply">
													<a class="theme_button color1" href="#respond">
														<i class="rt-icon2-arrow-back-outline"></i>
													</a>
												</span>
												<div class="comment-meta darklinks">
													<a class="author_url" rel="external nofollow" href="#">Jason Nort</a>
													<br>
													<span class="comment-date">
														<time datetime="2015-11-08T15:05:23+00:00" class="entry-date">22.11.2015 at 12:34</time>
													</span>
												</div>
												<p>First Level Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
											</div>
										</article>
										<!-- .comment-body -->
									</li>
									<!-- #comment-## -->

									<li class="comment byuser even thread-even depth-1">
										<article class="comment-body media">
											<div class="media-left">
												<img class="media-object" alt="" src="images/team/08.jpg">
											</div>
											<div class="media-body ls">
												<span class="reply">
													<a class="theme_button color1" href="#respond">
														<i class="rt-icon2-arrow-back-outline"></i>
													</a>
												</span>
												<div class="comment-meta darklinks">
													<a class="author_url" rel="external nofollow" href="#">Selena Amel</a>
													<br>
													<span class="comment-date">
														<time datetime="2015-11-08T15:05:23+00:00" class="entry-date">22.11.2015 at 12:34</time>
													</span>
												</div>
												<p>First Level Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
											</div>
										</article>
										<!-- .comment-body -->
									</li>
									<!-- #comment-## -->
								</ol>
								<!-- .comment-list -->
							</div>
							<!-- #comments -->

						</div>
						<!--eof .col-sm-8 (main content)-->

						<!-- sidebar -->
						<aside class="col-sm-5 col-md-4 col-lg-4 col-sm-pull-7 col-md-pull-8 col-lg-pull-8">

							<div class="with_background with_padding">
								<div class="widget widget_search">
									<h3 class="widget-title">Search Widget</h3>
									<form method="get" class="searchform form-inline" action="/">
										<div class="form-group">
											<label class="sr-only" for="widget-search">Search for:</label>
											<input id="widget-search" type="text" value="" name="search" class="form-control" placeholder="Search...">
										</div>
										<button type="submit" class="theme_button input_button">Search</button>
									</form>
								</div>
							</div>

							<div class="with_background with_padding">
								<div class="widget widget_categories">

									<h3 class="widget-title">Categories</h3>
									<ul>
										<li>
											<a href="blog-right.html" title="">Blog</a>
											<span class="grey">(3)</span>
										</li>
										<li>
											<a href="blog-right.html" title="">Events</a>
											<span class="grey">(5)</span>
										</li>
										<li>
											<a href="blog-right.html" title="">Latest News</a>
											<span class="grey">(2)</span>
										</li>
										<li>
											<a href="blog-right.html" title="">Uncategorized</a>
											<span class="grey">(7)</span>
										</li>
										<li>
											<a href="blog-right.html" title="">Models</a>
											<span class="grey">(6)</span>
										</li>
									</ul>
								</div>
							</div>

							<div class="with_background with_padding">

								<div class="widget widget_popular_entries">

									<h3 class="widget-title">Popular</h3>
									<ul class="media-list darklinks">
										<li class="media">
											<a class="media-left" href="blog-single-right.html">
												<img class="media-object" src="images/recent_post1.jpg" alt="">
											</a>
											<div class="media-body">
												<p>
													<a href="blog-single-right.html">Eod tempor invidunt labore dolore magna</a>
												</p>
												<div class="star-rating" title="Rated 5 out of 5">
													<span style="width:100%">
														<strong class="rating">5</strong> out of 5
													</span>
												</div>
											</div>
										</li>

										<li class="media">
											<a class="media-left" href="blog-single-right.html">
												<img class="media-object" src="images/recent_post2.jpg" alt="">
											</a>
											<div class="media-body">
												<p>
													<a href="blog-single-right.html">Aliquyam erat, sed voluptua vero eos </a>
												</p>
												<div class="star-rating" title="Rated 4.0 out of 5">
													<span style="width:60%">
														<strong class="rating">4</strong> out of 5
													</span>
												</div>

											</div>
										</li>

										<li class="media">
											<a class="media-left" href="blog-single-right.html">
												<img class="media-object" src="images/recent_post3.jpg" alt="">
											</a>
											<div class="media-body">
												<p>
													<a href="blog-single-right.html">Et justo duo dolores et ea rebum</a>
												</p>
												<div class="star-rating" title="Rated 4.50 out of 5">
													<span style="width:80%">
														<strong class="rating">4.50</strong> out of 5
													</span>
												</div>

											</div>
										</li>

										<li class="media">
											<a class="media-left" href="blog-single-right.html">
												<img class="media-object" src="images/recent_post4.jpg" alt="">
											</a>
											<div class="media-body">
												<p>
													<a href="blog-single-right.html">Stetclita kasd gubergren no sea takimata</a>
												</p>
												<div class="star-rating" title="Rated 3.00 out of 5">
													<span style="width:40%">
														<strong class="rating">3</strong> out of 5
													</span>
												</div>

											</div>
										</li>

										<li class="media">
											<a class="media-left" href="blog-single-right.html">
												<img class="media-object" src="images/recent_post5.jpg" alt="">
											</a>
											<div class="media-body">
												<p>
													<a href="blog-single-right.html">Lorem ipsum dolor sitmet amet consetetur </a>
												</p>
												<div class="star-rating" title="Rated 4.50 out of 5">
													<span style="width:90%">
														<strong class="rating">4.50</strong> out of 5
													</span>
												</div>

											</div>
										</li>

									</ul>
								</div>

							</div>

							<div class="with_background with_padding">

								<div class="widget widget_archive">

									<h3 class="widget-title">Archive</h3>
									<ul>
										<li>
											<a href="blog-right.html">July ‘2015</a>
											<span class="grey">(6)</span>
										</li>
										<li>
											<a href="blog-right.html">June ‘2015</a>
											<span class="grey">(5)</span>
										</li>
										<li>
											<a href="blog-right.html">May ‘2016</a>
											<span class="grey">(4)</span>
										</li>
										<li>
											<a href="blog-right.html">April ‘2016</a>
											<span class="grey">(7)</span>
										</li>
										<li>
											<a href="blog-right.html">March ‘2016</a>
											<span class="grey">(5)</span>
										</li>
										<li>
											<a href="blog-right.html">February ‘2016</a>
											<span class="grey">(5)</span>
										</li>
									</ul>
								</div>

							</div>

							<div class="with_background with_padding">
								<div class="widget widget_banner">

									<h3 class="widget-title">Ad 300x250</h3>
									<div class="vertical-item content-absolute ds">
										<div class="item-media">
											<img src="images/models_square/01.jpg" alt="">
										</div>
										<div class="item-content">
											<span class="main_bg_color">
												New
											</span>
											<h2>
												Model
												<br> Courses
											</h2>
										</div>
										<div class="media-links">
											<a href="#" class="abs-link"></a>
										</div>
									</div>

								</div>
							</div>

							<div class="with_background with_padding">
								<div class="widget widget_tag_cloud">

									<h3 class="widget-title">Featured Tags</h3>
									<div class="tagcloud">
										<a href="#" title="">female</a>
										<a href="#" title="">Top models</a>
										<a href="#" title="">Fashion</a>
										<a href="#" title="">Studio</a>
										<a href="#" title="">Session</a>
									</div>
								</div>
							</div>


							<div class="widget widget_text">


								<div class="text-center">
									<a href="#" class="social-icon big-icon color-bg-icon soc-twitter">
										<span>34.5K</span>
										<span>Friends</span>
									</a>
									<a href="#" class="social-icon big-icon color-bg-icon soc-facebook">
										<span>3.2K</span>
										<span>Follows</span>
									</a>
									<a href="#" class="social-icon big-icon color-bg-icon soc-google">
										<span>15.7K</span>
										<span>Friends</span>
									</a>
									<a href="#" class="social-icon big-icon color-bg-icon block-icon">
										<i class="rt-icon2-heart"></i>
										<span>53.4K</span>
										<span>People Loves Us</span>
									</a>
								</div>

							</div>

						</aside>
						<!-- eof aside sidebar -->

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



</html>
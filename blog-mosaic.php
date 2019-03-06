<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<!-- Mirrored from webdesign-finder.com/html/models/events-left.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Jul 2018 07:45:42 GMT -->
<head>
	<title>Blog Events</title>
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
		
		


		<section class="ds page_portfolio section_padding_70">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">

							<div class="isotope_container isotope row masonry-layout">
<?php
$blogs=mysqli_query($connect,"SELECT * from blog ");
while($rows=mysqli_fetch_assoc($blogs)){
?>
								<div class="isotope-item col-lg-4 col-md-6 col-sm-12">
									<article class="vertical-item mosaic-post post format-standard text-center muted_background">

										<div class="item-media entry-thumbnail">
											<img src="admin/<?php echo $rows['img'] ?>" alt="">
											<div class="media-links">
												<a class="abs-link" title="" href="blog.php?id=<?php echo $rows['id'] ?>"></a>
											</div>
										</div>

										<div class="item-content entry-content">
											<header class="entry-header">

												<h3 class="entry-title">
													<a href="blog.php?id=<?php echo $rows['id'] ?>" rel="bookmark">
                                                                                  <?php echo $rows['title'] ?> </a>
												</h3>

												<span class="date main_bg_color">
													<time datetime="2016-01-10T15:05:23+00:00" class="entry-date">
														<?php echo $rows['created_at'] ?>
													</time>
												</span>

											</header>
											<!-- .entry-header -->

											<p>
<?php echo substr($rows['content'],0,54) ?></p>

										</div>
										<!-- .item-content.entry-content -->
										
									</article>
								</div>
<?php }?>
							</div>
							<!-- eof .isotope_container.row -->
						</div>
					</div>
					<div class="row topmargin_20">
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



</html>
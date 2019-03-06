<?php

if(isset($_SESSION)){
$items=0;
  foreach ($_SESSION as $name => $value) {
  	if($name=='profile'){
  		continue;
  	}else{
     if($value>0){
     if(substr($name,0,8)=='product_'){
	        $items++;
	  }
	}
}
}
}
?>
	<header class="page_header header_darkgrey table_section">

				<div class="container">

					<div class="row">

						<div class="col-lg-3 col-md-4 col-xs-12">

							<a href="index.php" class="logo top_logo logo_image">

								<h1>models

									<span class="muellerhoff">Agency</span>

								</h1>

								<img src="images/logo.png" alt="">

							</a>

							<!-- header toggler -->

							<span class="toggle_menu">

								<span></span>

							</span>

						</div>

						<div class="col-lg-9 col-md-8 text-right">

							<!-- main nav start -->

							<nav class="mainmenu_wrapper">

								<ul class="mainmenu nav sf-menu">

									<li class="active">

										<a href="index.php">Home</a>

									</li>





									<li>

										<a href="gallery.php">Gallery</a>

									</li>							



														





									<li>

										<a href="our-services.php">Services</a>

									</li>								



											



											



											

									<!-- eof pages -->



									<li>

										<a href="models.php">Models</a>

										

									</li>



									<li>

										<a href="faq.php">FAQ</a>

										

									</li>



									<!-- contacts -->

									<li>

										<a href="contact.php">Contact</a>

									</li>



							



									<!-- eof contacts -->



								</ul>

							</nav>

							<!-- eof main nav -->

						</div>

					</div>

				</div>

			</header>


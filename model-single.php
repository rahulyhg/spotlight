 <?php

if(isset($_GET['id'])){

    $model_id=$_GET['id'];

}

include("connect.php");



 $user_reg =  mysqli_query($connect,"select * from `user_reg` where user_id='$model_id' ");

$get_user = mysqli_fetch_assoc($user_reg);	



$user_name = $get_user['user_name'];

$model_height = $get_user['model_height'];

$model_bio= $get_user['model_biography'];

$model_dob= $get_user['user_dob'];

$model_type= $get_user['user_type'];

$model_weight= $get_user['model_weight'];

$model_gender= $get_user['model_gender'];

$model_img1= $get_user['model_image1'];

$model_img2= $get_user['model_image2'];

$model_img3= $get_user['model_image3'];

$model_img4= $get_user['model_image4'];

$model_img5= $get_user['model_image5'];

$model_img6= $get_user['model_image6'];





?>



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
 
    <link rel="stylesheet" type="text/css" href="css/toast.min.css">

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



			<?php include('header.php'); 





 ?>

		

		<section class="page_breadcrumbs changeable ls gradient gorizontal_padding section_padding_20 columns_padding_5 table_section">

				<div class="container-fluid">

					<div class="row">

						<div class="col-sm-3 text-center text-sm-left darklinks">

							<a href="#">

								<em>agency@support.com</em>

							</a>

						</div>

						<div class="col-sm-6 text-center">

							<ol class="breadcrumb">

								<li>

									<a href="./">

										Home

									</a>

								</li>

								<li>

									<a href="#">Models</a>

								</li>



								<li class="active">

									<span>Model single</span>

								</li>

							</ol>

						</div>

						<div class="col-sm-3 text-center text-sm-right">

							<ul class="inline-dropdown inline-block">



								<li class="dropdown cart-dropdown">

									<div class="total-quantity text-center">0 items -

										<span class="total-amount">$0.00</span>

									</div>

									<a class="topline-button" id="cart" data-target="#" href="./" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">

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

									<a class="topline-button" id="login" data-target="#" href="./" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">

										<i class="rt-icon2-user"></i>

									</a>

									<div class="dropdown-menu ds" aria-labelledby="login">

										<form role="form" action="/">

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





			<section class="ds model-page section_padding_70 section_padding_bottom_60 columns_padding_25">

				<div class="container">

					<div class="row">



						<div class="col-md-5 col-md-push-7">

							<div class="vertical-item with_background models_square">

								<div class="item-media">

									<img src="admin/model/<?php echo $model_img1 ?>" alt="Main Image" style="height:445.833px;width:445.833px;">

								</div>

								<div class="item-content with_padding">

									<h2 class="big topmargin_0 bottommargin_25"><?php echo $user_name ?></h2>

									<div class="page_social_icons">

										<a class="social-icon color-bg-icon soc-facebook" href="#" title="Facebook"></a>

										<a class="social-icon color-bg-icon soc-twitter" href="#" title="Twitter"></a>

										<a class="social-icon color-bg-icon soc-google" href="#" title="Google"></a>

										<a class="social-icon color-bg-icon soc-linkedin" href="#" title="LinkedIn"></a>

										<a class="social-icon color-bg-icon soc-pinterest" href="#" title="Pinterest"></a>

									</div>

								</div>

								<div class="model-parameters grey gradient_bg_goriz before_cover">

									<div class="bg_overlay"></div>

									<div>

										<span class="bold">Type</span>

										<br>

										<span><?php echo $model_type ?></span>

									</div>

									<div>

										<span class="bold">Height</span>

										<br>

										<span><?php echo $model_height ?> Feet</span>

									</div>

									<div>

										<span class="bold">Weight</span>

										<br>

										<span><?php echo $model_weight ?> Kg</span>

									</div>

									<div>

										<span class="bold">DOB</span>

										<br>

										<span><?php echo $model_dob ?></span>

									</div>

									<div>

										<span class="bold">Gender</span>

										<br>

										<span><?php echo $model_gender ?></span>

									</div>

								</div>

								<div class="item-content with_padding">

									<ul class="media-list">

										<li class="media">

											<div class="media-left">

												<i class="rt-icon2-location2 highlight"></i>

											</div>

											<div class="media-body">

												<span class="bold fontsize_12 text-uppercase grey">Address:</span>

												<br>

												<span>Jackson’s Street 567, San Diego, California, United States</span>

											</div>

										</li>

										<li class="media">

											<div class="media-left">

												<i class="rt-icon2-phone5 highlight"></i>

											</div>

											<div class="media-body">

												<span class="bold fontsize_12 text-uppercase grey">Phone:</span>

												<br>

												<span>8 (800) 456-2698</span>

											</div>

										</li>

										<li class="media">

											<div class="media-left">

												<i class="rt-icon2-mail highlight"></i>

											</div>

											<div class="media-body">

												<span class="bold fontsize_12 text-uppercase grey">Email:</span>

												<br>

												<a href="#">

													<em>agency@support.com</em>

												</a>

											</div>

										</li>

									</ul>

								</div>





							</div>



						</div>



						<div class="col-md-7 col-md-pull-5">

							<h2 class="topmargin_0 bottommargin_30">About Model</h2>

							<p>

								<?php echo $model_bio ?>

							</p>

					

							<div class="filters isotope_filters topmargin_50">

								<a href="#" data-filter="*" class="selected">All</a>

								<a href="#" data-filter=".tests">Tests</a>

								<a href="#" data-filter=".editorials">Editorials</a>

								<a href="#" data-filter=".snaps">Snaps</a>

							</div>



							<div class="columns_padding_5">

								<div class="isotope_container isotope row masonry-layout" data-filters=".isotope_filters">

									<div class="isotope-item bottommargin_10 col-md-3 col-sm-4 col-xs-6 tests">

										<div class="vertical-item gallery-item content-absolute text-center cs">

											<div class="item-media">

												<img src="admin/model/<?php echo $model_img2 ?>" alt="Image" style="width:120.833px;height:120.833px;">

												<div class="media-links">

													<a class="prettyPhoto abs-link" title="" data-gal="prettyPhoto[gal]" href="admin/model/<?php echo $model_img2 ?>"></a>

												</div>

											</div>

										</div>

									</div>

									<div class="isotope-item bottommargin_10 col-md-3 col-sm-4 col-xs-6 editorials">

										<div class="vertical-item gallery-item content-absolute text-center cs">

											<div class="item-media">

												<img src="admin/model/<?php echo $model_img3 ?>" alt="Image" style="width:120.833px;height:120.833px;">

												<div class="media-links">

													<a class="prettyPhoto abs-link" title="" data-gal="prettyPhoto[gal]" href="admin/model/<?php echo $model_img3 ?>"></a>

												</div>

											</div>

										</div>

									</div>

									<div class="isotope-item bottommargin_10 col-md-3 col-sm-4 col-xs-6 snaps">

										<div class="vertical-item gallery-item content-absolute text-center cs">

											<div class="item-media">

												<img src="admin/model/<?php echo $model_img4 ?>" alt="Image" style="width:120.833px;height:120.833px;">

												<div class="media-links">

													<a class="prettyPhoto abs-link" title="" data-gal="prettyPhoto[gal]" href="admin/model/<?php echo $model_img4 ?>"></a>

												</div>

											</div>

										</div>

									</div>

									<div class="isotope-item bottommargin_10 col-md-3 col-sm-4 col-xs-6 tests">

										<div class="vertical-item gallery-item content-absolute text-center cs">

											<div class="item-media">

												<img src="admin/model/<?php echo $model_img5 ?>" alt="Image" style="width:120.833px;height:120.833px;">

												<div class="media-links">

													<a class="prettyPhoto abs-link" title="" data-gal="prettyPhoto[gal]" href="admin/model/<?php echo $model_img5 ?>"></a>

												</div>

											</div>

										</div>

									</div>

									<div class="isotope-item bottommargin_10 col-md-3 col-sm-4 col-xs-6 editorials">

										<div class="vertical-item gallery-item content-absolute text-center cs">

											<div class="item-media">

												<img src="admin/model/<?php echo $model_img6 ?>" alt="Image" style="width:120.833px;height:120.833px;">

												<div class="media-links">

													<a class="prettyPhoto abs-link" title="" data-gal="prettyPhoto[gal]" href="admin/model/<?php echo $model_img6 ?>"></a>

												</div>

											</div>

										</div>

									</div>

								</div>

								<!-- eof .isotope_container.row -->

							</div>



							<h2 class="topmargin_40 bottommargin_30">Contact Model</h2>



							<form class="model-contact-form">

								<div class="form-group">

									<label for="model-name" class="sr-only">Full Name

										<span class="required">*</span>

									</label>

									<input type="text" required aria-required="true" size="30" value="" name="name" id="name" class="form-control with-icon" placeholder="Enter Your Full Name">

									<i class="rt-icon2-user"></i>

								</div>

								<div class="form-group">

									<label for="model-email" class="sr-only">Email address

										<span class="required">*</span>

									</label>

									<input type="email" required aria-required="true" size="30" value="" name="email" id="email" class="form-control with-icon" placeholder="Enter Your Email Address">

									<i class="rt-icon2-mail"></i>

								</div>

								<div class="form-group">

									<label for="model-phone" class="sr-only">Phone number

										<span class="required">*</span>

									</label>

									<input type="text" required aria-required="true" size="30" value="" name="phone" id="phone" class="form-control with-icon" placeholder="Enter Your Phone Number">

									<i class="rt-icon2-phone5"></i>

								</div>

								<div class="form-group">

									<label for="model-message" class="sr-only">Message</label>

									<textarea aria-required="true" required rows="6" cols="45" name="message" id="message" class="form-control with-icon" placeholder="Enter Your Query Here"></textarea>

									<i class="rt-icon2-pen"></i>

								</div>


<button id="submitForm" value="<?php echo $model_id ?>" name="submit" class="theme_button color1 bottommargin_0">Send</button>

								<button type="reset" id="model_contact_form_clear" name="model_contact_clear" class="theme_button inverse bottommargin_0">Clear</button>

							</form>



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
<script src="js/toast.min.js" type="text/javascript"></script>


</body>

<script type="text/javascript">
$(document).ready(function(){
  $("#submitForm").click(function(e){
  	e.preventDefault();
  	var id=$(this).attr("value");
  	var name=$("#name").val();
  	var email=$("#email").val();
  	var phone=$("#phone").val();
  	var message=$("#message").val();
  	$.ajax({
  		url : "contact_model.php?id="+id+"&name="+name+"&email="+email+"&phone="+phone+"&message="+message,
  		type: "POST"
  	}).done(function(response){
    
      $.toast({
                heading: 'Success',
                text: 'Message is sent successfully',
                showHideTransition: 'fade',
                icon: 'success',
                position: 'top-right'
        });

      $("#model_contact_form_clear").trigger("click");

  	}).fail(function(response){
  		if(response.status==405){

  		$.toast({
                heading: 'Error',
                text: 'Please fill all the details',
                showHideTransition: 'fade',
                icon: 'error',
                position: 'top-right'
        });
  	}else{
  		$.toast({
                heading: 'Error',
                text: 'Sorry for inconvenience<br><br>some error occured',
                showHideTransition: 'fade',
                icon: 'error',
                position: 'top-right'
        });
  	}
  	});
  });
});
</script>



<!-- Mirrored from webdesign-finder.com/html/models/models2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Jul 2018 07:48:18 GMT -->

</html>
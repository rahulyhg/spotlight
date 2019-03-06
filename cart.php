<?php
session_start();
include "connect.php";

if(isset($_GET['delete'])){
    $_SESSION['product_'.$_GET['delete']]=0;
    unset($_SESSION['product_'.$_GET['delete']]);
    
     header('Location:cart.php');
}
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
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/cart_style.css">
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
include("connect.php");

 ?>
	<div class="cart_main">
	 <div class="container">
			 <ol class="breadcrumb">
		  <li><a href="/">Home</a></li>
		  <li class="active">Cart</li>
		 </ol>			
		 <div class="cart-items">
			 <h2>Models Added For Booking</h2>

			 <?php 
			  

              foreach ($_SESSION as $name => $value) {
                if($value>0){
                	if(substr($name,0,8)=='product_'){
				    $length=strlen($name);
				    $id=substr($name,8,$length);
				    $query=mysqli_query($connect,"SELECT * FROM user_reg WHERE user_id=".mysqli_escape_string($connect,$id)." ");
				    if(!$query){
				      die("Connection error ".mysqli_error($connect));
				    }
				    while($row=mysqli_fetch_array($query)){
          //       }
          //     }
          // }}
			 ?>
		
			 <div class="cart-header2 col-sm-6 col-md-6">
				 <a href="cart.php?delete=<?php echo $row['user_id']?>"><div class="close2"></div></a>
				  <div class="cart-sec">
						<div class="cart-item">
							<img src="admin/model/<?php echo $row['model_image1']?>" style="widht:189px;height:104px;"/>
						</div>
					   <div class="cart-item-info">
							 <h3><?php echo $row['user_name']?><span>Model No: <?php echo $row['model_code']?></span></h3>
							 
							 
					   </div>
					   <div class="clearfix"></div>
										
				  </div>
			  </div>		
            
            <?php }}}}
           
             // if($models<1){
             // 	echo "<h2 class='alert alert-danger text-center'>You Have Not Booked Any Models Yet</h2>";
             // }
            ?>
		
		 </div>
		
		 <div class="cart-total" style="margin-bottom:24px;">
			 <!-- <a class="continue" href="#">Continue to basket</a> -->
			
			 <h4 class="last-price"></h4>
			 <span class="total final"></span>
			 <div class="clearfix"></div>
			 <a class="order" href="checkout.php">Confirm Booking</a>
			
			</div>
		
	 </div>
</div>

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
<?php include("ajax.php")?>

<!-- Mirrored from webdesign-finder.com/html/models/models2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Jul 2018 07:48:18 GMT -->
</html>

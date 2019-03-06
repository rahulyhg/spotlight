<?php
session_start();
ob_start();
include("connect.php");
if(isset($_GET['id'])){
    $id=$_GET['id'];
}
$query=mysqli_query($connect,"SELECT * from casting where c_id='$id' ");
$row=mysqli_fetch_assoc($query);
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

	<title>Casting Event</title>

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

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css" />        

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




	<!-- wrappers for visual page editor and boxed version of template -->

	<div id="canvas">

		<div id="box_wrapper">



			<!-- template sections -->



			<?php include("header.php");  ?>

		

			



			<section class="ds section_padding_70 section_padding_bottom_60 columns_padding_25">

				<div class="container" style="padding-top:24px;">

					<div class="row bottommargin_20">

						<div class="col-sm-12 text-center">

							<h2 class="big topmargin_-5">

							  <?php echo $row['c_heading'] ?>

							</h2>


						</div>

					</div>

					<div class="row">



						<div class="col-sm-7 col-md-8 col-lg-8 col-sm-push-5 col-md-push-4 col-lg-push-4">



							<article class="event-single with_background">

								<div class="item-media entry-thumbnail">

									<img src="admin/<?php echo $row['c_img'] ?> " alt="">

								</div>

								<div class="isotope_container isotope row masonry-layout" data-filters=".isotope_filters" style="margin-top:24px;">

<?php if(strlen($row['c_img2'])>6){ ?>
									<div class="isotope-item bottommargin_10 col-md-3 col-sm-4 col-xs-6 tests" style="padding-left:30px;">

										<div class="vertical-item gallery-item content-absolute text-center">

											<div class="item-media" style="width:120.833px;height:120.833px;">

												<img src="admin/<?php echo $row['c_img2'] ?> " alt="Image" style="width:120.833px;height:120.833px;">

												<div class="media-links">

													<a class="prettyPhoto abs-link" title="" data-fancybox="gallery"  href="admin/<?php echo $row['c_img2'] ?> "></a>

												</div>

											</div>

										</div>

									</div>
<?php } ?>
<?php if(strlen($row['c_img3'])>6){ ?>
									<div class="isotope-item bottommargin_10 col-md-3 col-sm-4 col-xs-6 editorials">

										<div class="vertical-item gallery-item content-absolute text-center">

											<div class="item-media" style="width:120.833px;height:120.833px;">

												<img src="admin/<?php echo $row['c_img3'] ?> " alt="Image" style="width:120.833px;height:120.833px;">

												<div class="media-links">

													<a class="prettyPhoto abs-link" title="" data-fancybox="gallery"  href="admin/<?php echo $row['c_img3'] ?>"></a>

												</div>

											</div>

										</div>

									</div>
<?php } ?>
<?php if(strlen($row['c_img4'])>6){ ?>
									<div class="isotope-item bottommargin_10 col-md-3 col-sm-4 col-xs-6 snaps">

										<div class="vertical-item gallery-item content-absolute text-center">

											<div class="item-media" style="width:120.833px;height:120.833px;">

												<img src="admin/<?php echo $row['c_img4'] ?> " alt="Image" style="width:120.833px;height:120.833px;">

												<div class="media-links">

													<a class="prettyPhoto abs-link" title="" data-fancybox="gallery"  href="admin/<?php echo $row['c_img4'] ?> "></a>

												</div>

											</div>

										</div>

									</div>
<?php } ?>
<?php if(strlen($row['c_img5'])>6){ ?>
<div class="isotope-item bottommargin_10 col-md-3 col-sm-4 col-xs-6 snaps">

										<div class="vertical-item gallery-item content-absolute text-center">

											<div class="item-media" style="width:120.833px;height:120.833px;">

												<img src="admin/<?php echo $row['c_img5'] ?> " alt="Image" style="width:120.833px;height:120.833px;">

												<div class="media-links">

													<a class="prettyPhoto abs-link" title="" data-fancybox="gallery" href="admin/<?php echo $row['c_img5'] ?> "></a>

												</div>

											</div>

										</div>

									</div>

		<?php } ?>						

							</div>


<table class="table table-striped table-bordered">
<thead>
<tr>
<th>SHOOT DATE</th>	
<th>AGE GROUP</th>	
<th>LOCATION</th>	
<th>BUDGET</th>	
</tr>
</thead>
<tbody>
<tr>
<td><?php echo $row['shoot_date'] ?></td>
<td><?php echo $row['age_group'] ?></td>
<td><?php echo $row['location'] ?></td>
<td><?php echo $row['budget'] ?></td>
</tr>
</tbody>
</table>



								<div class="item-content with_padding">



									<div class="entry-content">

										<p class="entry-excerpt">

							          <?php echo $row['c_text'] ?>

										</p>






									</div>



									<!-- .entry-content -->

								</div>

								<!-- .item-content -->

                                                          <div style="text-align:center;padding-bottom:24px;">
												<?php if(empty($_SESSION['profile'])) { ?>
												<a href="login.php?apply=<?php echo $row['c_id'];?>" class="col-sm-12 col-md-12 col-lg-12 col-xs-12 theme_button color2 topmargin_20" style="background-color:black;">Apply</a>
												<?php }else{?>
                                                     <form method='POST'>

			                                            <input type="hidden" name="model_code" value="<?php echo $_SESSION['profile']->model_code ?>">
			                                            <input type="hidden" name="casting_id" 
			                                            value="<?php echo $row['c_id'] ?>">

			                                            <button class="theme_button color2 topmargin_20 col-sm-12 col-md-12 col-lg-12 col-xs-12" type="submit" name="send_enquiry" style="background-color:black;">Apply Now</button>
			                                        </form>
			                                        <?php } ?>

                                                          <a href="casting.php" class="theme_button color2 topmargin_20" style="background-color:black;">Back To Main Casting Page</a>

                                                          </div>

							</article>





							

						</div>

						<!--eof .col-sm-8 (main content)-->



						<!-- sidebar -->

						<aside class="col-sm-5 col-md-4 col-lg-4 col-sm-pull-7 col-md-pull-8 col-lg-pull-8">



							<div class="with_background with_padding">

								<div class="widget widget_categories">



									<h3 class="widget-title">Categories</h3>

									<ul>

	<?php
            $categories=mysqli_query($connect,"SELECT * from casting_category");
            while($rows=mysqli_fetch_assoc($categories)){
           ?>
                                          <li> 
<?php 
$cast_id=$rows['id'];
$castings=mysqli_query($connect,"SELECT * from casting where category_id='$cast_id' ");
if($castings<1){
$cast_number=0;
}else{
$cast_number=mysqli_num_rows($castings);
}
?>
                                           <a href="casting.php?id=<?php echo $rows['id']?>" title=""><?php echo $rows['name']." (".$cast_number.")" ?></a>  
                                          
                                       </li>
                                       <?php }?>

									</ul>

								</div>

							</div>



							



							

							





						</aside>

						<!-- eof aside sidebar -->



					</div>

				</div>

			</section>



		

			<?php include("footer.php");  ?>





			<?php include("copyright2.php");  ?> 





		</div>

		<!-- eof #box_wrapper -->

	</div>

	<!-- eof #canvas -->

<script src="js/compressed.js"></script>

	<script src="js/main.js"></script>

	<script src="js/toast.min.js"></script>

        <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>



</body>



<?php

 include("ajax.php");

 if(isset($_POST['send_enquiry']))
 {
     $model_code = $_POST['model_code'];
     $casting_id = $_POST['casting_id'];

     $rows=mysqli_num_rows(mysqli_query($connect,"SELECT * from casting_enquiry where model_code='$model_code' and casting_id='$casting_id' "));

     if($rows>0){
	 echo "<script type='text/javascript'>

	 $.toast({
	                heading: 'Error',
	                text: 'You have already applied for this casting',
	                showHideTransition: 'fade',
	                icon: 'error',
	                position: 'top-right',
	                hideAfter: 8000
	        });


	</script>";   
	   }
     else{

     $send = mysqli_query($connect,"insert into `casting_enquiry` (`model_code`,`casting_id`,`casting_status`) values ('$model_code','$casting_id','1')");

	    
	     echo "<script type='text/javascript'>

	 $.toast({
	                heading: 'Success',
	                text: 'You have successfully applied for this casting',
	                showHideTransition: 'fade',
	                icon: 'success',
	                position: 'top-right',
	                hideAfter: 8000
	        });


	</script>";     
	
	 } 
 }
?>

</html>
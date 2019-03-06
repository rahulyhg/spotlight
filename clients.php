ï»¿<?php session_start();?>
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
        <link href="css/superslides.css" rel="stylesheet">
        <link href="css/owl.carousel.min.css" rel="stylesheet">
        <link href="css/owl.theme.default.min.css" rel="stylesheet">
        <link href="css/jquery.fancybox.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
	<link rel="stylesheet" href="css/animations.css">

	<link rel="stylesheet" href="css/fonts.css">

	<!-- <link rel="stylesheet" href="css/toast.min.css"> -->


	<script src="js/vendor/modernizr-2.6.2.min.js"></script>



<!-- <script src="js/toast.min.js"></script> -->

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

		
<section id="blog" style="background-color:#0d0d0d;color:white;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                     
                        <h2 class="wow fadeInLeftBig" data-wow-delay="0.3s" style="font-weight:400;">CLIENTS</h2>
                        <h4 class="wow fadeInRightBig" data-wow-delay="0.5s" style="color:#66ccff;font-weight:400;">MEET OUR PATRONS</h4>
                       <div class="divider"><i class="fa fa-book fa-2x" style="color:#3399ff;"></i>
                        </div>
                        
                        
                        
                        <div class="c-carousel" style="padding-top:24px;">
 
  <ul class="c-carousel__slides">
  	<div class="owl-carousel">
      <?php
      include "connect.php";
      $viewpro=mysqli_query($connect,"SELECT * from clients");

                        while($js = mysqli_fetch_assoc($viewpro))
                        {
                            ?>
 <div class="item">

 <img src="admin/<?php echo $js['client_img']; ?>" style="height:250px;width:250px;border:1px solid black;"> 

 </div>
    <?php } ?>
   </div>
  </ul>
</div>
                    </div>
                </div>
                    
                      





        </section>
    <section style="padding: 0 0 60px !important ;background-color:#0d0d0d;color:white;">
        <div class="container">

<table class="table" align="center" style="border:2px solid white;">
   <tr style="border:2px solid white;">
    <td align="center" style="border:2px solid white;">GIO</td>
    <td align="center" style="border:2px solid white;">CLUB SENSOR</td>
    <td align="center" style="border:2px solid white;">VEINFIELD</td>
    <td align="center" style="border:2px solid white;">ALBA</td>
    <td align="center" style="border:2px solid white;">MYBRA</td>
    <td align="center" style="border:2px solid white;">MAHALAKSHMI SILKS</td>
    <td align="center" style="border:2px solid white;">POOLIMOOTIL SILKS</td> 
  </tr>
  <tr style="border:2px solid white;">
    <td align="center" style="border:2px solid white;">UNZIPPED</td>
    <td align="center" style="border:2px solid white;">TEENAGE</td>
    <td align="center" style="border:2px solid white;">GLAMOUR</td>
    <td align="center" style="border:2px solid white;">MEN'S STYLE</td>
    <td align="center" style="border:2px solid white;">MAMA</td>
    <td align="center" style="border:2px solid white;">MACHO</td>
    <td align="center" style="border:2px solid white;">SHAPE</td>
    </tr>
    <tr style="border:2px solid white;">
    <td align="center" style="border:2px solid white;">LUI</td>
    <td align="center" style="border:2px solid white;">SPICY</td>
    <td align="center" style="border:2px solid white;">MEN'S WORLD</td>
    <td align="center" style="border:2px solid white;">SUCCOSO</td>
    <td align="center" style="border:2px solid white;">PAPER</td>
    <td align="center" style="border:2px solid white;">CLEO</td>
    <td align="center" style="border:2px solid white;">ESQUIRE</td>
    </tr>
    <tr style="border:2px solid white;">
    <td align="center" style="border:2px solid white;">WILD STONE</td>
    <td align="center" style="border:2px solid white;">AMUL</td>
    <td align="center" style="border:2px solid white;">MENZO</td>
    <td align="center" style="border:2px solid white;">VSTAR</td>
    <td align="center" style="border:2px solid white;">YEEPEE</td>
    <td align="center" style="border:2px solid white;">ZIWAME</td>
    <td align="center" style="border:2px solid white;">MUFTI</td>
    </tr>
    <tr style="border:2px solid white;">
    <td align="center" style="border:2px solid white;">EURO</td>
    <td align="center" style="border:2px solid white;">ARIHANT</td>
    <td align="center" style="border:2px solid white;">ATHENA</td>
    <td align="center" style="border:2px solid white;">VISHWAM FABRICS</td>
    <td align="center" style="border:2px solid white;">MANTHAN FASHIONS</td>
    <td align="center" style="border:2px solid white;">SRI GANESH SILKS</td>
    <td align="center" style="border:2px solid white;">TRIVENI</td>
    </tr>
    
</table>

  
</div>

        </section>


			<?php include("footer.php");  ?>





			<?php include("copyright2.php");  ?> 





		</div>

		<!-- eof #box_wrapper -->

	</div>

	<!-- eof #canvas -->
						
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script data-cfasync="false" src="../../cdn-cgi/scripts/f2bf09f8/cloudflare-static/email-decode.min.js"></script><script src="js/compressed.js"></script>

	<script src="js/main.js"></script>

	<script src="js/switcher.js"></script>
  <script src="js/retina-1.1.0.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/jquery.animate-enhanced.min.js"></script>
        <script src="js/jquery.superslides.js"></script>
        <script src="js/owl.carousel.js"></script>
        <script src="js/jquery.scrolly.js"></script>
        <script src="js/jquery.mixitup.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script>
            new WOW().init();
          
        </script>
        <script src="js/jquery.fancybox.js"></script>
        <script src="js/settings.js"></script>
      


</body>
<script type="text/javascript">
	
	$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout: 1000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})

</script>




<!-- Mirrored from webdesign-finder.com/html/models/models2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Jul 2018 07:48:18 GMT -->

</html>


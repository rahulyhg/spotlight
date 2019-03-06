<?php session_start();?>

<!DOCTYPE html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->

<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->

<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->

<!--[if gt IE 8]><!-->

<html class="no-js">

<!--<![endif]-->





<!-- Mirrored from webdesign-finder.com/html/models/appointment.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Jul 2018 07:48:18 GMT -->

<head>

	<title>Appointment</title>

	<meta charset="utf-8">

	<!--[if IE]>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <![endif]-->

	<meta name="description" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1">



	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->



	<link rel="stylesheet" href="css/bootstrap.min.css">

	<link rel="stylesheet" href="css/main.css" id="color-switcher-link">

        <link rel="stylesheet" href="css/owl.carousel.min.css">

	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<link rel="stylesheet" href="css/animations.css">

	<link rel="stylesheet" href="css/fonts.css">

	<script src="js/vendor/modernizr-2.6.2.min.js"></script>



	<!--[if lt IE 9]>

        <script src="js/vendor/html5shiv.min.js"></script>

        <script src="js/vendor/respond.min.js"></script>

    <![endif]-->



   <style type="text/css">

    	

    	.modal-content{

    		background-color:#0d0d0d;

    		color:white;

    	}



    	.modal-body h4{

            color:#80bfff;

    	}



      .item img{

        height:200px;

        width:400px;

      }



    </style>



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



		





			  <section id="sessions" style="background-color:#0d0d0d;">

                <div class="parallax" data-velocity=".4" data-fit="-700" style="background-image: url(images/parallax2.jpg);background-attachment:fixed;"></div>

                <div class="tint"></div>

                <div class="container text-center">

                    <div class="row wow bounceInUp" data-wow-delay="0.5s">

                        <div class="col-md-12">

                            <h2 style="color:white;font-weight:400;">PHOTO SESSIONS</h2>

                            <h4 style="color:#80bfff;font-weight:400;">CHOOSE YOUR OPTION</h4>

                            <div class="divider"><i class="fa fa-camera fa-2x" style="color:#4dd2ff;margin-top:24px;"></i>

                            </div>

                        </div>

                    </div>

                    <div class="container wow bounceInUp" data-wow-delay="0.5s" style="margin-top:24px;">

                        <div class="row">

                            <div class="col-md-4">

                                <button type="button" style="font-size:11px !important;background-color:#0d0d0d;color:white;padding:4px 16px;" data-toggle="modal" data-target="#myModal11" style="margin-bottom: 9%;">ADD ONS</button>

                            </div>

                            <div class="col-md-4">

                                <button type="button" style="font-size:11px !important;background-color:#0d0d0d;color:white;padding:4px 16px;" data-toggle="modal" data-target="#myModal12" style="margin-bottom: 9%;">TIPS</button>

                            </div>

                            <div class="col-md-4">

                                <a style="font-size:11px !important;background-color:#0d0d0d;color:white;padding:4px 16px;" data-toggle="modal" data-target="#myModal13" style="margin-bottom: 9%;">SAMPLE FOLIO</a>

                            </div>

                        </div>

                        <div class="row">



                            <?php //include('newtable1.php');

                            include('prot.php');

                            

                            ?>



                        </div>

                    </div>

                </div>

            </section>

            

             <div class="modal fade" id="myModal11" role="dialog">

                    <div class="modal-dialog">

                        <!-- Modal content-->

                        <div class="modal-content">

                            <div class="modal-header">

                                <button type="button" class="close" data-dismiss="modal">&times;</button>

                                <h2 class="modal-title"><center>ADD ONS</center></h2>

                            </div>

                            <div class="modal-body">

                                <h4>PROFESSIONAL FASHION STYLIST / COSTUMES</h4>

                                <div class="divider"></div>

                                <p>If you want a professional fashion stylist, we can arrange for one who would get costumes/wardrobe for the shoot , at an additional cost. We have professional fashion stylists in the range of RS 15,000/- to RS 20,000/-. A meeting will be arranged with the fashion stylist before the shoot date.</p>



                                <h4>RAW DVD / PORTFOLIO BOOK / PRINTS</h4>

                                <div class="divider"></div>

                                <p>Raw Dvd - Rs 5,000/-</p>

                                <p>Portfolio Book - Rs 4,000/-</p>

                                <p>A4 size Print - Rs 100/- pp</p>

                                <p> Additional Retouched Image - Rs 500/- pp</p>

                                <p> Comp-card Design - Rs 300/- pp</p>

                                <p>Comp-card Print - Rs 50/- pp</p>



                                <h4>MARKETING & PROMOTION</h4>

                                <div class="divider"></div>

                                <p>We can help you launch your career as a professional model in the field of modeling , acting & advertising . You can choose from 6 of our portfolio packages tailored to suit your needs. Once you have the portfolio ready, we will manage and market it in the fashion & advertising industry. We have tie-ups with some of the best brands and fashion houses in the industry. We shall add your pictures to our models database. As and when there is a requirement, your pictures will be forwarded to the clients directly for short listing. Once short listed, you shall be given a call.</p>

                                <h4>CANCELLATION POLICY</h4>

                                <div class="divider"></div>

                                <p>You must give 7 days notice if you wish to reschedule your shoot. Failure to do so, your deposit will be lost. Deposits are non-refundable, but may be applied to another shoot as long as you have given at least 7 days notice of cancellation.</p>

                                <h4>HOW TO BOOK THE SHOOT</h4>

                                <div class="divider"></div>

                                <p>* You can call, email or fill the form provided below.</p>

                                <p> * You will have to pay a non-refundable Booking Deposit of RS 15,000/- to book the shoot.</p>

                                <p> * You can pay by cheque, bank transfer, Online transfer (NEFT).</p>

                            </div>

                            <div class="modal-footer">

                                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="modal fade" id="myModal12" role="dialog">

                    <div class="modal-dialog">

                        <!-- Modal content-->

                        <div class="modal-content">

                            <div class="modal-header">

                                <button type="button" class="close" data-dismiss="modal">&times;</button>

                                <h2 class="modal-title">THE DAY BEFORE PHOTOSHOOT</h2>

                            </div>

                            <div class="modal-body">

                                <h4>Step1:</h4>

                                <div class="divider"></div>

                                <p> If you want to make each photo shoot a success, it's essential that you take the right steps to make sure you are prepared and ready to go prior to your shoot.</p>

                                <h4>Step2:</h4>

                                <div class="divider"></div>

                                <p>Sleep is a must for all models before a shoot. It goes without saying that the night before your shoot is crucial to how you perform the next day. Plan to sleep early at night. No staying up late, no partying and no drinking. Alcohol makes you dehydrated, which is the last thing you need.</p>

                                <h4>Step3:</h4>

                                <div class="divider"></div>

                                <p>Set out all of your stuff the night before so you won't have to rush around that morning. Make sure you know what outfits you're going to be wearing and pack them neatly in a large tote bag. Separate your accessories and shoes into their own bags as well. Of course if all of this will be supplied at the shoot then you won't have to worry about it.

                                </p>

                                <h4>Step4:</h4>

                                <div class="divider"></div>

                                <p>If there is going to be a makeup artist on set, then arrive with a clean and well-moisturized face. Stay out of the sun and the tanning salons!

                                </p>

                                <h4>Step5:</h4>

                                <div class="divider"></div>

                                <p>Nude colored thongs prevent panty lines and can be easily concealed no matter what color outfit you're wearing. Pack nude colored thong underwear. Also pack a regular nude colored seamless bra, as well as a strapless. If you aren't sure what outfits you'll be wearing, bring a black, white and nude colored bra. Other suggestions for underwear to bring: a variety of styles and colors, Strapless, fullback, bikini pushups, low cut .etc.

                                </p>

                                <h4>Step6:</h4>

                                <div class="divider"></div>

                                <p>Set all your bags, clothes, accessories, etc. in an easy to see area of your home or pack them in your car the night before so you won't forget anything.

                                </p>

                                <h4>Step7:</h4>

                                <div class="divider"></div>

                                <p>It's important that you have a clear idea of where your shoot is going to be. Get the driving directions the night before and make sure you have at least one contact number of someone who will be at the shoot. They will be the person you call in case you get lost or are running late.

                                </p>

                                <h4>Step8:</h4>

                                <div class="divider"></div>

                                <p>All facial hair should be twee-zed, waxed, or shaven, and excess arm hair should be waxed. Waiting a few days to shave will get you a closer and smoother shave for your shoot and can prevent ingrown hairs. To get a clean and close shave for your shoot (bikini, underarms, legs) don't shave at all for a day or two. Let the hairs grow in longer and then shave them either the night before or the next morning” whichever you prefer. This will allow for a closer and smoother shave.

                                </p>

                                <h4>MEN:</h4>

                                <div class="divider"></div>

                                <p>If you are starting with an unshaven look, bring your shaving supplies for your next look. Fingernails should be clean and groomed and not too long. Polish should be a light color.

                                </p>

                                <h5><strong><center>ON THE DAY OF THE PHOTO SHOOT</center></strong></h5>



                                <h4>Step9:</h4>

                                <div class="divider"></div>

                                <p>The morning of shoot , make sure to wake up extra early and allow yourself plenty of time to get ready and to reach your destination. It's always better to be early to your shoot.

                                </p>

                                <h4>Step10:</h4>

                                <div class="divider"></div>

                                <p> Stay hydrated and energized during your shoot. Pack a bottle of water and a straw (so you don't mess up your lipstick) and bring healthy snacks that won't get caught in your teeth. Some shoots can be long and you'll want to keep your energy level up with snacks in between shooting.

                                </p>

                                <h4>Step11:</h4>

                                <div class="divider"></div>

                                <p> Be comfy . Unless instructed to do so, you don't have to show up to your shoot already dressed. If you plan on getting dressed when you get there, simply wear pajama bottoms or sweat pants and a button up shirt or other lose fitting top that won't ruin your hair or makeup when you take it off.

                                </p>

                                <h4>Step12:</h4>

                                <div class="divider"></div>



                                <p> Avoid wearing jeans or tight fitting clothing because these can leave impressions on your skin (you know those pesky lines from the fabric that often cut into your thighs, stomach, etc?). Such marks and lines are annoying to Photoshop out of pictures.

                                </p>

                                <h4>Step13:</h4>

                                <div class="divider"></div>

                                </p>Bring a book so you don't get bored. Sometimes shoots can have some downtime in between so bring a magazine or book to read to keep yourself busy. Bring your favorite CD's. Cut out pictures that you like from magazines: the pose, mood, expression, angle, attitude, energy.

                                </p>

                                <h4>

            ATTITUDE</h4>

                                <div class="divider"></div>

                                <p>

                                    Bring an open mind, creativity, and a good attitude. The more you enjoy yourself the better your film will be. Leave friends, relatives and pets at home. Be courteous about the set, borrowed clothes and to the crew

                                </p>

                            </div>

                            <div class="modal-footer">

                                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>

                            </div>

                        </div>

                    </div>

                </div>



                <div class="modal fade" id="myModal13" role="dialog">

                    <div class="modal-dialog" style="width: 74%;    margin-top: 5%;">

                        <!-- Modal content-->

                        <div class="modal-content">



                            <div class="modal-body">



                                  <div class="owl-carousel">

                                  

                                        <li class="item"><img src="spot/images/s4.jpg" style="height:400px;">



                                        </li>

                                        <li class="item"><img src="spot/images/s5.jpg" style="height:400px;">



                                        </li>

                                        <li class="item"><img src="spot/images/s6.jpg" style="height:400px;">



                                        </li>

                                        <li class="item"><img src="spot/images/s6.png" style="height:400px;">



                                        </li>

                                   

                                </div>



                            </div>





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

        <script src="js/owl.carousel.js"></script>



</body>

<?php include("ajax.php")?>

<script type="text/javascript">

	

	$('.owl-carousel').owlCarousel({

    loop:true,

    margin:10,

    autoplay:true,

    autoplayTimeout: 3000,

    dots:false,

    responsive:{

        0:{

            items:1

        },

        600:{

            items:1,
            singleItem: true

        },

        1000:{

            items:1,
            singleItem: true

        }

    }

})



</script>





<!-- Mirrored from webdesign-finder.com/html/models/appointment.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Jul 2018 07:48:18 GMT -->

</html>
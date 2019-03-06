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





<!-- Mirrored from webdesign-finder.com/html/models/gallery-regular-4-cols.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Jul 2018 07:45:36 GMT -->

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
 <style>
            .panel-login {
                border-color: #ccc;
                -webkit-box-shadow: 0px 2px 3px 0px rgba(0, 0, 0, 0.2);
                -moz-box-shadow: 0px 2px 3px 0px rgba(0, 0, 0, 0.2);
                box-shadow: 0px 2px 3px 0px rgba(0, 0, 0, 0.2);
            }
            
            .panel-login>.panel-heading {
                color: #00415d;
                background-color: #383737;
                border-color: #5b503c;
                text-align: center;
            }
            
            .panel-login>.panel-heading a {
                text-decoration: none;
                color: #666;
                font-weight: bold;
                font-size: 15px;
                -webkit-transition: all 0.1s linear;
                -moz-transition: all 0.1s linear;
                transition: all 0.1s linear;
            }
            
            .panel-login>.panel-heading a.active {
                color: #a2d9f7;
                font-size: 18px;
            }
            
            .panel-login>.panel-heading hr {
                margin-top: 10px;
                margin-bottom: 0px;
                clear: both;
                border: 0;
                height: 1px;
                background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0));
                background-image: -moz-linear-gradient(left, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0));
                background-image: -ms-linear-gradient(left, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0));
                background-image: -o-linear-gradient(left, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0));
            }
            
            .panel-login input[type="text"],
            .panel-login input[type="email"],
            .panel-login input[type="password"] {
                height: 45px;
                border: 1px solid #5b503c;
                font-size: 16px;
                -webkit-transition: all 0.1s linear;
                -moz-transition: all 0.1s linear;
                transition: all 0.1s linear;
            }
            
            .panel-login input:hover,
            .panel-login input:focus {
                outline: none;
                -webkit-box-shadow: none;
                -moz-box-shadow: none;
                box-shadow: none;
                border-color: #ccc;
            }
            
            .btn-login {
                background-color: #59B2E0;
                outline: none;
                color: #fff;
                font-size: 14px;
                height: auto;
                font-weight: normal;
                padding: 14px 0;
                text-transform: uppercase;
                border-color: #59B2E6;
            }
            
            .btn-login:hover,
            .btn-login:focus {
                color: #fff;
                background-color: #53A3CD;
                border-color: #53A3CD;
            }
            
            .forgot-password {
                text-decoration: underline;
                color: #888;
            }
            
            .forgot-password:hover,
            .forgot-password:focus {
                text-decoration: underline;
                color: #666;
            }
            
            .btn-register {
                background-color: #1CB94E;
                outline: none;
                color: #fff;
                font-size: 14px;
                height: auto;
                font-weight: normal;
                padding: 14px 0;
                text-transform: uppercase;
                border-color: #1CB94A;
            }
            
            .btn-register:hover,
            .btn-register:focus {
                color: #fff;
                background-color: #1CA347;
                border-color: #1CA347;
            }
        </style>
        <style>
            .colorgraph {
                height: 5px;
                border-top: 0;
                background: #c4e17f;
                border-radius: 5px;
                background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
                background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
                background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
                background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
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





			<?php

				include('header.php');

include('connect.php');

			?>



		

			




	    <section id="blog" style="background-color:black;padding-bottom:10%">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="wow fadeInLeftBig" data-wow-delay="0.3s" style="font-weight:400;color:white;">JOIN US</h2>
                            <div class="divider"><i class="fa fa-globe" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <center> <span style="color: green;"> <?php if(isset($_GET['Message'])){ $msg="Activation Link sent through mail - Activate Now"; echo $msg; } ?> </span> </center>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="panel panel-login" style="border-color: #807154; !important">
                                    <div class="panel-heading">
                                        <div class="row">
                                            
                                            <div class="col-xs-12">
                                                <a href="#" id="register-form-link text-c">Register</a>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                    <div class="panel-body" style="background-color: #383737;">
                                        <div class="row" style="text-align:center;">
                                            <div class="col-lg-12" >
                                               
                                                <form id="register-form" action="" method="post" role="form" style="display: block;">
                                                    <div class="row">
                                                        <div class="col-md-6" >
                                                            <div class="form-group">
                                                                <label style="color:#666;font-weight:bold;" for="exampleInputEmail1">Individual Artist</label>
                                                                <select class="form-control" name="Model" style="color:#66ffff;background-color:black;border:1px solid #666;text-align:center;">
                                                                    <option value="-1">--select Category--</option>
                                                                    <option value="Model">Model</option>

                                                                    <option value="Artist">Artist</option>
                                                                    <option value="Performer">Performer</option>
                                                                    <option value="others">Others</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-sm-6 col-sm-offset-3">
                                                                        <input type="submit" name="reg_model"class="" value="Go" style="color:#66ffff;background-color:black;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label style="color:#666;font-weight:bold;" for="exampleInputEmail1">Talent Recruiter</label>
                                                                <select class="form-control" name="Model" style="color:#66ffff;background-color:black;border:1px solid #666;text-align:center;">
                                                                    <option>--select Category--</option>
                                                                    <option>Ad / Mktg Agency</option>
                                                                    <option>Artist Manager</option>
                                                                    <option>Brand Manager</option>
                                                                    <option>Brand Owner</option>
                                                                    <option>Casting Agent</option>
                                                                    <option>Casting Director</option>
                                                                    <option>Clothing Designer</option>

                                                                    <option>Director</option>
                                                                    <option>Event Managerr</option>

                                                                    <option>Film / Video Maker</option>

                                                                    <option>Model Coordinator</option>
                                                                    <option>Modeling Agent</option>
                                                                    <option>Photographer</option>
                                                                    <option>Publication</option>
                                                                    <option>Magazine Head</option>
                                                                    <option>Production House</option>
                                                                    <option>Production Manager</option>
                                                                    <option>Producer</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-sm-6 col-sm-offset-3">
                                                                        <input type="submit" name="reg_client" class=" " value="Go" style="color:#66ffff;background-color:black;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </section>
            

			<?php  include('footer.php');  ?>





			<?php include('copyright2.php'); ?>



		</div>

		<!-- eof #box_wrapper -->

	</div>

	<!-- eof #canvas -->





	<script data-cfasync="false" src="../../cdn-cgi/scripts/f2bf09f8/cloudflare-static/email-decode.min.js"></script><script src="js/compressed.js"></script>

	<script src="js/main.js"></script>

	<script src="js/switcher.js"></script>



</body>


  <script>
                    /* <![CDATA[ */
                    (function(d, s, a, i, j, r, l, m, t) {
                        try {
                            l = d.getElementsByTagName('a');
                            t = d.createElement('textarea');
                            for (i = 0; l.length - i; i++) {
                                try {
                                    a = l[i].href;
                                    s = a.indexOf('/cdn-cgi/l/email-protection');
                                    m = a.length;
                                    if (a && s > -1 && m > 28) {
                                        j = 28 + s;
                                        s = '';
                                        if (j < m) {
                                            r = '0x' + a.substr(j, 2) | 0;
                                            for (j += 2; j < m && a.charAt(j) != 'X'; j += 2) s += '%' + ('0' + ('0x' + a.substr(j, 2) ^ r).toString(16)).slice(-2);
                                            j++;
                                            s = decodeURIComponent(s) + a.substr(j, m - j)
                                        }
                                        t.innerHTML = s.replace(/</g, '&lt;').replace(/\>/g, '&gt;');
                                        l[i].href = 'mailto:' + t.value
                                    }
                                } catch (e) {}
                            }
                        } catch (e) {}
                    })(document); /* ]]> */
                </script>
               

<!-- Mirrored from webdesign-finder.com/html/models/gallery-regular-4-cols.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Jul 2018 07:45:36 GMT -->

</html>


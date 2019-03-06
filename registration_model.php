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

        <title>Model Registration</title>

        <meta charset="utf-8">

        <!--[if IE]>        <meta http-equiv="X-UA-Compatible" content="IE=edge">    <![endif]-->

        <meta name="description" content="">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/bootstrap.min.css">

        <link rel="stylesheet" href="css/main.css" id="color-switcher-link">

        <link rel="stylesheet" href="css/animations.css">

        <link rel="stylesheet" href="css/fonts.css">

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>

        <!--[if lt IE 9]>        <script src="js/vendor/html5shiv.min.js"></script>        <script src="js/vendor/respond.min.js"></script>    <![endif]-->

        <style type="text/css">

            input[type="checkbox"] {

                visibility: visible;

            }

           .ds{
          color:white;
            }


            .btn-success,.btn-success:hover{
             background-color:white;
             color:black;
             }


            .wizard {

                margin: 20px auto;

                background: none;

            }

            .wizard .nav-tabs {

                position: relative;

                margin: 40px auto;

                margin-bottom: 0;

                border-bottom-color: #e0e0e0;

            }

            .wizard > div.wizard-inner {

                position: relative;

            }

            .connecting-line {

                height: 2px;

                background: #e0e0e0;

                position: absolute;

                width: 80%;

                margin: 0 auto;

                left: 0;

                right: 0;

                top: 50%;

                z-index: 1;

            }

            .wizard .nav-tabs > li.active > a,

            .wizard .nav-tabs > li.active > a:hover,

            .wizard .nav-tabs > li.active > a:focus {

                color: #555555;

                cursor: default;

                border: 0;

                border-bottom-color: transparent;

            }

            span.round-tab {

                width: 70px;

                height: 70px;

                line-height: 70px;

                display: inline-block;

                border-radius: 100px;

                background: #fff;

                border: 2px solid #e0e0e0;

                z-index: 2;

                position: absolute;

                left: 0;

                text-align: center;

                font-size: 25px;

            }

            span.round-tab i {

                color: #555555;

            }

            .wizard li.active span.round-tab {

                background: #fff;

                border: 2px solid #5bc0de;

            }

            .wizard li.active span.round-tab i {

                color: #5bc0de;

            }

            span.round-tab:hover {

                color: #333;

                border: 2px solid #333;

            }

            .wizard .nav-tabs > li {

                width: 25%;

            }

            .wizard li:after {

                content: " ";

                position: absolute;

                left: 46%;

                opacity: 0;

                margin: 0 auto;

                bottom: 0px;

                border: 5px solid transparent;

                border-bottom-color: #5bc0de;

                transition: 0.1s ease-in-out;

            }

            .wizard li.active:after {

                content: " ";

                position: absolute;

                left: 46%;

                opacity: 1;

                margin: 0 auto;

                bottom: 0px;

                border: 10px solid transparent;

                border-bottom-color: #5bc0de;

            }

            .wizard .nav-tabs > li a {

                width: 70px;

                height: 70px;

                margin: 20px auto;

                border-radius: 100%;

                padding: 0;

            }

            .wizard .nav-tabs > li a:hover {

                background: transparent;

            }

            .wizard .tab-pane {

                position: relative;

                padding-top: 50px;

            }

            .wizard h3 {

                margin-top: 0;

            }

            .step1 .row {

                margin-bottom: 10px;

            }

            .step_21 {

                border: 1px solid #eee;

                border-radius: 5px;

                padding: 10px;

            }

            .step33 {

                border: 1px solid #ccc;

                border-radius: 5px;

                padding-left: 10px;

                margin-bottom: 10px;

            }

            .dropselectsec {

                width: 68%;

                padding: 6px 5px;

                border: 1px solid #ccc;

                border-radius: 3px;

                color: #333;

                margin-left: 10px;

                outline: none;

                font-weight: normal;

            }

            .dropselectsec1 {

                width: 74%;

                padding: 6px 5px;

                border: 1px solid #ccc;

                border-radius: 3px;

                color: #333;

                margin-left: 10px;

                outline: none;

                font-weight: normal;

            }

            .mar_ned {

                margin-bottom: 10px;

            }

            .wdth {

                width: 25%;

            }

            .birthdrop {

                padding: 6px 5px;

                border: 1px solid #ccc;

                border-radius: 3px;

                color: #333;

                margin-left: 10px;

                width: 16%;

                outline: 0;

                font-weight: normal;

            }

            /* according menu */

            

            #accordion-container {

                font-size: 13px

            }

            .accordion-header {

                font-size: 13px;

                background: #ebebeb;

                margin: 5px 0 0;

                padding: 7px 20px;

                cursor: pointer;

                color: #fff;

                font-weight: 400;

                -moz-border-radius: 5px;

                -webkit-border-radius: 5px;

                border-radius: 5px

            }

            .unselect_img {

                width: 18px;

                -webkit-user-select: none;

                -moz-user-select: none;

                -ms-user-select: none;

                user-select: none;

            }

            .active-header {

                -moz-border-radius: 5px 5px 0 0;

                -webkit-border-radius: 5px 5px 0 0;

                border-radius: 5px 5px 0 0;

                background: #F53B27;

            }

            .active-header:after {

                content: "\f068";

                font-family: 'FontAwesome';

                float: right;

                margin: 5px;

                font-weight: 400

            }

            .inactive-header {

                background: #333;

            }

            .inactive-header:after {

                content: "\f067";

                font-family: 'FontAwesome';

                float: right;

                margin: 4px 5px;

                font-weight: 400

            }

            .accordion-content {

                display: none;

                padding: 20px;

                background: #fff;

                border: 1px solid #ccc;

                border-top: 0;

                -moz-border-radius: 0 0 5px 5px;

                -webkit-border-radius: 0 0 5px 5px;

                border-radius: 0 0 5px 5px

            }

            .accordion-content a {

                text-decoration: none;

                color: #333;

            }

            .accordion-content td {

                border-bottom: 1px solid #dcdcdc;

            }

            @media( max-width: 585px) {

                .wizard {

                    width: 90%;

                    height: auto !important;

                }

                span.round-tab {

                    font-size: 16px;

                    width: 50px;

                    height: 50px;

                    line-height: 50px;

                }

                .wizard .nav-tabs > li a {

                    width: 50px;

                    height: 50px;

                    line-height: 50px;

                }

                .wizard li.active:after {

                    content: " ";

                    position: absolute;

                    left: 35%;

                }

            }

        </style>

    </head>



    <body>

        <!--[if lt IE 9]>        <div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>    <![endif]-->


        <!-- wrappers for visual page editor and boxed version of template -->

        <div id="canvas">

            <div id="box_wrapper">

                <!-- template sections -->

                <?php
                include( 'header.php');
                include( 'connect.php'); 
                ?>

                <section class="ds parallax calltoaction section_padding_100" style="background-image: url('images/parallax/call_to_action.jpg')">   
                  <div class="container" style="padding-top:0px">                   
     <div class="row">             
              <div class="col-sm-12 text-center">                       
                             
<div class="row">                                 
<div class="col-md-12 text-center">                          
           <div class="container">

                        <div class="row">

                            <div class="col-md-12 text-center">

                                <h2 class="wow fadeInLeftBig" data-wow-delay="0.3s" style="font-weight:400;">REGISTRATION</h2>

                                <div class="divider"><i class="fa fa-globe fa-2x" aria-hidden="true"></i> </div>

                            </div>

                        </div>


                        <div class="container">

                            <div class="row">

                                <section>

                                           
                                    <div class="wizard">


                                              <div class="progress">
                                <div class="progress-bar progress-bar-success" role="progressbar" style="width:0%;">
                                                                        <span id="progressWidth">0%</span>
                                </div>
                            </div>
                                           

                                        <div class="wizard-inner" style="background-color:#e0006c;">

                                 <div class="connecting-line"></div>
                                            <ul class="nav nav-tabs" role="tablist">

                                                <li role="presentation" class="active">

                                                    <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1"> <span class="round-tab">                        <i class="fa fa-folder-open" aria-hidden="true"></i>                      </span> </a>

                                                </li>

                                                <li role="presentation" class="disabled">

                                                    <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2"> <span class="round-tab">                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>                      </span> </a>

                                                </li>

                                                <li role="presentation" class="disabled">

                                                    <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3"> <span class="round-tab">                       <i class="fa fa-picture-o" aria-hidden="true"></i>                      </span> </a>

                                                </li>

                                                <li role="presentation" class="disabled">

                                                    <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="complete"> <span class="round-tab">                     <i class="fa fa-check" aria-hidden="true"></i>                      </span> </a>

                                                </li>

                                            </ul>

                                        </div>

                                        <div class="container">

                                            <form role="form" method="POST" action="model_insert.php" enctype="multipart/form-data">

                                                <input type="hidden" name="user_type" value="model">

                                                <input type="hidden" name="user_status" value="inactive">

                                                <div class="tab-content" style="background-color:rgba(0, 0, 0, 0.5);padding-top:0px;border:0px;padding-left:4%;
padding-right:8%;">

                                                    <div class="tab-pane active" role="tabpanel" id="step1">

                                                        <div class="step1">

                                                            <div class="row">

                                                                <script>

                                                                    function get_sub_cat(user_category_id) {
                                                                        //alert(user_category_id); 
                                                                        var http = new XMLHttpRequest();   
                                                                        http.open("get","get_sub_cat.php?user_category_id="+user_category_id,true);        
                                                                        http.send();            
                                                                        http.onreadystatechange=function()       
                                                                        {        
                                                                            if(http.readyState==4)            
                                                                            {               
                                                                                   
                                                                                document.getElementById('sub').innerHTML=http.responseText;         
                                                                                }          
                                                                                }         
                                                                                }

                                                                </script>

                                                                <div class="col-md-6">

                                                                    * <label for="exampleInputEmail1">CATEGORY</label>

                                                                    <select class="form-control required" name="user_category" required id="user_category" onchange="get_sub_cat(this.value)">

                                                                        <?php
                                                                        $s=mysqli_query($connect, "select * from `user_category`");
                                                                        while($row=mysqli_fetch_assoc($s)) {
                                                                        ?>

                                                                        <option style="color:#a0a0a0;" value="<?php echo $row['user_category_id']; ?>">

                                                                            <?php echo $row[ 'user_category_name'];?>

                                                                        </option>

                                                                        <?php } ?> </select>

                                                                </div>

                                                                <div class="col-md-6">

                                                                    * <label for="exampleInputEmail1">SUB CATEGORY</label>

                                                                    <select class="form-control required" name="user_sub_category" id="sub" required>

                                                                        <option style="color:#a0a0a0;">Select Category first</option>

                                                                    </select>

                                                                </div>

                                                                <div class="col-md-6">

                                                                    <label for="exampleInputEmail1">FULL NAME</label>

                                                                    <input type="text" class="form-control required" name="user_name" placeholder="Enter Your Full Name" required> </div>

                                                                <script>

                                                                    function myFunction() {

                                                                        var inpObj = document.getElementById("id1");

                                                                        if (inpObj.checkValidity() == false) {

                                                                            document.getElementById("dem").innerHTML = inpObj.validationMessage;

                                                                        } else {

                                                                            document.getElementById("dem").innerHTML = "Input OK";

                                                                        }

                                                                    }

                                                                </script>

                                                                <div class="col-md-6">

                                                                    * <label for="exampleInputEmail1">EMAIL <span id="dem"></span>

                                                                    </label>

                                                                    <input type="email" class="form-control required" name="user_email" placeholder="example@123.com" id="id1" patten="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" onkeyup="myFunction()" required> </div>

                                                            </div>

                                                            <script>

                                                                var check = function() {

                                                                    if (document.getElementById('password').value == document.getElementById('confirm_password').value) {

                                                                        document.getElementById('message').style.color = 'green';

                                                                        document.getElementById('message').innerHTML = 'Match';

                                                                    } else {

                                                                        document.getElementById('message').style.color = 'red';

                                                                        document.getElementById('message').innerHTML = 'Oops... Not a Match';

                                                                    }

                                                                }

                                                            </script>

                                                            <div class="row">

                                                                <div class="col-md-6">

                                                                   * <label for="">PASSWORD</label>

                                                                    <input type="password" class="form-control required" id="password" name="user_password" id="password" onkeyup='check();' placeholder="Enter your password" required> </div>

                                                                <div class="col-md-6">

                                                                   * <label for="">CONFIRM PASSWORD <span id='message'></span> </label>

                                                                    <input type="password" class="form-control required" id="confirm_password" onkeyup='check();' name="user_password" placeholder="Reenter Your Password" required> </div>

                                                            </div>

                                                            <script>

                                                                function mobile() {

                                                                    var inpObj = document.getElementById("user_number");

                                                                    if (inpObj.checkValidity() == false) {

                                                                        document.getElementById("mobile").innerHTML = inpObj.validationMessage;

                                                                    } else {

                                                                        document.getElementById("mobile").innerHTML = "Input OK";

                                                                    }

                                                                }

                                                            </script>

                                                            <div class="row">

                                                                <div class="col-md-6">

                                                                   * <label for="exampleInputEmail1">Mobile Number<span id="mobile"></span>

                                                                    </label>

                                                                    <input type="text" class="form-control required" id="user_number" name="user_number" pattern="[0-9]{10}" onkeyup="mobile()" placeholder="Enter Your Mobile Number" required> </div>

                                                                <script>

                                                                    function wmobile() {

                                                                        var inpObj = document.getElementById("whtsapp_number");

                                                                        if (inpObj.checkValidity() == false) {

                                                                            document.getElementById("wmobile").innerHTML = inpObj.validationMessage;

                                                                        } else {

                                                                            document.getElementById("wmobile").innerHTML = "Input OK";

                                                                        }

                                                                    }

                                                                </script>

                                                                <div class="col-md-6">

                                                                   * <label for="exampleInputEmail1">Whatsapp Number<span id="wmobile"></span>

                                                                    </label>

                                                                    <input type="text" class="form-control required" name="whtsapp_number" id="whtsapp_number" pattern="[0-9]{10}" onkeyup="wmobile()" placeholder="Enter Your Whtsapp Number" required> </div>

                                                            </div>

                                                            <div class="row">

                                                                <div class="col-md-6">

                                                                    * <label for="exampleInputEmail1">Date Of Birth</label>

                                                                    <input type="text" class="form-control required" name="user_dob" placeholder="DD/MM/YYYY" onkeyup="        var v = this.value;        if (v.match(/^\d{2}$/) !== null) {            this.value = v + '/';        } else if (v.match(/^\d{2}\/\d{2}$/) !== null) {            this.value = v + '/';        }" maxlength="10" required> </div>

                                                                <div class="col-md-6">

                                                                    * <label for="exampleInputEmail1">Gender</label>

                                                                    <select class="form-control required" name="model_gender" required>

                                                                        <option style="color:#a0a0a0;" value="male">Male</option>

                                                                        <option style="color:#a0a0a0;" value="female">Female</option>

                                                                        <option style="color:#a0a0a0;" value="other">Other</option>

                                                                    </select>

                                                                </div>

                                                            </div>

                                                            <div class="row">

                                                                <div class="col-md-6">

                                                                    * <label for="exampleInputEmail1">Marital Status</label>

                                                                    <select class="form-control required" name="maritial_status" required>

                                                                        <option style="color:#a0a0a0;" value="single">Single</option>

                                                                        <option style="color:#a0a0a0;" value="married">Married</option>

                                                                        <option style="color:#a0a0a0;" value="other">Other</option>

                                                                    </select>

                                                                </div>

                                                                <script>

                                                                    function age() {

                                                                        var inpObj = document.getElementById("model_age");

                                                                        if (inpObj.checkValidity() == false) {

                                                                            document.getElementById("age").innerHTML = inpObj.validationMessage;

                                                                        } else {

                                                                            document.getElementById("age").innerHTML = "Input OK";

                                                                        }

                                                                    }

                                                                </script>

                                                                <div class="col-md-6">

                                                                    *<label for="exampleInputEmail1">Age <span id="age"></span>

                                                                    </label>

                                                                    <input type="text" class="form-control required" name="model_age" id="model_age" pattern=".{2,}" onkeyup="age()" placeholder="Enter Your age" required> </div>

                                                            </div>

                                                            <div class="row">

                                                                <div class="col-md-6">

                                                                    * <label for="exampleInputEmail1">Country</label>

                                                                    <select id="country" name ="model_country" required class="form-control">
                                                                    <option value="india">india</option></select>

                                                                </div>

                                                                <div class="col-md-6">

                                                                    * <label for="exampleInputEmail1">State</label>

                                                                    <select name ="model_state" id ="state" required class="form-control">
<option value="india">india</option></select>
                                                                </div>

                                                            </div>

                                                            <script>

                                                                function bi() {

                                                                    var inpObj = document.getElementById("model_biography");

                                                                    if (inpObj.checkValidity() == false) {

                                                                        document.getElementById("bb").innerHTML = inpObj.validationMessage;

                                                                    } else {

                                                                        document.getElementById("bb").innerHTML = "Input OK";

                                                                    }

                                                                }

                                                            </script>

                                                            <div class="row">

                                                                <div class="col-md-6">

                                                                   * <label for="exampleInputEmail1">BIOGRAPHY <span id="bb"></span>

                                                                    </label>

                                             <textarea class="form-control required" rows="4" name="model_biography" id="model_biography" onkeyup="bi()"  required></textarea>

                                                                </div>

                                                                <div class="col-md-6">

                                                                    * <label for="exampleInputEmail1">ADDRESS</label>

                                                                    <textarea class="form-control required" rows="4" name="user_address" required></textarea>

                                                                </div>

                                                            </div>

                                                        </div>

                                                        <ul class="list-inline">

                                                            <p class="text-danger">* Please fill all the information correctly.</p>

                                                            <button type="button" class="btn btn-success next-step" name="save_personal" id="firstSave">Save and continue</button>

                                                        </ul>

                                                    </div>

                                                    <div class="tab-pane" role="tabpanel" id="step2">

                                                        <div class="step2">

                                                            <div class="row">

                                                                <div class="col-md-2">

                                                                    <div class="form-group">

                                                                        <script>

                                                                            function height() {

                                                                                var inpObj = document.getElementById("model_height");

                                                                                if (inpObj.checkValidity() == false) {

                                                                                    document.getElementById("height").innerHTML = inpObj.validationMessage;

                                                                                } else {

                                                                                    document.getElementById("height").innerHTML = "Input OK";

                                                                                }

                                                                            }

                                                                        </script>

                                                                       * <label class="control-label" for="height">HEIGHT <span id="height"></span>

                                                                        </label>

                                                                        <input type="text" class="form-control required" id="model_height" onkeyup="height()" patten="[0-9]" maxlength="3" name="model_height" placeholder="Height in feet" required> </div>

                                                                </div>

                                                                <script>

                                                                    function heels() {

                                                                        var inpObj = document.getElementById("model_heels");

                                                                        if (inpObj.checkValidity() == false) {

                                                                            document.getElementById("heelsm").innerHTML = inpObj.validationMessage;

                                                                        } else {

                                                                            document.getElementById("heelsm").innerHTML = "Input OK";

                                                                        }

                                                                    }

                                                                </script>

                                                                <div class="col-md-2">

                                                                    <div class="form-group">

                                                                       * <label class="control-label">HEELS</label>

                                                                        <input type="text" class="form-control required" id="model_heels" onkeyup="heels()" placeholder="Height without heels" name="model_heels" required> </div>

                                                                </div>

                                                                <div class="col-md-2">

                                                                    <div class="form-group">

                                                                       * <label class="control-label">WEIGHT</label>

                                                                        <input type="text" class="form-control required" name="model_weight" maxlength="3" required placeholder="Weight in kg"> </div>

                                                                </div>

                                                                <div class="col-md-2">

                                                                    <div class="form-group">

                                                                        * <label class="control-label">BUST/CHEST</label>

                                                                        <input type="text" class="form-control required" name="model_bust" maxlength="2" required placeholder="Enter bust/chest"> </div>

                                                                </div>

                                                                <div class="col-md-2">

                                                                    <div class="form-group">

                                                                       * <label class="control-label">WAIST</label>

                                                                        <input type="text" class="form-control required" name="model_waist" maxlength="2" required placeholder="Enter waist"> </div>

                                                                </div>

                                                                <div class="col-md-2">

                                                                    <div class="form-group">

                                                                        *<label class="control-label">HIPS/BICEPS</label>

                                                                        <input type="text" class="form-control required" name="model_hips" maxlength="2" required placeholder="Enter hips/biceps"> </div>

                                                                </div>

                                                            </div>

                                                            <div class="row">

                                                                <div class="col-md-2">

                                                                    <div class="form-group">

                                                                        <script>

                                                                            function body() {

                                                                                var inpObj = document.getElementById("model_body_type");

                                                                                if (inpObj.checkValidity() == false) {

                                                                                    document.getElementById("bodym").innerHTML = inpObj.validationMessage;

                                                                                } else {

                                                                                    document.getElementById("bodym").innerHTML = "Input OK";

                                                                                }

                                                                            }

                                                                        </script>

                                                                        * <label for="exampleSelect1">BODY TYPE <span id="bodym"></span>

                                                                        </label>

                                                                        <select class="form-control required" name="model_body_type" onchange="body()" id="model_body_type" pattern="[A-Za-z]" required>


                                                                            <option style="color:#a0a0a0;" value="triangle">Triangle</option>

                                                                            <option style="color:#a0a0a0;" value="inverted_triangle">Inverted Triangle</option>

                                                                            <option style="color:#a0a0a0;" value="oval">Oval</option>

                                                                            <option style="color:#a0a0a0;" value="rectangular">Rectangular</option>

                                                                            <option style="color:#a0a0a0;" value="trapezoid">Trapezoid</option>

                                                                            <option style="color:#a0a0a0;" value="straight">Straight</option>

                                                                            <option style="color:#a0a0a0;" value="pear">Pear</option>

                                                                            <option style="color:#a0a0a0;" value="apple">Apple</option>

                                                                            <option style="color:#a0a0a0;" value="spoon">Spoon</option>

                                                                            <option style="color:#a0a0a0;" value="hourglass">Hourglass</option>

                                                                            <option style="color:#a0a0a0;" value="top_hourglass">Top Hourglass</option>

                                                                            <option style="color:#a0a0a0;" value="diamond">Diamond</option>

                                                                            <option style="color:#a0a0a0;" value="petite">Petite</option>

                                                                            <option style="color:#a0a0a0;" value="athletic">Athletic</option>

                                                                            <option style="color:#a0a0a0;" value="lollipop">Lollipop</option>

                                                                            <option style="color:#a0a0a0;" value="cornet">Cornet</option>

                                                                        </select>

                                                                    </div>

                                                                </div>

                                                                <div class="col-md-2">

                                                                    <div class="form-group">

                                                                       * <label for="exampleSelect1">HAIR LENGTH</label>

                                                                        <select class="form-control required" name="model_hair_length" required>

                                                                            <option style="color:#a0a0a0;" value="bald">Bald</option>

                                                                            <option style="color:#a0a0a0;" value="short">Short</option>

                                                                            <option style="color:#a0a0a0;" value="medium">Medium</option>

                                                                            <option style="color:#a0a0a0;" value="long">Long</option>

                                                                            <option style="color:#a0a0a0;" value="shoulder_length">Shoulder Length</option>

                                                                        </select>

                                                                    </div>

                                                                </div>

                                                                <div class="col-md-2">

                                                                    <div class="form-group">

                                                                       * <label for="exampleSelect1">HAIR COLOR</label>

                                                                        <select class="form-control required" name="model_hair_color" required>

                                                                            <option style="color:#a0a0a0;" value="auburn">Auburn</option>

                                                                            <option style="color:#a0a0a0;" value="black">Black</option>

                                                                            <option style="color:#a0a0a0;" value="blonde">Blonde</option>

                                                                            <option style="color:#a0a0a0;" value="brown">Brown</option>

                                                                            <option style="color:#a0a0a0;" value="dreadlocks">Dreadlocks</option>

                                                                            <option style="color:#a0a0a0;" value="grey">Grey</option>

                                                                            <option style="color:#a0a0a0;" value="red">Red</option>

                                                                        </select>

                                                                    </div>

                                                                </div>

                                                                <div class="col-md-2">

                                                                    <div class="form-group">

                                                                        * <label for="exampleSelect1">SKIN COLOR</label>

                                                                        <select class="form-control required" name="moded_skin_color" required>

                                                                            <option style="color:#a0a0a0;" value="fair">Fair</option>

                                                                            <option style="color:#a0a0a0;" value="wheatish">Wheatish</option>

                                                                            <option style="color:#a0a0a0;" value="brown">Brown</option>

                                                                            <option style="color:#a0a0a0;" value="olive">Olive</option>

                                                                            <option style="color:#a0a0a0;" value="tanned">Tanned</option>

                                                                            <option style="color:#a0a0a0;" value="white">White</option>

                                                                            <option style="color:#a0a0a0;" value="other">Other</option>

                                                                        </select>

                                                                    </div>

                                                                </div>

                                                                <div class="col-md-2">

                                                                    <div class="form-group">

                                                                       * <label for="exampleSelect1">EYE COLOR</label>

                                                                        <select class="form-control required" name="model_eye_color" required>

                                                                            <option style="color:#a0a0a0;"  value="black">Black</option>

                                                                            <option style="color:#a0a0a0;" value="blue">Blue</option>

                                                                            <option style="color:#a0a0a0;" value="brown">Brown</option>

                                                                            <option style="color:#a0a0a0;" value="green">Green</option>

                                                                            <option style="color:#a0a0a0;" value="grey">Grey</option>

                                                                            <option style="color:#a0a0a0;" value="hazel">Hazel</option>

                                                                            <option style="color:#a0a0a0;" value="other">Other</option>

                                                                        </select>

                                                                    </div>

                                                                </div>

                                                                <div class="col-md-2">

                                                                    <div class="form-group">

                                                                       * <label for="exampleSelect1">SKIN TONE</label>

                                                                        <select class="form-control required" name="model_skin_tone" required>

                                                                            <option style="color:#a0a0a0;" value="cool">Cool: Hints of bluish, pink or a ruddy complexion</option>

                                                                            <option style="color:#a0a0a0;" value="warm">Warm: Skin skews yellow, sallow, peachy or golden</option>

                                                                            <option style="color:#a0a0a0;" value="neutral">Neutral: Has no obvious overtones, skinâ€™s natural color is evident</option>

                                                                        </select>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="row">

                                                                <div class="col-md-2">

                                                                    <div class="form-group">

                                                                        * <label for="exampleSelect1">CUP SIZE</label>

                                                                        <select class="form-control required" name="model_cup_size" required>

                                                                            <option style="color:#a0a0a0;">Not Applicable</option>

                                                                            <option style="color:#a0a0a0;">A</option>

                                                                            <option style="color:#a0a0a0;">B</option>

                                                                            <option style="color:#a0a0a0;">C</option>

                                                                            <option style="color:#a0a0a0;">D</option>

                                                                            <option style="color:#a0a0a0;">DD</option>

                                                                            <option style="color:#a0a0a0;">DDD</option>

                                                                            <option style="color:#a0a0a0;">E</option>

                                                                            <option style="color:#a0a0a0;">EE</option>

                                                                            <option style="color:#a0a0a0;">EEE</option>

                                                                            <option style="color:#a0a0a0;">F</option>

                                                                            <option style="color:#a0a0a0;">FF</option>

                                                                            <option style="color:#a0a0a0;">FFF</option>

                                                                            <option style="color:#a0a0a0;">G</option>

                                                                            <option style="color:#a0a0a0;">GG</option>

                                                                            <option style="color:#a0a0a0;">GGG</option>

                                                                        </select>

                                                                    </div>

                                                                </div>

                                                                <div class="col-md-2">

                                                                    <div class="form-group">

                                                                       * <label for="exampleSelect1">TATTOOS</label>

                                                                        <select class="form-control required" name="model_tattos" required>

                                                                            <option style="color:#a0a0a0;" value="none">none</option>

                                                                            <option style="color:#a0a0a0;" value="some">some</option>

                                                                            <option style="color:#a0a0a0;" value="many">many</option>

                                                                        </select>

                                                                    </div>

                                                                </div>

                                                                <div class="col-md-2">

                                                                    <div class="form-group">

                                                                       * <label for="exampleSelect1">PEIRCING</label>

                                                                        <select class="form-control required" name="model_peircing" required>

                                                                            <option style="color:#a0a0a0;" value="none">none</option>

                                                                            <option style="color:#a0a0a0;" value="some">some</option>

                                                                            <option style="color:#a0a0a0;" value="many">many</option>

                                                                        </select>

                                                                    </div>

                                                                </div>

                                                                <div class="col-md-2">

                                                                    <div class="form-group">

                                                                       * <label for="exampleSelect1">COMPENSATION</label>

                                                                        <select class="form-control required" name="model_compensation" required>

                                                                            <option style="color:#a0a0a0;" value="any">Any</option>

                                                                            <option style="color:#a0a0a0;" value="depends_on_assignments">Depends on Assignments</option>

                                                                            <option style="color:#a0a0a0;" value="paid_assignments">Paid Assignments only</option>

                                                                            <option style="color:#a0a0a0;" value="tfp_tfcd">TFP/TFCD</option>

                                                                        </select>

                                                                    </div>

                                                                </div>

                                                                <div class="col-md-2">

                                                                    <div class="form-group">

                                                                       * <label for="exampleSelect1">NUDE SHOOTS</label>

                                                                        <select class="form-control required" name="model_nude_shoots" required>

                                                                            <option style="color:#a0a0a0;" value="yes">yes</option>

                                                                            <option style="color:#a0a0a0;" value="no">No</option>

                                                                        </select>

                                                                    </div>

                                                                </div>

                                                                <div class="col-md-2">

                                                                    <div class="form-group">

                                                                       * <label for="exampleSelect1">PORTFOLIO</label>

                                                                        <select class="form-control required" name="model_portfolio" required>

                                                                            <option style="color:#a0a0a0;" value="yes">yes</option>

                                                                            <option style="color:#a0a0a0;" value="no">No</option>

                                                                        </select>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="row">

                                                                <div class="col-md-6">

                                                                    <div class="form-group">

                                                                        <label for="exampleSelect1">PACKAGES</label>

                                                                        <select class="form-control" name="model_package">

                                                                            <option style="color:#a0a0a0;" value="">None</option>

                                                                            <option style="color:#a0a0a0;" value="starter">starter</option>

                                                                            <option style="color:#a0a0a0;" value="advance">Advance</option>

                                                                            <option style="color:#a0a0a0;" value="delux">Delux</option>

                                                                            <option style="color:#a0a0a0;" value="premium">Premium</option>

                                                                        </select>

                                                                    </div>

                                                                </div>

                                                                <div class="col-md-6">

                                                                    <a href="appointment.php" target="_blank" class="btn btn-primary" href="index.php" style="margin-top: 20px;color:white;">Click Here For package Details </a>

                                                                </div>

                                                            </div>

                                                        </div>

                                                        <ul class="list-inline">

                                                            <p class="text-danger">* Please fill all the information correctly.</p>

                                                            <button type="button" class="btn btn-success next-step" id="secondSave">Save and continue</button>

                                                        </ul>

                                                    </div>

                                                    <div class="tab-pane" role="tabpanel" id="step3">

                                                        <div class="step3">

                                                            <hr>

                                                             <div class="row">
                                                        <div class="col-md-4">
                                                            * <button type="button" class="btn" id="modeling_button" style="background-color:#e0006c;color:white;">MODELING</button>
                                                        </div>
                                                        <div class="col-md-4">
                                                            * <button type="button" class="btn" id="actor_button" style="background-color:#e0006c;color:white;">ACTOR/ACTRESS</button>
                                                        </div>
                                                        <div class="col-md-4">
                                                            * <button type="button" class="btn" id="artist_button" style="background-color:#e0006c;color:white;">ARTIST/PERFOMERS</button>
                                                        </div>
                                                        </div>

                                                            <div id="demo" style="overflow:auto;">

                                                                <table class="table" border="1">

                                                                    <tr style="border:1px solid;">

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="modeling[]" value="none" checked id="none1"> None</td>

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="modeling[]" value="adult" > Adult</td>

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="modeling[]" value="art_shoot"> Art Shoot</td>

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="modeling[]" value="bikini"> Bikini</td>

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="modeling[]" value="body_paint"> Body Paint</td>

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="modeling[]" value="bold"> Bold</td>

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="modeling[]" value="calender"> Calendar</td>

                                                                    </tr>

                                                                    <tr style="border:1px solid;">

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="modeling[]" value="cosplay"> Cosplay</td>

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="modeling[]" value="editorial"> Editorial</td>

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="modeling[]" value="erotic"> Erotic</td>

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="modeling[]" value="exotic"> Exotic</td>

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="modeling[]" value="fashion"> Fashion</td>

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="modeling[]" value="fetish"> Fetish</td>

                                                                    </tr>

                                                                    <tr style="border:1px solid;">

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="modeling[]" value="fit_modeling"> Fit Modeling</td>

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="modeling[]" value="fitness"> Fitness</td>

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="modeling[]" value="fetish"> Fetish</td>

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="modeling[]" value="glamour"> Glamour</td>

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="modeling[]" value="implied"> Implied Nude</td>

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="modeling[]" value="indian"> Indian</td>

                                                                    </tr>

                                                                    <tr style="border:1px solid;">

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="modeling[]" value="jewellery">Jewellery</td>

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="modeling[]" value="lifestyle"> Lifestyle</td>

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="modeling[]" value="lingerie"> Lingerie</td>

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="modeling[]" value="magazine"> Magazine</td>

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="modeling[]" value="nude"> Nude</td>

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="modeling[]" value="parts_modeling"> Parts Modeling</td>

                                                                    </tr>

                                                                    <tr style="border:1px solid;">

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="modeling[]" value="pinup"> Pinup</td>

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="modeling[]" value="promotional"> Promotional </td>

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="modeling[]" value="ramp_model"> Ramp Model</td>

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="modeling[]" value="semi_model"> Semi Nude</td>

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="modeling[]" value="underwater"> Underwater</td>

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="modeling[]" value="western"> Western</td>

                                                                    </tr>

                                                                </table>

                                                            </div>

                                                            <hr>

                                                            <div id="demo2" style="overflow:auto;display:none;">

                                                                <table class="table" border="1">

                                                                    <tr style="border:1px solid;">

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="actor_actress[]" value="none" checked id="none2"> None</td>

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="actor_actress[]" value="bikini"> Bikini</td>

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="actor_actress[]" value="bold_scenes"> Bold Scenes</td>

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="actor_actress[]" value="extras"> Extras</td>

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="actor_actress[]" value="intemate_scenes"> Intimate Scenes</td>

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="actor_actress[]" value="junior_artist"> Junior Artist</td>

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="actor_actress[]" value="kissing/lip_locks"> Kissing/Lip Locks</td>

                                                                    </tr>

                                                                    <tr style="border:1px solid;">

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="actor_actress[]" value="main_lead"> Main Lead</td>

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="actor_actress[]" value="open_with_nudity"> Open with Nudity</td>

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="actor_actress[]" value="other_leads"> Other Leads</td>

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="actor_actress[]" value="stunt"> Stunt</td>

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="actor_actress[]" value="supporting"> Supporting</td>

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="actor_actress[]" value="glamour_roles"> Glamour Roles</td>

                                                                    </tr>

                                                                    <tr style="border:1px solid;">

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="actor_actress[]" value="short_films"> Short Films</td>

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="actor_actress[]" value="documentary"> Documentary</td>

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="actor_actress[]" value="yoytube"> YouTube</td>

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="actor_actress[]" value="web_series"> Web Series</td>

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="actor_actress[]" value="feature_film"> Feature Film</td>

                                                                        <td style="border:1px solid;"> 

                                                                            <input type="checkbox" name="actor_actress[]" value="regonal_films"> Regonal Films</td>

                                                                    </tr>

                                                                </table>

                                                            </div>

                                                        </div>

                                                        <hr>

                                                        <div id="demo3" style="overflow:auto;display:none;">

                                                            <table class="table" border="1">

                                                                <tr style="border:1px solid;">

                                                                    <td style="border:1px solid;"> 

                                                                        <input type="checkbox" name="artist_perfomer[]" value="none" checked id="none3">None</td>

                                                                    <td style="border:1px solid;"> 

                                                                        <input type="checkbox" name="artist_perfomer[]" value="dancer"> Dancer</td>

                                                                    <td style="border:1px solid;"> 

                                                                        <input type="checkbox" name="artist_perfomer[]" value="emcee"> Emcee</td>

                                                                    <td style="border:1px solid;"> 

                                                                        <input type="checkbox" name="artist_perfomer[]" value="host/hostess"> Host / Hostess</td>

                                                                    <td style="border:1px solid;"> 

                                                                        <input type="checkbox" name="artist_perfomer[]" value="item_dancer"> Item Dancer</td>

                                                                    <td style="border:1px solid;"> 

                                                                        <input type="checkbox" name="artist_perfomer[]" value="singer"> Singer</td>

                                                                    <td style="border:1px solid;"> 

                                                                        <input type="checkbox" name="artist_perfomer[]" value="stage_artist"> Stage Artist</td>

                                                                </tr>

                                                            </table>

                                                        </div>

                                                        <ul class="list-inline">

                                                            <p class="text-danger">* Please fill all the information correctly.</p>

                                                            <button type="button" class="btn btn-success next-step" id="thirdSave">Save and continue</button>

                                                        </ul>

                                                    </div>

                                                    <div class="tab-pane" role="tabpanel" id="complete">

                                                        <div class="complete">

                                                            <div class="row" id="my-form">

                                                                <div class="col-md-6">

                                                                    <div class="form-group">

                                                                        * <label for="exampleInputEmail1">Completed Projects</label>

                                                                        <textarea class="form-control required" name="completed_projects" rows="3" id="comment" required></textarea>

                                                                    </div>

                                                                </div>

                                                                <div class="col-md-6">

                                                                    <div class="form-group">

                                                                       * <label for="exampleInputEmail1">Current Projects</label>

                                                                        <textarea class="form-control required" name="current_projects" rows="3" id="comment" required></textarea>

                                                                    </div>

                                                                </div>

                                                            </div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<h5 style="background-color: #a94442;padding:20px;">
First Image (Image1) should be in landscape mode</h5>
</div>
</div>

                                                            <div class="row">

                                                                <div class="col-md-3">

                                                                    <div class="form-group">

                                                                       * <label for="exampleInputEmail1">Upload image 1</label>

                                                                        <input type="file" class="form-control required" id="image1" name="image1" required> </div>

                                                                </div>

                                                                <div class="col-md-3">

                                                                    <div class="form-group">

                                                                       * <label for="exampleInputEmail1">Upload image 2</label>

                                                                        <input type="file" class="form-control required" id="image2" name="upload_image2" required> </div>

                                                                </div>

                                                                <div class="col-md-3">

                                                                    <div class="form-group">

                                                                       * <label for="exampleInputEmail1">Upload image 3</label>

                                                                        <input type="file" class="form-control required" id="image3" name="upload_image3" required> </div>

                                                                </div>

                                                                <div class="col-md-3">

                                                                    <div class="form-group">

                                                                       * <label for="exampleInputEmail1">Upload image 4</label>

                                                                        <input type="file" class="form-control required" id="image4" name="upload_image4" required> </div>

                                                                </div>

                                                            </div>

                                                            <div class="row">

                                                                <div class="col-md-3">

                                                                    <div class="form-group">

                                                                       * <label for="exampleInputEmail1">Upload image 5</label>

                                                                        <input type="file" class="form-control required" id="image5" name="upload_image5" required> </div>

                                                                </div>

                                                                <div class="col-md-3">

                                                                    <div class="form-group">

                                                                       * <label for="exampleInputEmail1">Upload image 6</label>

                                                                        <input type="file" class="form-control required" id="image6" name="upload_image6" required> </div>

                                                                </div>

                                                                <div class="col-md-3">

                                                                    <div class="form-group">

                                                                       * <label for="exampleInputEmail1">Upload image 7</label>

                                                                        <input type="file" class="form-control required" id="image7" name="upload_image7" required> </div>

                                                                </div>

                                                                <div class="col-md-3">

                                                                    <div class="form-group">

                                                                       * <label for="exampleInputEmail1">Upload image 8</label>

                                                                        <input type="file" class="form-control required" id="image8" name="upload_image8" required> </div>

                                                                </div>

                                                            </div>

                                                            <div class="row">

                                                                <div class="col-md-3">

                                                                    <div class="form-group">

                                                                        <label for="exampleInputEmail1">Upload video link 1</label>

                                                                        <input type="text" class="form-control required" name="video1"> </div>

                                                                </div>

                                                                <div class="col-md-3">

                                                                    <div class="form-group">

                                                                        <label for="exampleInputEmail1">Upload video link 2</label>

                                                                        <input type="text" class="form-control required" name="video2"> </div>

                                                                </div>

                                                                <div class="col-md-3">

                                                                    <div class="form-group">

                                                                        <label for="exampleInputEmail1">Upload video link 3</label>

                                                                        <input type="text" class="form-control required" name="video3"> </div>

                                                                </div>

                                                                <div class="col-md-3">

                                                                    <div class="form-group">

                                                                        <label for="exampleInputEmail1">Upload video link 4</label>

                                                                        <input type="text" class="form-control required" name="video4"> </div>

                                                                </div>

                                                            </div>

                                                            <div class="row">

                                                                <div class="col-md-3">

                                                                    <div class="form-group">

                                                                        <label for="exampleInputEmail1">Upload Audio link 1</label>

                                                                        <input type="text" class="form-control required" name="audio1"> </div>

                                                                </div>

                                                                <div class="col-md-3">

                                                                    <div class="form-group">

                                                                        <label for="exampleInputEmail1">Upload Audio link 2</label>

                                                                        <input type="text" class="form-control required" name="audio2"> </div>

                                                                </div>

                                                                <div class="col-md-3">

                                                                    <div class="form-group">

                                                                        <label for="exampleInputEmail1">Upload Audio link 3</label>

                                                                        <input type="text" class="form-control required" name="audio3"> </div>

                                                                </div>

                                                                <div class="col-md-3">

                                                                    <div class="form-group">

                                                                        <label for="exampleInputEmail1">Upload Audio link 4</label>

                                                                        <input type="text" class="form-control required" name="audio4"> </div>

                                                                </div>

                                                            </div>

                                                            <div class="row">

                                                                <div class="col-md-3">

                                                                    <div class="form-group">

                                                                       * <label for="exampleInputEmail1">Facebook</label>

                                                                        <input type="text" class="form-control required" name="model_facebook" placeholder="add facebook link" required> </div>

                                                                </div>

                                                                <div class="col-md-3">

                                                                    <div class="form-group">

                                                                        <label for="exampleInputEmail1">twitter</label>

                                                                        <input type="text" class="form-control required" name="model_twitter" placeholder="add twitter link"> </div>

                                                                </div>

                                                                <div class="col-md-3">

                                                                    <div class="form-group">

                                                                        <label for="exampleInputEmail1">google +</label>

                                                                        <input type="text" class="form-control required" name="model_google" placeholder="add google+ link"> </div>

                                                                </div>

                                                                <div class="col-md-3">

                                                                    <div class="form-group">

                                                                        <label for="exampleInputEmail1">instagram</label>

                                                                        <input type="text" class="form-control required" name="model_instagram" placeholder="add  instagram link"> </div>

                                                                </div>

                                                            </div>

                                                            <div class="row">

                                                                <div class="col-md-3">

                                                                    <div class="form-group">

                                                                        <label for="exampleInputEmail1">Pinterest</label>

                                                                        <input type="text" class="form-control required" name="model_pinterest" placeholder="add Pinterest link"> </div>

                                                                </div>

                                                                <div class="col-md-3">

                                                                    <div class="form-group">

                                                                        <label for="exampleInputEmail1">Linkedin</label>

                                                                        <input type="text" class="form-control required" name="model_linkedin" placeholder="add Linkedin link"> </div>

                                                                </div>

                                                                <div class="col-md-3">

                                                                    <div class="form-group">

                                                                        <label for="exampleInputEmail1">Skype</label>

                                                                        <input type="text" class="form-control required" name="model_skype" placeholder="add Skype link"> </div>

                                                                </div>

                                                                <div class="col-md-3">

                                                                    <div class="form-group">

                                                                        <label for="exampleInputEmail1">YouTube</label>

                                                                        <input type="text" class="form-control required" name="model_youtube" placeholder="add Youtube link"> </div>

                                                                </div>

                                                            </div>

                                                            <div class="row">

                                                                <div class="container">

                                                                    <div class="col-md-12" style="background: #98cce8;color: black;">

                                                                        <div class="form-group">

                                                                            <div class="checkbox">

                                                                                <label>

                                                                                    <input type="checkbox" value="chk" required style="margin-left:-52%;">

                                                                                    <p style="text-align: justify;"> I hereby grant permission for Spotlight Studioz and others to use photographs of the above named model, in whole or part, in any catalog, magazine, website, or any publication. Accordingly: I release and discharge Spotlight Studioz and persons acting for or on behalf of them from any liability by virtue of blurring, distortion, alteration, optical illusion, or use in composition form that may occur or be produced in the taking of said picture in any process thereof through completion of the finished product. (For example, if a modelâ€™s eyes are closed in a group shot, we may replace with open eyes.)</p>

                                                                                </label>

                                                                            </div>

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="row">

                                                                <div class="col-md-6">

                                                                    <div class="form-group">

                                                                        <script src='https://www.google.com/recaptcha/api.js'></script>

                                                                        <div class="g-recaptcha" data-sitekey="6LdZDSoUAAAAAPwLoXoroAZ0o45zQjFfBuWfgdgn"></div>

                                                                    </div>

                                                                </div>

                                                            </div>

<div class="form-group">
     <label for="">* From where you get to know about us</label>
     <select name="refer" id="refer" class="form-control text-center" required>
         <option value="facebook" style="color:#a0a0a0;">Facebook</option>
         <option value="instagram" style="color:#a0a0a0;">Instagram</option>
         <option value="linkedin" style="color:#a0a0a0;">Linked In</option>
         <option value="twitter" style="color:#a0a0a0;">Twitter</option>
         <option value="friends" style="color:#a0a0a0;">Friends</option>
     </select>
     <br>
     <div class="form-group text-center">
     <input type="text" name="refer_name" id="refer_name" placeholder="Enter friend name" style="display:none;">
 </div>
 </div>

                                                            <ul class="list-inline">

                                                                <p class="text-danger">* Please look carefully if you have filled all the details in all 4 steps and if missed,see in previous steps or check in current step and fill otherwise you won't be able to register.</p>

                                                                <button type="submit" class="btn btn-success next-step" id="finalSubmit" name="model_registration">Final Submit</button>

                                                            </ul>

                                                        </div>

                                                    </div>

                                                </div>

                                        </div>

                                        </form>

                                    </div>

                            </div>

                            </section>

                       </div>

                      </div>

            </div>                       
 </div>                             
 </div>                       
 </div>                        
</div>                     
</div>                
  </section> 

            <?php include( 'footer.php'); ?>

            <?php include( 'copyright2.php'); ?> </div>

        <!-- eof #box_wrapper -->

        </div>

        <!-- eof #canvas -->

        <script src="js/compressed.js"></script>

        <script src="js/main.js"></script>

        <script src="js/countries.js"></script>


    </body>

    <?php include( "ajax.php")?>

<script language="javascript">
    populateCountries("country", "state");
</script>

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

    <script>

        $(function() {

              $("#modeling_button").click(function(){
                $("#demo2").hide();
                $("#demo3").hide();
                $("#demo").show();
            });

            $("#actor_button").click(function(){
                $("#demo").hide();
                $("#demo3").hide();
                $("#demo2").show();
            });

            $("#artist_button").click(function(){
                $("#demo").hide();
                $("#demo2").hide();
                $("#demo3").show();
            });

             $("input[type=checkbox]").change(function(event) {
                  if($("input[name='modeling[]']:checked").length>1){
                    $("#none1").attr("checked",false);
                    $(".progress-bar").css("width","58%"); 
                        $("#progressWidth").html("58%"); 
                  }
            });

            $("input[type=checkbox]").change(function(event) {
                  if($("input[name='actor_actress[]']:checked").length>1){
                    $("#none2").attr("checked",false);
                    $(".progress-bar").css("width","66%"); 
                        $("#progressWidth").html("66%"); 
                  }
            });

              $("input[type=checkbox]").change(function(event) {
                  if($("input[name='artist_perfomer[]']:checked").length>1){
                    $("#none3").attr("checked",false);
                    $(".progress-bar").css("width","75%"); 
                        $("#progressWidth").html("75%"); 
                  }
            });

            $('#login-form-link').click(function(e) {

                $("#login-form").delay(100).fadeIn(100);

                $("#register-form").fadeOut(100);

                $('#register-form-link').removeClass('active');

                $(this).addClass('active');

                e.preventDefault();

            });

            $('#register-form-link').click(function(e) {

                $("#register-form").delay(100).fadeIn(100);

                $("#login-form").fadeOut(100);

                $('#login-form-link').removeClass('active');

                $(this).addClass('active');

                e.preventDefault();

            });

        });

    </script>

    <script type="text/javascript">

        $(document).ready(function() {
          
          $("#user_category").trigger("change");
       
            //Initialize tooltips   
            $('.nav-tabs > li a[title]').tooltip();       
            //Wizard     
            $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {   
                var $target = $(e.target);             
                if ($target.parent().hasClass('disabled')) {      
                    return false;      
                    }    
                    });     
                    
                    $("#firstSave").click(function(e){
                          var flag=1;
                           $('#step1 .required').each(function(){
                if( $(this).val() == "" ){
            flag=0;

        }
    });
if(flag==1){
  var $active = $('.wizard .nav-tabs li.active');    
                        $active.next().removeClass('disabled');       
                        nextTab($active);
$("html, body").animate({ scrollTop: 0 }, "slow");      
   
}else{
 alert("Please fill all the required details (*) ");
}
                       });

          $("#secondSave").click(function(e){
                          var flag=1;
                           $('#step2 .required').each(function(){
                if( $(this).val() == "" ){
            flag=0;

        }
    });
if(flag==1){
  var $active = $('.wizard .nav-tabs li.active');    
                        $active.next().removeClass('disabled');       
                        nextTab($active);  
$("html, body").animate({ scrollTop: 0 }, "slow");  

}else{
 alert("Please fill all the required details (*) ");
}
                       });

 

                    $("#thirdSave").click(function () {   
                        var $active = $('.wizard .nav-tabs li.active');    
                        $active.next().removeClass('disabled');       
                        nextTab($active);
$("html, body").animate({ scrollTop: 0 }, "slow");         
                        $(".progress-bar").css("width","75%");
                        $("#progressWidth").html("75%");   

                        }); 
                        $(".prev-step").click(function (e) {      
                            var $active = $('.wizard .nav-tabs li.active');   
                            prevTab($active);          
                            });    
            
        });  function nextTab(elem) { 
            $(elem).next().find('a[data-toggle="tab"]').click(); 
            }  function prevTab(elem) {
                $(elem).prev().find('a[data-toggle="tab"]').click();  
                
            }      //according menu      
            $(document).ready(function()      {   

                //Add Inactive Class To All Accordion Headers   
                $('.accordion-header').toggleClass('inactive-header');  
                //Set The Accordion Content Width  
                var contentwidth = $('.accordion-header').width();    
                $('.accordion-content').css({});          
                //Open The First Accordion Section When Page Loads 
                $('.accordion-header').first().toggleClass('active-header').toggleClass('inactive-header');   
                $('.accordion-content').first().slideDown().toggleClass('open-content');    
                // The Accordion Effect   
                $('.accordion-header').click(function () {  
                    if($(this).is('.inactive-header')) {      
                $('.active-header').toggleClass('active-header').toggleClass('inactive-header').next().slideToggle().toggleClass('open-content');          $(this).toggleClass('active-header').toggleClass('inactive-header');          $(this).next().slideToggle().toggleClass('open-content');        }                else {          $(this).toggleClass('active-header').toggleClass('inactive-header');          $(this).next().slideToggle().toggleClass('open-content');        }      });            return false;    });

    </script>

    <script>

$("#refer").change(function(){
    var refer=$("#refer").val();
    if(refer=="friends"){
        $("#refer_name").show();
    }else{
        $("#refer_name").hide();
    }
   });

        $("input").change(function() {
  
var numValid = 0;
$("input[required]").each(function() {
    if (this.validity.valid) {
        numValid++;
    }
});

var progress = $("#progress"),
    progressMessage = $("#progress-message");

if (numValid == 0) {
  $(".progress-bar").css("width","0%");
     $("#progressWidth").html("0%");  
}
if (numValid == 1) {
    $(".progress-bar").css("width","3%");
     $("#progressWidth").html("3%");  
}
if (numValid == 2) {
    $(".progress-bar").css("width","6%");
     $("#progressWidth").html("6%");  
}
if (numValid == 3) {
    $(".progress-bar").css("width","9%");
     $("#progressWidth").html("9%");  
}
if (numValid == 4) {
    $(".progress-bar").css("width","12%");
     $("#progressWidth").html("12%");  
}
if (numValid == 5) {
    $(".progress-bar").css("width","15%");
     $("#progressWidth").html("15%");  
}
if (numValid == 6) {
    $(".progress-bar").css("width","18%");
     $("#progressWidth").html("18%");  
}
if (numValid == 7) {
    $(".progress-bar").css("width","22%");
     $("#progressWidth").html("22%");  
}
if (numValid == 8) {
    $(".progress-bar").css("width","25%");
     $("#progressWidth").html("25%");  
}
if (numValid == 9) {
    $(".progress-bar").css("width","29%");
     $("#progressWidth").html("29%");  
}
if (numValid == 10) {
    $(".progress-bar").css("width","33%");
     $("#progressWidth").html("33%");  
}
if (numValid == 11) {
    $(".progress-bar").css("width","37%");
     $("#progressWidth").html("37%");  
}
if (numValid == 12) {
    $(".progress-bar").css("width","41%");
     $("#progressWidth").html("41%");  
}
if (numValid == 13) {
    $(".progress-bar").css("width","45%");
     $("#progressWidth").html("45%");  
}
if (numValid == 14) {
    $(".progress-bar").css("width","50%");
     $("#progressWidth").html("50%");  
}
if (numValid == 15) {
    $(".progress-bar").css("width","78%");
     $("#progressWidth").html("78%");  
}
if (numValid == 16) {
    $(".progress-bar").css("width","81%");
     $("#progressWidth").html("81%");  
}
if (numValid == 17) {
    $(".progress-bar").css("width","84%");
     $("#progressWidth").html("84%");  
}
if (numValid == 18) {
    $(".progress-bar").css("width","87%");
     $("#progressWidth").html("87%");  
}
if (numValid == 19) {
    $(".progress-bar").css("width","90%");
     $("#progressWidth").html("90%");  
}
if (numValid == 20) {
    $(".progress-bar").css("width","93%");
     $("#progressWidth").html("93%");  
}
if (numValid == 21) {
    $(".progress-bar").css("width","96%");
     $("#progressWidth").html("96%");  
}
if (numValid == 22) {
    $(".progress-bar").css("width","99%");
     $("#progressWidth").html("99%");  
}
if (numValid == 23) {
    $(".progress-bar").css("width","100%");
     $("#progressWidth").html("100%");  
}
});
    </script>

    <!-- Mirrored from webdesign-finder.com/html/models/gallery-regular-4-cols.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Jul 2018 07:45:36 GMT -->



    </html>
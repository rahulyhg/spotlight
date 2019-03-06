<?php

session_start();

ob_start();

include "connect.php";


$casting_category=mysqli_query($connect,"SELECT * from casting_category");

 if(!isset($_SESSION['profile']))

  {

    header("Location:reg.php");

  }

  

  if(isset($_POST['update_client']))

  {

    $user_id = $_POST['user_id'];

    $user_name      = $_POST['user_name'];

        $compnay_name   = $_POST['c_name'];

        $website        = $_POST['website'];

        $user_number    = $_POST['user_number'];

        $whtsapp_number = $_POST['whtsapp_number'];

        $user_email     = $_POST['user_email'];

        $client_work    = $_POST['c_work'];

        $user_address   = $_POST['user_address'];

        

        $update_client = mysqli_query($connect,"UPDATE `user_reg` SET `user_name` = '$user_name',`compnay_name`='$compnay_name  ',`website` = '$website',`user_number`='$user_number',`whtsapp_number`='$whtsapp_number',`user_email` = '$user_email',`client_work`='$client_work',`user_address`='$user_address' WHERE `user_id` = '$user_id' ");

        if(!empty($update_client))

        {

        $update_msg = "Update Success! Relogin to see the changes";

        }

        

        

    

  }

  



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



    <title>Client Profile</title>



    <meta charset="utf-8">



    <!--[if IE]>



        <meta http-equiv="X-UA-Compatible" content="IE=edge">



    <![endif]-->



    <meta name="description" content="">



    <meta name="viewport" content="width=device-width, initial-scale=1">







    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->







    <link rel="stylesheet" href="css/bootstrap.min.css">



    <link rel="stylesheet" href="css/main.css" id="color-switcher-link">



    <link rel="stylesheet" href="css/toast.min.css">


    <link rel="stylesheet" href="css/animations.css">


    <link rel="stylesheet" href="css/fonts.css">


    <link rel="stylesheet" href="css/featherlight.min.css">


    <script src="js/vendor/modernizr-2.6.2.min.js"></script>







    <!--[if lt IE 9]>



        <script src="js/vendor/html5shiv.min.js"></script>



        <script src="js/vendor/respond.min.js"></script>



    <![endif]-->



 <style>
.card.hovercard {
height:210px;
}

html.with-featherlight{
overflow:auto;
}

 .rows {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  width: 100%;
}

.columns {
  display: flex;
  flex-direction: column;
  flex-basis: 100%;
  flex: 1;
}

@media screen and (max-width:767px) {
  .visible{
    font-size:14px;
  }
  .fa{
    display:none;
  }
  .btn-nav{
    padding:4px 10px;
  }
  .fixwidth .featherlight-content {
   width:300px !important;
  }
  .card.hovercard{
   right:10px;  
  }
}

@media screen and (min-width:768px) {

  .btn-nav{
    padding:6px 0px;
  }
}

.lightbox{
display:none;
}

 .fixwidth {
          background: rgba(256,256,256, 0.8);
        }
        .fixwidth .featherlight-content {
          width: 500px;
          padding: 25px;
          color: #fff;
          background: #111;
        }
        .fixwidth .featherlight-close {
          color: #fff;
          background: #333;
        }

      .page-header {background:#ccc;margin:0;}

      .profile-head { width:100%;background-color: rgb(65, 105, 255);float: left;padding: 15px 5px;border-radius: 30px;}

      .profile-head img { height:180px; width:180px; margin:0 auto; border:5px solid #fff; border-radius:5px;}

      .profile-head h5 {width: 100%;padding:5px 5px 0px 5px;text-align:justify;font-weight: bold;color: #fff;font-size: 25px;text-transform:capitalize;

      margin-bottom: 0;}

      .profile-head p {width: 100%;text-align: justify;padding:0px 5px 5px 5px;color: #fff;font-size:17px;text-transform:capitalize;margin:0;}

      .profile-head a {width: 100%;text-align: center;padding: 10px 5px;color: #fff;font-size: 15px;text-transform: capitalize;}

      .profile-head ul { list-style:none;padding: 0;}

      .profile-head ul li { display:block; color:#ffffff;padding:5px;font-weight: 400;font-size: 15px;}

      .profile-head ul li:hover span { color:rgb(0, 4, 51);}

      .profile-head ul li span { color:#ffffff;padding-right: 10px;}

      .profile-head ul li a { color:#ffffff;}

      .profile-head h6 {width: 100%;text-align: center;font-weight: 100;color: #fff;font-size: 15px;text-transform: uppercase;margin-bottom: 0;}

      .nav-tabs {margin: 0;padding: 0;border: 0;}

      .nav-tabs > li > a {background: #DADADA;border-radius: 0;

      box-shadow: inset 0 -8px 7px -9px rgba(0,0,0,.4),-2px -2px 5px -2px rgba(0,0,0,.4);}

      .nav-tabs > li.active > a,

      .nav-tabs > li.active > a:hover {background: #F5F5F5;

      box-shadow: inset 0 0 0 0 rgba(0,0,0,.4),-2px -3px 5px -2px rgba(0,0,0,.4);}

      .tab-pane {background: #ffffff;box-shadow: 0 0 4px rgba(0,0,0,.4);border-radius: 0;text-align: center;padding: 10px;overflow:auto;}

      .tab-content>.active {margin-top:50px;/*width:100% !important;*/} 

      /* edit profile css*/

      .hve-pro {    background-color:rgb(255, 102, 0);padding: 5px; width:100%; height:auto;float:left;}

      .hve-pro p {float: left;color:#fff;font-size: 15px;text-transform: capitalize;padding: 5px 20px;font-family: 'Noto Sans', sans-serif;}

      h2.register { padding:10px 25px; text-transform:capitalize;font-size: 25px;color: rgb(255, 102, 0);}

      .fom-main { overflow:hidden;}

      legend {font-family: 'Bitter', serif;color:#ff3200;border-bottom:0px solid;}

      .main_form {background-color: #;}

      label.control-label {font-family: 'Noto Sans', sans-serif;font-weight: 100; margin-bottom:5px !important; 

      text-align:left !important; text-transform:uppercase; color:#798288;}

      .submit-button {color: #fff;background-color:rgb(255, 102, 0);width:190px;border: 0px solid;border-radius: 0px; transition:all ease 0.3s;margin: 5px;

      float:left;}

      .submit-button:hover, .submit-button:focus {color: #fff;background-color:rgb(0, 4, 51);}

      .edit-button {color: #fff;background-color:rgb(255, 102, 0);width:190px;border: 0px solid;border-radius: 0px; transition:all ease 0.3s;margin: 5px;

      float:left;}

      .edit-button:hover, .submit-button:focus {color: #fff;background-color:rgb(0, 4, 51);}

      .hint_icon {color:#ff3200;}

      .form-control:focus {border-color: #ff3200;}

      select.selectpicker { color:#99999c;}

      select.selectpicker option { color:#000 !important;}

      select.selectpicker option:first-child { color:#99999c;}

      .input-group { width:100%;}

      .uplod-picture {width: 100%; background-color:#;color: #fff; padding:20px 10px;margin-bottom:10px;}

      .uplod-file {position: relative;overflow: hidden;color: #fff;background-color: rgb(0, 4, 51);border: 0px solid #a02e09;border-radius: 0px;

      transition:all ease 0.3s;margin: 5px;}

      .uplod-file input[type=file] {position: absolute;top: 0;right: 0;min-width: 100%;min-height: 100%;font-size: 100px;text-align: right;

      filter: alpha(opacity=0);opacity: 0;outline: none;background: white;cursor: inherit;display: block;}

      .uplod-file:hover, .uplod-file:focus {color: #fff;background-color:rgb(255, 102, 0);}

      h4.pro-title { font-size:24px; color:rgba(0, 4, 51, 0.96); text-transform:capitalize; text-align:justify;padding: 10px 15px;font-family: 'Bitter', serif;}

      .bio-table { width:75%;border:0px solid;}

      .bio-table td {text-transform: capitalize;text-align: left;font-size: 15px;}

      .bio-table>tbody>tr>td { border:0px solid;text-transform: capitalize;color: rgb(0, 4, 51); font-size:15px;}

      .responsiv-table { border:0px solid;}

      .nav-menu li a {margin: 5px 5px 5px 5px;position: relative;display: block;padding: 10px 50px;border: 0px solid !important;box-shadow: none !important;

      background-color: rgb(0, 4, 51) !important;color: #fff !important;    white-space: nowrap;}

      .nav-menu li.active a {background-color: rgb(255, 102, 0) !important;}

      .stick{position:fixed !important;top:0;z-index:999 !important;width:100%;background:#ffffff !important;height:auto; transition:all ease 0.8s;

      -webkit-box-shadow: 0px 2px 7px 0px rgba(0,0,0,0.75);

      -moz-box-shadow: 0px 2px 7px 0px rgba(0,0,0,0.75);

      box-shadow: 0px 2px 7px 0px rgba(0,0,0,0.75);}

      .stick a { line-height:20px !important;}

      .stick img { margin:0 !important;}

      @media all and (max-width:768px){

      .navbar-inverse .drop_menu {display: block;visibility: visible;width: 110px;height:1000px;padding:0px 20px;position: absolute;right:-100px;

      transition:all ease 0.5s;border-top: 0px solid;cursor: pointer;}

      .navbar-brand {padding: 0;margin-left: 10px !important;}

      a.menu { display:block !important;margin: 9px 2px;float: right;color: rgba(255, 102, 0, 0.98); border:0px solid; background:none; font-size:30px;width:27px;position: relative;

      cursor:pointer;}

      a.menu:hover, a.menu:focus { color:rgb(0, 4, 51);}

      .drop_menu1 { display: block;visibility: visible;width:250px;height:1000px;padding:5px 30px;position: absolute;right:0 !important;

      background-color:#ffffff !important; transition:all ease 0.5s;border-top: 0px solid;cursor: pointer;}

      }

      @media all and (max-width:430px){

      .profile-head ul li {font-size: 12px !important;}

      .nav-menu li { width:50%;}

      .bio-table>tbody>tr>td {font-size: 13px;}

      }

      /***

      Bootstrap Line Tabs by @keenthemes

      A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme

      Licensed under MIT

      ***/

      /* Tabs panel */

      .tabbable-panel {

      border:0px solid #eee;

      padding: 10px;

      }

      /* Default mode */

      .tabbable-line > .nav-tabs {

      border: none;

      margin: 0px;

      }

      .tabbable-line > .nav-tabs > li {

      margin-right: 2px;

      }

      .tabbable-line > .nav-tabs > li > a {

      border: 0;

      margin-right: 0;

      color: #737373;

      }

      .tabbable-line > .nav-tabs > li > a > i {

      color: #a6a6a6;

      }

      .tabbable-line > .nav-tabs > li.open, .tabbable-line > .nav-tabs > li:hover {

      border-bottom: 4px solid #fbcdcf;

      }

      .tabbable-line > .nav-tabs > li.open > a, .tabbable-line > .nav-tabs > li:hover > a {

      border: 0;

      background: none !important;

      color: #333333;

      }

      .tabbable-line > .nav-tabs > li.open > a > i, .tabbable-line > .nav-tabs > li:hover > a > i {

      color: #a6a6a6;

      }

      .tabbable-line > .nav-tabs > li.open .dropdown-menu, .tabbable-line > .nav-tabs > li:hover .dropdown-menu {

      margin-top: 0px;

      }

      .tabbable-line > .nav-tabs > li.active {

      border-bottom: 4px solid #f3565d;

      position: relative;

      }

      .tabbable-line > .nav-tabs > li.active > a {

      border: 0 !important;

      color: #333333;

      }

      .tabbable-line > .nav-tabs > li.active > a > i {

      color: #404040;

      }

      .tabbable-line > .tab-content {

      margin-top: -3px;

      background-color: #fff;

      border: 0;

      border-top: 1px solid #eee;

      padding: 15px 0;

      }

      .portlet .tabbable-line > .tab-content {

      padding-bottom: 0;

      }

      /* Below tabs mode */

      .tabbable-line.tabs-below > .nav-tabs > li {

      border-top: 4px solid transparent;

      }

      .tabbable-line.tabs-below > .nav-tabs > li > a {

      margin-top: 0;

      }

      .tabbable-line.tabs-below > .nav-tabs > li:hover {

      border-bottom: 0;

      border-top: 4px solid #fbcdcf;

      }

      .tabbable-line.tabs-below > .nav-tabs > li.active {

      margin-bottom: -2px;

      border-bottom: 0;

      border-top: 4px solid #f3565d;

      }

      .tabbable-line.tabs-below > .tab-content {

      margin-top: -10px;

      border-top: 0;

      border-bottom: 1px solid #eee;

      padding-bottom: 15px;

      }

      .menu_title {

      padding: 15px 10px;

      border-bottom: 1px solid #eee;

      margin: 0 5px;

      }

    </style>

    <style type="text/css">

      /* USER PROFILE PAGE */

 .card {

    margin-top: 20px;

      padding: 166px;

    background-color: rgba(214, 224, 226, 0.2);

    -webkit-border-top-left-radius:5px;

    -moz-border-top-left-radius:5px;

    border-top-left-radius:5px;

    -webkit-border-top-right-radius:5px;

    -moz-border-top-right-radius:5px;

    border-top-right-radius:5px;

    -webkit-box-sizing: border-box;

    -moz-box-sizing: border-box;

    box-sizing: border-box;

}

.card.hovercard {

       position: relative;

    padding-top: 0p;

    text-align: center;

    background-color: #fff;

    background-color: rgb(24, 24, 24);

    border: 1px solid;

    padding-top: 0px;

}

.card.hovercard .card-background {

   

}

.card-background img {

    -webkit-filter: blur(25px);

    -moz-filter: blur(25px);

    -o-filter: blur(25px);

    -ms-filter: blur(25px);

    filter: blur(25px);

    margin-left: -100px;

    margin-top: -200px;

    min-width: 130%;

}

.card.hovercard .useravatar {

    position: absolute;

    top: -72px;

    left: 0;

    right: 0;

}

.card.hovercard .useravatar img {

    width: 145px;

    height: 145px;

   

    -webkit-border-radius: 0%;

    -moz-border-radius: 0%;

    border-radius: 0%;

    border: 5px solid rgba(255, 255, 255, 0.5);

}

.card.hovercard .card-info {

    position: absolute;

    bottom: 14px;

    left: 0;

    right: 0;

}

.card.hovercard .card-info .card-title {

    padding:0 5px;

    font-size: 20px;

    line-height: 1;

      color: #ffffff;

    background-color: rgb(24, 24, 24);

    -webkit-border-radius: 4px;

    -moz-border-radius: 4px;

    border-radius: 4px;

}

.card.hovercard .card-info {

    overflow: hidden;

    font-size: 12px;

    line-height: 20px;

    color: #737373;

    text-overflow: ellipsis;

}

.card.hovercard .bottom {

    padding: 0 20px;

    margin-bottom: 17px;

}

.btn-pref .btn {

    -webkit-border-radius:0 !important;

}





    </style>

    

    

     <style type="text/css">

        /* Related to SIde MENU Text */

.tab-pane{

    height:auto;

    width:100%;

    }

.tab-pane{

    height:absoulte;

    width:100%;

    }

    





.tabnav{

      margin-top:-18px;

    }



.btn-nav {

 color: #ffffff;

    background-color: #e0006c;

    border: 1px solid #e0e1db;

    -webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */

    -moz-box-sizing: border-box;    /* Firefox, other Gecko */

    box-sizing: border-box;         /* Opera/IE 8+ */

    width: 100%;

}



.btn-nav:hover {

         color: #734a25;

     cursor: pointer;

    -webkit-transition: color 1s; /* For Safari 3.1 to 6.0 */

    transition: color 1s;

}

.btn-nav.active {

    background: grey;

    color: #0000;

    padding: auto;

    border-top:2px solid #1dcaff ;

    border-bottom:2px solid #1dcaff  ;

    border-left: 2px solid #1dcaff;

    border-right: 2px solid  #1dcaff;

    box-sizing:border-box;

    -moz-box-sizing:border-box;

    -webkit-box-sizing:border-box;

    -webkit-transition: border 0.3s ease-out, color 0.3s ease 0.5s;

    -moz-transition: border 0.3s ease-out, color 0.3s ease 0.5s;

    -ms-transition: border 0.3s ease-out, color 0.3s ease 0.5s; /* IE10 is actually unprefixed */

    -o-transition: border 0.3s ease-out, color 0.3s ease 0.5s;

    transition: border 0.3s ease-out, color 0.3s ease 0.5s;

    -webkit-animation: pulsate 1.2s linear infinite;

    animation: pulsate 1.2s linear infinite;

}



.btn-nav .glyphicon {

    padding-top: 8px;

    font-size: 20px;

}

.btn-nav.active p {

    margin-bottom: 8px;

}

@-webkit-keyframes pulsate {

 50% { color: #000; }

}

@keyframes pulsate {

 50% { color: #000; }

}

@media (max-width: 100%) {

    .btn-group {

        display: block !important;

        float: none !important;

        width: 100% !important;

        max-width: 100% !important;

    }

}

@media (max-width: 100%) {

    .btn-nav .glyphicon {

        padding-top: 12px;

        font-size: 26px;

    }

}

 .btn:hover, .btn:focus {

    color: #2196F3;

    text-decoration: none;

}

.margintop{

    

    margin-top: -50px;

}



.panel {

    margin-bottom: 19px;

    background-color: #181818 !important;

    border: 1px solid transparent;

    border-radius: 0;

    -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);

    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);

}

.blue{

    color: #2196f3;

}

.media1{

        padding-bottom: 20px;

    font-size: 19px;

    color: aliceblue;

}

.tab-pane {

    background: #181818 !important;

    box-shadow: 0 0 4px rgba(0,0,0,.4);

    border-radius: 0;

    text-align: center;

    padding: 10px;

}

.tab-content {

    margin-top: -3px;

    background-color: #181818 !important;

    border: 0;

    border-top: 1px solid #eee;

    padding: 15px 0;

}

.tab-content>.active {

     margin-top: 0px; 

    width: 100% !important; 

}

table{

        border: 1px solid;

}

.table>thead:first-child>tr:first-child>th {

    border-top: 0;

    border: 1px solid;

}.table>tbody>tr>td, .table>tfoot>tr>td {

    border: 1px solid;

    padding: 8px;

    line-height: 1.5384;

    vertical-align: top;

    border-top: 1px solid #333;

    width: 12% !important;

}





.well {

    background-color:#e0006c;

}

.well-sm {

    padding: 9px !important;

    border-radius: 0 !important;

}

.btn-nav {

         background-color: #e0006c ;

         font-size: 15px;

             height: 50px;



    </style>

    

    <style>

        

        #useravtar {

  display: inline-block;

  position:absolute;

     top: 73%;

  left:50%;

  -ms-transform:translate(-50%,-50%);

  -webkit-transform:translate(-50%,-50%);

  transform:translate(-50%,-50%);

}



/* Icons */



#useravtar a {

  color:#fff;

  background: #e0006c;

  border-radius:4px;

  text-align:center;

  text-decoration:none;

  font-family:fontawesome;

  position: relative;

  display: inline-block;

  width:40px;

  height:40px;

  padding-top:12px;

  margin:0 2px;

  -o-transition:all .5s;

  -webkit-transition: all .5s;

  -moz-transition: all .5s;

  transition: all .5s;

   -webkit-font-smoothing: antialiased;

}



#useravtar a:hover {

  background: #ef92a3;

}



/* pop-up text */



#useravtar a span {

  color:#666;

  position:absolute;

  font-family:sans-serif;

  bottom:0;

  left:-25px;

  right:-25px;

  padding:5px 7px;

  z-index:-1;

  font-size:14px;

  border-radius:2px;

  background:#fff;

  visibility:hidden;

  opacity:0;

  -o-transition:all .5s cubic-bezier(0.68, -0.55, 0.265, 1.55);

  -webkit-transition: all .5s cubic-bezier(0.68, -0.55, 0.265, 1.55);

  -moz-transition: all .5s cubic-bezier(0.68, -0.55, 0.265, 1.55);

  transition: all .5s cubic-bezier(0.68, -0.55, 0.265, 1.55);

}



/* pop-up text arrow */



#useravtar a span:before {

  content:'';

  width: 0; 

  height: 0; 

  border-left: 5px solid transparent;

  border-right: 5px solid transparent;

  border-top: 5px solid #fff;

  position:absolute;

  bottom:-5px;

  left:40px;

}



/* text pops up when icon is in hover state */



#useravtar a:hover span {

  bottom:50px;

  visibility:visible;

  opacity:1;

}



/* font awesome icons */



#useravtar a:nth-of-type(1):before {

content:'\f09a';

}

#useravtar a:nth-of-type(2):before {

content:'\f099';

}

#useravtar a:nth-of-type(3):before {

content:'\f0d5';

}

#useravtar a:nth-of-type(4):before {

content:'\f16d';

}

#useravtar1 a:nth-of-type(1):before {

content:'\f0d2';

}

#useravtar1 a:nth-of-type(2):before {

content:'\f0e1';



}

#useravtar1 a:nth-of-type(3):before {

content:'\f17e';



}

   #useravtar1 a:nth-of-type(4):before {

content:'\f167';



}     

    </style>



</head>







<body>



    <!--[if lt IE 9]>



        <div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>



    <![endif]-->



    <!-- wrappers for visual page editor and boxed version of template -->



    <div id="canvas" style="background-color:#333;">



        <div id="box_wrapper">







            <!-- template sections -->











            <?php



                include('header.php');





            ?>





 <section id="blog" >

      <div class="container">

        <div class="row">

        </div>

      </div>

      <br>

      <br>

      <br>

      <br>

      <div class="container" style="margin-top: 30px;">

      

          <div class="col-lg-12 col-sm-12">

        <div class="card hovercard">

        <div class="card-background">

            <!--<img class="card-bkimg" alt="" src="<?php echo $_SESSION['profile']->company_logo ?>">-->

           

        </div>

        <div class="useravatar col-md-12">

            

            

      
            <img alt="" src="admin/model/<?php echo $_SESSION['profile']->company_logo ?>" style="height:180px;width:180px;">
            
            

        </div>

        

        

        

        

        <div class="card-info">

 <span class="card-title"><?php echo strtoupper($_SESSION['profile']->user_name) ?></span>
<br>
<a href="#add_review" data-toggle="tab"> <button type="button" class="flash-button" style="background-color:#e0006c;color:white;padding:6px 20px;border:0px;">Add Review</button></a>

        </div>



    </div>

   

       

    </div>

    

    

    

    <div>

        

        

    </div>

    </div>

            

    

         

       

        <!--profile-head close-->

      </div>

      <!--container close-->

      <br/>

      <br/>

      <div class="container"  style="color:white;">

        <div class="col-md-12" style="background-color:#e0006c;margin-bottom:24px;">

          <div data-spy="scroll" class="tabbable-panel" >

            <div class="tabbable-line" style="margin-top:8px;">

              <div class="tabnav">

                   <div class="btn-group rows">

                    <div class="btn-group columns" role="group"> 

                        <button id="b1" type="button" class=" btn-nav" href="#tab1" data-toggle="tab">

                        <div class="visible">General <i class="fa fa-user" aria-hidden="true"></i> </div>

                         </button>

                      </div>

                    <div class="btn-group columns" role="group">

                        <button type="button" class=" btn-nav" href="#tab2" data-toggle="tab">

                         <div class="visible">Edit Profile <i class="fa fa-pencil" aria-hidden="true"></i></div>

                        </button>

                    </div>
  

                    <div class="btn-group columns" role="group">

                        <button type="button" class=" btn-nav" href="#messages" data-toggle="tab">

                            

                        <div class="visible">Messages <i class="fa fa-certificate" aria-hidden="true"></i> </div>

                        </button>

                    </div>

                     

                    <div class="btn-group columns" role="group">

                        <button type="button" class=" btn-nav" href="#tab5" data-toggle="tab">

                             <div class="visible">Add Casting<i class="fa fa-picture-o" aria-hidden="true"></i></div>

                        </button>

                    </div>

                   

                    <div class="btn-group columns" role="group">

                         

                        <button type="button" class=" btn-nav" href="#tab6" data-toggle="tab">

                          <div class="visible "> Enquiries <i class="fa fa-pencil-square-o" aria-hidden="true"></i></div>

                        </button>

                    </div>

                    

                    <div class="btn-group columns" role="group">

                         

                        <button type="button" class=" btn-nav" href="#settings" data-toggle="tab">

                          <div class="visible "> Settings <i class="fa fa-cog" aria-hidden="true"></i></div>

                        </button>

                    </div>

                   <div class="btn-group columns" role="group">

                         

                        <button type="button" class=" btn-nav" onClick="ConfirmDelete()">

                          <div class="visible " style="color:white"> Logout <i class="fa fa-sign-out" aria-hidden="true"></i></div>

                        </button>

                    </div>

               </div>

            </div>

              <div class="tab-content">
                  
                  <div class="tab-pane" id="tab5">
                      <div class="container">
                          <form role="form" enctype="multipart/form-data" action="" method="post">
                                         <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Enter Casting Front Image</label>
                                            <input type="file" class="form-control"  name="cast" required autofocus>
                                        </div>
                                          <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Enter Casting Image2</label>
                                            <input type="file" class="form-control"  name="cast2" autofocus>
                                        </div>
                                          <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Enter Casting Image3</label>
                                            <input type="file" class="form-control"  name="cast3" autofocus>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Enter Casting Image4</label>
                                            <input type="file" class="form-control"  name="cast4" autofocus>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Enter Casting Image5</label>
                                            <input type="file" class="form-control"  name="cast5" autofocus>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Enter casting heading</label>
                                            <input type="text" class="form-control"  name="heading" required autofocus>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Enter casting text</label>
                                            <input type="text" class="form-control"  name="text" required autofocus>
                                        </div>
                                      <div class="form-group">
                                           <label class="control-label" for="casting_category">Select casting Category</label>
                                            <select class="control-label form-control" name="casting_category">
                                                <?php while($rows=mysqli_fetch_assoc($casting_category)){?>
                                            <option value="<?php echo $rows['id'] ?>"><?php echo $rows['name'] ?></option>    
                                               <?php }?>
                                            </select>
                                        </div>
<div class="row">
<div class="col-md-3">
<div class="form-group">
<input type="text" class="form-control"  name="shoot_date" required placeholder="Enter shoot date">
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<input type="text" class="form-control"  name="age_group" required placeholder="Enter age group">
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<input type="text" class="form-control"  name="location" required placeholder="Enter location">
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<input type="text" class="form-control"  name="budget" required placeholder="Enter budget">
</div>
</div>
</div>
                          
                                        <input class="btn" type="reset" value="Reset" id="resetButton" style="background-color:#e0006c;color:white;">
                                        <input type="submit" name="submit" class="btn btn-md" value="Add Casting" style="background-color:#e0006c;color:white;">
                                    </form>
                      </div>
                      
                  </div>

                  <div class="tab-pane" id="logout">

                  <div>

                      Click <a class="btn btn-danger" href="logout.php">Here</a> to Log Out

                  </div>

                  </div>

                <div class="tab-pane active" id="tab1">

                

                <p> <?php if(isset($update_msg)){?><span><i class="fa fa-check" style="font-size:60px;color:green;"></i><?php echo $update_msg; ?></span><?php } ?></p>

                

                  <div class="well well-sm">

                    <h4>PERSONAL DATA</h4>

                  </div>

                  <p align="right">

                    

                  <div class="container" style="width:100%" >

                    <div class="row">

                      <table class="table">

    <thead>

      <tr>

        <th>Full Name</th>

        <th>Compnay Name</th>

        <th>website</th>

        <th>Mobile No</th>

        <th>Whtsapp Number</th>

        <th>Email Address</th>

        

        

      </tr>

    </thead>

    <tbody>

   

      <tr>

        <td><?php echo $_SESSION['profile']->user_name ?></td>

        <td><?php echo $_SESSION['profile']->compnay_name ?></td>

        <td><?php echo $_SESSION['profile']->website ?></td>

        <td><?php echo $_SESSION['profile']->user_number ?></td>

        <td><?php echo $_SESSION['profile']->whtsapp_number ?></td>

        <td><?php echo $_SESSION['profile']->user_email ?></td>

       

      </tr>

      

      

    </tbody>

  </table>

  <table class="table">

  <thead>

  <tr>

  <th>Previouse Work</th>

  <th>Address</th>

  <th>Company Logo</th>

  </tr>

  </thead>

  <tbody>

  <tr>

  <td><?php echo $_SESSION['profile']->client_work ?></td>

  <td><?php echo $_SESSION['profile']->user_address ?></td>

  <td><img src="admin/model/3.jpg" style="height: 70px;width: 70px;" class="img-responsive"></td>

  </tr>

  </tbody>

  </table>

                    </div>

                  

                  </div>

                </div>

                <div class="tab-pane" id="tab2">

                  <div class="well well-sm">

                    <h4>EDIT PROFILE</h4>

                  </div>

                  <div class="container" style="width:100%">

                    <div class="col-md-12">

                      <div class="row">

                         <div class="step2">

                         

                          <?php $user_id = $_SESSION['profile']->user_id; 

    

    

   $queryuser = mysqli_query($connect,"select * from `user_reg` where `user_id`= '$user_id'");

   

   

  

                    while($test=mysqli_fetch_assoc($queryuser ))

                    {

                          ?>

                        <form method="post">

                        <input type="hidden" class="form-control" name="user_id" value="<?php echo $test['user_id'] ?>" >

                        <div class="row">

                          <div class="col-md-6">

                            <label for="exampleInputEmail1">Full Name</label>

                            <input type="text" class="form-control" name="user_name" value="<?php echo $test['user_name'] ?>" >

                          </div>

                          <div class="col-md-6">

                            <label for="exampleInputEmail1">Compnay Name</label>

                            <input type="text" class="form-control" name="c_name" value="<?php echo $test['compnay_name'] ?>" >

                          </div>



                          

                        </div>

                         <div class="row">

                          <div class="col-md-6">

                            <label for="exampleInputEmail1">Compnay Logo</label>

                            <input type="file" class="form-control" name="c_img" >

                          </div>

                          <div class="col-md-6">

                            <label for="exampleInputEmail1">Website</label>

                            <input type="text" class="form-control" name="website" value="<?php echo $test['website'] ?>" >

                          </div>

                         

                        </div>

                        

                       <div class="row">

                          <div class="col-md-6">

                            <label for="exampleInputEmail1">Mobile Number</label>

                            <input type="text" class="form-control" name="user_number" value="<?php echo $test['user_number'] ?>"  >

                          </div>

                          <div class="col-md-6">

                            <label for="exampleInputEmail1">Whatsapp Number</label>

                            <input type="text" class="form-control" name="whtsapp_number" value="<?php echo $test['whtsapp_number'] ?>" >

                          </div>

                        </div>



                          <div class="row">

                          <div class="col-md-6">

                            <label for="exampleInputEmail1">Email Address</label>

                            <input type="email" class="form-control" name="user_email" value="<?php echo $test['user_email'] ?>" >

                          </div>

                           <div class="col-md-6">

                            <label for="exampleInputEmail1">Update Profile picture</label>

                            <input type="file" class="form-control" name="profile_pic" >

                          </div>

                        </div>

                       

                        

                        <div class="row">

                          <div class="col-md-6">

                            <label for="exampleInputEmail1">Previous Work</label>

                            <textarea class="form-control" rows="4"  name="c_work"><?php echo $test['client_work'] ?></textarea>

                          </div>

                           <div class="col-md-6">

                            <label for="exampleInputEmail1">Address</label>

                            <textarea class="form-control" rows="4"  name="user_address"><?php echo $test['user_address'] ?></textarea>

                          </div>

                        </div>

                      

                       <ul class="list-inline pull-right">

                        <input type="submit" class="btn btn-primary next-step" name="update_client"  value="Update ">

                       

                      </ul>

                    </div>

                    </form>

                       

                        <?php } ?>

                      

                      

                       

                      </div>

                     

                     

                    



                    </div>

                  </div>

                </div>
                  

                  <div class="tab-pane" id="tab6">

                  

                  <div class="container" style="width:100%" >

                    <div class="row">

                      <table class="table">

    <thead>

      <tr>

        <th>Order Code</th>

        <th>Name</th>

        <th>Emaii</th>

        <th>Company</th>

        <th>Date</th>

        <th>Selected Models</th>

         <th>Location</th>

        

        

      </tr>

    </thead>

    <tbody>

        <?php  $cart_email = $_SESSION['profile']->user_email;

        $sql = mysqli_query($connect,"select * from `cart` where `cart_email` = '$cart_email'");

        

           while($cart=mysqli_fetch_assoc($sql ))

                    {

                          ?>

        

       

   

      <tr>

        <td><?php echo $cart['cart_code'] ?></td>

        <td><?php echo $cart['cart_name'] ?></td>

        <td><?php echo $cart['cart_email'] ?></td>

        <td><?php echo $cart['cart_company'] ?></td>

        <td><?php echo $cart['start_date'] ?></td>

        <td><?php echo $cart['model'] ?></td>

         <td><?php echo $cart['location'] ?></td>

       

      </tr>

      <?php } ?>

      

      

    </tbody>

  </table>

  

                    </div>

                  

                  </div>

                  </div>

                  

                  

                  

                  <div class="tab-pane panel fade in " id="messages">

      <div class="well well-sm" style="margin-top:14px;">
 
       <h4>Messages</h4>

      </div>
     <div>
    <table>
  
 <thead>
<tr style="border:1px solid;">
<td style="border:1px solid;font-weight:bold;">S No.</td>
<td style="border:1px solid;font-weight:bold;">From</td>
<td style="border:1px solid;font-weight:bold;">Subject</td>
<td style="border:1px solid;font-weight:bold;">Message</td>
<td colspan="2" style="border:1px solid;font-weight:bold;">Action</td>
</tr>
</thead>
  
  <tbody>
<?php
 $i=0;
$model_email=$_SESSION['profile']->user_email;
$messages=mysqli_query($connect,"SELECT * from messages where email ='$model_email' ");

while($rows=mysqli_fetch_assoc($messages)){
?>
    <tr style="border:1px solid;">
       <td style="border:1px solid;"><?php echo $i+1 ?></td>
       <td style="border:1px solid;"><?php echo $rows['from_user'] ?></td>
       <td style="border:1px solid;"><?php echo $rows['subject'] ?></td>
       <td style="border:1px solid;cursor:pointer">
<a data-featherlight="#editBox" data-featherlight-close-on-click="false" data-featherlight-variant="fixwidth" data-id="<?php echo $rows['id'] ?>" class="open-modal">Read</a></td>
       <td style="border:1px solid;">
<a class="btn btn-primary reply_button" style="text-transform:capitalize;padding:4px 20px;color:white;" href="#editBox1" data-target="#editBox1" data-toggle="modal">Reply</a></td>
<td><a class="btn btn-danger" style="padding:8px;color:white;" href="messages_delete.php?id=<?php echo $rows['id'] ?>&user_type=client">Delete</a></td>
    </tr> 
         
<?php $i++; }?>

  </tbody>
</table>
     </div>
                  </div>

                  
 <div class="tab-pane panel fade in " id="add_review">

                     <P></P>

                  <div class="well well-sm">

                    <h4>Add Review</h4>

                  </div>
                 <?php 
                 $name_review=$_SESSION['profile']->user_name;
                 $query1=mysqli_query($connect,"SELECT * from testimonials where c_name='$name_review' ");
                 $available=mysqli_num_rows($query1);
                 if($available<1){
                 ?>
                  <form method="post" action="">
                  <div class="form-group">
                  <textarea class="form-control" name="review" placeholder="Enter your review" required></textarea>
                  </div>
                  <input type="submit" value="Submit" class="btn" style="background-color:#e0006c;color:white;" name="review_submit">
                  </form>

                <?php }else{



                  ?>
                 <h4 style="text-align:center;font-weight:bold;margin-bottom:24px;">Your review</h4>
                  <table style="overflow:auto;">
                   <thead style="border:1px solid;"> 
                   <th style="border:1px solid;text-align:center;">Name</th>
                   <th style="border:1px solid;text-align:center;">Review</th>
                   <th style="border:1px solid;text-align:center;">Action</th>
                  </thead>
                  <tbody style="text-align:center;">
                   <tr style="border:1px solid;">
                   <td style="border:1px solid;"><?php echo $_SESSION['profile']->user_name ?></td>
<?php while($row=mysqli_fetch_assoc($query1)){ ?>
                   <td><?php echo $row['c_details'] ?></td> 
<?php } ?>
                   <td><a data-toggle="modal" data-target="#edit_review" style="cursor:pointer;">Edit</a></td>
                   </tr>
                  </tbody>
                  </table>
 
                 <?php } ?>
                  </div>

                  

                  <div class="tab-pane panel fade in " id="settings">

                     <P></P>

                  <div class="well well-sm">

                    <h4>SETTINGS</h4>

                  </div>

                 <script>

                     function checkPasswordMatch() {

                        

    var password = $("#txtNewPassword").val();

    

    var confirmPassword = $("#txtConfirmPassword").val();



    if (password != confirmPassword)

    document.getElementById("buttonfalse").disabled = true;

    

      //  $("#divCheckPasswordMatch").html("Passwords do not match!");

        

       

    else

     document.getElementById("buttonfalse").disabled = false;

    

      //  $("#divCheckPasswordMatch").html("Passwords match.");

}



$(document).ready(function () {

   $("#txtNewPassword, #txtConfirmPassword").keyup(checkPasswordMatch);

});



                 </script>

              

                  <div class="container" style="width:100%" >

                    <form method="post"  action="">

                        <input type="hidden" name="user_id" value="<?php echo $_SESSION['profile']->user_id; ?>" >

                          

                            <div class="row">

                              <div class="col-md-6">

                                <label for="exampleInputEmail1">New Password</label>

                                <input type="text" required class="form-control" name="password" id="txtNewPassword"  placeholder="Enter New Password">

                              </div>

                              <div class="col-md-6">

                                <label for="exampleInputEmail1">Re-enter Password </label>

                                <input type="text" required class="form-control" name="password" id="txtConfirmPassword" onkeyup="checkPasswordMatch();" placeholder="Re-Enter Password">

                                

                              </div>

                           <!-- <div class="registrationFormAlert" id="divCheckPasswordMatch"> -->

                              

                               

                            </div><br><br>

                             <ul class="list-inline">

                              <input type="submit" class="btn btn-primary" id="buttonfalse" name="update_password" style="width: 100px;"  value="Update">

                            </ul>

                   </form>

                   

                   

                   

                   

                   

                   

                  </div>

                </div>



  

</div>



                

              </div>

              <!-- /.col-lg-12 -->

               <div style="font-size:18px;text-align:center;padding:24px;">

                For any support contact us at <a href="#" style="color:#1a1a1a;font-weight:bold;">support@spotlightstudioz.com</a>  

              </div>

            </div>

            <!-- /.row -->

          </div>

        </div>

      </div>

      </div>

      </div>

      </div>

    </section>

<div id="edit_review" class="modal fade" role="dialog">

      <div class="modal-dialog">

        <!-- Modal content-->

        <div class="modal-content">

         

          <div class="modal-body">

            <form method="post" action="">
                  <div class="form-group">
  <textarea class="form-control" name="edit_review" placeholder="Update your review" required></textarea>
                  </div>
                  <input type="submit" value="Submit" class="btn" style="background-color:#e0006c;color:white;padding:8px;" name="review_edit">
                  </form>

          </div>

         

        </div>

      </div>

    </div>
        

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                  <script type="text/javascript">

      function ConfirmDelete()

      {
 swal({
      title: "Are you sure?",
      text: "You will be logged out !",
      icon: "warning",
      buttons: [
        'No, cancel it!',
        'Yes, I am sure!'
      ],
      dangerMode: true,
    }).then(function(isConfirm) {
      if (isConfirm) {
        swal({
          title: 'Successfull!',
          text: 'You are logged out !',
          icon: 'success'
        }).then(function() {
          location.href='logout.php';
        });
      } else {
        swal("Cancelled", "You are still logged in :)", "success");
      }
    })
}

  </script>





            <?php  include('footer.php');  ?>











            <?php include('copyright2.php'); ?>







        </div>



        <!-- eof #box_wrapper -->



    </div>



    <!-- eof #canvas -->

<div class="lightbox" id="editBox">
      <h2 class="text-center">Message</h2>
      <p class="read_show text-center" style="word-wrap: break-word;">
      </p>
    </div>


<div class="modal fade" id="editBox1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1">
    <div class="modal-dialog" role="document" style="border-radius:0px;" >
        <div class="modal-content" style="text-align:center;font-weight:bold;">
            
            <div class="modal-body" style="background-color:#111;">
               <form action="" style="background-color:#111;" >
    <textarea name="" id="reply_message" cols="60" rows="8" placeholder="Enter Your Message Here" required style="width:90%;background-color:#111;color:#a0a0a0;"></textarea>
                 <a  data-name="<?php echo $_SESSION['profile']->user_name ?>"
                     data-email="<?php echo $_SESSION['profile']->user_email ?>" 
                     data-number="<?php echo $_SESSION['profile']->user_number ?>" class="btn reply_submit" style="background-color:#e0006c;padding:4px 20px;color:white;">Send</a>
               </form>
            </div>
           
        </div>
    </div>
</div>  









<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/compressed.js"></script>



    <script src="js/main.js"></script>

    <script src="js/featherlight.min.js"></script>

    <script src="js/toast.min.js"></script>
 
<script>
$( document ).ready(function() { 
  $('.open-modal').click(function(){
   $('.lightbox').show();
    var id = $(this).data('id');
    $.ajax({
      type : 'post',
       url : 'model_read.php?id='+id, 
      success : function(data){
          $('#editBox').show('show'); 
          $('.read_show').html(data); 
       }
    });
  });
  $(document).delegate('.featherlight-close', 'click', function(event) {
   $('.lightbox').hide();
  });
$(document).delegate('.reply_button', 'click', function(event) {
$('.featherlight').hide();
$('#editBox1').modal("show");
  });
});
</script>
<script>
$(document ).ready(function() { 

  $('.reply_submit').click(function(){
    var name = $(this).data('name');
    var email=$(this).data('email');
    var number=$(this).data('number');
    var query=$("#reply_message").val();
    $.ajax({
      type : 'post',
       url : 'model_reply.php?name='+name+'&email='+email+'&number='+number+'&query='+query, 
      success : function(data){
        $.toast({
                  heading: 'Success',
                  text: 'Your reply has been sent successfully',
                  showHideTransition: 'fade',
                  icon: 'success',
                  position: 'top-right',
                  hideAfter: 8000
          });

          $("#editBox1").modal("hide");
          
       }
    });
  });
});
</script>




</body>
<?php

if (isset($_POST['submit']))
 {


  $c_heading=$_POST['heading'];
  $c_text=$_POST['text'];
 $c_category=$_POST['casting_category'];

$shoot_date=$_POST['shoot_date'];

$age_group=$_POST['age_group'];

$location=$_POST['location'];

$budget=$_POST['budget'];



  $tmp_loc=$_FILES['cast']['tmp_name'];
  $tmp_img=$_FILES['cast']['tmp_name'];
  $name=$_FILES['cast']['name'];
  $path="model/".$name;
  $new_path="admin/model/".$name;
   $upload=move_uploaded_file($tmp_loc,$new_path);
   
   $tmp_loc2=$_FILES['cast2']['tmp_name'];
  $tmp_img2=$_FILES['cast2']['tmp_name'];
  $name2=$_FILES['cast2']['name'];
  $path2="model/".$name2;
  $new_path2="admin/model/".$name2;
   $upload2=move_uploaded_file($tmp_loc2,$new_path2);
   
   $tmp_loc3=$_FILES['cast3']['tmp_name'];
  $tmp_img3=$_FILES['cast3']['tmp_name'];
  $name3=$_FILES['cast3']['name'];
  $path3="model/".$name3;
  $new_path3="admin/model/".$name3;
   $upload3=move_uploaded_file($tmp_loc3,$new_path3);
   
    $tmp_loc4=$_FILES['cast4']['tmp_name'];
  $tmp_img4=$_FILES['cast4']['tmp_name'];
  $name4=$_FILES['cast4']['name'];
  $path4="model/".$name4;
  $new_path4="admin/model/".$name4;
   $upload4=move_uploaded_file($tmp_loc4,$new_path4);

    $tmp_loc5=$_FILES['cast5']['tmp_name'];
  $tmp_img5=$_FILES['cast5']['tmp_name'];
  $name5=$_FILES['cast5']['name'];
  $path5="model/".$name5;
  $new_path5="admin/model/".$name5;
   $upload5=move_uploaded_file($tmp_loc5,$new_path5);



 $query = mysqli_query($connect,"INSERT INTO  `casting` (`c_img`,`c_img2`,`c_img3`,`c_img4`,`c_img5`,`c_heading`,`c_text`,`extra`,`category_id`,`completed`,`shoot_date`,`age_group`,`location`,`budget`) values ('$new_path','$new_path2','$new_path3','$new_path4','$new_path5','$c_heading','$c_text','0','$c_category','0','$shoot_date','$age_group','$location','$budget')");

 
    if($query)
    {
        
      echo "<script type='text/javascript'>
          
 $.toast({
                heading: 'Success',
                text: 'Casting has been added successfully',
                showHideTransition: 'fade',
                icon: 'success',
                position: 'top-right',
                hideAfter: 8000
        });

        

</script>";   
    }
    else
    {
      die(mysqli_error($connect));
    }
   

}


?>










<!-- Mirrored from webdesign-finder.com/html/models/gallery-regular-4-cols.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Jul 2018 07:45:36 GMT -->



</html>
<?php

if(isset($_POST['review_edit'])){

$name=$_SESSION['profile']->user_name;
$review=$_POST['edit_review'];
$query=mysqli_query($connect,"UPDATE testimonials set c_details='$review' where c_name='$name' ");

    if($query)
    {
header("Location:client_profile.php");
    }

}

if(isset($_POST['review_submit'])){

$photo=$_SESSION['profile']->company_logo;
$name=$_SESSION['profile']->user_name;
$review=$_POST['review'];
$query=mysqli_query($connect,"INSERT into testimonials values('','$name','$review','$photo')");

    if($query)
    {
header("Location:client_profile.php");
    }

}


if($_POST['update_password'])
{
    $user_id =  $_POST['user_id']; 
    $password = $_POST['password'];
    $sql = mysqli_query($connect,"update `user_reg` set `user_password` = '$password'  where `user_id` = '$user_id'");
    
    if($sql)
    {
echo "<script type='text/javascript'>

 $.toast({
                heading: 'Success',
                text: 'Your password has been changed successfully',
                showHideTransition: 'fade',
                icon: 'success',
                position: 'top-right',
                hideAfter: 8000
        });

       

</script>";    
    }
    
}

?>



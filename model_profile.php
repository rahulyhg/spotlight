<?php

session_start();

ob_start();

require 'vendor/autoload.php';


include "connect.php";



if(!isset($_SESSION['profile']))

  {

    header("Location:reg.php");

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



    <title>Model Profile</title>



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


    <link rel="stylesheet" href="css/featherlight.min.css">


    <script src="js/vendor/modernizr-2.6.2.min.js"></script>






    <!--[if lt IE 9]>



        <script src="js/vendor/html5shiv.min.js"></script>



        <script src="js/vendor/respond.min.js"></script>



    <![endif]-->



  <style>
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
 .rowsT {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  width: 100%;
}

.columnsT {
  display: flex;
  flex-direction: column;
  flex-basis: 100%;
  flex: 1;
}

.card.hovercard .card-info{
  margin-top:8px;
  margin-bottom:24px;
}
.card.hovercard{
height:400px;
}
.card-info{
position:relative;
top:165px;
}
.tab-content{
padding:30px 0px;
}
.tabnav{
margin-bottom:24px;
}
.fixwidth .featherlight-content {
width:300px !important;
}
.smallTable{
margin:0px;
}
.smallEnquiry{
padding:0px;
}
}

@media screen and (min-width:768px) {

  .btn-nav{
    padding:6px 0px;
  }
.card.hovercard .card-info{
  margin-top:124px;
}
.tab-content{
padding:30px 0px;
}
}

.lightbox { display: none; }
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

input[type="checkbox"]{
visibility:visible;
}

.socials{
    cursor:pointer;
}

.flash-button{

    background:#e0006c;

    padding:5px 10px;

    color:#fff;

    border:none;

    border-radius:5px;

    margin:1px;   

    animation-name: flash;

    animation-duration: 1s;

    animation-timing-function: linear;

    animation-iteration-count: infinite;



    //Firefox 1+

    -webkit-animation-name: flash;

    -webkit-animation-duration: 1s;

    -webkit-animation-timing-function: linear;

    -webkit-animation-iteration-count: infinite;



    //Safari 3-4

    -moz-animation-name: flash;

    -moz-animation-duration: 1s;

    -moz-animation-timing-function: linear;

    -moz-animation-iteration-count: infinite;

}



@keyframes flash {  

    0% { opacity: 1.0; }

    50% { opacity: 0.5; }

    100% { opacity: 1.0; }

}



//Firefox 1+

@-webkit-keyframes flash {  

    0% { opacity: 1.0; }

    50% { opacity: 0.5; }

    100% { opacity: 1.0; }

}



//Safari 3-4

@-moz-keyframes flash {  

    0% { opacity: 1.0; }

    50% { opacity: 0.5; }

    100% { opacity: 1.0; }

}

</style>

    

    

    <style>
    
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

      .profile-head h6 {width: 100%;text-align: center;font-weight: 100;color: #fff;font-size: 15px;text-transform:capitalize;margin-bottom: 0;}

      .nav-tabs {margin: 0;padding: 0;border: 0;}

      .nav-tabs > li > a {background: #DADADA;border-radius: 0;

      box-shadow: inset 0 -8px 7px -9px rgba(0,0,0,.4),-2px -2px 5px -2px rgba(0,0,0,.4);}

      .tab-pane {background: #181818;box-shadow: 0 0 4px rgba(0,0,0,.4);border-radius: 0;text-align:center;padding: 10px;overflow:auto;}

      .tab-content>.active {/*width:100% !important;*/} 

      /* edit profile css*/

      .hve-pro {    background-color:rgb(255, 102, 0);padding: 5px; width:100%; height:auto;float:left;}

      .hve-pro p {float: left;color:#fff;font-size: 15px;text-transform: capitalize;padding: 5px 20px;font-family: 'Noto Sans', sans-serif;}

      h2.register { padding:10px 25px; text-transform:capitalize;font-size: 25px;color: rgb(255, 102, 0);}

      .fom-main { overflow:hidden;}

      legend {font-family: 'Bitter', serif;color:#ff3200;border-bottom:0px solid;}

      .main_form {background-color: #;}

      label.control-label {font-family: 'Noto Sans', sans-serif;font-weight: 100; margin-bottom:5px !important; 

      text-align:left !important; text-transform:capitalize; color:#798288;}

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

      .bio-table { width:75%;border:1px solid;}

      .bio-table td {text-transform: capitalize;text-align: left;font-size: 15px;}

      .bio-table>tbody>tr>td { border:1px solid;text-transform: capitalize;color: rgb(0, 4, 51); font-size:15px;}

      .responsiv-table { border:1px solid;}

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

      border:1px solid #eee;

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

      color: #2196F3;

      }

      .tabbable-line > .nav-tabs > li > a > i {

      color: #2196F3;

      }

      .tabbable-line > .nav-tabs > li.open, .tabbable-line > .nav-tabs > li:hover {

      border-bottom: 4px solid #2196F3;

      }

      .tabbable-line > .nav-tabs > li.open > a, .tabbable-line > .nav-tabs > li:hover > a {

      border: 0;

      background: none !important;

      color:white !important;

      }

      .tabbable-line > .nav-tabs > li.open > a > i, .tabbable-line > .nav-tabs > li:hover > a > i {

      color: white !important;

      }

      .tabbable-line > .nav-tabs > li.open .dropdown-menu, .tabbable-line > .nav-tabs > li:hover .dropdown-menu {

      margin-top: 0px;

      }

      .tabbable-line > .nav-tabs > li.active {

      border-bottom: 4px solid #2196F3;

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

      padding: 0px;

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

      top: -88px;

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

      .card.hovercard .card-info .card-title {

      padding:0 5px;

      font-size: 20px;

      line-height: 1;

      color: #262626;

      background-color: rgba(255, 255, 255, 0.1);

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

      #useravtar {

      display: inline-block;

      position: absolute;

      top: 65%;

      left: 50%;

      -ms-transform: translate(-50%,-50%);

      -webkit-transform: translate(-50%,-50%);

      transform: translate(-50%,-50%);

      }

    </style>

  <style type="text/css">.well { background-color:#e0006c;} </style>

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

          background-color: #e0006c;;

          font-size: 15px;

              height: 50px;

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

      .media1{

      padding-bottom: 20px;

      font-size: 19px;

      color: aliceblue;

      }

      .tabbable-panel {

      border: 1px solid #eee;

      padding: 10px;

      }

      .well-sm {

      padding: 9px;

      border-radius: 0;

      }

      .cursor1{

      cursor: pointer;

      }

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

      }  .card.hovercard .card-info .card-title {

      padding: 0 5px;

      font-size: 20px;

      line-height: 1;

      color: #ffffff;

      background-color: rgb(24, 24, 24);

      -webkit-border-radius: 4px;

      -moz-border-radius: 4px;

      border-radius: 4px;

      }   

      .bor{

          border-bottom: 1px solid !important;

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





  <section id="blog">

      <div class="container">

        <div class="row">

        </div>

      </div>

      <br>

      <br>

      <p class="text-center" style="color:#e0006c;">* You have to Relogin to see the changes after you update your profile</p>

      <br>

      <br>

      <div class="container" style="margin-top: 30px;">

        <div class="col-lg-12 col-sm-12">

          <div class="row">

            <!--<div class="card-background">-->

            <!--  <img class="card-bkimg" alt="" src="<?php echo $_SESSION['profile']->model_image1 ?>">-->

            <!--</div>-->

            <div class="col-lg-12 col-sm-12">

              <div class="card hovercard">

                <div class="card-background">

                  <!--<img class="card-bkimg" alt="" src="<?php echo $_SESSION['profile']->company_logo ?>">-->

                </div>

                <div class="useravatar col-md-12">

                  <img alt="" src="admin/model/<?php echo $_SESSION['profile']->model_image1 ?>" style="height:180px;width:180px;">

                </div>

                <div class="col-md-12 col-xs-12"   id="useravtar">

                  <div class="col-md-6 rowsT">
        
                    <a class="socials columnsT" data-value="<?php echo $_SESSION['profile']->model_facebook ?>"><span>Facebook</span> </a>


                    <a class="socials columnsT" data-value="<?php echo $_SESSION['profile']->model_twitter ?>"><span>Twitter</span></a>

                    <a class="socials columnsT" data-value="<?php echo $_SESSION['profile']->model_google ?>"><span>Google+</span></a>

                    <a class="socials columnsT" data-value="<?php echo $_SESSION['profile']->model_instagram ?>">

                    <span>Instagram</span>

                    </a>

                  </div>

                  <div class="col-md-6 rowsT" id="useravtar1">

                    <a class="socials columnsT" data-value="<?php echo $_SESSION['profile']->model_pinterest ?>"><span>Pinterest</span></a>

                    <a class="socials columnsT" data-value="<?php echo $_SESSION['profile']->model_linkedin ?>"><span>Linkedin</span></a>

                    <a class="socials columnsT" data-value="<?php echo $_SESSION['profile']->model_skype ?>"><span>Skype</span></a>

                    <a class="socials columnsT" data-value="<?php echo $_SESSION['profile']->model_youtube ?>"><span>Youtube</span></a>

                  </div>

                </div>

                <div class="card-info"> <span class="card-title"><?php echo strtoupper($_SESSION['profile']->user_name) ?></span><br>

                  <br>

                  <span class="card-title"><?php echo strtoupper($_SESSION['profile']->model_code) ?></span>

                </div>

               
            
                <a href="casting.php"> <button type="button" class="flash-button" st>View Casting</button></a>

                <a href="#messages" data-toggle="tab"> <button type="button" class="flash-button">Messages</button></a>

                <a href="#add_review" data-toggle="tab"> <button type="button" class="flash-button">Add Review</button></a>

                 <a data-toggle="modal" data-target="#current_location"><button type="button" class="flash-button">Change Current Location</button></a>

              </div>

            </div>

          </div>

        </div>

      </div>

      <!--profile-head close-->

      </div>

      <!--container close-->

      <br/>

      <br/>

      <div class="container"  style="color:white;">

        <div class="col-md-12">

          <div data-spy="scroll" class="tabbable-panel" style="overflow: hidden;background-color:#e0006c;margin-bottom:24px;" >

            <div class=" " role="group">

              <div class="tabnav">

                <div class="btn-group rows">

                  <div class="btn-group columns" role="group">

                    <button id="b1" type="button" class=" btn-nav" href="#tab1" data-toggle="tab" >

                      <div class="visible" >General  <i class="fa fa-user" aria-hidden="true"></i> </span></div>

                    </button>

                  </div>

                  <div class="btn-group columns" role="group">

                    <button id="b1" type="button" class=" btn-nav" href="#tab10" data-toggle="tab" >

                      <div class="visible" >Statistics  <i class="fa fa-stack-exchange" aria-hidden="true"></i> </span></div>

                    </button>

                  </div>

                  <div class="btn-group columns" role="group">

                    <button type="button" class=" btn-nav" href="#tab2" data-toggle="tab" >

                      <div class="visible">Experience <i class="fa fa-certificate" aria-hidden="true"></i></div>

                    </button>

                  </div>

                  <div class="btn-group columns" role="group">

                    <button type="button" class=" btn-nav" href="#tab3" data-toggle="tab">

                      <div class="visible">Media <i class="fa fa-picture-o" aria-hidden="true"></i></div>

                    </button>

                  </div>

                  <div class="btn-group columns" role="group">

                    <button type="button" class=" btn-nav" href="#tabe" data-toggle="tab">

                      <div class="visible">Enquiries <i class="fa fa-pencil-square-o" aria-hidden="true"></i></div>

                    </button>

                  </div>

                  <div class="btn-group columns" role="group">

                    <button type="button" class=" btn-nav" href="#tab5" data-toggle="tab">

                      <div class="visible">Edit Profile <i class="fa fa-cog" aria-hidden="true"></i></div>

                    </button>

                  </div>

                  <div class="btn-group columns" role="group">

                    <button type="button" class=" btn-nav" href="#tab6" data-toggle="tab">

                      <div class="visible">Settings <i class="fa fa-wrench"></i></div>

                    </button>

                  </div>
                 <div class="btn-group columns" role="group">

                    <button type="button" class=" btn-nav" href="#extras" data-toggle="tab">

                      <div class="visible">Extra Images<i class="fa fa-cloud-upload"></i></div>

                    </button>

                  </div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                  <script type="text/javascript">

      function ConfirmDelete()

      {
 swal({
      title: "Are you sure?",
      text: "You will be logged out ! Check all Casting Calls, so you don’t Miss ",
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

                  <div class="btn-group" role="group">

                    <button type="button" class=" btn-nav"  onclick="ConfirmDelete()"  >

                      <a href="logout.php" target="">

                        <div class="visible" style="color:white;"> Logout  <i class="fa fa-sign-out" aria-hidden="true"></i></div>

                      </a>

                    </button>

                  </div>

                </div>

              </div>

              <div class="tab-content margintop">

                <div class="tab-pane panel  active" id="tab1">

                  <p> <?php if(isset($update_msg)){?><span><i class="fa fa-check" style="font-size:60px;color:green;"></i><?php echo $update_msg; ?></span><?php } ?></p>

                  <div class="well well-sm">

                    <h4>PERSONAL DATA</h4>

                  </div>

                  <div class="container" style="width:100%" >

                    <div class="row">

                      <table class="table" border="1">

                        <thead>

                          <tr>

                            <th style="border:1px solid;">Full Name</th>

                            <th style="border:1px solid;">Dob</th>

                            <th style="border:1px solid;">Gender</th>

                            <th style="border:1px solid;">Mobile No</th>

                            <th style="border:1px solid;">Whtsapp Number</th>

                            <th style="border:1px solid;">Email Address</th>

                          </tr>

                        </thead>

                        <tbody>

                          <tr>

                            <td style="border:1px solid;"><?php echo $_SESSION['profile']->user_name ?></td>

                            <td style="border:1px solid;"><?php echo $_SESSION['profile']->user_dob ?> </td>

                            <td style="border:1px solid;"><?php echo $_SESSION['profile']->model_gender ?></td>

                            <td style="border:1px solid;"><?php echo $_SESSION['profile']->user_number ?> </td>

                            <td style="border:1px solid;"><?php echo $_SESSION['profile']->whtsapp_number ?> </td>

                            <td style="border:1px solid;"><?php echo $_SESSION['profile']->user_email ?> </td>

                          </tr>

                        </tbody>

                      </table>

                      <table class="table" border="1">

                        <thead>

                          <tr>

                            <th style="border:1px solid;">Maritial Status</th>

                            <th style="border:1px solid;">Address</th>

                            <th style="border:1px solid;">Age</th>

                            <th style="border:1px solid;">Country</th>

                            <th style="border:1px solid;">State</th>

                            <th style="border:1px solid;">Biography</th>

                          </tr>

                        </thead>

                        <tbody>

                          <tr>

                            <td style="border:1px solid;"><?php echo $_SESSION['profile']->maritial_status ?></td>

                            <td style="border:1px solid;"><?php echo $_SESSION['profile']->user_address ?></td>

                            <td style="border:1px solid;"><?php echo $_SESSION['profile']->model_age ?></td>

                            <td style="border:1px solid;"><?php echo $_SESSION['profile']->model_country ?></td>

                            <td style="border:1px solid;"><?php echo $_SESSION['profile']->model_state ?></td>

                            <td style="border:1px solid;"><?php echo $_SESSION['profile']->model_biography ?></td>

                          </tr>

                        </tbody>

                      </table>

                    </div>

                  </div>

                </div>

                <div class="tab-pane panel" id="tab5">

                    <P></P>

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

                          <form method="post"  action="" enctype="multipart/form-data">

                            <input type="hidden"  class="form-control" name="user_id" value="<?php echo $test['user_id'] ?>" >

                            <div class="row">

                              <div class="col-md-12">

                                <label for="exampleInputEmail1">Full Name</label>

                                <input type="text" class="form-control" name="user_name" value="<?php echo $test['user_name'] ?>" >

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

                              <div class="col-md-12">

                                <label for="exampleInputEmail1">Email Address</label>

                                <input type="email" class="form-control" name="user_email" value="<?php echo $test['user_email'] ?>" >

                              </div>

                            

                            </div>

                            <div class="row">

                              <div class="col-md-6">

                                <label for="exampleInputEmail1">Biography</label>

                                <textarea class="form-control" rows="4"  name="model_biography"><?php echo $test['model_biography'] ?></textarea>

                              </div>

                              <div class="col-md-6">

                                <label for="exampleInputEmail1">Address</label>

                                <textarea class="form-control" rows="4"  name="user_address"><?php echo $test['user_address'] ?></textarea>

                              </div>

                            </div>

                            <br>

                            <div class="row" style="padding-right:8%;">

                              <div class="col-md-2">

                                <div class="form-group">

                                  <label class="control-label col-sm-2" for="height">Height</label>

                                  <input type="text" class="form-control"  name="model_height" value="<?php echo $test['model_height'] ?>" >

                                </div>

                              </div>

                              <div class="col-md-2">

                                <div class="form-group">

                                  <label class="control-label col-sm-2" >heels</label>

                                  <input type="text" class="form-control"  placeholder="height without heels"  name="model_heels" value="<?php echo $test['model_heels'] ?>">

                                </div>

                              </div>

                              <div class="col-md-2">

                                <div class="form-group">

                                  <label class="control-label col-sm-2" >weight</label>

                                  <input type="text" class="form-control"    name="model_weight" value="<?php echo $test['model_weight'] ?>">

                                </div>

                              </div>

                              <div class="col-md-2">

                                <div class="form-group">

                                  <label class="control-label col-sm-2" >waist</label> 

                                  <input type="text" class="form-control"    name="model_waist" value="<?php echo $test['model_waist'] ?>">

                                </div>

                              </div>

                              <div class="col-md-2">

                                <div class="form-group">

                                  <label class="control-label col-sm-2" >hips</label>

                                  <input type="text" class="form-control"    name="model_hips" value="<?php echo $test['model_hips'] ?>">

                                </div>

                              </div>

                              <div class="col-md-2">

                                <div class="form-group">

                                  <label class="control-label col-sm-2" >bust/chest</label>

                                  <input type="text" class="form-control"   name="model_bust" value="<?php echo $test['model_bust'] ?>" >

                                </div>

                              </div>

                            </div>

                            <div class="row"  style="padding-right:8%;">

                              <div class="col-md-2">

                                <div class="form-group">

                                  <label for="exampleSelect1">BODY TYPE</label>

                                  <select class="form-control" name="model_body_type">

                                    //?php $dtype = mysqli_query($connect,"select model_body_type from `user_reg` where ``user_id` = '$user_id' "); 

                                    <option><?php echo $test['model_body_type'] ?></option>

                                    <option>Triangle</option>

                                    <option>Inverted Triangle</option>

                                    <option>Oval</option>

                                    <option>Rectangular</option>

                                    <option>Trapazoid</option>

                                    <option>Straight</option>

                                    <option>Pear</option>

                                    <option>Apple</option>

                                    <option>Spoon</option>

                                    <option>Hourglass</option>

                                    <option>Top Hourglass</option>

                                    <option>Diamond</option>

                                    <option>Petite</option>

                                    <option>Athletic</option>

                                    <option>Lollipop</option>

                                    <option>Cornet</option>

                                  </select>

                                </div>

                              </div>

                              <div class="col-md-2">

                                <div class="form-group">

                                  <label for="exampleSelect1">HAIR LENGTH</label>

                                  <select class="form-control" name="model_hair_length">

                                    <option><?php echo $test['model_hair_length'] ?></option>

                                    <option>Bald</option>

                                    <option>Short</option>

                                    <option>Medium</option>

                                    <option>Long</option>

                                    <option>Shoulder Length</option>

                                  </select>

                                </div>

                              </div>

                              <div class="col-md-2">

                                <div class="form-group">

                                  <label for="exampleSelect1">HAIR COLOR</label>

                                  <select class="form-control" name="model_hair_color">

                                    <option><?php echo $test['model_hair_color'] ?></option>

                                    <option>Auburn</option>

                                    <option>Black</option>

                                    <option>Blonde</option>

                                    <option>Brown</option>

                                    <option>Dreadlocks</option>

                                    <option>Grey</option>

                                    <option>Red</option>

                                  </select>

                                </div>

                              </div>

                              <div class="col-md-2">

                                <div class="form-group">

                                  <label for="exampleSelect1">SKIN COLOR</label>

                                  <select class="form-control" name="moded_skin_color">

                                    <option><?php echo $test['moded_skin_color'] ?></option>

                                    <option>Fair</option>

                                    <option>Wheatish</option>

                                    <option>Brown</option>

                                    <option>Olive</option>

                                    <option>Tanned</option>

                                    <option>White</option>

                                    <option>Other</option>

                                  </select>

                                </div>

                              </div>

                              <div class="col-md-2">

                                <div class="form-group">

                                  <label for="exampleSelect1">EYE COLOR</label>

                                  <select class="form-control" name="model_eye_color">

                                    <option><?php echo $test['model_eye_color'] ?></option>

                                    <option>Black</option>

                                    <option>Blue</option>

                                    <option>Brown</option>

                                    <option>Green</option>

                                    <option>Grey</option>

                                    <option>Hazel</option>

                                    <option>Other</option>

                                  </select>

                                </div>

                              </div>

                              <div class="col-md-2">

                                <div class="form-group">

                                  <label for="exampleSelect1">SKIN TONE</label>

                                  <select class="form-control" name="model_skin_tone">

                                    <option><?php echo $test['model_skin_tone'] ?></option>

                                    <option>Cool: Hints of bluish, pink or a ruddy complexion</option>

                                    <option>Warm: Skin skews yellow, sallow, peachy or golden</option>

                                    <option>Neutral: Has no obvious overtones, skinâ€™s natural color is evident</option>

                                  </select>

                                </div>

                              </div>

                            </div>

                            <div class="row"  style="padding-right:8%;">

                              <div class="col-md-2">

                                <div class="form-group">

                                  <label for="exampleSelect1">CUP SIZE</label>

                                  <select class="form-control" name="model_cup_size">

                                    <option><?php echo $test['model_cup_size'] ?></option>

                                    <option>A</option>

                                    <option>B</option>

                                    <option>C</option>

                                    <option>D</option>

                                    <option>DD</option>

                                    <option>DDD</option>

                                    <option>E</option>

                                    <option>EE</option>

                                    <option>EEE</option>

                                    <option>F</option>

                                    <option>FF</option>

                                    <option>FFF</option>

                                    <option>G</option>

                                    <option>GG</option>

                                    <option>GGG</option>

                                  </select>

                                </div>

                              </div>

                              <div class="col-md-2">

                                <div class="form-group">

                                  <label for="exampleSelect1">TATTOOS</label>

                                  <select class="form-control" name="model_tattos">

                                    <option><?php echo $test['model_tattos'] ?></option>

                                    <option>none</option>

                                    <option>some</option>

                                    <option>many</option>

                                  </select>

                                </div>

                              </div>

                              <div class="col-md-2">

                                <div class="form-group">

                                  <label for="exampleSelect1">PEIRCING</label>

                                  <select class="form-control" name="model_peircing">

                                    <option>none</option>

                                    <option>some</option>

                                    <option>many</option>

                                  </select>

                                </div>

                              </div>

                              <div class="col-md-2">

                                <div class="form-group">

                                  <label for="exampleSelect1">compensation</label>

                                  <select class="form-control" name="model_compensation">

                                    <option value="<?php echo $test['model_compensation'] ?>"><?php echo $test['model_compensation'] ?></option>

                                    <option value="any">Any</option>

                                    <option value="depends_on_assignments">Depends on Assignments</option>

                                    <option value="paid_assignments">Paid Assignments only</option>

                                    <option value="tfp_tfcd">TFP/TFCD</option>

                                  </select>

                                </div>

                              </div>

                              <div class="col-md-2">

                                <div class="form-group">

                                  <label for="exampleSelect1">NUDE SHOOTS</label>

                                  <select class="form-control" name="model_nude_shoots">

                                    <option value="<?php echo $test['model_nude_shoots'] ?>"><?php echo $test['model_nude_shoots'] ?></option>

                                    <option value="yes">yes</option>

                                    <option value="no">No</option>

                                  </select>

                                </div>

                              </div>

                              <div class="col-md-2">

                                <div class="form-group">

                                  <label for="exampleSelect1">PORTFOLIO</label>

                                  <select class="form-control" name="model_portfolio">

                                    <option><?php echo $test['model_portfolio'] ?></option>

                                    <option>yes</option>

                                    <option>No</option>

                                  </select>

                                </div>

                              </div>

                            </div>

                            <div class="row">

                              <table class="table" border="1">

                                <tr>


                                  <td style="border:1px solid;"><input type="checkbox" name="modeling[]" value="adult" <?php $ch1=$test['model_modeling'];   $m1= explode(",",$ch1);

                                    if(in_array('adult',$m1))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?>       >  Adult</td>

                                  <td style="border:1px solid;"><input type="checkbox" name="modeling[]" value="art_shoot" <?php $ch2=$test['model_modeling'];   $m2= explode(",",$ch2);

                                    if(in_array('art_shoot',$m2))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?>     >  Art Shoot</td>

                                  <td style="border:1px solid;"><input type="checkbox" name="modeling[]" value="bikini" <?php $ch3=$test['model_modeling'];   $m3= explode(",",$ch3);

                                    if(in_array('bikini',$m3))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?>  >  Bikini</td>

                                  <td style="border:1px solid;"><input type="checkbox" name="modeling[]" value="body_paint"<?php $ch4=$test['model_modeling'];   $m4= explode(",",$ch4);

                                    if(in_array('body_paint',$m4))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?> >  Body Paint</td>

                                  <td style="border:1px solid;"><input type="checkbox" name="modeling[]" value="bold" <?php $ch5=$test['model_modeling'];   $m5= explode(",",$ch5);

                                    if(in_array('bold',$m5))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?> >  Bold</td>

                                  <td style="border:1px solid;"><input type="checkbox" name="modeling[]" value="calender" <?php $ch6=$test['model_modeling'];   $m6= explode(",",$ch6);

                                    if(in_array('calender',$m6))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?>>  Calendar</td>

                                </tr>

                                <tr>

                                  <td style="border:1px solid;"><input type="checkbox" name="modeling[]" value="cosplay"   <?php $ch7=$test['model_modeling'];   $m7= explode(",",$ch7);

                                    if(in_array('cosplay',$m7))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?>>  Cosplay</td>

                                  <td style="border:1px solid;"><input type="checkbox" name="modeling[]" value="editorial"  <?php $ch8=$test['model_modeling'];   $m8= explode(",",$ch8);

                                    if(in_array('editorial',$m8))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?>>  Editorial</td>

                                  <td style="border:1px solid;"><input type="checkbox" name="modeling[]" value="erotic"  <?php $ch9=$test['model_modeling'];   $m9= explode(",",$ch9);

                                    if(in_array('erotic',$m9))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?> >  Erotic</td>

                                  <td style="border:1px solid;"><input type="checkbox" name="modeling[]" value="exotic" <?php $ch10=$test['model_modeling'];   $m10= explode(",",$ch10);

                                    if(in_array('exotic',$m10))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?> >  Exotic</td>

                                  <td style="border:1px solid;"><input type="checkbox" name="modeling[]" value="fashion" <?php $ch11=$test['model_modeling'];   $m11= explode(",",$ch11);

                                    if(in_array('fashion',$m11))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?> >  Fashion</td>

                                  <td style="border:1px solid;"><input type="checkbox" name="modeling[]" value="fetish" <?php $ch12=$test['model_modeling'];   $m12= explode(",",$ch12);

                                    if(in_array('fetish',$m12))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?> >  Fetish</td>

                                </tr>

                                <tr>

                                  <td style="border:1px solid;"> <input type="checkbox" name="modeling[]" value="fit_modeling" <?php $ch13=$test['model_modeling'];   $m13= explode(",",$ch13);

                                    if(in_array('fit_modeling',$m13))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?> >  Fit Modeling</td>

                                  <td style="border:1px solid;"> <input type="checkbox" name="modeling[]" value="fitness" <?php $ch14=$test['model_modeling'];   $m14= explode(",",$ch14);

                                    if(in_array('fitness',$m14))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?> >  Fitness</td>

                                  <td style="border:1px solid;"> <input type="checkbox" name="modeling[]" value="fetish" <?php $ch15=$test['model_modeling'];   $m15= explode(",",$ch15);

                                    if(in_array('fetish',$m15))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?> >  Fetish</td>

                                  <td style="border:1px solid;"> <input type="checkbox" name="modeling[]" value="glamour" <?php $ch16=$test['model_modeling'];   $m16= explode(",",$ch16);

                                    if(in_array('glamour',$m16))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?> >  Glamour</td>

                                  <td style="border:1px solid;"> <input type="checkbox" name="modeling[]" value="implied" <?php $ch17=$test['model_modeling'];   $m17= explode(",",$ch17);

                                    if(in_array('implied',$m17))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?> >  Implied Nude</td>

                                  <td style="border:1px solid;"> <input type="checkbox" name="modeling[]" value="indian" <?php $ch18=$test['model_modeling'];   $m18= explode(",",$ch18);

                                    if(in_array('indian',$m18))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?> >  Indian</td>

                                </tr>

                                <tr>

                                  <td style="border:1px solid;"> <input type="checkbox" name="modeling[]" value="jewelry" <?php $ch19=$test['model_modeling'];   $m19= explode(",",$ch19);

                                    if(in_array('jewelry',$m19))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?> >  Jewelry</td>

                                  <td style="border:1px solid;"> <input type="checkbox" name="modeling[]" value="lifestyle" <?php $ch20=$test['model_modeling'];   $m20= explode(",",$ch20);

                                    if(in_array('lifestyle',$m20))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?> >  Lifestyle</td>

                                  <td style="border:1px solid;"> <input type="checkbox" name="modeling[]" value="lingerie" <?php $ch21=$test['model_modeling'];   $m21= explode(",",$ch21);

                                    if(in_array('lingerie',$m21))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?> >  Lingerie</td>

                                  <td style="border:1px solid;"> <input type="checkbox" name="modeling[]" value="magazine" <?php $ch22=$test['model_modeling'];   $m22= explode(",",$ch22);

                                    if(in_array('magazine',$m22))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?> >  Magazine</td>

                                  <td style="border:1px solid;"> <input type="checkbox" name="modeling[]" value="nude" <?php $ch23=$test['model_modeling'];   $m23= explode(",",$ch23);

                                    if(in_array('nude',$m23))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?> >  Nude</td>

                                  <td style="border:1px solid;"> <input type="checkbox" name="modeling[]" value="parts_modeling" <?php $ch24=$test['model_modeling'];   $m24= explode(",",$ch24);

                                    if(in_array('parts_modeling',$m24))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?> >  Parts Modeling</td>

                                </tr>

                                <tr>

                                  <td style="border:1px solid;"> <input type="checkbox" name="modeling[]" value="pinup" <?php $ch25=$test['model_modeling'];   $m25= explode(",",$ch25);

                                    if(in_array('pinup',$m25))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?> >  Pinup</td>

                                  <td style="border:1px solid;"> <input type="checkbox" name="modeling[]" value="promotional"  <?php $ch26=$test['model_modeling'];   $m26= explode(",",$ch26);

                                    if(in_array('promotional',$m26))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?> >  Promotional </td>

                                  <td style="border:1px solid;"> <input type="checkbox" name="modeling[]" value="ramp_model"  <?php $ch27=$test['model_modeling'];   $m27= explode(",",$ch27);

                                    if(in_array('ramp_model',$m27))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?> >  Ramp Model</td>

                                  <td style="border:1px solid;"> <input type="checkbox" name="modeling[]" value="semi_model"  <?php $ch28=$test['model_modeling'];   $m28= explode(",",$ch28);

                                    if(in_array('semi_model ',$m28))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?> >  Semi Nude</td>

                                  <td style="border:1px solid;"> <input type="checkbox" name="modeling[]" value="underwater"  <?php $ch29=$test['model_modeling'];   $m29= explode(",",$ch29);

                                    if(in_array('underwater',$m29))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?> >  Underwater</td>

                                  <td style="border:1px solid;"> <input type="checkbox" name="modeling[]" value="western"  <?php $ch30=$test['model_modeling'];   $m30= explode(",",$ch30);

                                    if(in_array('western',$m30))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?> >  Western</td>

                                </tr>

                              </table>

                            </div>

                            <div class="row">

                              <table class="table" border="1">

                                <tr>

               

                                  <td style="border:1px solid;"> <input type="checkbox" name="actor_actress[]"  value="bikini"  <?php $ch31=$test['model_actor_actress'];   $m31= explode(",",$ch31);

                                    if(in_array('bikini',$m31))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?> >  Bikini</td>

                                  <td style="border:1px solid;"> <input type="checkbox" name="actor_actress[]" value="bold_scenes"  <?php $ch32=$test['model_actor_actress'];   $m32= explode(",",$ch32);

                                    if(in_array('bold_scenes',$m32))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?> >  Bold Scenes</td>

                                  <td style="border:1px solid;"> <input type="checkbox" name="actor_actress[]" value="extras"  <?php $ch33=$test['model_actor_actress'];   $m33= explode(",",$ch33);

                                    if(in_array('extras',$m33))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?> >  Extras</td>

                                  <td style="border:1px solid;"> <input type="checkbox" name="actor_actress[]" value="intemate_scenes"  <?php $ch34=$test['model_actor_actress'];   $m34= explode(",",$ch34);

                                    if(in_array('intemate_scenes',$m34))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?> >  Intimate Scenes</td>

                                  <td style="border:1px solid;"> <input type="checkbox" name="actor_actress[]" value="junior_artist"  <?php $ch35=$test['model_actor_actress'];   $m35= explode(",",$ch35);

                                    if(in_array('junior_artist',$m35))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?> >  Junior Artist</td>

                                  <td style="border:1px solid;"> <input type="checkbox" name="actor_actress[]" value="kissing/lip_locks"  <?php $ch36=$test['model_actor_actress'];   $m36= explode(",",$ch36);

                                    if(in_array('kissing/lip_locks',$m36))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?> >  Kissing/Lip Locks</td>

                                </tr>

                                <tr>

                                  <td style="border:1px solid;"> <input type="checkbox" name="actor_actress[]" value="main_lead"  <?php $ch37=$test['model_actor_actress'];   $m37= explode(",",$ch37);

                                    if(in_array('main_lead',$m37))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?> >  Main Lead</td>

                                  <td style="border:1px solid;"> <input type="checkbox" name="actor_actress[]" value="open_with_nudity"  <?php $ch38=$test['model_actor_actress'];   $m38= explode(",",$ch38);

                                    if(in_array('open_with_nudity',$m38))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?> >  Open with Nudity</td>

                                  <td style="border:1px solid;"> <input type="checkbox" name="actor_actress[]" value="other_leads"  <?php $ch39=$test['model_actor_actress'];   $m39= explode(",",$ch39);

                                    if(in_array('other_leads',$m39))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?> >  Other Leads</td>

                                  <td style="border:1px solid;"> <input type="checkbox" name="actor_actress[]" value="stunt " <?php $ch40=$test['model_actor_actress'];   $m40= explode(",",$ch40);

                                    if(in_array('stunt ',$m40))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?> >  Stunt</td>

                                  <td style="border:1px solid;"> <input type="checkbox" name="actor_actress[]" value="supporting" <?php $ch41=$test['model_actor_actress'];   $m41= explode(",",$ch41);

                                    if(in_array('supporting',$m41))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?> >  Supporting</td>

                                  <td style="border:1px solid;"> <input type="checkbox" name="actor_actress[]" value="glamour_roles"  <?php $ch42=$test['model_actor_actress'];   $m42= explode(",",$ch42);

                                    if(in_array('glamour_roles',$m42))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?> >  Glamour Roles</td>

                                </tr>

                                <tr>

                                  <td style="border:1px solid;"> <input type="checkbox" name="actor_actress[]" value="short_films"   <?php $ch43=$test['model_actor_actress'];   $m43= explode(",",$ch43);

                                    if(in_array('short_films',$m43))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?> >  Short Films</td>

                                  <td style="border:1px solid;"> <input type="checkbox" name="actor_actress[]" value="documentary"   <?php $ch44=$test['model_actor_actress'];   $m44= explode(",",$ch44);

                                    if(in_array('documentary',$m44))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?> >  Documentary</td>

                                  <td style="border:1px solid;"> <input type="checkbox" name="actor_actress[]" value="yoytube"  <?php $ch45=$test['model_actor_actress'];   $m45= explode(",",$ch45);

                                    if(in_array('yoytube',$m45))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?> >  YouTube</td>

                                  <td style="border:1px solid;"> <input type="checkbox" name="actor_actress[]" value="web_series"  <?php $ch46=$test['model_actor_actress'];   $m46= explode(",",$ch46);

                                    if(in_array('web_series',$m46))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?> >  Web Series</td>

                                  <td style="border:1px solid;"> <input type="checkbox" name="actor_actress[]" value="feature_film"  <?php $ch47=$test['model_actor_actress'];   $m47= explode(",",$ch47);

                                    if(in_array('feature_film',$m47))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?> >  Feature Film</td>

                                  <td style="border:1px solid;"> <input type="checkbox" name="actor_actress[]" value="regonal_films" <?php $ch48=$test['model_actor_actress'];   $m48= explode(",",$ch48);

                                    if(in_array('regonal_films',$m48))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?> >  Regonal Films</td>

                                </tr>

                              </table>

                            </div>

                            <div class="row">

                              <table class="table" border="1">

                                <tr>

                                  <td style="border:1px solid;"> <input type="checkbox" name="artist_perfomer[]" value="dancer" <?php $ch49=$test['model_artist_perfomer'];   $m49= explode(",",$ch49);

                                    if(in_array('dancer',$m49))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?> >  Dancer</td>

                                  <td style="border:1px solid;"> <input type="checkbox" name="artist_perfomer[]" value="emcee" <?php $ch50=$test['model_artist_perfomer'];   $m50= explode(",",$ch50);

                                    if(in_array('emcee',$m50))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?> >  Emcee</td>

                                  <td style="border:1px solid;"> <input type="checkbox" name="artist_perfomer[]" value="host/hostess" <?php $ch51=$test['model_artist_perfomer'];   $m51= explode(",",$ch51);

                                    if(in_array('host/hostess',$m51))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?> >  Host / Hostess</td>

                                  <td style="border:1px solid;"> <input type="checkbox" name="artist_perfomer[]" value="item_dancer" <?php $ch52=$test['model_artist_perfomer'];   $m52= explode(",",$ch52);

                                    if(in_array('item_dancer',$m52))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?> >  Item Dancer</td>

                                  <td style="border:1px solid;"> <input type="checkbox" name="artist_perfomer[]" value="singer" <?php $ch53=$test['model_artist_perfomer'];   $m53= explode(",",$ch53);

                                    if(in_array('singer',$m53))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?> >  Singer</td>

                                  <td style="border:1px solid;"> <input type="checkbox" name="artist_perfomer[]" value="stage_artist" <?php $ch54=$test['model_artist_perfomer'];   $m54= explode(",",$ch54);

                                    if(in_array('stage_artist',$m54))

                                    {

                                        echo 'checked="checked"';

                                    }

                                     ?> >  Stage Artist</td>

                                </tr>

                              </table>

                            </div>

                            <div class="row">

                              <div class="col-md-6">

                                <div class="form-group">

                                  <label for="exampleInputEmail1">Completed Projects</label>

     <textarea class="form-control" name="completed_projects" rows="3" id="comment"><?php echo $test['model_completed_project'] ?></textarea>

                                </div>

                              </div>

                              <div class="col-md-6">

                                <div class="form-group">

                                  <label for="exampleInputEmail1">Current Projects</label>

                                  <textarea class="form-control" name="current_projects" rows="3" id="comment"><?php echo $test['model_current_project']; ?></textarea>

                                </div>

                              </div>

                            </div>

                            <div class="row">

                              <div class="col-md-3">

                                <div class="form-group">

                                  <label for="exampleInputEmail1">Upload image 1</label>

                                  <input type="file" class="form-control" name="image1">

                                </div>

                              </div>

                              <div class="col-md-3">

                                <div class="form-group">

                                  <label for="exampleInputEmail1">Upload image 2</label>

                                  <input type="file" class="form-control" name="upload_image2">

                                </div>

                              </div>

                              <div class="col-md-3">

                                <div class="form-group">

                                  <label for="exampleInputEmail1">Upload image 3</label>

                                  <input type="file" class="form-control" name="upload_image3">

                                </div>

                              </div>

                              <div class="col-md-3">

                                <div class="form-group">

                                  <label for="exampleInputEmail1">Upload image 4</label>

                                  <input type="file" class="form-control" name="upload_image4">

                                </div>

                              </div>

                            </div>

                            <div class="row">

                              <div class="col-md-3">

                                <div class="form-group">

                                  <label for="exampleInputEmail1">Upload image 5</label>

                                  <input type="file" class="form-control" name="upload_image5">

                                </div>

                              </div>

                              <div class="col-md-3">

                                <div class="form-group">

                                  <label for="exampleInputEmail1">Upload image 6</label>

                                  <input type="file" class="form-control" name="upload_image6">

                                </div>

                              </div>

                              <div class="col-md-3">

                                <div class="form-group">

                                  <label for="exampleInputEmail1">Upload image 7</label>

                                  <input type="file" class="form-control" name="upload_image7">

                                </div>

                              </div>

                              <div class="col-md-3">

                                <div class="form-group">

                                  <label for="exampleInputEmail1">Upload image 8</label>

                                  <input type="file" class="form-control" name="upload_image8">

                                </div>

                              </div>

                            </div>

                            <div class="row">

                              <div class="col-md-3">

                                <div class="form-group">

                                  <label for="exampleInputEmail1">Upload video link 1</label>

                                  <input type="text" class="form-control" name="video1">

                                </div>

                              </div>

                              <div class="col-md-3">

                                <div class="form-group">

                                  <label for="exampleInputEmail1">Upload video link 2</label>

                                  <input type="text" class="form-control" name="video2">

                                </div>

                              </div>

                              <div class="col-md-3">

                                <div class="form-group">

                                  <label for="exampleInputEmail1">Upload video link 3</label>

                                  <input type="text" class="form-control" name="video3">

                                </div>

                              </div>

                              <div class="col-md-3">

                                <div class="form-group">

                                  <label for="exampleInputEmail1">Upload video link 4</label>

                                  <input type="text" class="form-control" name="video4">

                                </div>

                              </div>

                            </div>

                            <div class="row">

                              <div class="col-md-3">

                                <div class="form-group">

                                  <label for="exampleInputEmail1">Upload Audio link 1</label>

                                  <input type="text" class="form-control" name="audio1">

                                </div>

                              </div>

                              <div class="col-md-3">

                                <div class="form-group">

                                  <label for="exampleInputEmail1">Upload Audio link 2</label>

                                  <input type="text" class="form-control" name="audio2">

                                </div>

                              </div>

                              <div class="col-md-3">

                                <div class="form-group">

                                  <label for="exampleInputEmail1">Upload Audio link 3</label>

                                  <input type="text" class="form-control" name="audio3">

                                </div>

                              </div>

                              <div class="col-md-3">

                                <div class="form-group">

                                  <label for="exampleInputEmail1">Upload Audio link 4</label>

                                  <input type="text" class="form-control" name="audio4">

                                </div>

                              </div>

                            </div>

                            <ul class="list-inline pull-right">

                              <input type="submit" class="btn btn-primary next-step" name="update_model"  value="Update ">

                            </ul>

                          </form>

                          <?php } ?>

                        </div>

                      </div>

                    </div>

                  </div>

                </div>

                <!-- Enquiry tab -->

                <div class="tab-pane panel" id="tabe">

                    <P></P>

                    <div class="col-md-12">

                        <div class="col-md-6 smallEnquiry">

                  <div class="well well-sm">

                    <h4>CLIENT ENQUIRY</h4>

                  </div>

                  <div class="" style="width:100%">

                    <div class="col-md-12">

                      <div class="row">

                        <table style="border:1px solid !important ;    width: 100%;    margin-left: 14px;" class="smallTable">

                          <tr style="    font-size: 14px;">

                            

                            <th style="width: 25%;">Shoot Date</th>

                            <th style="width: 25%;">Location</th>

                            <th style="width: 25%;">Shoot Type</th>

                            <th style="width: 25%;">Requirement</th>

                          </tr>

                          <?php $model_code = $_SESSION['profile']->model_code;  

                            $sql = mysqli_query($connect,"select * from `send_enquiry` where `model_code` = '$model_code'");

                            

                           

                            

                            while($e = mysqli_fetch_assoc($sql))

                            {

                            

                            

                            ?>

                          <tr style="    font-size: 13px;">

                           

                            <td style="border:1px solid;"><?php echo $e['shoot_date']; ?></td>

                            <td style="border:1px solid;"><?php echo $e['shoot_location']; ?></td>

                            <td style="border:1px solid;"><?php echo $e['shoot_type']; ?></td>

                            <td style="border:1px solid;"><?php echo $e['shoot_requirement']; ?></td>

                          </tr>

                          <?php } ?>

                        </table>

                      </div>

                    </div>

                  </div>

                  

                  

                  

                  </div>

                   <div class="col-md-6 smallEnquiry">

                       

                       

                       

                         <div class="well well-sm">

                    <h4>APPLIED CASTINGS</h4>

                  </div>

                  <div class="" style="width:100%">

                    <div class="col-md-12">

                      <div class="row">

                        <table style="border:1px solid !important ;    width: 100%;    margin-left: 14px;" class="smallTable">

                          <tr class="bor" >

                            <th style="border:1px solid;">#</th>

                            <th style="border:1px solid;">Casting Heading</th>

                           

                            <th style="border:1px solid;">Status</th>

                            

                          </tr>

                          <?php $model_code = $_SESSION['profile']->model_code;  

            $casting = mysqli_query($connect,"SELECT casting_enquiry.casting_enquiry_id,casting_enquiry.casting_status, casting.c_id,casting.c_img,casting.c_heading FROM casting_enquiry INNER JOIN casting ON casting_enquiry.casting_id = casting.c_id WHERE model_code = '$model_code'");

        // echo "SELECT casting_enquiry.casting_enquiry_id,casting.c_id,casting.c_img,casting.c_heading FROM casting_enquiry INNER JOIN casting ON casting_enquiry.casting_enquiry_id=casting.c_id where model_code = '$model_code'";            

                            while($e = mysqli_fetch_assoc($casting))

                            {

                            

                            

                            ?>

                          <tr class="bor">

                            

                            <td style="border:1px solid;"> <img src="admin/<?php echo $e['c_img']; ?>" style="    width: 70px;

    height: 70px;" class="img-responsive"></td>

                            <td style="border:1px solid;"><?php echo $e['c_heading']; ?></td>

                            

                            <td style="border:1px solid;"><?php  $casting_id =  $e['casting_status'];  

                            

                            if($casting_id == 1)

                            { 

                                

                                echo "in process";

                            }

                            elseif($casting_id == 2)

                            {

                                echo "approved";

                            }

                            elseif($casting_id == 3)

                            {

                                echo "rejected";

                            }

                            ?></td>

                          </tr>

                          <?php } ?>

                        </table>

                      </div>

                    </div>

                  </div>

                       

                       

                       

                       

                       

                       

                       

                       

                       

                       

                       

                       

                       

                       

                       

                       

                       

                       

                       

                       

                       

                       

                       

                       

                       

                       

                       

                       

                       

                       

                       

                       

                       

                       

                       

                       

                       

                       

                       

                       

                       

                       

                       

                       

                       

                       

                       

                       

                       

                       

                       

                       </div>

                  

                  

                  

                  

                  

                  

                  

                  

                  

                  

                  

                  

                  

                  

                  

                  

                  

                  

                  

                  

                  

                  

                  

                  </div>

                </div>

                <!-- close Enquiry -->

                <div class="tab-pane panel " id="tab10">

                    <P></P>

                  <div class="well well-sm">

                    <h4>PERSONAL ATTRIBUTES</h4>

                  </div>

                  <div class="container" style="width:100%" >

                    <div class="row">

                      <table class="table" border="1">

                        <thead>

                          <tr>

                            <th style="border:1px solid;">Height</th>

                            <th style="border:1px solid;">heels</th>

                            <th style="border:1px solid;">weight</th>

                            <th style="border:1px solid;">waist</th>

                            <th style="border:1px solid;">hips</th>

                            <th style="border:1px solid;">bust/chest</th>

                            <th style="border:1px solid;">BODY TYPE</th>

                            <th style="border:1px solid;">HAIR LENGTH</th>

                          </tr>

                        </thead>

                        <tbody>

                          <tr>

                            <td style="border:1px solid;"><?php echo $_SESSION['profile']->model_height ?></td>

                            <td style="border:1px solid;"><?php echo $_SESSION['profile']->model_heels ?> </td>

                            <td style="border:1px solid;"><?php echo $_SESSION['profile']->model_weight ?></td>

                            <td style="border:1px solid;"><?php echo $_SESSION['profile']->model_waist ?> </td>

                            <td style="border:1px solid;"><?php echo $_SESSION['profile']->model_hips ?> </td>

                            <td style="border:1px solid;"><?php echo $_SESSION['profile']->model_bust ?> </td>

                            <td style="border:1px solid;"><?php echo $_SESSION['profile']->model_body_type ?> </td>

                            <td style="border:1px solid;"><?php echo $_SESSION['profile']->model_hair_length ?> </td>

                          </tr>

                        </tbody>

                      </table>

                      <table class="table" border="1">

                        <thead>

                          <tr>

                            <th style="border:1px solid;">HAIR COLOR</th>

                            <th style="border:1px solid;">SKIN COLOR</th>

                            <th style="border:1px solid;">EYE COLOR</th>

                            <th style="border:1px solid;">SKIN TONE</th>

                            <th style="border:1px solid;">CUP SIZE</th>

                            <th style="border:1px solid;">TATTOOS</th>

                          </tr>

                        </thead>

                        <tbody>

                          <tr>

                            <td style="border:1px solid;"><?php echo $_SESSION['profile']->model_hair_color ?></td>

                            <td style="border:1px solid;"><?php echo $_SESSION['profile']->moded_skin_color ?></td>

                            <td style="border:1px solid;"><?php echo $_SESSION['profile']->model_eye_color ?></td>

                            <td style="border:1px solid;"><?php echo $_SESSION['profile']->model_skin_tone ?></td>

                            <td style="border:1px solid;"><?php echo $_SESSION['profile']->model_cup_size ?></td>

                            <td style="border:1px solid;"><?php echo $_SESSION['profile']->model_tattos ?></td>

                          </tr>

                        </tbody>

                      </table>

                      <table class="table" border="1">

                        <thead>

                          <tr>

                            <th style="border:1px solid;">PEIRCINGS</th>

                            <th style="border:1px solid;">compensation</th>

                            <th style="border:1px solid;">NUDE SHOOTS</th>

                            <th style="border:1px solid;">Model</th>

                            <th style="border:1px solid;">Actor/Actress</th>

                            <th style="border:1px solid;">Artist/perfomer</th>

                          </tr>

                        </thead>

                        <tbody>

                          <tr>

                            <td style="border:1px solid;"><?php echo "frhdgb";?></td>

                            <td style="border:1px solid;"><?php echo $_SESSION['profile']->model_compensation ?></td>

                            <td style="border:1px solid;"><?php echo $_SESSION['profile']->model_nude_shoots ?></td>

                            <td style="border:1px solid;"><?php echo $_SESSION['profile']->model_modeling ?></td>

                            <td style="border:1px solid;"><?php echo $_SESSION['profile']->model_actor_actress ?></td>

                            <td style="border:1px solid;"><?php echo $_SESSION['profile']->model_artist_perfomer ?></td>

                          </tr>

                        </tbody>

                      </table>

                      <table class="table" border="1">

                        <thead>

                          <tr>

                          </tr>

                        </thead>

                        <tbody>

                          <tr>

                          </tr>

                        </tbody>

                      </table>

                    </div>

                  </div>

                </div>

                <div class="tab-pane panel fade in " id="tab2">

                    <P></P>

                  <div class="well well-sm">

                    <h4>EXPRERIENCE</h4>

                  </div>

                  <div class="container" style="width:100%" >

                    <div class="row">

                      <table class="table" border="1">

                        <thead>

                          <tr>

                            <th style="border:1px solid;">Completed Projects</th>

                            <th style="border:1px solid;">Current Projects</th>

                          </tr>

                        </thead>

                        <tbody>

                          <tr>

                            <td style="border:1px solid;"><?php echo $_SESSION['profile']->model_completed_project ?></td>

                            <td style="border:1px solid;"><?php echo $_SESSION['profile']->model_current_project ?></td>

                          </tr>

                        </tbody>

                      </table>

                    </div>

                  </div>

                </div>

                <div class="tab-pane panel fade in " id="tab3">

                    <P></P>

                  <div class="well well-sm">

                    <h4>MEDIA GALLERY</h4>

                  </div>

                  <div class="container" style="width:100%" >

                    <div class="row">

                      <table class="table" border="1">

                        <thead>

                          <tr>

                            <th style="border:1px solid;">image 1</th>

                            <th style="border:1px solid;">image 2</th>

                            <th style="border:1px solid;">image 3</th>

                            <th style="border:1px solid;">image 4</th>

                            <th style="border:1px solid;">image 5</th>

                            <th style="border:1px solid;">image 6</th>

                            <th style="border:1px solid;">image 7</th>

                            <th style="border:1px solid;">image 8</th>

                          </tr>

                        </thead>

                        <tbody>

                          <tr>

                            <td style="border:1px solid;"><img src="admin/model/<?php echo $_SESSION['profile']->model_image1; ?>" style="height: 80px;width: 80px;" class="img-responsive"></td>

                            <td style="border:1px solid;"><img src="admin/model/<?php echo $_SESSION['profile']->model_image2; ?>" style="height: 80px;width: 80px;" class="img-responsive"></td>

                            <td style="border:1px solid;"><img src="admin/model/<?php echo $_SESSION['profile']->model_image3; ?>" style="height: 80px;width: 80px;" class="img-responsive"></td>

                            <td style="border:1px solid;"><img src="admin/model/<?php echo $_SESSION['profile']->model_image4; ?>" style="height: 80px;width: 80px;" class="img-responsive"></td>

                            <td style="border:1px solid;"><img src="admin/model/<?php echo $_SESSION['profile']->model_image5; ?>" style="height: 80px;width: 80px;" class="img-responsive"></td>

                            <td style="border:1px solid;"><img src="admin/model/<?php echo $_SESSION['profile']->model_image6; ?>" style="height: 80px;width: 80px;" class="img-responsive"></td>

                            <td style="border:1px solid;"><img src="admin/model/<?php echo $_SESSION['profile']->model_image7; ?>" style="height: 80px;width: 80px;" class="img-responsive"></td>

                            <td style="border:1px solid;"><img src="admin/model/<?php echo $_SESSION['profile']->model_image8; ?>" style="height: 80px;width: 80px;" class="img-responsive"></td>

                          </tr>

                        </tbody>

                      </table>

                      <table class="table" border="1">

                        <thead>

                          <tr>

                            <th style="border:1px solid;">video link 1</th>

                            <th style="border:1px solid;">video link 2</th>

                            <th style="border:1px solid;">video link 3</th>

                            <th style="border:1px solid;">video link 4</th>

                          </tr>

                        </thead>

                        <tbody>

                          <tr>

                            <td style="border:1px solid;"><iframe width="200" height="100" src="<?php echo $_SESSION['profile']->model_video1 ?>" allowfullscreen>

                              </iframe>

                            </td>

                            <td style="border:1px solid;"><iframe width="200" height="100" src="<?php echo $_SESSION['profile']->model_video2 ?>" allowfullscreen>

                              </iframe>

                            </td>

                            <td style="border:1px solid;"><iframe width="200" height="100" src="<?php echo $_SESSION['profile']->model_video3 ?>" allowfullscreen>

                              </iframe>

                            </td>

                            <td style="border:1px solid;"><iframe width="200" height="100" src="<?php echo $_SESSION['profile']->model_video4 ?>" allowfullscreen>

                              </iframe>

                            </td>

                          </tr>

                        </tbody>

                      </table>

                      <table class="table" border="1">

                        <thead>

                          <tr>

                            <th style="border:1px solid;">audio link 1</th>

                            <th style="border:1px solid;">audio link 2</th>

                            <th style="border:1px solid;">audio link 3</th>

                            <th style="border:1px solid;">audio link 4</th>

                          </tr>

                        </thead>

                        <tbody>

                          <tr>

                            <td style="border:1px solid;">

                              <audio controls style="width: 200px;">

                                <source  src="<?php echo $_SESSION['profile']->model_audio1 ?>" type="audio/mpeg">

                              </audio>

                            </td>

                            <td style="border:1px solid;">

                              <audio controls style="width: 200px;">

                                <source src="<?php echo $_SESSION['profile']->model_audio2 ?>" type="audio/mpeg">

                              </audio>

                            </td>

                            <td style="border:1px solid;">

                              <audio controls style="width: 200px;">

                                <source src="<?php echo $_SESSION['profile']->model_audio3 ?>" type="audio/mpeg">

                              </audio>

                            </td>

                            <td style="border:1px solid;">

                              <audio controls style="width: 200px;">

                                <source src="<?php echo $_SESSION['profile']->model_audio4 ?>" type="audio/mpeg">

                              </audio>

                            </td>

                          </tr>

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
<td><a class="btn btn-danger" style="padding:8px;color:white;" href="messages_delete.php?id=<?php echo $rows['id'] ?>&user_type=model">Delete</a></td>
    </tr> 
         
<?php $i++; }?>

  </tbody>
</table>
     </div>
                  </div>
 
                 <div class="tab-pane panel fade in " id="extras">
                  <div class="well well-sm">
                    <h4>Your Images</h4>
                  </div>
                  <div class="container">
                    <div class="row">
                      <table class="table" border="1">

                        <thead>

                          <tr>

                            <th style="border:1px solid;">image 9</th>

                            <th style="border:1px solid;">image 10</th>

                            <th style="border:1px solid;">image 11</th>

                            <th style="border:1px solid;">image 12</th>

                            <th style="border:1px solid;">image 13</th>

                            <th style="border:1px solid;">image 14</th>

                            <th style="border:1px solid;">image 15</th>

                          </tr>

                        </thead>

                        <tbody>

                          <tr>

                            <td style="border:1px solid;"><img src="admin/model/<?php echo $_SESSION['profile']->model_image9; ?>" style="height: 80px;width: 80px;" class="img-responsive"></td>

                            <td style="border:1px solid;"><img src="admin/model/<?php echo $_SESSION['profile']->model_image10; ?>" style="height: 80px;width: 80px;" class="img-responsive"></td>

                            <td style="border:1px solid;"><img src="admin/model/<?php echo $_SESSION['profile']->model_image11; ?>" style="height: 80px;width: 80px;" class="img-responsive"></td>

                            <td style="border:1px solid;"><img src="admin/model/<?php echo $_SESSION['profile']->model_image12; ?>" style="height: 80px;width: 80px;" class="img-responsive"></td>

                            <td style="border:1px solid;"><img src="admin/model/<?php echo $_SESSION['profile']->model_image13; ?>" style="height: 80px;width: 80px;" class="img-responsive"></td>

                            <td style="border:1px solid;"><img src="admin/model/<?php echo $_SESSION['profile']->model_image14; ?>" style="height: 80px;width: 80px;" class="img-responsive"></td>

                            <td style="border:1px solid;"><img src="admin/model/<?php echo $_SESSION['profile']->model_image15; ?>" style="height: 80px;width: 80px;" class="img-responsive"></td>


                          </tr>

                        </tbody>

                      </table>
                    </div>
                    <form method="post" action="" enctype="multipart/form-data">
                    <div class="row" style="border:1px solid;">
 
                          
                            <div class="col-md-3" style="border:1px solid;">
                              <label for="">Upload image 9</label>
                              <input type="file" name="model_image9" required>
                            </div>
                            <div class="col-md-3" style="border:1px solid;">
                              <label for="">Upload image 10</label>
                              <input type="file" name="model_image10" required>
                            </div>
                            <div class="col-md-3" style="border:1px solid;">
                              <label for="">Upload image 11</label>
                              <input type="file" name="model_image11" required>
                            </div>
                            <div class="col-md-3" style="border:1px solid;">
                              <label for="">Upload image 12</label>
                              <input type="file" name="model_image12" required>
                            </div>
                           
                           
  
                    </div>
                    <div class="row" style="border:1px solid;">
                       <div class="col-md-3" style="border:1px solid;">
                              <label for="">Upload image 13</label>
                              <input type="file" name="model_image13" required>
                            </div>
                            <div class="col-md-3" style="border:1px solid;">
                              <label for="">Upload image 14</label>
                              <input type="file" name="model_image14" required>
                            </div>
                            <div class="col-md-3" style="border:1px solid;">
                              <label for="">Upload image 15</label>
                              <input type="file" name="model_image15" required>
                            </div>
                    </div>
                     <input type="submit" name="extra_submit" value="Upload"
                             style="background-color:#e0006c;border:0px;padding:4px 20px;margin-top:8px;">
                          </form>
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
                  <table style="oveflow:auto;">
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

                 <div class="tab-pane panel fade in " id="tab6">

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

              <div style="font-size:18px;text-align:center;padding:24px;">

                For any support contact us at <a href="#" style="color:black;font-weight:bold;">support@spotlightstudioz.com</a>  

              </div>

            </div>

          </div>

        </div>

      </div>

      </div>

      </div>

    </section>

    <div id="profile1" class="modal fade" role="dialog">

      <div class="modal-dialog">

        <!-- Modal content-->

        <div class="modal-content">

          <div class="modal-header">

            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <h4 class="modal-title">Modal Header</h4>

          </div>

          <div class="modal-body">

            <p>Coming Soon....</p>

          </div>

          <div class="modal-footer">

            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

          </div>

        </div>

      </div>

    </div>

    <div id="profile2" class="modal fade" role="dialog">

      <div class="modal-dialog">

        <!-- Modal content-->

        <div class="modal-content">

          <div class="modal-header">

            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <h4 class="modal-title">Modal Header</h4>

          </div>

          <div class="modal-body">

            <p>Coming Soon....</p>

          </div>

          <div class="modal-footer">

            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

          </div>

        </div>

      </div>

    </div>

    <div id="profile3" class="modal fade" role="dialog">

      <div class="modal-dialog">

        <!-- Modal content-->

        <div class="modal-content">

          <div class="modal-header">

            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <h4 class="modal-title">Modal Header</h4>

          </div>

          <div class="modal-body">

            <p>Coming Soon....</p>

          </div>

          <div class="modal-footer">

            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

          </div>

        </div>

      </div>

    </div>

        
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


       
 <div id="current_location" class="modal fade" role="dialog">

      <div class="modal-dialog">

        <!-- Modal content-->

        <div class="modal-content">

         

          <div class="modal-body">

            <form method="post" action="">
                  <div class="form-group">
  <input class="form-control" name="current_location" placeholder="Update current location" required>
                  </div>
                  <input type="submit" value="Save" class="btn" style="background-color:#e0006c;color:white;padding:8px;" name="location_edit">
                  </form>

          </div>

         

        </div>

      </div>

    </div>




            <?php  include('footer.php');  ?>











            <?php include('copyright2.php'); ?>







        </div>



        <!-- eof #box_wrapper -->



    </div>



    <!-- eof #canvas -->



<div class="lightbox" id="editBox">
      <h2 class="text-center">Message</h2>
      <div class="read_show text-center">
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


<script src="js/compressed.js"></script>

    <script src="js/main.js"></script>

   <script src="js/featherlight.min.js"></script>

    <script src="js/toast.min.js"></script>




</body>



<?php include("ajax.php") ?>

<script type="text/javascript">
    
    $(document).ready(function(){
       $(document).delegate(".socials","click",function(){
        

            var id=$(this).data("value");
            window.open("http://"+id);
      
       });
    });

</script>
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
$('.lightbox').show();
$('.featherlight').hide();
$('#editBox1').show("show");
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



<!-- Mirrored from webdesign-finder.com/html/models/gallery-regular-4-cols.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Jul 2018 07:45:36 GMT -->



</html>
<?php

if(isset($_POST['location_edit'])){

$locid=$_SESSION['profile']->user_id;
$current_location=$_POST['current_location'];
$query=mysqli_query($connect,"UPDATE user_reg set current_location='$current_location' where user_id='$locid' ");
if($query){

echo "<script type='text/javascript'>

 $.toast({
                heading: 'Success',
                text: 'Your current location has been updated successfully',
                showHideTransition: 'fade',
                icon: 'success',
                position: 'top-right',
                hideAfter: 8000
        });

</script>";    

}

}

if(isset($_POST['review_edit'])){

$name=$_SESSION['profile']->user_name;
$review=$_POST['edit_review'];
$query=mysqli_query($connect,"UPDATE testimonials set c_details='$review' where c_name='$name' ");

    if($query)
    {
header("Location:model_profile.php");
    }

}

if(isset($_POST['review_submit'])){

$photo=$_SESSION['profile']->model_image1;
$name=$_SESSION['profile']->user_name;
$review=$_POST['review'];
$query=mysqli_query($connect,"INSERT into testimonials values('','$name','$review','$photo')");

    if($query)
    {
header("Location:model_profile.php");
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

if(isset($_POST['extra_submit'])){

$user_id=$_SESSION['profile']->user_id;
$date = date('Y-m-d').rand(1,10000000);
$profile_name9            = $date.$_FILES['model_image9']['name'];
$profile_old_path9       = $_FILES['model_image9']['tmp_name'];
$profile_new_path9        = 'admin/model/' . $profile_name9;
move_uploaded_file($profile_old_path9, $profile_new_path9);
$profile_name10            = $date.$_FILES['model_image10']['name'];
$profile_old_path10       = $_FILES['model_image10']['tmp_name'];
$profile_new_path10        = 'admin/model/' . $profile_name10;
move_uploaded_file($profile_old_path10, $profile_new_path10);
$profile_name11            = $date.$_FILES['model_image11']['name'];
$profile_old_path11       = $_FILES['model_image11']['tmp_name'];
$profile_new_path11        = 'admin/model/' . $profile_name11;
move_uploaded_file($profile_old_path11, $profile_new_path11);
$profile_name12            = $date.$_FILES['model_image12']['name'];
$profile_old_path12       = $_FILES['model_image12']['tmp_name'];
$profile_new_path12        = 'admin/model/' . $profile_name12;
move_uploaded_file($profile_old_path12, $profile_new_path12);
$profile_name13            = $date.$_FILES['model_image13']['name'];
$profile_old_path13       = $_FILES['model_image13']['tmp_name'];
$profile_new_path13        = 'admin/model/' . $profile_name13;
move_uploaded_file($profile_old_path13, $profile_new_path13);
$profile_name14            = $date.$_FILES['model_image14']['name'];
$profile_old_path14       = $_FILES['model_image14']['tmp_name'];
$profile_new_path14        = 'admin/model/' . $profile_name14;
move_uploaded_file($profile_old_path14, $profile_new_path14);
$profile_name15            = $date.$_FILES['model_image15']['name'];
$profile_old_path15       = $_FILES['model_image15']['tmp_name'];
$profile_new_path15        = 'admin/model/' . $profile_name15;
move_uploaded_file($profile_old_path15, $profile_new_path15);


$query                  = mysqli_query($connect,"update user_reg set 
   
   
   `model_image9`='$profile_name9',
   `model_image10`='$profile_name10',
   `model_image11`='$profile_name11',
   `model_image12`='$profile_name12',
   `model_image13`='$profile_name13',
   `model_image14`='$profile_name14',
   `model_image15`='$profile_name15' where `user_id` = '$user_id'");
   
   
 
if($query)
{

  echo
   "<script type='text/javascript'>
 $.toast({               
 heading: 'Success',                
text: 'Images have been uploaded successfully<br>Please Relogin to see the changes',               
 showHideTransition: 'fade',                
icon: 'success',                
position: 'top-right',                
hideAfter: 8000        
});        
</script>";    

}

}


if(isset($_POST['update_model']))
{
 
  $user_id                  = $_POST['user_id'];
  $user_name                = $_POST['user_name'];
  $user_number              = $_POST['user_number'];
  $whtsapp_number           = $_POST['whtsapp_number'];
  $user_email               = $_POST['user_email'];

  $model_biography          = $_POST['model_biography'];
  $user_address             = $_POST['user_address'];
  $model_height             = $_POST['model_height'];
  $model_heels              = $_POST['model_heels'];
  $model_weight             = $_POST['model_weight'];
  $model_waist              = $_POST['model_waist'];
  $model_hips               = $_POST['model_hips'];
  $model_bust               = $_POST['model_bust'];
  $model_body_type          = $_POST['model_body_type'];
  $model_hair_length        = $_POST['model_hair_length'];
  $model_hair_color         = $_POST['model_hair_color'];
  $moded_skin_color         = $_POST['moded_skin_color'];
  $model_eye_color          = $_POST['model_eye_color'];
  $model_skin_tone          = $_POST['model_skin_tone'];
  $model_cup_size           = $_POST['model_cup_size'];
  $model_tattos             = $_POST['model_tattos'];
  $model_compensation       = $_POST['model_compensation'];
  $model_nude_shoots        = $_POST['model_nude_shoots'];
  $model_portfolio          = $_POST['model_portfolio'];
  //$model_package            = $_POST['model_package'];
if(isset($_POST['modeling'])){
   $model_modeling           = implode(',', $_POST['modeling']);
mysqli_query($connect,"UPDATE user_reg set  `model_modeling`='$model_modeling' where user_id='$user_id' ");
}

if(isset($_POST['actor_actress'])){
  $model_actor_actress      = implode(',', $_POST['actor_actress']);
   mysqli_query($connect,"UPDATE user_reg set `model_actor_actress`='$model_actor_actress' where user_id='$user_id' ");
}
if(isset($_POST['artist_perfomer'])){
  $model_artist_perfomer    = implode(',', $_POST['artist_perfomer']);
   mysqli_query($connect,"UPDATE user_reg set `model_artist_perfomer`='$model_artist_perfomer' where user_id='$user_id' ");
}
  
  
  $model_completed_projects = $_POST['completed_projects'];
  $model_current_project    = $_POST['current_projects'];

$date = date('Y-m-d').rand(1,10000000);

if(strlen($_FILES['image1']['name'])>0){
$profile_name1            = $date.$_FILES['image1']['name'];
$profile_type1            = $_FILES['image1']['type'];
$profile_size1            = $_FILES['image1']['size'];
$profile_old_path1        = $_FILES['image1']['tmp_name'];
$profile_new_path1        = 'admin/model/' . $profile_name1;
move_uploaded_file($profile_old_path1, $profile_new_path1);
mysqli_query($connect,"UPDATE user_reg set `model_image1`='$profile_name1' where user_id='$user_id' ");
}

if(strlen($_FILES['upload_image2']['name'])>0){
$profile_name2     = $date.$_FILES['upload_image2']['name'];
$profile_type2     = $_FILES['upload_image2']['type'];
$profile_size2     = $_FILES['upload_image2']['size'];
$profile_old_path2 = $_FILES['upload_image2']['tmp_name'];
$profile_new_path2 = 'admin/model/' . $profile_name2;
move_uploaded_file($profile_old_path2, $profile_new_path2);
mysqli_query($connect,"UPDATE user_reg set `model_image2`='$profile_name2' where user_id='$user_id' ");
}
if(strlen($_FILES['upload_image3']['name'])>0){
$profile_name3     = $date.$_FILES['upload_image3']['name'];
$profile_type3     = $_FILES['upload_image3']['type'];
$profile_size3     = $_FILES['upload_image3']['size'];
$profile_old_path3 = $_FILES['upload_image3']['tmp_name'];
$profile_new_path3 = 'admin/model/' . $profile_name3;
move_uploaded_file($profile_old_path3, $profile_new_path3);
mysqli_query($connect,"UPDATE user_reg set `model_image3`='$profile_name3' where user_id='$user_id' ");
}
if(strlen($_FILES['upload_image4']['name'])>0){
$profile_name4     = $date.$_FILES['upload_image4']['name'];
$profile_type4     = $_FILES['upload_image4']['type'];
$profile_size4     = $_FILES['upload_image4']['size'];
$profile_old_path4 = $_FILES['upload_image4']['tmp_name'];
$profile_new_path4 = 'admin/model/' . $profile_name4;
move_uploaded_file($profile_old_path4, $profile_new_path4);
mysqli_query($connect,"UPDATE user_reg set `model_image4`='$profile_name4' where user_id='$user_id' ");
}
if(strlen($_FILES['upload_image5']['name'])>0){
$profile_name5     = $date.$_FILES['upload_image5']['name'];
$profile_type5     = $_FILES['upload_image5']['type'];
$profile_size5     = $_FILES['upload_image5']['size'];
$profile_old_path5 = $_FILES['upload_image5']['tmp_name'];
$profile_new_path5 = 'admin/model/' . $profile_name5;
move_uploaded_file($profile_old_path5, $profile_new_path5);
mysqli_query($connect,"UPDATE user_reg set `model_image5`='$profile_name5' where user_id='$user_id' ");
}
if(strlen($_FILES['upload_image6']['name'])>0){
$profile_name6     = $date.$_FILES['upload_image6']['name'];
$profile_type6     = $_FILES['upload_image6']['type'];
$profile_size6     = $_FILES['upload_image6']['size'];
$profile_old_path6 = $_FILES['upload_image6']['tmp_name'];
$profile_new_path6 = 'admin/model/' . $profile_name6;
move_uploaded_file($profile_old_path6, $profile_new_path6);
mysqli_query($connect,"UPDATE user_reg set `model_image6`='$profile_name6' where user_id='$user_id' ");
}
if(strlen($_FILES['upload_image7']['name'])>0){
$profile_name7     = $date.$_FILES['upload_image7']['name'];
$profile_type7     = $_FILES['upload_image7']['type'];
$profile_size7     = $_FILES['upload_image7']['size'];
$profile_old_path7 = $_FILES['upload_image7']['tmp_name'];
$profile_new_path7 = 'admin/model/' . $profile_name7;
move_uploaded_file($profile_old_path7, $profile_new_path7);
mysqli_query($connect,"UPDATE user_reg set `model_image7`='$profile_name7' where user_id='$user_id' ");
}
if(strlen($_FILES['upload_image8']['name'])>0){
$profile_name8     = $date.$_FILES['upload_image8']['name'];
$profile_type8     = $_FILES['upload_image8']['type'];
$profile_size8     = $_FILES['upload_image8']['size'];
$profile_old_path8 = $_FILES['upload_image8']['tmp_name'];
$profile_new_path8 = 'admin/model/' . $profile_name8;
move_uploaded_file($profile_old_path8, $profile_new_path8);
mysqli_query($connect,"UPDATE user_reg set `model_image8`='$profile_name8' where user_id='$user_id' ");
}

  $query                  = mysqli_query($connect,"update user_reg set 
   
   `user_name`= '$user_name',
   `user_number` = '$user_number',
    `model_completed_project`='$model_completed_projects',
   `whtsapp_number` = '$whtsapp_number',
   `user_email` = '$user_email',
   `model_biography` = '$model_biography',
   `user_address` = '$user_address',
   `model_height` = '$model_height',
   `model_heels` = '$model_heels',
   `model_weight` = '$model_weight',
   `model_waist` = '$model_waist',
   `model_hips` = '$model_hips',
   `model_bust` = '$model_bust' ,
   `model_body_type` = '$model_body_type',
   `model_hair_length` = '$model_hair_length',
   `model_hair_color` = '$model_hair_color',
   `moded_skin_color` = '$moded_skin_color',
   `model_eye_color`=' $model_eye_color',
   `model_skin_tone` = '$model_skin_tone',
   `model_cup_size` = '$model_cup_size',
   `model_tattos` = '$model_tattos',
   `model_compensation` =' $model_compensation',
   `model_nude_shoots` =' $model_nude_shoots',
   `model_portfolio` = '$model_portfolio',
   `model_current_project` = '$model_current_project' where `user_id` = '$user_id'");
   
   
 
  if ($query == true)
   {

    echo
   "<script type='text/javascript'>
 $.toast({               
 heading: 'Success',                
text: 'Profile updated successfully<br>Please Relogin to see the changes',               
 showHideTransition: 'fade',                
icon: 'success',                
position: 'top-right',                
hideAfter: 8000        
});        
</script>";    
        
  } 
 
 
 }

?>
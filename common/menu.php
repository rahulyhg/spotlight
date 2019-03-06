<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style>

  /* remove outer padding */
  .main .row{
    padding: 0px;
    margin: 0px;
  }

  /*Remove rounded coners*/

  nav.sidebar.navbar {
    border-radius: 0px;
  }

  nav.sidebar, .main{
    -webkit-transition: margin 200ms ease-out;
      -moz-transition: margin 200ms ease-out;
      -o-transition: margin 200ms ease-out;
      transition: margin 200ms ease-out;
  }

  /* Add gap to nav and right windows.*/
  .main{
    padding: 10px 10px 0 10px;
  }

  /* .....NavBar: Icon only with coloring/layout.....*/

  /*small/medium side display*/
  @media (min-width: 768px) {

    /*Allow main to be next to Nav*/
    .main{
      position: absolute;
      width: calc(100% - 40px); /*keeps 100% minus nav size*/
      margin-left: 40px;
      float: right;
    }

    /*lets nav bar to be showed on mouseover*/
    nav.sidebar:hover + .main{
      margin-left: 200px;
    }

    /*Center Brand*/
    nav.sidebar.navbar.sidebar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand {
      margin-left: 0px;
    }
    /*Center Brand*/
    nav.sidebar .navbar-brand, nav.sidebar .navbar-header{
      text-align: center;
      width: 100%;
      margin-left: 0px;
    }

    /*Center Icons*/
    nav.sidebar a{
      padding-right: 13px;
    }

    /*adds border top to first nav box */
    nav.sidebar .navbar-nav > li:first-child{
      border-top: 1px #e5e5e5 solid;
    }

    /*adds border to bottom nav boxes*/
    nav.sidebar .navbar-nav > li{
      border-bottom: 1px #e5e5e5 solid;
    }

    /* Colors/style dropdown box*/
    nav.sidebar .navbar-nav .open .dropdown-menu {
      position: static;
      float: none;
      width: auto;
      margin-top: 0;
      background-color: transparent;
      border: 0;
      -webkit-box-shadow: none;
      box-shadow: none;
    }

    /*allows nav box to use 100% width*/
    nav.sidebar .navbar-collapse, nav.sidebar .container-fluid{
      padding: 0 0px 0 0px;
    }

    /*colors dropdown box text */
    .navbar-inverse .navbar-nav .open .dropdown-menu>li>a {
      color: #777;
    }

    /*gives sidebar width/height*/
    nav.sidebar{
      width: 200px;
      height: 100%;
      margin-left: -160px;
      float: left;
      z-index: 8000;
      margin-bottom: 0px;
    }

    /*give sidebar 100% width;*/
    nav.sidebar li {
      width: 100%;
    }

    /* Move nav to full on mouse over*/
    nav.sidebar:hover{
      margin-left: 0px;
    }
    /*for hiden things when navbar hidden*/
    .forAnimate{
      opacity: 0;
    }
  }

  /* .....NavBar: Fully showing nav bar..... */

  @media (min-width: 1330px) {

    /*Allow main to be next to Nav*/
    .main{
      width: calc(100% - 200px); /*keeps 100% minus nav size*/
      margin-left: 200px;
    }

    /*Show all nav*/
    nav.sidebar{
      margin-left: 0px;
      float: left;
    }
    /*Show hidden items on nav*/
    nav.sidebar .forAnimate{
      opacity: 1;
    }
  }

  nav.sidebar .navbar-nav .open .dropdown-menu>li>a:hover, nav.sidebar .navbar-nav .open .dropdown-menu>li>a:focus {
    color: #CCC;
    background-color: transparent;
  }

  nav:hover .forAnimate{
    opacity: 1;
  }
  section{
    padding-left: 15px;
  }
  </style>

</head>
<body>

<nav class="navbar navbar-inverse sidebar" role="navigation">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="dashboard.php">Dashboard</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
      <ul class="nav navbar-nav">

      <li class="dropdown active">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home <span class="caret"></span><span style="font-size:16px;" ></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
        
            <li><a href="addabout.php">Add About</a></li>
            <li><a href="viewabout.php">View About</a></li>
             /* <li ><a href="banner.php">Add Banner</a></li>
            <li><a href="viewbanner.php">View Banner</a></li> */
            
            
          </ul>
        </li>
        <li class="dropdown active">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Models <span class="caret"></span><span style="font-size:16px;" ></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
          <!--<li class=""><a href="addmenu.php">Add Menu</a></li>-->
          <!--  <li><a href="viewmenu.php">View Menu</a></li>-->
            <li><a href="addpackages.php">Add Model</a></li>
            <li class=""><a href="register_user.php">View user</a></li>
            
            
          </ul>
        </li>
        <li class="dropdown active">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Casting <span class="caret"></span><span style="font-size:16px;" ></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            <li ><a href="addcasting.php">Add Casting</a></li>
                                                 <li ><a href="add_category_casting.php">Add Casting Category</a></li>
            <li><a href="viewcasting.php">View Casting</a></li>
              <li><a href="viewapplications.php">View Applications</a></li>
          </ul>
        </li>
        <li class="dropdown active">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Clientele <span class="caret"></span><span style="font-size:16px;" ></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a href="addpro.php">Add Client</a></li>
            <li><a href="viewpro.php">View Client</a></li>
            <li><a href="addwork.php">Add Work</a></li>
            <li > <a href="viewwork.php">View Work</a></li>
            
          </ul>
        </li>
        <li class="dropdown active">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">FAQ <span class="caret"></span><span style="font-size:16px;" ></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
          <li class=""><a href="addfaq.php">Add FAQ Question</a></li>
            <li><a href="viewfaq.php">View FAQ Question</a></li>
          
            <li ><a href="addans.php">Add FAQ Answer</a></li>
            <li ><a href="viewans.php">View FAQ Answer</a></li>
          
          </ul>
        </li>
        
          <li class="dropdown active">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Testimonials <span class="caret"></span><span style="font-size:16px;" ></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
          <li ><a href="addtest.php">Add Testimonials</a></li>
            <li ><a href="viewtest.php">View Testimonials</a></li>
            
          </ul>
        </li>
        
        
        
        <li class="dropdown active">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gallary <span class="caret"></span><span style="font-size:16px;" ></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
          <li class=""><a href="addgallerymenu.php">Add Gallary</a></li>
            <li><a href="viewgallery.php">View Gallary</a></li>
            <li><a href="addvideo.php">Add Video</a></li>
            <li ><a href="viewvideo.php">View Video</a></li>
          
            
            
          </ul>
        </li>
        
          <li class="dropdown active">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Enquiry <span class="caret"></span><span style="font-size:16px;" ></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
          <li class=""><a href="enquiries.php">Model Booking</a></li>
            <li><a href="send_enquiry.php">Model Notification</a></li>
            <li><a href="viewsend.php">View Notification</a></li>
          </ul>
        </li>
            <li class="dropdown active">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Model Page Queries<span class="caret"></span><span style="font-size:16px;" ></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
          <li class=""><a href="contact_query.php">View All Queries</a></li>
            <li><a href="reply_query.php">Send Messages</a></li>
            
          </ul>
        </li>
        
          <li class="dropdown active">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog<span class="caret"></span><span style="font-size:16px;" ></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
          <li class=""><a href="add_blog.php">Add Blog</a></li>
            <li><a href="view_blog.php">View Blog</a></li>
            
          </ul>
        </li>
                                     
                                   <li class="active"><a href="teasers.php">Homepage Teasers</a></li>
        
        
        
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="main">
<!-- Content Here -->
</div>


</body>

</html>
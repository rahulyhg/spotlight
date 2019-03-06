<?php



session_start();

include("connect.php");

if(isset($_POST['casting_submit'])){
    $user_email    = $_POST['user_email'];
    $eid=$_POST['hiddenId'];
    $user_password = $_POST['user_password'];
    $login         = mysqli_query($connect, "select * from `user_reg` where `user_email`= '$user_email' and `user_password` = '$user_password' and `user_status`='active' ");
    $res           = mysqli_fetch_object($login);

    $usertype = $res->user_type;
   // echo $usertype;

    if (mysqli_num_rows($login) == 1) 
    {
        $_SESSION['profile'] = $res;
         //echo "login sucessfull";
        if($usertype == "client")
        {
        $_SESSION['profile']=$res;
        header("Location:event-single-left.php?id=$eid");
        }
        else
        {
        $_SESSION['profile']=$res;
        header("Location:event-single-left.php?id=$eid");
        }

    } 
    else
      {
        $msg = "Invalid email & Password";
        header("refresh:1;reg.php?msg");
      }
}


if(isset($_POST['login_submit'])){

    $user_email    = $_POST['user_email'];

    $user_password = $_POST['user_password'];

    $login         = mysqli_query($connect, "select * from `user_reg` where `user_email`= '$user_email' and `user_password` = '$user_password' and `user_status`='active' ");

    $res           = mysqli_fetch_object($login);



    $usertype = $res->user_type;

   // echo $usertype;



    if (mysqli_num_rows($login) == 1) 

    {

        $_SESSION['profile'] = $res;

         //echo "login sucessfull";

        if($usertype == "client")

        {

        $_SESSION['profile']=$res;

        header("Location:client_profile.php");

        }

        else

        {

        $_SESSION['profile']=$res;

        header("Location:model_profile.php");

        }



    } 

    else

      {

        $msg = "Invalid email & Password";

        header("refresh:1;reg.php?msg");

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





            ?>



                                    <section>

                                    

                                    <div class="ds" aria-labelledby="login">

                                        <div class="container" style="padding:8%;">

                                       <h4>Not Yet Registered?<a href="reg.php" style="font-weight:bold;color:#e0006c;"> Create Account</a> Here</h4>

                                        <form role="form" action="" method="post">

                                            <div class="form-group">

                                                <label for="login_email" class="sr-only">Email address</label>

                                                <input type="email" class="form-control" id="login_email" placeholder="Email address" required name="user_email">

                                            </div>

                                            <div class="form-group">

                                                <label for="login_password" class="sr-only">Password</label>

                                                <input type="password" class="form-control" id="login_password" placeholder="Password" required name="user_password">

                                            </div>

                                     <?php if(isset($_GET['apply'])){?>
                                            <input type="hidden" name="hiddenId" value="<?php echo $_GET['apply'] ?>">
                                            <button type="submit" name="casting_submit" class="theme_button color1 bottommargin_0">
                                                Log in
                                            </button>
                                        <?php }else{?>
                                            <button type="submit" name="login_submit" class="theme_button color1 bottommargin_0">
                                                Log in
                                            </button>
                                        <?php }?>

                                            

                                        </form>

                                        <div class="topmargin_25">

                                            <a href="forgot.php" class="text-uppercase">Forgot Your Password?</a>

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











<!-- Mirrored from webdesign-finder.com/html/models/gallery-regular-4-cols.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Jul 2018 07:45:36 GMT -->



</html>




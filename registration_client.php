<?php

$error_email="";
session_start();
ob_start();
include("connect.php");



// Import PHPMailer classes into the global namespace

// These must be at the top of your script, not inside a function

use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\Exception;



//Load Composer's autoloader

require 'vendor/autoload.php';


if (isset($_POST['reg_client'])) {


    $user_type      = "client";

    $user_name      = $_POST['user_name'];

    $compnay_name   = $_POST['c_name'];

    $website        = $_POST['website'];

    $user_number    = $_POST['user_number'];

    $whtsapp_number = $_POST['whtsapp_number'];

    $user_password  = $_POST['user_password'];

    $user_email     = $_POST['user_email'];

    $client_work    = $_POST['c_work'];

    $user_address   = $_POST['user_address'];

    $user_status    = "inactive";

    $profile_name1 = $_FILES['company_logo']['name'];

    $profile_old_path1 = $_FILES['company_logo']['tmp_name'];

    $profile_new_path1 = 'admin/model/'.$profile_name1;

    move_uploaded_file($profile_old_path1,$profile_new_path1);

    
    $select_query=mysqli_query($connect,"SELECT * from user_reg where user_email='$user_email' ");
    $email_exists=mysqli_num_rows($select_query);
    if($email_exists>0){
    $error_email.="<h5 class='text-danger' style='font-weight:bold;'>Email id is already registered</h5>";
    }   
    else{
    

    $insert_user    = mysqli_query($connect, "INSERT INTO `user_reg` (`user_type`,`user_name`,`compnay_name`,`website`,`user_number`,`whtsapp_number`,`user_password`,`user_email`,`client_work`,`user_address`,`user_status`,`company_logo`)



  values ('$user_type','$user_name','$compnay_name','$website',$user_number,'$whtsapp_number','$user_password','$user_email','$client_work','$user_address','$user_status','$profile_name1')");

    if ($insert_user) {

    $activation = "Activation Link sent thru mail - Activate Now";

    

      $mail = new PHPMailer(true);                              // Passing `true` enables exceptions



try {



    //Server settings



    // $mail->SMTPDebug = 2;       



     



    $email=$user_email;



    $msg="http://www.spotlightstudioz.com/activation.php?user_email=" .$email;           



    // Enable verbose debug output



   

    $mail->isSMTP();                                      // Set mailer to use SMTP



    $mail->Host = "smtp.zoho.com";   // Specify main and backup SMTP servers



    $mail->SMTPAuth = true;                               // Enable SMTP authentication



    $mail->Username = 'noreply@spotlightstudioz.com';                 // SMTP username



    $mail->Password = 'SajithMenon@321';                           // SMTP password



    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted



    $mail->Port = 465;     





    //Recipients



    $mail->setFrom("noreply@spotlightstudioz.com", "Spotlight Studioz");



    $mail->addAddress($email);     // Add a recipient



    // $mail->addAddress('ellen@example.com');               // Name is optional



    // $mail->addReplyTo('info@example.com', 'Information');



    // $mail->addCC('cc@example.com');



    // $mail->addBCC('bcc@example.com');







    //Attachments



    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments



    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name







    //Content



    $mail->isHTML(true);                                  // Set email format to HTML



    $mail->Subject = 'Spotlight Studioz Client Registration';



    $mail->Body    = '



<head>
  

  <style type="text/css">

    * {
      font-family: Helvetica, Arial, sans-serif;
    }

 

    td {
      font-family: Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #777777;
      text-align: center;
      line-height: 21px;
    }

    a {
      color: #676767;
      text-decoration: none !important;
    }

    .pull-left {
      text-align: left;
    }

    .pull-right {
      text-align: right;
    }

    .header-lg,
    .header-md,
    .header-sm {
      font-size: 32px;
      font-weight: 700;
      line-height: normal;
      padding: 35px 0 0;
      color: #4d4d4d;
    }

    .header-md {
      font-size: 24px;
    }

    .header-sm {
      padding: 5px 0;
      font-size: 18px;
      line-height: 1.3;
    }

    .content-padding {
      padding: 20px 0 30px;
    }

    .mobile-header-padding-right {
      width: 290px;
      text-align: right;
      padding-left: 10px;
    }

    .mobile-header-padding-left {
      width: 290px;
      text-align: left;
      padding-left: 10px;
    }

    .free-text {
      width: 100% !important;
      padding: 10px 20px;
    }

    .block-rounded {
      border-radius: 5px;
      border: 1px solid #e5e5e5;
      vertical-align: top;
    }

    .button {
      padding: 30px 0;
    }

    .info-block {
      padding: 0 20px;
      width: 260px;
    }

    .block-rounded {
      width: 260px;
    }

    .info-img {
      width: 258px;
      border-radius: 5px 5px 0 0;
    }

    .force-width-gmail {
      min-width:600px;
      height: 0px !important;
      line-height: 1px !important;
      font-size: 1px !important;
    }

    .button-width {
      width: 228px
    }
.div1
{
  background-image: url("http://www.spotlightstudioz.com/images/parallax/call_to_action.jpg");
  background-repeat: no-repeat;
  background-size: cover;
}

  .line2{
      width:90%;
      height:5px;
      background-color: white;
       border-radius: 50px;
       border: 0px;
    }
    .line1{
      width:95%;
      height:5px;
      background-color: white;
       border-radius: 50px;
       border: 0px;
    }

  </style>


</head>
<div class="div1">
<div style="padding:12%;">
  <hr class="line2">
             <hr class="line1">
<table class="container-for-gmail-android" width="100%" style="background-color:white;">
  
  <tr>
    <td width="100%" class="content-padding">
      <center>
        <table width="600" class="w320">
          <tr>
            <td class="header-lg">
              Activate Your Account!
            </td>
          </tr>
          <tr>
            <td class="free-text">
              Thank you for signing up with Spotlight Studioz! We hope you enjoy your time with us. Please click on Activate Now to activate your account.
            </td>
          </tr>
          <tr>
            <td class="button">
              <div><a class="btn" href=" '.$msg.' "
               style="background-color:#e0006c;border-radius:0px;color:#ffffff;padding:12px 40px;">Activate Now</a></div>
            </td>
          </tr>
  <tr>
            <td>
              To contact us,please visit <br />
              <a href="mailto:support@spotlightstudioz.com" style="color:#39b;font-weight:bold;">support@spotlightstudioz.com</a>
            </td>
          </tr>
        </table>
      </center>
    </td>
  </tr>
  
  
</table>

</div>

</div>



' ;



    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';







    $mail->send();



    header("Location:reg.php?Message");  



    // echo 'Message has been sent';



  



} catch (Exception $e) {



    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;



}

    
}
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



    <title>Client Registration</title>



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



<style type="text/css">

#login_password{

    margin-bottom: 24px;

}

 /* General styling */
    * {
      font-family: Helvetica, Arial, sans-serif;
    }

 

    td {
      font-family: Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #777777;
      text-align: center;
      line-height: 21px;
    }

    a {
      color: #676767;
      text-decoration: none !important;
    }

    .pull-left {
      text-align: left;
    }

    .pull-right {
      text-align: right;
    }

    .header-lg,
    .header-md,
    .header-sm {
      font-size: 32px;
      font-weight: 700;
      line-height: normal;
      padding: 35px 0 0;
      color: #4d4d4d;
    }

    .header-md {
      font-size: 24px;
    }

    .header-sm {
      padding: 5px 0;
      font-size: 18px;
      line-height: 1.3;
    }

    .content-padding {
      padding: 20px 0 30px;
    }

    .mobile-header-padding-right {
      width: 290px;
      text-align: right;
      padding-left: 10px;
    }

    .mobile-header-padding-left {
      width: 290px;
      text-align: left;
      padding-left: 10px;
    }

    .free-text {
      width: 100% !important;
      padding: 10px 60px 0px;
    }

    .block-rounded {
      border-radius: 5px;
      border: 1px solid #e5e5e5;
      vertical-align: top;
    }

    .button {
      padding: 30px 0;
    }

    .info-block {
      padding: 0 20px;
      width: 260px;
    }

    .block-rounded {
      width: 260px;
    }

    .info-img {
      width: 258px;
      border-radius: 5px 5px 0 0;
    }

    .force-width-gmail {
      min-width:600px;
      height: 0px !important;
      line-height: 1px !important;
      font-size: 1px !important;
    }

    .button-width {
      width: 228px
    }

</style>



</head>







<body>



    <!--[if lt IE 9]>



        <div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>



    <![endif]-->


    <!-- wrappers for visual page editor and boxed version of template -->



    <div id="canvas">



        <div id="box_wrapper">







            <!-- template sections -->











            <?php



                include('header.php');



include('connect.php');



            ?>




 <section class="ds parallax calltoaction section_padding_100" style="background-image: url('images/parallax/call_to_action.jpg')">   
                  <div class="container">                   
     <div class="row">             
              <div class="col-sm-12 text-center">                       
                             
<div class="row">                                 
<div class="col-md-12 text-center">                          
     <div class="ds" aria-labelledby="login" style="padding:50px;background-color:#e0006c">

                                             <?php echo $error_email; ?>                    

                                        <form role="form" action="" method="POST" enctype="multipart/form-data">

                                           <div class="row" style="text-align:center;">

                                            <div class="col-sm-6 col-md-6">

                                            <div class="form-group">


                                            <input name="user_name" type="text" class="form-control" id="login_password" required  placeholder="Enter Your Full Name">



                                            </div>



                                            <div class="form-group">



                                                



                                                <input type="file" name="company_logo" class="form-control" id="login_password" required placeholder="Company Logo" >



                                            </div>

                                            <div class="form-group">



                                                



                                                <input name="user_number" type="number" class="form-control" id="login_password" required  placeholder="Enter Your Mobile Number">



                                            </div>

                                            <div class="form-group">



                                                

                                                <input name="user_email" type="email" class="form-control" id="login_password" required  placeholder="Enter Your Email Address">



                                            </div>

                                            <div class="form-group">



                                                



    <textarea name="c_work" class="form-control" id="login_password" required  placeholder="Previous Work"></textarea>



                                            </div>

                                        </div>

                                        <div class="col-sm-6 col-md-6">

                                        <div class="form-group">

                                             <input name="c_name" type="text" class="form-control" id="login_password" required  placeholder="Enter Your Company Name">

                                        </div>

                                        <div class="form-group">

                                            <input name="website" type="text" class="form-control" id="login_password" required  placeholder="Enter Your Website">

                                        </div>

                                        <div class="form-group">

                                            <input name="whtsapp_number" type="text" class="form-control" id="login_password" required  placeholder="Enter Your Whatsapp Number">

                                        </div>

                                        <div class="form-group">

                                            <input name="user_password" type="password" class="form-control" id="login_password" required  placeholder="Enter Your Password">

                                        </div>

                                        <div class="form-group">

                <textarea name="user_address" class="form-control" id="login_password" required  placeholder="Enter Your Complete Address"></textarea>

                                        </div>



                                    </div>



                    <input name="reg_client" type="submit" class="theme_button color1 bottommargin_0" value="Register" style="background-color:white;color:black;">



                                        



                                        </form>



                                    



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











<!-- Mirrored from webdesign-finder.com/html/models/gallery-regular-4-cols.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Jul 2018 07:45:36 GMT -->



</html>

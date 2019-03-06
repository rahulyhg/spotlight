 <?php

use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';



include("connect.php");

$password                 = mysqli_real_escape_string($connect,$_POST['user_password']);

$user_category            = mysqli_real_escape_string($connect,$_POST['user_category']);

$user_sub_category        = mysqli_real_escape_string($connect,$_POST['user_sub_category']);

$user_type                = mysqli_real_escape_string($connect,$_POST['user_type']);

$user_status              = mysqli_real_escape_string($connect,$_POST['user_status']);

$user_name                = mysqli_real_escape_string($connect,$_POST['user_name']);

$user_number              = mysqli_real_escape_string($connect,$_POST['user_number']);

$whtsapp_number           = mysqli_real_escape_string($connect,$_POST['whtsapp_number']);

$user_password            = mysqli_real_escape_string($connect,$_POST['user_password']);

$user_email               = mysqli_real_escape_string($connect,$_POST['user_email']);

$user_dob                 = mysqli_real_escape_string($connect,$_POST['user_dob']);

$user_address             = mysqli_real_escape_string($connect,$_POST['user_address']);

$user_status              = mysqli_real_escape_string($connect,$_POST['user_status']);

$model_gender             = mysqli_real_escape_string($connect,$_POST['model_gender']);

$maritial_status          = mysqli_real_escape_string($connect,$_POST['maritial_status']);

$model_age                = mysqli_real_escape_string($connect,$_POST['model_age']);

$model_country            = mysqli_real_escape_string($connect,$_POST['model_country']);

$model_state              = mysqli_real_escape_string($connect,$_POST['model_state']);

$model_biography          = mysqli_real_escape_string($connect,$_POST['model_biography']);

$user_address             = mysqli_real_escape_string($connect,$_POST['user_address']);

$model_height             = mysqli_real_escape_string($connect,$_POST['model_height']);

$model_heels              = mysqli_real_escape_string($connect,$_POST['model_heels']);

$model_weight             = mysqli_real_escape_string($connect,$_POST['model_weight']);

$model_waist              = mysqli_real_escape_string($connect,$_POST['model_waist']);

$model_hips               = mysqli_real_escape_string($connect,$_POST['model_hips']);

$model_bust               = mysqli_real_escape_string($connect,$_POST['model_bust']);

$model_body_type          = mysqli_real_escape_string($connect,$_POST['model_body_type']);

$model_hair_length        = mysqli_real_escape_string($connect,$_POST['model_hair_length']);

$model_hair_color         = mysqli_real_escape_string($connect,$_POST['model_hair_color']);

$moded_skin_color         = mysqli_real_escape_string($connect,$_POST['moded_skin_color']);

$model_eye_color          = mysqli_real_escape_string($connect,$_POST['model_eye_color']);

$model_skin_tone          = mysqli_real_escape_string($connect,$_POST['model_skin_tone']);

$model_cup_size           = mysqli_real_escape_string($connect,$_POST['model_cup_size']);

$model_tattos             = mysqli_real_escape_string($connect,$_POST['model_tattos']);

$model_compensation       = mysqli_real_escape_string($connect,$_POST['model_compensation']);

$model_nude_shoots        = mysqli_real_escape_string($connect,$_POST['model_nude_shoots']);

$model_portfolio          = mysqli_real_escape_string($connect,$_POST['model_portfolio']);

$model_package            = mysqli_real_escape_string($connect,$_POST['model_package']);

$model_modeling           = implode(',', $_POST['modeling']);

$model_actor_actress      = implode(',', $_POST['actor_actress']);

$model_artist_perfomer    = implode(',', $_POST['artist_perfomer']);

$model_completed_projects = mysqli_real_escape_string($connect,$_POST['completed_projects']);

$model_current_project    = mysqli_real_escape_string($connect,$_POST['current_projects']);

$refer=mysqli_real_escape_string($connect,$_POST['refer']);
if(strlen($_POST['refer_name'])>0){
$refer_name=mysqli_real_escape_string($connect,$_POST['refer_name']);
}else{
$refer_name="none";
}

$date = date('Y-m-d').rand(1,10000000);

$profile_name1            = $date.$_FILES['image1']['name'];
$profile_type1            = $_FILES['image1']['type'];
$profile_size1            = $_FILES['image1']['size'];
$profile_old_path1        = $_FILES['image1']['tmp_name'];
$profile_new_path1        = 'admin/model/' . $profile_name1;
move_uploaded_file($profile_old_path1, $profile_new_path1);
$profile_name2     = $date.$_FILES['upload_image2']['name'];
$profile_type2     = $_FILES['upload_image2']['type'];
$profile_size2     = $_FILES['upload_image2']['size'];
$profile_old_path2 = $_FILES['upload_image2']['tmp_name'];
$profile_new_path2 = 'admin/model/' . $profile_name2;
move_uploaded_file($profile_old_path2, $profile_new_path2);
$profile_name3     = $date.$_FILES['upload_image3']['name'];
$profile_type3     = $_FILES['upload_image3']['type'];
$profile_size3     = $_FILES['upload_image3']['size'];
$profile_old_path3 = $_FILES['upload_image3']['tmp_name'];
$profile_new_path3 = 'admin/model/' . $profile_name3;
move_uploaded_file($profile_old_path3, $profile_new_path3);
$profile_name4     = $date.$_FILES['upload_image4']['name'];
$profile_type4     = $_FILES['upload_image4']['type'];
$profile_size4     = $_FILES['upload_image4']['size'];
$profile_old_path4 = $_FILES['upload_image4']['tmp_name'];
$profile_new_path4 = 'admin/model/' . $profile_name4;
move_uploaded_file($profile_old_path4, $profile_new_path4);
$profile_name5     = $date.$_FILES['upload_image5']['name'];
$profile_type5     = $_FILES['upload_image5']['type'];
$profile_size5     = $_FILES['upload_image5']['size'];
$profile_old_path5 = $_FILES['upload_image5']['tmp_name'];
$profile_new_path5 = 'admin/model/' . $profile_name5;
move_uploaded_file($profile_old_path5, $profile_new_path5);
$profile_name6     = $date.$_FILES['upload_image6']['name'];
$profile_type6     = $_FILES['upload_image6']['type'];
$profile_size6     = $_FILES['upload_image6']['size'];
$profile_old_path6 = $_FILES['upload_image6']['tmp_name'];
$profile_new_path6 = 'admin/model/' . $profile_name6;
move_uploaded_file($profile_old_path6, $profile_new_path6);
$profile_name7     = $date.$_FILES['upload_image7']['name'];
$profile_type7     = $_FILES['upload_image7']['type'];
$profile_size7     = $_FILES['upload_image7']['size'];
$profile_old_path7 = $_FILES['upload_image7']['tmp_name'];
$profile_new_path7 = 'admin/model/' . $profile_name7;
move_uploaded_file($profile_old_path7, $profile_new_path7);
$profile_name8     = $date.$_FILES['upload_image8']['name'];
$profile_type8     = $_FILES['upload_image8']['type'];
$profile_size8     = $_FILES['upload_image8']['size'];
$profile_old_path8 = $_FILES['upload_image8']['tmp_name'];
$profile_new_path8 = 'admin/model/' . $profile_name8;
move_uploaded_file($profile_old_path8, $profile_new_path8);

$model_video1    = mysqli_real_escape_string($connect,$_POST['video1']);

$model_video2    = mysqli_real_escape_string($connect,$_POST['video2']);

$model_video3    = mysqli_real_escape_string($connect,$_POST['video3']);

$model_video4    = mysqli_real_escape_string($connect,$_POST['video4']);

$model_audio1    = mysqli_real_escape_string($connect,$_POST['audio1']);

$model_audio2    = mysqli_real_escape_string($connect,$_POST['audio2']);

$model_audio3    = mysqli_real_escape_string($connect,$_POST['audio3']);

$model_audio4    = mysqli_real_escape_string($connect,$_POST['audio4']);

$q = mysqli_query($connect,'SELECT MAX(model_code) as model_code from `user_reg` ');

$r = mysqli_fetch_assoc($q);
$code = intval(substr($r['model_code'],3))+1;
 $ex = "SS-";
$model_code = ($ex.$code);

$model_facebook  = mysqli_real_escape_string($connect,$_POST['model_facebook']);

$model_twitter   = mysqli_real_escape_string($connect,$_POST['model_twitter']);

$model_google    = mysqli_real_escape_string($connect,$_POST['model_google']);

$model_instagram = mysqli_real_escape_string($connect,$_POST['model_instagram']);

$model_pinterest = mysqli_real_escape_string($connect,$_POST['model_pinterest']);

$model_linkedin  = mysqli_real_escape_string($connect,$_POST['model_linkedin']);

$model_skype     = mysqli_real_escape_string($connect,$_POST['model_skype']);

$model_youtube   = mysqli_real_escape_string($connect,$_POST['model_youtube']);

$select_query=mysqli_query($connect,"SELECT * from user_reg where user_email='$user_email' ");
    $email_exists=mysqli_num_rows($select_query);
    if($email_exists>0){
    echo "<h5 class='alert alert-danger'>Email id is already registered</h5>";
    }   
    else{

$query           = mysqli_query($connect, "insert into `user_reg` (`user_category`,`user_sub_category`,`user_password`,`user_type`, `user_status`, `user_name`, `user_number`, `whtsapp_number`, `user_email`, `user_dob`, `model_gender`, `maritial_status`, `model_age`, `model_country`, `model_state`, `model_biography`, `user_address`, `model_height`, `model_heels`, `model_weight`, `model_waist`, `model_hips`, `model_bust`, `model_body_type`, `model_hair_length`, `model_hair_color`, `moded_skin_color`, `model_eye_color`, `model_skin_tone`, `model_cup_size`, `model_tattos`, `model_compensation`, `model_nude_shoots`, `model_portfolio`, `model_package`, `model_modeling`, `model_actor_actress`, `model_artist_perfomer`, `model_completed_project`, `model_current_project`, `model_image1`, `model_image2`, `model_image3`, `model_image4`, `model_image5`, `model_image6`, `model_image7`, `model_image8`, `model_video1`, `model_video2`, `model_video3`, `model_video4`, `model_audio1`, `model_audio2`, `model_audio3`, `model_audio4`, `model_code`, `model_facebook`, `model_twitter`, `model_google`, `model_instagram`, `model_pinterest`, `model_linkedin`, `model_skype`, `model_youtube`,`refer`,`refer_name` )  values ('$user_category',  '$user_sub_category',  '$password',  '$user_type',  '$user_status',  '$user_name',  '$user_number',  '$whtsapp_number',  '$user_email',  '$user_dob',  '$model_gender',  '$maritial_status',  '$model_age',  '$model_country',  '$model_state',  '$model_biography',  '$user_address',  '$model_height',  '$model_heels',  '$model_weight',  '$model_waist',  '$model_hips',  '$model_bust',  '$model_body_type',  '$model_hair_length',  '$model_hair_color',  '$moded_skin_color',  '$model_eye_color',  '$model_skin_tone',  '$model_cup_size',  '$model_tattos',  '$model_compensation',  '$model_nude_shoots',  '$model_portfolio',  '$model_package',  '$model_modeling',  '$model_actor_actress',  '$model_artist_perfomer',  '$model_completed_projects',  '$model_current_project',  '$profile_name1',  '$profile_name2',  '$profile_name3',  '$profile_name4',  '$profile_name5',  '$profile_name6',  '$profile_name7',  '$profile_name8',  '$model_video1',  '$model_video2',  '$model_video3',  '$model_video4',  '$model_audio1',  '$model_audio2',  '$model_audio3',  '$model_audio4',  '$model_code',  '$model_facebook',  '$model_twitter',  '$model_google',  '$model_instagram',  '$model_pinterest',  '$model_linkedin',  '$model_skype',  '$model_youtube' ,'$refer','$refer_name'  )");

if ($query == true) {

$activation = "Activation Link sent thru mail - Activate Now";        

  $mail = new PHPMailer(true);              

                try {  

  //Server settings   

 // $mail->SMTPDebug = 2;               

 $email=$user_email;   

 $msg="http://www.spotlightstudioz.com/activation.php?user_email=" . "$user_email";             

  



    $mail->isSMTP();                                      // Set mailer to use SMTP



    $mail->Host = "smtp.zoho.com";   // Specify main and backup SMTP servers



    $mail->SMTPAuth = true;                               // Enable SMTP authentication



    $mail->Username = 'noreply@spotlightstudioz.com';                 // SMTP username



    $mail->Password = 'SajithMenon@321';                           // SMTP password



    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted



    $mail->Port = 465;                                

 



$mail->setFrom("noreply@spotlightstudioz.com", "Spotlight Studioz");   

 $mail->addAddress($email);     



 // $mail->addAddress('ellen@example.com');          

     // Name is optional    // $mail->addReplyTo('info@example.com', 'Information');    // $mail->addCC('cc@example.com');    // $mail->addBCC('bcc@example.com');    //Attachments    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name    //Content  

  $mail->isHTML(true);                              

    // Set email format to HTML   

 $mail->Subject = 'Spotlight Studioz Model Registration';   

 $mail->Body    =  '



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
            <td class="free-text" style="text-align:left;">
            Greetings!<br><br>
              Thank you for registering up with Spotlight Studioz! We hope you enjoy your time and get the beset casting updates and assignments whilst your are with us.
            </td>
          </tr>
          <tr>
            <td class="button">
              <div>
<h5 style="font-size:14px;">Everything you need to get started</h5>
<a class="btn" href=" '.$msg.' "
               style="background-color:#e0006c;border-radius:0px;color:#ffffff;padding:12px 40px;">Activate Now</a></div>
            </td>
          </tr>
          <tr>
            <td>
              <a href="https://www.facebook.com/officialspotlightstudioz"><img src="http://spotlightstudioz.com/images/facebook.png" alt=""></a>
              <a href="https://www.instagram.com/spotlightstudioz"><img src="http://spotlightstudioz.com/images/instagram.png" alt=""></a>
              <a href="https://www.youtube.com/channel/UCek0fkDFLhxfxoN8bV7kfhg?view_as=subscriber"><img src="http://spotlightstudioz.com/images/youtube.png" alt=""></a>
              <a href="https://twitter.com/SpotlightStdoz"><img src="http://spotlightstudioz.com/images/twitter.png" alt=""></a>
              <a href="https://www.linkedin.com/in/sajith-menon-98956710"><img src="http://spotlightstudioz.com/images/linkedin.png" alt=""></a>
            </td>
          
          </tr>

  <tr>
            <td>
              This email was sent to <a href="mailto:'.$email.'" style="color:#39b;font-weight:bold;">'.$email.'</a>.You received this email because you registered with Spotlight Studioz.
              <br><br> &copy; 2019 Spotlight Studioz.
            </td>
          </tr>
        </table>
      </center>
    </td>
  </tr>
  
  
</table>

</div>

</div>
';

 $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';  

  $mail->send();    

header("Location:reg.php?Message");   

   // echo 'Message has been sent'; 

 } catch (Exception $e) {  

  echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;

}  

} else

 {    echo "something went wronge";

}

}

?> 
<?php
  ob_start();
session_start();
include("common/header.php");
include("common/config.php");
$spotlight=new config;

if(isset($_POST['submit']))
{ 
    $user_type = $_POST['user_type'];
   
    $user_category = $_POST['user_category'];
    $user_sub_category = $_POST['user_sub_category'];
 
  $user_name=$_POST['user_name'];

  $model_gender = $_POST['model_gender'];
  
  $user_dob=$_POST['user_dob'];
  $model_height = $_POST['model_height'];
  
  $model_weight=$_POST['model_weight'];
  $model_biography=$_POST['model_biography'];
  


  
  
  
    $profile_name = $_FILES['img1']['name'];
    //echo "<br>";
     $profile_type = $_FILES['img1']['type'];
    //echo "<br>";
     $profile_size = $_FILES['img1']['size'];
    //echo "<br>";
     $profile_old_path = $_FILES['img1']['tmp_name'];
    //echo "<br>";
     $profile_new_path = 'model/'.$profile_name;
    move_uploaded_file($profile_old_path,$profile_new_path);
   // die;
    
  
  
  
    $profile_name2 = $_FILES['img2']['name'];
    //echo "<br>";
     $profile_type2 = $_FILES['img2']['type'];
    //echo "<br>";
     $profile_size2 = $_FILES['img2']['size'];
    //echo "<br>";
     $profile_old_path2 = $_FILES['img2']['tmp_name'];
    //echo "<br>";
     $profile_new_path2 = 'model/'.$profile_name2;
    move_uploaded_file($profile_old_path2,$profile_new_path2);
   // die;
  
   $profile_name3 = $_FILES['img3']['name'];
    //echo "<br>";
     $profile_type3 = $_FILES['img3']['type'];
    //echo "<br>";
     $profile_size3 = $_FILES['img3']['size'];
    //echo "<br>";
     $profile_old_path3 = $_FILES['img3']['tmp_name'];
    //echo "<br>";
     $profile_new_path3 = 'model/'.$profile_name3;
    move_uploaded_file($profile_old_path3,$profile_new_path3);
   // die;
  
  
  
  
   $profile_name4 = $_FILES['img4']['name'];
    //echo "<br>";
     $profile_type4 = $_FILES['img4']['type'];
    //echo "<br>";
     $profile_size4 = $_FILES['img4']['size'];
    //echo "<br>";
     $profile_old_path4 = $_FILES['img4']['tmp_name'];
    //echo "<br>";
     $profile_new_path4 = 'model/'.$profile_name4;
    move_uploaded_file($profile_old_path4,$profile_new_path4);
   // die;
  
   $profile_name5 = $_FILES['img5']['name'];
    //echo "<br>";
     $profile_type5 = $_FILES['img5']['type'];
    //echo "<br>";
     $profile_size5 = $_FILES['img5']['size'];
    //echo "<br>";
     $profile_old_path5 = $_FILES['img5']['tmp_name'];
    //echo "<br>";
     $profile_new_path5 = 'model/'.$profile_name5;
    move_uploaded_file($profile_old_path5,$profile_new_path5);
   // die;

 
  $profile_name6 = $_FILES['img6']['name'];
    //echo "<br>";
     $profile_type6 = $_FILES['img6']['type'];
    //echo "<br>";
     $profile_size6 = $_FILES['img6']['size'];
    //echo "<br>";
     $profile_old_path6 = $_FILES['img6']['tmp_name'];
    //echo "<br>";
     $profile_new_path6 = 'model/'.$profile_name6;
    move_uploaded_file($profile_old_path6,$profile_new_path6);
   // die;
  
 






 



  $statement=mysqli_query($spotlight->spotlight,"INSERT INTO `user_reg`(`user_type`,`user_category`,`user_sub_category`,`user_name`,`user_dob`,`model_gender`,`model_height`,`model_weight`,`model_biography`,`model_image1`,`model_image2`,`model_image3`,`model_image4`,`model_image5`,`model_image6`) values('$user_type','$user_category','$user_sub_category','$user_name','$user_dob','$model_gender','$model_height','$model_weight','$model_biography','$profile_name','$profile_name2','$profile_name3','$profile_name4','$profile_name5','$profile_name6')");

//echo "INSERT INTO `user_reg`(`user_type`,`user_category`,`user_sub_category`,`user_name`,`user_dob`,`model_gender`,`model_height`,`model_weight`,`model_biography`) values('$user_type','$user_category','$user_sub_category','$user_name','$user_dob','$model_gender','$model_height','$model_weight','$model_biography')"; die();
}

if($statement)
{
    header("Location:register_user.php");
}

 ob_end_flush();
?>




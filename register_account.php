<?php
 ob_start();
 session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("admin/common/config.php");
$spotlight=new config;
$selectcat=$spotlight->selectallcat();




if(isset($_POST['submit'])){
    $email = $_POST["user_email"];
    $exists = mysqli_query($spotlight -> spotlight, "SELECT user_email * FROM user_reg WHERE user_email = '$email'");
    $a  = mysqli_fetch_assoc($exists);

if($email)
{ 

    $user_type = $_POST['user_type'];
    $user_email = $_POST['user_email'];
   $user_pass = $_POST['user_pass'];
    $user_category = $_POST['user_category'];
    $user_sub_category = $_POST['user_sub_category'];
 
  $user_name=$_POST['user_name'];

  $model_gender = $_POST['model_gender'];
  
  $user_dob=$_POST['user_dob'];
  $model_height = $_POST['model_height'];
  
  $model_weight=$_POST['model_weight'];
  $model_biography=$_POST['model_biography'];
    $model_age=$_POST['model_age'];
  


  
  
  
    $profile_name = $_FILES['img1']['name'];
    //echo "<br>";
     $profile_type = $_FILES['img1']['type'];
    //echo "<br>";
     $profile_size = $_FILES['img1']['size'];
    //echo "<br>";
     $profile_old_path = $_FILES['img1']['tmp_name'];
    //echo "<br>";
     $profile_new_path = 'admin/model/'.$profile_name;
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
     $profile_new_path2 = 'admin/model/'.$profile_name2;
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
     $profile_new_path3 = 'admin/model/'.$profile_name3;
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
     $profile_new_path4 = 'admin/model/'.$profile_name4;
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
     $profile_new_path5 = 'admin/model/'.$profile_name5;
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
     $profile_new_path6 = 'admin/model/'.$profile_name6;
    move_uploaded_file($profile_old_path6,$profile_new_path6);
   // die;
  
 $ex = "SS-";
$code = mt_rand(0, 1000);
$model_code = ($ex.$code);
 
 
 
$statement=mysqli_query($spotlight->spotlight,"INSERT INTO `user_reg`(`user_type`,`user_category`,`user_sub_category`,`user_name`,`user_dob`,`model_gender`,`model_height`,`model_weight`,`model_biography`,`model_image1`,`model_image2`,`model_image3`,`model_image4`,`model_image5`,`model_image6`,`model_code`,`model_age`,`user_email`,`user_password`) values('$user_type','$user_category','$user_sub_category','$user_name','$user_dob','$model_gender','$model_height','$model_weight','$model_biography','$profile_name','$profile_name2','$profile_name3','$profile_name4','$profile_name5','$profile_name6','$model_code','$model_age','$user_email','$user_pass')");

//echo "INSERT INTO `user_reg`(`user_type`,`user_category`,`user_sub_category`,`user_name`,`user_dob`,`model_gender`,`model_height`,`model_weight`,`model_biography`) values('$user_type','$user_category','$user_sub_category','$user_name','$user_dob','$model_gender','$model_height','$model_weight','$model_biography')"; die();
}
}

if($statement)
{
    header("location:user.php");
}


 ob_end_flush();

?>

<style>
 input[type=date], input[type=time], input[type=datetime-local], input[type=month] {
  line-height: 16px;
}
</style>

<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">

<link rel="stylesheet" href="css/bootstrap.min.css">

<script src="admin/style/js/sb-admin-2.js"></script>

    <link rel="stylesheet" href="css/main.css" >
    
    <link rel="stylesheet" href="css/animations.css">
    
    <link rel="stylesheet" href="css/fonts.css">

    <script src="admin/js/jquery.min.js"></script>

	<script src="js/vendor/modernizr-2.6.2.min.js"></script>

<script src="admin/style/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->

<body>

    <!-- start header-->
    
    <!-- end header-->
  <div id="wrapper">

   

    <div id="page-wrapper">
      <div class="container row">
        <div class="col-lg-12">
          <h1 class="page-header"><center>Add Talent</center></h1>
        </div>
        <!-- /.col-lg-12 -->
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default">


           <script>
            function get_sub_cat(user_category_id)
            {
                //alert(user_category_id);
                var http = new XMLHttpRequest();
                http.open("get","admin/get_sub_cat.php?user_category_id="+user_category_id,true);
                http.send();
                http.onreadystatechange=function()  
                {
                    if(http.readyState==4)
                    {
                       // alert(http.responseText);
                      document.getElementById('sub').innerHTML=http.responseText;
                    }
                }
            }
            </script>
            <div class="panel-body">
              <div class="row">
                <div class="col-lg-12">
                 <form role="form" action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" class="form-control" name="user_type" value="model">
                      <div class="form-group">
                                            <label class="control-label" for="Select Main Menu Name">Select category</label>
                                           
                                            <select class="form-control" name="user_category"  id="user_category" onchange="get_sub_cat(this.value)">
                                                <option value="0">--select model category--</option>
                                             <?php
                                                while($js = mysqli_fetch_assoc($selectcat))
                                                {
                                            ?>
                                            <option value="<?php echo $js['user_category_id']; ?>"><?php echo $js['user_category_name']; ?></option>
                                            <?php }  ?>
                                            </select>
                                    </div>
                                     <div class="form-group">
                                            <label class="control-label" for="Select Main Menu Name">Select sub category</label>
                                           
                                            <select class="form-control" name="user_sub_category" id="sub" required="">
                                                 <option value="0">--select first model category--</option>
                              
                            </select>
                                    </div>
                  <div class="form-group">
                    <label class="control-label" for="Add Tour Name">Add Model Name</label>
                    <input type="text" class="form-control" name="user_name">
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="Add Tour Name">Add Model Email</label>
                    <input type="email" class="form-control" name="user_email">
                  </div>
                <div class="form-group">
                    <label class="control-label" for="Add Tour Name">Password</label>
                    <input type="password" class="form-control" name="user_pass">
                  </div>
    

                   <div class="form-group">
                      <label class="control-label" for="Add Tour Name">Gender to be completed on all code pages</label>
                  <div class="radio">
         <label><input type="radio" name="model_gender" value="male" checked  >MALE</label>
         <label><input type="radio" name="model_gender" value="female">FEMALE</label>
    </div>
    </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="control-group">
                        <label for="Start Date" class="control-label">Model Date Of Birth</label>
                        <input type="date" name="user_dob" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="Add Tour Image">Model Age</label>
                    <input type="text" class="form-control" name="model_age" placeholder="Only number">
                  </div>

                  <div class="form-group">
                    <label class="control-label" for="Add Tour Image">Model Height</label>
                    <input type="text" class="form-control" name="model_height">
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="Add Tour Image">Model Weight</label>
                    <input type="text" class="form-control" name="model_weight">
                  </div>
               
                  

                  <div class="form-group">
                    <label class="control-label" for="Add Tour Descriptions">Model Biography</label>
                    <textarea class="form-control" rows="3" name="model_biography"></textarea>
                  </div>

                  <div class="form-group">
                    <label class="control-label" for="Add Gallery Image">Choose Model main Image</label>
                    <input type="file" class="form-control" name="img1">
                  </div>

                
                  <div class="form-group">
                    <label class="control-label" for="Add Gallery Image">Choose Model Gallery Image 2</label>
                    <input type="file" class="form-control" name="img2">
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="Add Gallery Image">Choose Model Gallery Image 3</label>
                    <input type="file" class="form-control" name="img3">
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="Add Gallery Image">Choose Model Gallery Image 4</label>
                    <input type="file" class="form-control" name="img4">
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="Add Gallery Image">Choose Model Gallery Image 5</label>
                    <input type="file" class="form-control" name="img5">
                  </div>
                    <div class="form-group">
                    <label class="control-label" for="Add Gallery Image">Choose Model Gallery Image 5</label>
                    <input type="file" class="form-control" name="img6">
                  </div>
                 
                  
                  <input class="btn btn-danger" type="reset" value="Reset">
                  <input type="submit" name="submit" class="btn btn-success btn-md pull-right" value="Submit">





                </form>

              </div>

            </div>
            <!-- /.row (nested) -->
          </div>
          <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
      </div>
      <!-- /.col-lg-12 -->
    </div>
  </div>
  <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->








































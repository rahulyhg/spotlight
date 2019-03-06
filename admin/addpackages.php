<?php

include("common/header.php");
include("common/config.php");
$spotlight=new config;
$selectcat=$spotlight->selectallcat();

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
    $model_age=$_POST['model_age'];
  
    $model_bust=$_POST['model_bust'];
    $model_waist=$_POST['model_waist'];
    $model_hips=$_POST['model_hips'];


$date = date('Y-m-d').rand(1,10000000);  
  
$profile_name            = $date.$_FILES['img1']['name'];
$profile_old_path1        = $_FILES['img1']['tmp_name'];
$profile_new_path1        = 'model/' . $profile_name;
move_uploaded_file($profile_old_path1, $profile_new_path1);
$profile_name2     = $date.$_FILES['img2']['name'];
$profile_old_path2 = $_FILES['img2']['tmp_name'];
$profile_new_path2 = 'model/' . $profile_name2;
move_uploaded_file($profile_old_path2, $profile_new_path2);
$profile_name3            = $date.$_FILES['img3']['name'];
$profile_old_path3        = $_FILES['img3']['tmp_name'];
$profile_new_path3        = 'model/' . $profile_name3;
move_uploaded_file($profile_old_path3, $profile_new_path3);
$profile_name4     = $date.$_FILES['img4']['name'];
$profile_old_path4 = $_FILES['img4']['tmp_name'];
$profile_new_path4 = 'model/' . $profile_name4;
move_uploaded_file($profile_old_path4, $profile_new_path4);
$profile_name5            = $date.$_FILES['img5']['name'];
$profile_old_path5       = $_FILES['img5']['tmp_name'];
$profile_new_path5        = 'model/' . $profile_name5;
move_uploaded_file($profile_old_path5, $profile_new_path5);
$profile_name6     = $date.$_FILES['img6']['name'];
$profile_old_path6 = $_FILES['img6']['tmp_name'];
$profile_new_path6 = 'model/' . $profile_name6;
move_uploaded_file($profile_old_path6, $profile_new_path6);
$profile_name7     = $date.$_FILES['img7']['name'];
$profile_old_path7 = $_FILES['img7']['tmp_name'];
$profile_new_path7 = 'model/' . $profile_name7;
move_uploaded_file($profile_old_path7, $profile_new_path7);
$profile_name8     = $date.$_FILES['img8']['name'];
$profile_old_path8 = $_FILES['img8']['tmp_name'];
$profile_new_path8 = 'model/' . $profile_name8;
move_uploaded_file($profile_old_path8, $profile_new_path8);
$profile_name9     = $date.$_FILES['img9']['name'];
$profile_old_path9 = $_FILES['img9']['tmp_name'];
$profile_new_path9 = 'model/' . $profile_name9;
move_uploaded_file($profile_old_path9, $profile_new_path9);
$profile_name10     = $date.$_FILES['img10']['name'];
$profile_old_path10 = $_FILES['img10']['tmp_name'];
$profile_new_path10 = 'model/' . $profile_name10;
move_uploaded_file($profile_old_path10, $profile_new_path10);
  
  
$q = mysqli_query($spotlight->spotlight,'SELECT MAX(model_code) as model_code from `user_reg` ');

$r = mysqli_fetch_assoc($q);
$code = intval(substr($r['model_code'],3))+1;
 $ex = "SS-";
$model_code = ($ex.$code);
 
 
 
$statement=mysqli_query($spotlight->spotlight,"INSERT INTO `user_reg`(`user_type`,`user_category`,`user_sub_category`,`user_name`,`user_dob`,`model_gender`,`model_height`,`model_weight`,`model_biography`,`model_image1`,`model_image2`,`model_image3`,`model_image4`,`model_image5`,`model_image6`,`model_image7`,`model_image8`,`model_image9`,`model_image10`,`model_code`,`model_age`,`model_bust`,`model_waist`,`model_hips`) values('$user_type','$user_category','$user_sub_category','$user_name','$user_dob','$model_gender','$model_height','$model_weight','$model_biography','$profile_name','$profile_name2','$profile_name3','$profile_name4','$profile_name5','$profile_name6','$profile_name7','$profile_name8','$profile_name9','$profile_name10','$model_code','$model_age','$model_bust','$model_waist','$model_hips')");


}



if($statement)
{
    header("Location:register_user.php");
}

?>

<style>
 input[type=date], input[type=time], input[type=datetime-local], input[type=month] {
  line-height: 16px;
}
</style>

<script src="jquery.min.js"></script>

<body>
<?php include("common/admin_head.php");?>
  <div id="wrapper">

    <?php include("common/menu.php");?>

    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header"><center>Add Talent</center></h1>
        </div>
        <!-- /.col-lg-12 -->
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default" style="width:100% !important;">


           <script>
            function get_sub_cat(user_category_id)
            {
                //alert(user_category_id);
                var http = new XMLHttpRequest();
                http.open("get","get_sub_cat.php?user_category_id="+user_category_id,true);
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
                 <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" class="form-control" name="user_type" value="model">
                      <div class="row">
                      <div class="form-group col-lg-4 col-md-4">
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
                                     <div class="form-group col-lg-4 col-md-4">
                                            <label class="control-label" for="Select Main Menu Name">Select sub category</label>
                                           
                                            <select class="form-control" name="user_sub_category" id="sub">
                                                 <option value="0">--select first model category--</option>
                              
                            </select>
                                    </div>
                  <div class="form-group col-lg-4 col-md-4">
                    <label class="control-label" for="Add Tour Name">Add Model Name</label>
                    <input type="text" class="form-control" name="user_name" required>
                  </div>
            </div>
          <div class="row">
                     <div class="form-group col-lg-4 col-md-4">
                      <label class="control-label" for="Add Tour Name">Gender to be completed on all code pages</label>
                  <div class="radio">
         <label><input type="radio" name="model_gender" value="male" checked>MALE</label>
         <label><input type="radio" name="model_gender" value="female">FEMALE</label>
    </div>
    </div>
                  
                    <div class="form-group col-lg-4 col-md-4">
                      <div class="control-group">
                        <label for="Start Date" class="control-label">Model Date Of Birth</label>
                        <input type="date" name="user_dob" class="form-control" required>
                      </div>
                    </div>
         
                  <div class="form-group col-lg-4 col-md-4">
                    <label class="control-label" for="Add Tour Image">Model Age</label>
                    <input type="text" class="form-control" name="model_age" placeholder="Only number" required>
                  </div>
  
        </div>

<div class="row">
                  <div class="form-group col-lg-2 col-md-2">
                    <label class="control-label" for="Add Tour Image">Model Height</label>
                    <input type="text" class="form-control" name="model_height" required>
                  </div>
                  <div class="form-group col-lg-2 col-md-2">
                    <label class="control-label" for="Add Tour Image">Model Weight</label>
                    <input type="text" class="form-control" name="model_weight" required>
                  </div>
                  <div class="form-group col-lg-2 col-md-2">
                    <label class="control-label" for="Add Tour Image">Model Bust</label>
                    <input type="text" class="form-control" name="model_bust" required>
                  </div>
                  <div class="form-group col-lg-2 col-md-2">
                    <label class="control-label" for="Add Tour Image">Model Waist</label>
                    <input type="text" class="form-control" name="model_waist" required>
                  </div>
                  <div class="form-group col-lg-2 col-md-2">
                    <label class="control-label" for="Add Tour Image">Model Hips</label>
                    <input type="text" class="form-control" name="model_hips" required>
                  </div>
               
</div>                  

<div class="row">
                  <div class="form-group col-lg-3 col-md-3">
                    <label class="control-label" for="Add Tour Descriptions">Model Biography</label>
                    <textarea class="form-control" rows="3" name="model_biography" required></textarea>
                  </div>

                  <div class="form-group col-lg-3 col-md-3">
                    <label class="control-label" for="Add Gallery Image">Choose Model main Image</label>
                    <input type="file" class="form-control" name="img1" required>
                  </div>

                
                  <div class="form-group col-lg-3 col-md-3">
                    <label class="control-label" for="Add Gallery Image">Choose Model Gallery Image 2</label>
                    <input type="file" class="form-control" name="img2" required>
                  </div>
                  <div class="form-group col-lg-3 col-md-3">
                    <label class="control-label" for="Add Gallery Image">Choose Model Gallery Image 3</label>
                    <input type="file" class="form-control" name="img3" required>
                  </div>
</div>

<div class="row">

                  <div class="form-group col-lg-3 col-md-3">
                    <label class="control-label" for="Add Gallery Image">Choose Model Gallery Image 4</label>
                    <input type="file" class="form-control" name="img4" required>
                  </div>
                  <div class="form-group col-lg-3 col-md-3">
                    <label class="control-label" for="Add Gallery Image">Choose Model Gallery Image 5</label>
                    <input type="file" class="form-control" name="img5" required>
                  </div>
                    <div class="form-group col-lg-3 col-md-3">
                    <label class="control-label" for="Add Gallery Image">Choose Model Gallery Image 6</label>
                    <input type="file" class="form-control" name="img6" required>
                  </div>
                    <div class="form-group col-lg-3 col-md-3">
                    <label class="control-label" for="Add Gallery Image">Choose Model Gallery Image 7</label>
                    <input type="file" class="form-control" name="img7" required>
                  </div>
</div>
<div class="row">

                    <div class="form-group col-lg-3 col-md-3">
                    <label class="control-label" for="Add Gallery Image">Choose Model Gallery Image 8</label>
                    <input type="file" class="form-control" name="img8" required>
                  </div>
                  <div class="form-group col-lg-3 col-md-3">
                    <label class="control-label" for="Add Gallery Image">Choose Model Gallery Image 9</label>
                    <input type="file" class="form-control" name="img9" required>
                  </div>
                    <div class="form-group col-lg-3 col-md-3">
                    <label class="control-label" for="Add Gallery Image">Choose Model Gallery Image 10</label>
                    <input type="file" class="form-control" name="img10" required>
                  </div>
</div>

                  <input class="btn btn-danger" type="reset" value="Reset">
                  <input type="submit" name="submit" class="btn btn-success btn-md" value="Submit">




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
<?php include("common/footer.php");?>









































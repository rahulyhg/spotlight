<?php

 ob_start();
 session_start();

require 'vendor/autoload.php';

\Cloudinary::config(array( 
  "cloud_name" => "dwrl5mija", 
  "api_key" => "567142323937582", 
  "api_secret" => "9tQ597Oz1GoxkVqEENRALpxGQQw" 
));


include("common/all_functions.php");
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
  


  
  
 
     $path = \Cloudinary\Uploader::upload($_FILES["img1"]['tmp_name']);;
      
   $profile_name=$path['url'];

  $path2 = \Cloudinary\Uploader::upload($_FILES["img2"]['tmp_name']);;
      
   $profile_name2=$path2['url'];

  $path3 = \Cloudinary\Uploader::upload($_FILES["img3"]['tmp_name']);;
      
   $profile_name3=$path3['url'];

  $path4 = \Cloudinary\Uploader::upload($_FILES["img4"]['tmp_name']);;
      
   $profile_name4=$path4['url'];

  $path5 = \Cloudinary\Uploader::upload($_FILES["img5"]['tmp_name']);;
      
   $profile_name5=$path5['url'];

  $path6 = \Cloudinary\Uploader::upload($_FILES["img6"]['tmp_name']);;
      
   $profile_name6=$path6['url'];
  
  
 $ex = "SS-";
$code = mt_rand(0, 1000);
$model_code = ($ex.$code);
 
 
 
$statement=mysqli_query($spotlight->spotlight,"INSERT INTO `user_reg`(`user_type`,`user_category`,`user_sub_category`,`user_name`,`user_dob`,`model_gender`,`model_height`,`model_weight`,`model_biography`,`model_image1`,`model_image2`,`model_image3`,`model_image4`,`model_image5`,`model_image6`,`model_code`,`model_age`) values('$user_type','$user_category','$user_sub_category','$user_name','$user_dob','$model_gender','$model_height','$model_weight','$model_biography','$profile_name','$profile_name2','$profile_name3','$profile_name4','$profile_name5','$profile_name6','$model_code',$model_age)");

if($statement)
{
    header("refresh:1;register_user.php");
}
}




?>

<style>
 input[type=date], input[type=time], input[type=datetime-local], input[type=month] {
  line-height: 16px;
}
</style>

<script src="jquery.min.js"></script>

<body>

  <div id="wrapper">


    <div id="page-wrapper">
      <div class="row">
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
                 <form role="form" action="" method="" enctype="multipart/form-data">
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
                                           
                                            <select class="form-control" name="user_sub_category" id="sub">
                                                 <option value="0">--select first model category--</option>
                              
                            </select>
                                    </div>
                  <div class="form-group">
                    <label class="control-label" for="Add Tour Name">Add Model Name</label>
                    <input type="text" class="form-control" name="user_name" required>
                  </div>
                     <div class="form-group">
                      <label class="control-label" for="Add Tour Name">Gender to be completed on all code pages</label>
                  <div class="radio">
         <label><input type="radio" name="model_gender" value="male" checked>MALE</label>
         <label><input type="radio" name="model_gender" value="female">FEMALE</label>
    </div>
    </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="control-group">
                        <label for="Start Date" class="control-label">Model Date Of Birth</label>
                        <input type="date" name="user_dob" class="form-control" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="Add Tour Image">Model Age</label>
                    <input type="text" class="form-control" name="model_age" placeholder="Only number" required>
                  </div>

                  <div class="form-group">
                    <label class="control-label" for="Add Tour Image">Model Height</label>
                    <input type="text" class="form-control" name="model_height" required>
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="Add Tour Image">Model Weight</label>
                    <input type="text" class="form-control" name="model_weight" required>
                  </div>
               
                  

                  <div class="form-group">
                    <label class="control-label" for="Add Tour Descriptions">Model Biography</label>
                    <textarea class="form-control" rows="3" name="model_biography" required></textarea>
                  </div>

                  <div class="form-group">
                    <label class="control-label" for="Add Gallery Image">Choose Model main Image</label>
                    <input type="file" class="form-control" name="img1" required>
                  </div>

                
                  <div class="form-group">
                    <label class="control-label" for="Add Gallery Image">Choose Model Gallery Image 2</label>
                    <input type="file" class="form-control" name="img2" required>
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="Add Gallery Image">Choose Model Gallery Image 3</label>
                    <input type="file" class="form-control" name="img3" required>
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="Add Gallery Image">Choose Model Gallery Image 4</label>
                    <input type="file" class="form-control" name="img4" required>
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="Add Gallery Image">Choose Model Gallery Image 5</label>
                    <input type="file" class="form-control" name="img5" required>
                  </div>
                    <div class="form-group">
                    <label class="control-label" for="Add Gallery Image">Choose Model Gallery Image 5</label>
                    <input type="file" class="form-control" name="img6" required>
                  </div>
                 
                  
                  <input class="btn btn-danger" type="reset" value="Reset">
                  <input type="button" name="submit" class="btn btn-success btn-md pull-right" value="Submit">





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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
  $(document).ready(function($) {
   $("input[name=submit").click(function(){
    var data = new FormData();
     var file = $('input[name=img1]').prop('files')[0];
     console.log(file);
      
      data.append('img1',file);
     $.ajax({
          type: "POST",
          url: 'all_functions.php',
          data: data,
          dataType: "json",
     });
   });
  });
</script>







































<?php
include("connect.php");
$Id = $_GET["id"];
$user_reg=mysqli_query($connect,"SELECT * from user_reg where user_id='$Id' ");
$rows=mysqli_fetch_assoc($user_reg);
$model_image1=$rows['model_image1'];
$model_image2=$rows['model_image2'];
$model_image3=$rows['model_image3'];
$model_image4=$rows['model_image4'];
$model_image5=$rows['model_image5'];
?>
     <div class="owl-carousel">
      <div class="item">
        <img src="<?php echo $model_image1 ?>" alt="Image" style="width:100%;height:500px;">
      </div>

      <div class="item">
        <img src="<?php echo $model_image2 ?>" alt="Image" style="width:100%;height:500px;">
      </div>
    
      <div class="item">
        <img src="<?php echo $model_image3 ?>" alt="Image" style="width:100%;height:500px;">
      </div>

       <div class="item">
        <img src="<?php echo $model_image4 ?>" alt="Image" style="width:100%;height:500px;">
      </div>

       <div class="item">
        <img src="<?php echo $model_image5 ?>" alt="Image" style="width:100%;height:500px;">
      </div>
      </div>
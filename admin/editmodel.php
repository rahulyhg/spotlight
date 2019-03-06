<?php


ob_start();

include("common/header.php");
include("common/config.php");
$spotlight=new config;


if(isset($_GET['m_id']))
{
  $m_id=$_GET['m_id'];

  $selectwhere = $spotlight->selectwhere($m_id);


}


if(isset($_POST['update']))
{

 $id=$_POST['m_id'];
 $model_name=$_POST['model_name'];
 $dob=$_POST['dob'];
 $height=$_POST['height'];
 $weight=$_POST['weight'];
 $about=$_POST['about'];
 $cwh=$_POST['cwh'];

 if($_FILES['img']['name'])
 {

  $tmp_loc=$_FILES['img']['tmp_name'];
  $tmp_img=$_FILES['img']['tmp_name'];
  $name=$_FILES['img']['name'];
  $new_path="model/".$name;

  $upload=move_uploaded_file($tmp_img,$new_path);


}
else
{
  $new_path=$_POST['oldimg'];
}



if($_FILES['img1']['tmp_name'])
{
 $tmp_loc1=$_FILES['img1']['tmp_name'];

 $tmp_img1=$_FILES['img1']['tmp_name'];
 $name1=$_FILES['img1']['name'];
 $new_path1="model/".$name1;
 $upload=move_uploaded_file($tmp_img1,$new_path1);
}

else {

  $new_path1=$_POST['oldimg1'];

}

if ($_FILES['img2']['tmp_name']) {

 $tmp_loc2=$_FILES['img2']['tmp_name'];
 $tmp_img2=$_FILES['img2']['tmp_name'];
 $name2=$_FILES['img2']['name'];
 $new_path2="model/".$name2;
 $upload=move_uploaded_file($tmp_loc2,$new_path2);
 
}
else
{
  $new_path2=$_POST['oldimg2'];
}
if($_FILES['img3']['tmp_name']){


  $tmp_loc3=$_FILES['img3']['tmp_name'];
  $tmp_img3=$_FILES['img3']['tmp_name'];
  $name3=$_FILES['img3']['name'];
  $new_path3="model/".$name3;
  $upload=move_uploaded_file($tmp_loc3,$new_path3);
}
else
{
  $new_path3=$_POST['oldimg3'];

}

if ($_FILES['img4']['tmp_name']) {

  $tmp_loc4=$_FILES['img4']['tmp_name'];
  $tmp_img4=$_FILES['img4']['tmp_name'];
  $name4=$_FILES['img4']['name'];
  $new_path4="model/".$name4;
  $upload=move_uploaded_file($tmp_loc4,$new_path4);

  
}
else
{
  $new_path4=$_POST['oldimg4'];

}

if ($_FILES['img5']['tmp_name']) {


 $tmp_loc5=$_FILES['img5']['tmp_name'];
 $tmp_img5=$_FILES['img5']['tmp_name'];
 $name5=$_FILES['img5']['name'];
 $new_path5="model/".$name5;
 $upload=move_uploaded_file($tmp_loc5,$new_path5);

}
else
{
  $new_path5=$_POST['oldimg5'];

}
if ($_FILES['img6']['tmp_name']) {

 $tmp_loc6=$_FILES['img6']['tmp_name'];
 $tmp_img6=$_FILES['img6']['tmp_name'];
 $name6=$_FILES['img6']['name'];
 $new_path6="model/".$name6;
 $upload=move_uploaded_file($tmp_loc6,$new_path6);

}
else
{
 $new_path6=$_POST['oldimg6'];


}








$sql= mysqli_query($spotlight->spotlight,"update `model` set `m_name` = '$model_name',`m_date` = '$dob',`m_height` = '$height',`m_weight` = '$weight',`m_figure` = '$cwh',`m_about`= '$about',`m_img` ='$new_path',`m_img1` = '$new_path1',`m_img2` = '$new_path2',`m_img3`='$new_path3',`m_img4`='$new_path4',`m_img5`='$new_path5',`m_img6`='$new_path6' where `m_id` = '$id'");



if($sql)

{
  header("Location:viewpackages.php");
}



}

ob_end_flush();

?>

<style>
 input[type=date], input[type=time], input[type=datetime-local], input[type=month] {
  line-height: 16px;
}
</style>

<script src="jquery.min.js"></script>

<body>

  <div id="wrapper">

    <?php include("common/menu.php");?>

    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header"><center>Edit Package</center></h1>
        </div>
        <!-- /.col-lg-12 -->
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default">

            <div class="panel-body">
              <div class="row">
                <div class="col-lg-12">

                 <?php


                 while($row = mysqli_fetch_assoc($selectwhere))
                 {

                  ?>

                  <form role="form" action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                     <label class="control-label" for="Add Gallery Image">Choose Main catecory Name</label>


                     <select  class="form-control" name="menu_id">

                      ?>
                      <option  value=""></option>

                    </select>
                  </div>   
                  
                  <div class="form-group">
                    <label class="control-label" for="id">id</label>
                    <input type="text" class="form-control" name="m_id" value="<?php echo $row['m_id'] ?>" readonly>
                  </div>


                  <div class="form-group">
                    <label class="control-label" for="Add Tour Name">Add Model Name</label>
                    <input type="text" class="form-control" name="model_name" value="<?php echo $row['m_name'] ?>">
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="control-group">
                        <label for="Start Date" class="control-label">Model Date Of Birth</label>
                        <input type="date" name="dob" class="form-control" value="echo $row['m_date']">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label" for="Add Tour Image">Model Height</label>
                    <input type="text" class="form-control" name="height" value="<?php echo $row['m_height'] ?>">
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="Add Tour Image">Model Weight</label>
                    <input type="text" class="form-control" name="weight" value="<?php echo $row['m_weight'] ?>">
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="Add Tour Image">Model C/W/H</label>
                    <input type="text" class="form-control" name="cwh" value="<?php echo $row['m_figure'] ?>">
                  </div>
                  

                  <div class="form-group">
                    <label class="control-label" for="Add Tour Descriptions">Model Biography</label>
                    <textarea class="form-control" rows="3" name="about" > <?php echo $row['m_about'] ?></textarea>
                  </div>

                  <div class="form-group">
                   
                    <input type="hidden" class="form-control" name="oldimg" value="<?php echo $row['m_img'] ?>" >
                  </div>


                  <div class="form-group">
                    <label class="control-label" for="Add Gallery Image">Choose Model main Image</label>
                    <input type="file" class="form-control" name="img">
                  </div>

                  <div class="form-group">
                   
                    <input type="hidden" class="form-control" name="oldimg1" value="<?php echo $row['m_img1'] ?>" >
                  </div>


                  <div class="form-group">
                    <label class="control-label" for="Add Gallery Image">Choose Gallery Image1</label>
                    <input type="file" class="form-control" name="img1">
                  </div>

                  <div class="form-group">
                   
                    <input type="hidden" class="form-control" name="oldimg2" value="<?php echo $row['m_img2'] ?>" >
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="Add Gallery Image">Choose Gallery Image2</label>
                    <input type="file" class="form-control" name="img2">
                  </div>
                  <div class="form-group">
                    
                    <input type="hidden" class="form-control" name="oldimg3" value="<?php echo $row['m_img3'] ?>" >
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="Add Gallery Image">Choose Gallery Image3</label>
                    <input type="file" class="form-control" name="img3">
                  </div>
                  <div class="form-group">
                   
                    <input type="hidden" class="form-control" name="oldimg4" value="<?php echo $row['m_img4'] ?>" >
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="Add Gallery Image">Choose Gallery Image4</label>
                    <input type="file" class="form-control" name="img4">
                  </div>

                  <div class="form-group">
                    
                    <input type="hidden" class="form-control" name="oldimg5" value="<?php echo $row['m_img5'] ?>" >
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="Add Gallery Image">Choose Gallery Image5</label>
                    <input type="file" class="form-control" name="img5">
                  </div>

                  <div class="form-group">
                   
                    <input type="hidden" class="form-control" name="oldimg6" value="<?php echo $row['m_img6'] ?>" >
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="Add Gallery Image">Choose Gallery Image6</label>
                    <input type="file" class="form-control" name="img6">
                  </div>






                  
                  

                  <input type="submit" name="update" class="btn btn-success btn-md pull-right" value="update">


                </form>
                <?php } ?>


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









































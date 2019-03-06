<?php
ob_start();
 include("common/header.php");
include("common/config.php");
$spotlight=new config;


if(isset($_GET['client_id']))
{
  $client_id=$_GET['client_id'];

  $selectwherepro = $spotlight->selectwherepro($client_id);
}

if(isset($_REQUEST['update']))
{
    $client_id=$_POST['client_id'];

    if($_FILES['img']['name'])
    {

       $tmp_loc=$_FILES
       ['img']['tmp_name'];
       $tmp_img=$_FILES['img']['tmp_name'];
       $name=$_FILES['img']['name'];
       $new_path="model/".$name;

       $upload=move_uploaded_file($tmp_img,$new_path);


   }
   else
   {
    $new_path=$_POST['oldimg'];

       }

$client_heading=$_POST['heading'];

$sql= mysqli_query($spotlight->spotlight,"update `clients` set `client_img` = '$new_path',`client_heading`='$client_heading' where `client_id` = '$client_id'");
if($sql)
{
    header("location:viewpro.php");
}



}
ob_end_flush();
?>
<body>
    <div id="wrapper">


      <?php include("common/menu.php");?>

      <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><center>Edit Work Here</center></h1>
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


                           while($row = mysqli_fetch_assoc($selectwherepro))
                           {

                              ?>

                              <form role="form" enctype="multipart/form-data"  method="post">
                               <div class="form-group">
                                <label class="control-label" for="Enter Menu Name">client_id</label>
                                <input type="text" class="form-control"  name="client_id" value="<?php echo $row['client_id'] ?>" >
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="Enter Menu Name">Current  Image</label>
                                <input type="text" class="form-control"  name="oldimg" value="<?php echo $row['client_img'] ?>" >
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="Enter Menu Name">Current  Image</label>
                                <input type="file" class="form-control"  name="img" >
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="Current Menu Name">Current  heading</label>
                                <input type="text" class="form-control"  name="heading" value="<?php echo $row['client_heading'] ?>" >
                            </div>
                            

                            <input class="btn btn-danger" type="reset" value="Reset">
                            <input type="submit" name="update" class="btn btn-success btn-md pull-right" value="Update">
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

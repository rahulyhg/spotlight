<?php 
session_start();
include("common/header.php");
include("common/config.php");
$spotlight=new config;
if(isset($_POST['submit']))
{

    $name=$_POST['name'];

    $spotlight->insertgallery($name);
}
$gallery_name=$spotlight->gallery_name();

?>


<body>
<?php include("common/admin_head.php");?>
    <div id="wrapper">

        <?php include("common/menu.php");?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><center>Add Gallery Menu Name</center></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">

                                    <form method="post" action="">
                                        <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Enter Gallery Name</label>
                                            <input type="text" class="form-control" id="name" name="name"  required autofocus>
                                        </div>                               
                                        <input class="btn btn-danger" type="reset" value="Reset">
                                        <input type="submit" name="submit" class="btn btn-success btn-md pull-right" value="Add Gallery Name">
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

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><center>Add Gallery Pic</center></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">

                                    <form method="post" enctype="multipart/form-data" action="viewgallery.php">
                                      <div class="form-group">
                                       <label class="control-label" for="Add Gallery Image">Choose Gallery Menu Name</label>


                                       <select  class="form-control" name="imgid">
                                           <?php
                                           while($row = mysqli_fetch_assoc($gallery_name))
                                           {
                                           
                                            ?>
                                            <option  value="<?php echo $row['g_id']; ?>"><?php echo $row['gallery_name'];?></option>
                                            <?php } ?>

                                        </select>
                                    </div>   
                                     <div class="form-group">
                                            <label class="control-label" for="Add Gallery Image">Add Gallery Image <strong style="color:red;">(300*300 images)</strong></label>
                                            <input type="file" class="form-control" name="img">
                                        </div>
                                         

                                    <input class="btn btn-danger" type="reset" value="Reset">
                                    <input type="submit" name="submit" class="btn btn-success btn-md pull-right" value="Add Gallery Pic">
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
<?php
 ob_start();
 include("common/header.php");
include("common/config.php");
$spotlight=new config;

$t_id=$_GET['t_id'];

$selecttestwhere= $spotlight->selecttestwhere($t_id);


if(isset($_POST['update']))

{
    $t_id=$_POST['t_id'];
  $c_name=$_POST['c_name'];
  $c_details=$_POST['c_details'];

 $sql= mysqli_query($spotlight->spotlight,"update `Testimonials` set   `c_name` = '$c_name',`c_details` = '$c_details' where `t_id` = '$t_id'");
 if($sql)
 {
  header("location:viewtest.php");
 }
 else
 {
  echo "error in update"; 
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
                    <h1 class="page-header"><center>Edit Testimonials</center></h1>
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
                    while($test=mysqli_fetch_assoc($selecttestwhere))
                    {
                      ?>
                                 <form role="form" action="" method="post">
                                  <div class="form-group">
                                           
                                            <input type="hidden" class="form-control" id="t_id" name="t_id" value="<?php echo $test['t_id'] ?>" readonly>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Current Client/Company Name</label>
                                            <input type="text" class="form-control" id="c_name" name="c_name" value="<?php echo $test['c_name'] ?>" required autofocus>
                                        </div>
                                        
                             <div class="form-group">
                              <label class="control-label" for="Add Tour Descriptions">Current Testimonials Details</label>
                              <textarea class="form-control" rows="3" name="c_details"><?php echo $test['c_details']; ?></textarea>
                                 </div>
                                       
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

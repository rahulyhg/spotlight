<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("common/header.php");
echo ini_get ("upload_min_filesize");
ob_end_flush();
?>
<body>
 <?php include("common/admin_head.php");?>
    <div id="wrapper">

      <?php include("common/menu.php");?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><center>Add About</center></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
             <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
                          <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                 <form role="form" action="viewabout.php" enctype="multipart/form-data"  method="post">
                                         <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Enter About Name</label>
                                            <input type="text" class="form-control"  name="about_name" required autofocus>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Enter About Designation</label>
                                            <input type="text" class="form-control"  name="about_designation" required autofocus>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Enter About Image (240 PX * 240PX )</label>
                            <input type="file" name="fileToUpload" id="fileToUpload">
                                        </div>
                                        
                                        <input class="btn btn-danger" type="reset" value="Reset">
                                        <input type="submit" name="submit_about" class="btn btn-success btn-md pull-right" value="Add About">
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

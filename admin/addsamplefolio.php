<?php
session_start();
include("common/header.php");?>
<body>

    <div id="wrapper">

      <?php include("common/menu.php");?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><center>Add sample folio image</center></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
             <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
                          <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                 <form role="form" action="viewsamplefolio.php" enctype="multipart/form-data" method="post">
                                         <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">add image Here<strong style="color:red;">(please add only one image in sample folio) 399px*555px</strong></label>
                                            <input type="file" class="form-control"  name="img" required autofocus>
                                        </div>
                                        
                                        <input class="btn btn-danger" type="reset" value="Reset">
                                        <input type="submit" name="submit_image" class="btn btn-success btn-md pull-right" value="Add Sample Image">
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

<?php 
session_start();
include("common/header.php");?>
<body>
    <?php include("common/admin_head.php");?>

    <div id="wrapper">

      <?php include("common/menu.php");?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><center>Add Testimonials</center></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
             <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
                          <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                 <form role="form" action="viewtest.php" method="post">
                                         <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Enter Client/Company Name</label>
                                            <input type="text" class="form-control" id="c_name" name="c_name" required autofocus>
                                        </div>
                                        
                             <div class="form-group">
                              <label class="control-label" for="Add Tour Descriptions">Enter Testimonials Details</label>
                              <textarea class="form-control" rows="3" name="c_details"></textarea>
                                 </div>
                                        
                                        <input class="btn btn-danger" type="reset" value="Reset">
                                        <input type="submit" name="submit" class="btn btn-success btn-md pull-right" value="Add Menu">
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

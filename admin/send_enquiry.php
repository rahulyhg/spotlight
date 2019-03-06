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
                    <h1 class="page-header"><center>Send Model Notification</center></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
             <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
                          <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                 <form role="form" action="viewsend.php" enctype="multipart/form-data"  method="post">
                                         <div class="form-group">
                                            <label class="control-label" for="Enter model code">Enter Model Code</label>
                                            <input type="text" class="form-control"  name="model_code" required autofocus>
                                        </div>
                                          <div class="form-group">
                                            <label class="control-label" for="Enter model code">Shoot Date</label>
                                            <input type="text" class="form-control"  name="shoot_date" required autofocus>
                                        </div>
                                          <div class="form-group">
                                            <label class="control-label" for="Enter model code">Shoot Location</label>
                                            <input type="text" class="form-control"  name="shoot_location" required autofocus>
                                        </div>
                                          <div class="form-group">
                                            <label class="control-label" for="Enter model code">Shoot type</label>
                                            <input type="text" class="form-control"  name="shoot_type" required autofocus>
                                        </div>
                                        
                                         <div class="form-group">
                                            <label class="control-label" for="Enter model code">Requierment</label>
                                            <input type="text" class="form-control"  name="requirement" required autofocus>
                                        </div>
                                        
                                        
                                        
                                        
                                        <input type="submit" name="send" class="btn btn-success btn-md pull-right" value="send">
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

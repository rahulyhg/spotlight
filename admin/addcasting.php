<?php session_start(); ?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Pannel</title>

   <link href="style/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->         
    <link href="style/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="style/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="style/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="style/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="style/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

 
</head>
<body>
<?php include("common/admin_head.php");?>
    <div id="wrapper">

      <?php include("common/menu.php");?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><center>Add Casting Here</center></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
             <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
                          <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                 <form role="form" enctype="multipart/form-data" action="viewcasting.php" method="post">
                                         <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Enter Casting Front Image</label>
                                            <input type="file" class="form-control"  name="cast" required autofocus>
                                        </div>
                                          <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Enter Casting Image2</label>
                                            <input type="file" class="form-control"  name="cast2" required autofocus>
                                        </div>
                                          <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Enter Casting Image3</label>
                                            <input type="file" class="form-control"  name="cast3" required autofocus>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Enter Casting Image4</label>
                                            <input type="file" class="form-control"  name="cast4" required autofocus>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Enter casting heading</label>
                                            <input type="text" class="form-control"  name="heading" required autofocus>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Enter casting text</label>
                                            <input type="text" class="form-control"  name="text" required autofocus>
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

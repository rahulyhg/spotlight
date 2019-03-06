<?php session_start(); ?>
<!DOCTYPE html>
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

    <div id="wrapper">

      <?php include("common/menu.php");?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><center>Add Package</center></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
             <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
                          <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                 <form role="form" action="viewpack.php" method="post">
                                         <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Enter Package Name</label>
                                            <input type="text" class="form-control" id="name" name="p_name" required autofocus>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Enter price</label>
                                            <input type="text" class="form-control" id="name" name="p_rate" required autofocus>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Enter Photography</label>
                                            <input type="text" class="form-control" id="name" name="p_photography" required autofocus>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Enter No of Looks</label>
                                            <input type="text" class="form-control" id="name" name="p_nol" required autofocus>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Enter Pictures clicked</label>
                                            <input type="text" class="form-control" id="name" name="p_click" required autofocus>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Enter No of pictures Selected - Cd</label>
                                            <input type="text" class="form-control" id="name" name="p_cd" required autofocus>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Enter Digital Retouch</label>
                                            <input type="text" class="form-control" id="name" name="p_retouch" required autofocus>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Enter Indoor shoot</label>
                                            <input type="text" class="form-control" id="name" name="p_indoor" required autofocus>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Enter Outdoor shoot</label>
                                            <input type="text" class="form-control" id="name" name="p_outdoor" required autofocus>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Enter Duration of Shoot</label>
                                            <input type="text" class="form-control" id="name" name="p_duration" required autofocus>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Enter List of Coordinators & Production houses</label>
                                            <input type="text" class="form-control" id="name" name="p_cp" required autofocus>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Enter No of Prints</label>
                                            <input type="text" class="form-control" id="name" name="p_print" required autofocus>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Enter No of Compcards - layouts</label>
                                            <input type="text" class="form-control" id="name" name="p_lay" required autofocus>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Enter No of Compcards - Prints</label>
                                            <input type="text" class="form-control" id="name" name="p_cprint" required autofocus>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Enter Portfolio Magazine / Photobook</label>
                                            <input type="text" class="form-control" id="name" name="p_photobook" required autofocus>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Enter Fashion Stylist</label>
                                            <input type="text" class="form-control" id="name" name="p_style" required autofocus>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Enter Free pickup</label>
                                            <input type="text" class="form-control" id="name" name="p_pickup" required autofocus>
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

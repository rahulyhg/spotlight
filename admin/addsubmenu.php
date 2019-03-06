<?php 
session_start();
include("common/header.php");
include("common/config.php");
$travel=new config;
$selectmenus=$travel->selectallmenu();
?>


<body>

    <div id="wrapper">

      <?php include("common/menu.php");?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><center>Add Sub-Menu</center></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
             <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
                          <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                 <form role="form" action="viewsubmenu.php" method="post">
                                    <div class="form-group">
                                            <label class="control-label" for="Select Main Menu Name">Select Main Menu Name</label>
                                           
                                            <select class="form-control" name="mid">
                                             <?php
                                                while($js = mysqli_fetch_assoc($selectmenus))
                                                {
                                            ?>
                                            <option value="<?php echo $js['m_id']; ?>"><?php echo $js['name']; ?></option>
                                            <?php }  ?>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="Enter Menu Name">Enter Sub-Menu Name</label>
                                        <input type="text" class="form-control" id="name" name="name" required>
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

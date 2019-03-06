<?php 
 ob_start();
include("common/header.php");
include("common/config.php");
$travel=new config;

if(isset($_POST['submit']))
{
    $m_id=$_POST['m_id']; 
    $name=$_POST['name'];
    $s_id=$_GET['s_id'];
    $travel->updatesubmenu($m_id,$name,$s_id);
    header("Location:viewsubmenu.php");
}

$selectmenus=$travel->selectallmenu();
$s_id=$_GET['s_id'];
$selectonesubmenus=$travel->selectonesubmenuitem($s_id);
ob_end_flush();
?>


<body>

    <div id="wrapper">

      <?php include("common/menu.php");?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><center>Edit Sub-Menu</center></h1>
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
                    while($submenuname=mysqli_fetch_assoc($selectonesubmenus))
                    {
                      ?>
                                 <form role="form"  method="post">
                                    <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Select Main Menu Name</label>
                                           
                                            <select class="form-control" name="m_id">
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
                                        <input type="text" class="form-control" id="name" name="name" value="<?php echo  $submenuname['name'];?>"required>
                                    </div>
                                      <?php
                       }
        ?>    
                                            
                                    
                                        <input type="submit" name="submit" class="btn btn-success btn-md pull-right" value="Edit Sub Menu">





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

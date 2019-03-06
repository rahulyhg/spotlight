<?php
ob_start();
 include("common/header.php");

include("common/config.php");
$spotlight=new config;
if(isset($_GET['id']))
{
    $id=$_GET['id'];

     $selectmenu = $spotlight->selectmenu($id);

}

if(isset($_REQUEST['update']))
{

$id=$_POST['id'];

$name=$_POST['name'];


$sql= mysqli_query($spotlight->spotlight,"update `main_menu` set `menu_name` = '$name' where `id` = '$id' ");
if($sql)
{
    header("Location: viewmenu.php");
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
                    <h1 class="page-header"><center>Edit Menu</center></h1>
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


                     while($row = mysqli_fetch_assoc($selectmenu))
                     {
                       
                      ?>

                                 <form role="form" action="" method="post">
                                    <div class="form-group">
                                        
                                            <input type="hidden"   class="form-control"  value="<?php echo $row['id'] ?>" id="name" name="id">
                                        </div>
                                        
                                         <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Enter Menu Name</label>
                                            <input type="text" class="form-control"  value="<?php echo $row['menu_name'] ?>" id="name" name="name" required autofocus>
                                        </div>
                                        
                                      
                                        <input type="submit" name="update" class="btn btn-success btn-md pull-right" value="Update Menu">
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

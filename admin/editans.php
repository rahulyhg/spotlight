<?php 
 ob_start();
include("common/header.php");
include("common/config.php");
$spotlight=new config;

if(isset($_REQUEST['update_ans']))
{
    $ans_id=$_GET['ans_id'];

    $ans = $_POST['ans'];

    $spotlight->updateans($ans,$ans_id);

    header("Location:viewans.php");       
}
ob_end_flush();
$ans_id=$_GET['ans_id'];
$selectans=$spotlight->Selectans($ans_id);

?>


<body>

    <div id="wrapper">

      <?php include("common/menu.php");?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><center>Edit Faq Ans Here</center></h1>
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
                    while($ans=mysqli_fetch_assoc($selectans))
                    {
                      ?>
                                 <form role="form" action="" method="post">
                                 
                                         
                                            <input type="readonly" class="form-control" name="ans_id" value="<?php echo  $ans['ans_id'];?>" >
                                       
                                       
                                         <div class="form-group">
                                          <label class="control-label" for="Enter Menu Name">Enter Answer</label>
                                            <input type="text" class="form-control" id="name" name="ans" value="<?php echo  $ans['ans'];?>" required>
                                        </div>
                                       
                                        <input type="submit" name="update_ans" class="btn btn-success btn-md pull-right" value="Edit Answer">
                                    </form>
                                <?php
                       }
        ?>    
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

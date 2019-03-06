<?php 
 ob_start();
include("common/header.php");

include("common/config.php");
$spotlight=new config;


if(isset($_GET['p_id']))
{
  $p_id=$_GET['p_id'];

  $viewpack = $spotlight->editpack($p_id);
}
if(isset($_POST['update']))
{
    $p_id=$_POST['p_id'];

    $p_name=$_POST['p_name'];
    $p_rate=$_POST['p_rate'];
    $p_photography=$_POST['p_photography'];

    $p_nol=$_POST['p_nol'];

    $p_click=$_POST['p_click'];
    $p_cd=$_POST['p_cd'];
    $p_retouch=$_POST['p_retouch'];
    $p_indoor=$_POST['p_indoor'];
    $p_outdoor=$_POST['p_outdoor'];
    $p_duration=$_POST['p_duration'];
    $p_cp=$_POST['p_cp'];
    $p_print=$_POST['p_print'];
    $p_lay=$_POST['p_lay'];

    $p_cprint=$_POST['p_cprint'];
    $p_photobook=$_POST['p_photobook'];
    $p_style=$_POST['p_style'];
    $p_pickup=$_POST['p_pickup'];

  $sql= mysqli_query($spotlight->spotlight,"update `package` set `p_name` = '$p_name',`p_rate` = '$p_rate',`p_photography` = '$p_photography',`p_nol` = '$p_nol',`p_click` = '$p_click',`p_cd`= '$p_cd',`p_retouch` ='$p_retouch',`p_indoor` = '$p_indoor',`p_outdoor` = '$p_outdoor',`p_duration`='$p_duration',`p_cp`='$p_cp',`p_print`='$p_print',`p_lay`='$p_lay',`p_cprint`='$p_cprint',`p_photobook`= '$p_photobook',`p_style`='$p_style',`p_pickup`='$p_pickup' where `p_id` = '$p_id'");


  //  echo "update `package` set `p_name` = '$p_name',`p_rate` = '$p_rate',`p_photography` = '$p_photography',`p_nol` = '$p_nol',`p_click` = '$p_click',`p_cd`= '$p_cd',`p_retouch` ='$p_retouch',`p_indoor` = '$p_indoor',`p_outdoor` = '$p_outdoor',`p_duration`='$p_duration',`p_cp`='$p_cp',`p_print`='$p_print',`p_lay`='$p_lay',`p_cprint`='$p_cprint',`p_photobook`= '$p_photobook',`p_style`='$p_style',`p_pickup`='$p_pickup' where `p_id` = '$p_id'";
  // // die();


    if($sql)
    {
        header("refresh:2 viewpack.php");
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
                    <h1 class="page-header"><center>Edit Package</center></h1>
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
                        while($js = mysqli_fetch_assoc($viewpack))
                        {
                            ?>
                                 <form role="form"  method="post">
                                 <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">p_id</label>
                                            <input type="text" class="form-control" id="name" name="p_id" value="<?php echo $js['p_id']; ?>" readonly >
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Current Package Name</label>
                                            <input type="text" class="form-control" id="name" name="p_name" value="<?php echo $js['p_name']; ?>" required autofocus>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Current price</label>
                                            <input type="text" class="form-control" id="name" name="p_rate" value="<?php echo $js['p_rate']; ?>"  required autofocus>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Current Photography</label>
                                            <input type="text" class="form-control" id="name" name="p_photography" value="<?php echo $js['p_photography']; ?>" required autofocus>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Current No of Looks</label>
                                            <input type="text" class="form-control" id="name" name="p_nol" value="<?php echo $js['p_nol']; ?>" required autofocus>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Current Pictures clicked</label>
                                            <input type="text" class="form-control" id="name" name="p_click" value="<?php echo $js['p_click']; ?>"  required autofocus>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Current No of pictures Selected - Cd</label>
                                            <input type="text" class="form-control" id="name" name="p_cd" value="<?php echo $js['p_cd']; ?>" required autofocus>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Current Digital Retouch</label>
                                            <input type="text" class="form-control" id="name" name="p_retouch"  value="<?php echo $js['p_retouch']; ?>" required autofocus>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Current Indoor shoot</label>
                                            <input type="text" class="form-control" id="name" name="p_indoor" value="<?php echo $js['p_indoor']; ?>" required autofocus>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Current Outdoor shoot</label>
                                            <input type="text" class="form-control" id="name" name="p_outdoor" value="<?php echo $js['p_outdoor']; ?>" required autofocus>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Current Duration of Shoot</label>
                                            <input type="text" class="form-control" id="name" name="p_duration" value="<?php echo $js['p_duration']; ?>" required autofocus>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Current List of Coordinators & Production houses</label>
                                            <input type="text" class="form-control" id="name" name="p_cp" value="<?php echo $js['p_cp']; ?>" required autofocus>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Current No of Prints</label>
                                            <input type="text" class="form-control" id="name" name="p_print" value="<?php echo $js['p_print']; ?>" required autofocus>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Current No of Compcards - layouts</label>
                                            <input type="text" class="form-control" id="name" name="p_lay" value="<?php echo $js['p_lay']; ?>" required autofocus>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Current No of Compcards - Prints</label>
                                            <input type="text" class="form-control" id="name" name="p_cprint" value="<?php echo $js['p_cprint']; ?>" required autofocus>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Current Portfolio Magazine / Photobook</label>
                                            <input type="text" class="form-control" id="name" name="p_photobook" value="<?php echo $js['p_photobook']; ?>" required autofocus>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Current Fashion Stylist</label>
                                            <input type="text" class="form-control" id="name" name="p_style" value="<?php echo $js['p_style']; ?>" required autofocus>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="Enter Menu Name">Current Free pickup</label>
                                            <input type="text" class="form-control" id="name" name="p_pickup" value="<?php echo $js['p_pickup']; ?>" required autofocus>
                                        </div>
                                        
                                        <input class="btn btn-danger" type="reset" value="Reset">
                                        <input type="submit" name="update" class="btn btn-success btn-md pull-right" value="update">
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

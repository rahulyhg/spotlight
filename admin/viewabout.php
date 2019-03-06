<?php
ob_start();
session_start();

error_reporting(-1); // reports all errors
ini_set("display_errors", "1"); // shows all errors
ini_set("log_errors", 1);
ini_set("error_log", "/tmp/php-error.log");

include("common/header.php");
include("common/config.php");



$spotlight=new config;
if (isset($_POST['submit_about']))
 {


  $about_name=$_POST['about_name'];
  $about_designation=$_POST['about_designation'];
  $tmp_loc=$_FILES['about_img']['tmp_name'];
  $tmp_img=$_FILES['about_img']['tmp_name'];
  $name=$_FILES['about_img']['name'];
  $new_path="model/".$name;
  $upload=move_uploaded_file($tmp_loc,$new_path);



  $query = mysqli_query($spotlight->spotlight,"INSERT INTO  `about` (`about_name`,`about_designation`,`about_image`) values ('$about_name','$about_designation','$new_path')");
 // echo "INSERT INTO  `about` (`about_name`,`about_designation`,`about_imgage`) values ('$about_name','$about_designation','$new_path')"; die();
    if($query)
    {
    	header("Location:viewabout.php");
    }
    else
    {
    	echo "error";
    }
   

}

$viewabout=$spotlight->selectabout();
ob_end_flush();

?>


<body>
<?php include("common/admin_head.php");?>
	<div id="wrapper">

		<?php include("common/menu.php");?>

		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header"><center>View About</center></h1>

					<center><table class="table table-striped" border="1" style="text-align: center;">
						<tr>
							
							<th>View image</th>
							<th>View Name </th>
							<th>View Designation  </th>
							
						
							<th colspan="2">Action</th>
						   </tr>
						 <?php
			            while($js = mysqli_fetch_assoc($viewabout))
			              {?>
						
							<tr>
							 

								
								
								 <td><img src="<?php echo $js['about_image'];?>" style="height: 70px;width: 70px;" class="img-responsive"></td>
								<td><?php echo $js['about_name'];?></td>
								<td><?php echo $js['about_designation'];?></td>
							

								
								<td><a href="deleteabout.php?about_id=<?php echo $js['about_id']?>">Delete</a></td>


							</tr> 
							<?php } ?>               
							

					</table></center>
				</div>
				<!-- /.col-lg-12 -->
			</div>

		</div>
		<!-- /#page-wrapper -->

	</div>
	<!-- /#wrapper -->

	<?php include("common/footer.php");?>

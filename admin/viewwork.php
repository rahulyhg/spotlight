<?php
ob_start();
session_start();
include("common/header.php");
include("common/config.php");
$spotlight=new config;

if (isset($_POST['submit']))
 {

  $work_heading=$_POST['heading'];

  $tmp_loc=$_FILES['work']['tmp_name'];
  $tmp_img=$_FILES['work']['tmp_name'];
  $name=$_FILES['work']['name'];
  $new_path="model/".$name;
   $upload=move_uploaded_file($tmp_loc,$new_path);



  $query = mysqli_query($spotlight->spotlight,"INSERT INTO  `work` (`work_image`,`work_heading`) values ('$new_path','$work_heading')");
  //echo "INSERT INTO  `work` (`work_image`,`work_heading`) values ('$new_path','$work_heading')";die();

    if($query)
    {
    	header("Location:viewwork.php");
    }
    else
    {
    	echo "error";
    }
   

}

$viewwork=$spotlight->selectwork();

ob_end_flush();
?>


<body>
<?php include("common/admin_head.php");?>
	<div id="wrapper">

		<?php include("common/menu.php");?>

		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header"><center>View Work</center></h1>

					<center><table class="table table-striped" border="1" style="text-align: center;">
						<tr>
							
							<th>View Projects image</th>
							<th>View Projects heading</th>
							
							
						
							<th colspan="2">Action</th>
						</tr>
						 <?php
			            while($js = mysqli_fetch_assoc($viewwork))
			              {?>
						
							<tr>
							 

								
								
								 <td><img src="<?php echo $js['work_image'];?>" style="height: 70px;width: 70px;" class="img-responsive"></td>
								 <td>
									 <?php echo $js['work_heading']; ?>
								</td>
							
							

								
								<td><a href="deletework.php?work_id=<?php echo $js['work_id']?>">Delete</a></td>


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


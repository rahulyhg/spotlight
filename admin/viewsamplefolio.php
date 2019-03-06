<?php
session_start();
include("common/header.php");
include("common/config.php");
$spotlight=new config;

if (isset($_POST['submit_image']))
 {
  $tmp_loc=$_FILES['img']['tmp_name'];
  $tmp_img=$_FILES['img']['tmp_name'];
  $name=$_FILES['img']['name'];
  $new_path="model/".$name;
  $upload=move_uploaded_file($tmp_loc,$new_path);
  $query = mysqli_query($spotlight->spotlight, "INSERT INTO sample_folio (`sample_image`) values ('$new_path')");
 // echo "INSERT INTO sample_folio (`sample_image`) values ('$new_path')"; die();

    if($query)
    {
    	header("Location:viewsamplefolio.php");
    }
    else
    {
    	echo "error";
    }
   

}

$viewsamplefolio=$spotlight->select_sample_folio();


?>


<body>

	<div id="wrapper">

		<?php include("common/menu.php");?>

		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header"><center>View Sample image Here</center></h1>

					<center><table class="table table-striped" border="1" style="text-align: center;">
						<tr>
							
							<th>View sample folio image</th>
							
							
							
						
							<th colspan="2">Action</th>
						</tr>
						 <?php
			            while($js = mysqli_fetch_assoc($viewsamplefolio))
			              {?>
						
							<tr>
							 <td><img src="<?php echo $js['sample_image'];?>" style="height: 70px;width: 70px;" class="img-responsive"></td>
								<td><a href="deletesamplefolio.php?sample_folio_id=<?php echo $js['sample_folio_id']?>">Delete</a></td>
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


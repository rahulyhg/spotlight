<?php.
ob_start();
session_start();
include("common/header.php");
include("common/config.php");
$spotlight=new config;
if (isset($_POST['submit']))
 {



	$tmp_loc=$_FILES['banner']['tmp_name'];
    $tmp_img=$_FILES['banner']['tmp_name'];
  $name=$_FILES['banner']['name'];
  $new_path="model/".$name;


	

  $upload=move_uploaded_file($tmp_loc,$new_path);


   $query = mysqli_query($spotlight->spotlight,"INSERT INTO  `banner` (`b_img`) values ('$new_path')");
   
  // echo "INSERT INTO  `banner` (`b_img`,`video`) values ('$new_path')"; die();
    if($query)
    {
    	//header("Location:banner.php");
    }
    else
    {
    	echo "error";
    }
   

}

$viewbanner=$spotlight->selectbanner();

ob_end_flush();

?>


<body>
<?php include("common/admin_head.php");?>
	<div id="wrapper">

		<?php include("common/menu.php");?>

		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header"><center>View Banner</center></h1>

					<center><table class="table table-striped">
						<tr>
							
							<td>View Banner</td>
						
							<td>Delete</td>
						</tr>
						 <?php
            while($js = mysqli_fetch_assoc($viewbanner))
              {?>
						
							<tr>
							 

								
								
								 <td><img src="<?php echo $js['b_img'];?>" style="height: 70px;width: 70px;" class="img-responsive"></td>
								
							
								<td><a href="deletebanner.php?b_id=<?php echo $js['b_id']?>">Delete</a></td>


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

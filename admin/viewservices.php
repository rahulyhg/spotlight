<?php
session_start();
include("common/header.php");
include("common/config.php");
$spotlight=new config;

if(isset($_POST['submit']))
{


	$tmp_loc=$_FILES['img']['tmp_name'];
  $tmp_img=$_FILES['img']['tmp_name'];
  $name=$_FILES['img']['name'];
  $new_path="model/".$name;
   $upload=move_uploaded_file($tmp_loc,$new_path);

   $s_heading = $_POST['heading'];
   $s_details = $_POST['details'];




  $query = mysqli_query($spotlight->spotlight,"INSERT INTO  `services` (`s_img`,`s_heading`,`s_details`) values ('$new_path','$s_heading','$s_details')");

// echo "INSERT INTO  `services` (`s_img`,`s_heading`,`s_details`) values ('$new_path','$s_heading','$s_details')"; die();

    if($query)
    {
    	header("Location:viewservices.php");
    }
    else
    {
    	echo "error";
    }


 
   

}
   $view=$spotlight->selectservices();


?>


<body>

	<div id="wrapper">

		<?php include("common/menu.php");?>

		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header"><center>View Services</center></h1>

					<center><table class="table table-striped" border="1"  style="text-align:center">
						<tr>
							<th>service image</th>
							<th>Service heading</th>
								<th>Service text</th>
							<th colspan="2">Action</th>
							
						</tr>

						 <?php
			            while($js = mysqli_fetch_assoc($view))
			              {?>
						
							<tr>
								
								<td><img src="<?php echo $js['s_img'];?>" style="height: 70px;width: 70px;" class="img-responsive">
								<td> <?php echo $js['s_heading']; ?>  </td>
								<td>
									 <?php echo $js['s_details']; ?>
								</td>
								
								<td><a href="editservices.php?id=<?php echo $js['id'] ?>">Edit</a></td>

								<td><a href="deleteservices.php?id=<?php echo $js['id'] ?>">Delete</a></td>
							</tr>  
							<?php } ?>             
							<!-- ";
							echo $string;
						}
						?> -->

					</table></center>
				</div>
				<!-- /.col-lg-12 -->
			</div>

		</div>
		<!-- /#page-wrapper -->

	</div>
	<!-- /#wrapper -->

	<?php include("common/footer.php");?>

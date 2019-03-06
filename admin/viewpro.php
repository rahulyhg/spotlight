<?php
  ob_start();
  session_start();
include("common/header.php");
include("common/config.php");
$spotlight=new config;
if (isset($_POST['submit']))
 {


  



	$tmp_loc=$_FILES['cast']['tmp_name'];
  $tmp_img=$_FILES['cast']['tmp_name'];
  $name=$_FILES['cast']['name'];
  $new_path="model/".$name;
   $upload=move_uploaded_file($tmp_loc,$new_path);
   
   




  $query = mysqli_query($spotlight->spotlight,"INSERT INTO  `clients` (`client_img`) values ('$new_path')");
//  echo "INSERT INTO  `clients` (`client_img`,`client_heading`) values ('$new_path','$client_heading')"; die();
    if($query)
    {
    	header("Location:viewpro.php");
    }
    else
    {
    	echo "error";
    }
   

}

    $viewpro=$spotlight->selectpro();

ob_end_flush();
?>


<body>
<?php include("common/admin_head.php");?>
	<div id="wrapper">

		<?php include("common/menu.php");?>

		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header"><center>View Client</center></h1>

					<center><table class="table table-striped" border="1" style="text-align: center;">
						<tr>
							
							<th>View Projects image</th>
							<th>View heading</th>
							
						
							<th colspan="2">Action</th>
						</tr>
						 <?php
			            while($js = mysqli_fetch_assoc($viewpro))
			              {?>
						
							<tr>
							 

								
								
								 <td><img src="<?php echo $js['client_img'];?>" style="height: 70px;width: 70px;" class="img-responsive"></td>
								<td><?php echo $js['client_heading'];?></td>
							

								<td><a href="editclient.php?client_id=<?php echo $js['client_id']?>">Edit</a></td>
								<td><a href="deleteclient.php?client_id=<?php echo $js['client_id']?>">Delete</a></td>


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

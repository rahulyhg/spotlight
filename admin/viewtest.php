<?php
session_start();
include("common/header.php");
include("common/config.php");
$spotlight=new config;

if(isset($_POST['submit']))
{
	$c_name=$_POST['c_name'];
	$c_details=$_POST['c_details'];
	
	$spotlight->inserttest($c_name,$c_details);
}
$selecttest=$spotlight->selecttest();
?>


<body>
<?php include("common/admin_head.php");?>
	<div id="wrapper">

		<?php include("common/menu.php");?>

		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header"><center>View Testimonials</center></h1>

					<center><table class="table table-striped" border="1"  style="text-align:center">
						<tr>
							<th>Client/Company Name</th>
							<th>Testimonials Details</th>
							<th colspan="2">Action</th>
							
						</tr>
						<?php
						while($js = mysqli_fetch_assoc($selecttest))
						{
							$string="
							<tr>
								
								<td>".$js['c_name']."</td>
								<td>".$js['c_details']."</td>
								
								<td><a href='edittest.php?t_id=".$js['t_id']."'>Edit</a></td>
								<td><a href='deletetest.php?t_id=".$js['t_id']."'>Delete</a></td>
							</tr>                
							";
							echo $string;
						}
						?>

					</table></center>
				</div>
				<!-- /.col-lg-12 -->
			</div>

		</div>
		<!-- /#page-wrapper -->

	</div>
	<!-- /#wrapper -->

	<?php include("common/footer.php");?>

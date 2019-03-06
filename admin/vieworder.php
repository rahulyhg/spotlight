<?php
session_start();
include("common/header.php");
include("common/config.php");
$spotlight=new config;

$selectorder=$spotlight->selectorder();
?>


<body>

	<div id="wrapper">

		<?php include("common/menu.php");?>

		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header"><center>View Order</center></h1>

					<center><table class="table table-striped">
						<tr>
							<td>Mid</td>
							<td>Name</td>
							<td>Email</td>
							<td>Mobile</td>
							<td>Delete</td>
						</tr>
						<?php
						while($js = mysqli_fetch_assoc($selectorder))
						{
							$string="
							<tr>
								<td>".$js['m_name']."</td>
								<td>".$js['name']."</td>
								<td>".$js['email']."</td>
								<td>".$js['mobile']."</td>
							
								<td><a href='deleteorder.php?id=".$js['id']."'>Delete</a></td>
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

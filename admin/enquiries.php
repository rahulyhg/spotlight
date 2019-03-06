<?php
include("common/header.php");
include("common/config.php");
$spotlight=new config;


$allcart=$spotlight->allcart();
?>


<body>
<?php include("common/admin_head.php");?>
	<div id="wrapper">

		<?php include("common/menu.php");?>

		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header"><center>Model Booking</center></h1>

					<center><table class="table table-striped" border="1"  style="text-align:center">
						<tr>
						    	<th> Order Code</th>
							<th>Client name</th>
							<th>	Client email</th>
							<th>	Client company	</th>
							<th>	Client mobile	</th>
							<th>	Client Shoot date	</th>
							<th>	Client Requirement	</th>
							<th>	Shortlisted model	</th>
						
							<th>Shoot location</th>
							
						</tr>
						<?php
						while($js = mysqli_fetch_assoc($allcart))
						{
						?>
							<tr>
							    	<td><?php echo $js['cart_code']; ?></td>
								
								<td><?php echo $js['cart_name']; ?></td>
								<td><?php echo $js['cart_email']; ?></td>
								<td><?php echo $js['cart_company']; ?></td>
								<td><?php echo $js['cart_mobile']; ?></td>
								<td><?php echo $js['start_date']; ?></td>
								<td><?php echo $js['requirement']; ?></td>
								<td><?php echo $js['model']; ?></td>
							
								<td><?php echo $js['location']; ?></td>
								
							</tr>                
						<?php
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

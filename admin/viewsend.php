<?php
ob_start();
session_start();
include("common/header.php");
include("common/config.php");
$spotlight=new config;

if(isset($_POST['send']))
{
	$model_code = $_POST['model_code'];
	$shoot_date = $_POST['shoot_date'];
		$shoot_location = $_POST['shoot_location'];
			$shoot_type = $_POST['shoot_type'];
				$requirement = $_POST['requirement'];
				
		$sql = mysqli_query($spotlight->spotlight,"insert into `send_enquiry` (`model_code`,`shoot_date`,`shoot_location`,`shoot_type`,`shoot_requirement`) values
				('$model_code',
				'$shoot_date',
				'$shoot_location',
				'$shoot_type',
				'$requirement'
				)");
				
				
				if($sql)
				{
				    header("refresh:1;viewsend.php");
				}
	
	

}
$selectenquiry = $spotlight->selectenquiry();
 ob_end_flush();
?>


<body>

	<div id="wrapper">

		<?php include("common/menu.php");?>

		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header"><center>View Model Notification</center></h1>

					<center><table class="table table-striped" border="1"  style="text-align:center">
						<tr>
							<th>Model Code</th>
							<th>shoot_date</th>
							
									<th>shoot_location</th>
										<th>shoot_type</th>
						     	<th>shoot_requirement</th>
						     		<th>delete</th>
							
						</tr>
						<?php
						while($js = mysqli_fetch_assoc($selectenquiry))
						{
							?>
							<tr>
								
								<td><?php echo $js['model_code']; ?></td>
								<td><?php echo $js['shoot_date']; ?></td>
								
								<td><?php echo $js['shoot_location']; ?></td>
								<td><?php echo $js['shoot_type']; ?></td>
								<td><?php echo $js['shoot_requirement']; ?></td>
								<td><a href="deletesend.php?id=<?php echo $js['enquiry_id'];?>">delete</a></td>
							
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

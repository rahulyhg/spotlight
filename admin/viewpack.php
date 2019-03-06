<?php
session_start();
include("common/header.php");
include("common/config.php");
$spotlight=new config;

if(isset($_POST['submit']))
{
	$p_name=$_POST['p_name'];
	$p_rate=$_POST['p_rate'];
	$p_photography=$_POST['p_photography'];
	$p_nol=$_POST['p_nol'];
	$p_click=$_POST['p_click'];
	$p_cd=$_POST['p_cd'];
	$p_retouch=$_POST['p_retouch'];
	$p_indoor=$_POST['p_indoor'];
	$p_outdoor=$_POST['p_outdoor'];
	$p_duration=$_POST['p_duration'];
	$p_cp=$_POST['p_cp'];
	$p_print=$_POST['p_print'];
	$p_lay=$_POST['p_lay'];
	$p_cprint=$_POST['p_cprint'];
	$p_photobook=$_POST['p_photobook'];
	$p_style=$_POST['p_style'];
	$p_pickup=$_POST['p_pickup'];

	$query=$spotlight->insertpack($p_name,$p_rate,$p_photography,$p_nol,$p_click,$p_cd,$p_retouch,$p_indoor,$p_outdoor,$p_duration,$p_cp,$p_print,$p_lay,$p_cprint,$p_photobook,$p_style,$p_pickup);

	if($query)
	{
		header("refresh:2 viewpack.php");
	}
}
$package=$spotlight->package();


?>


<body>

	<div id="wrapper">

		<?php include("common/menu.php");?>

		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header"><center>View Package</center></h1>

					<center><table class="table table-striped" border="1" style="text-align: center;">
						<tr>
						    <th>Name</th>
							<th>Rate</th>
							<th>Photography</th>
							<th>No of Looks</th>
							<th>Pictures clicked</th>
							<th>No of pictures Selected - Cd</th>
							<th>Digital Retouch</th>
							<th>Indoor shoot</th>
							<th>Outdoor shoot</th>
							<th>Duration of Shoot</th>
							<th>List of Coordinators & Production houses</th>
							<th>No of Prints</th>
							<th>No of Compcards - layouts</th>
							<th>No of Compcards - Prints</th>
							<th>Portfolio Magazine / Photobook</th>
							<th>Fashion Stylist</th>
							<th>Free pickup</th>
							<th colspan="2">Action</th>
						</tr>

						<?php
						while($js = mysqli_fetch_assoc($package))
						{
							?>
							
						
							<tr>
								<td><?php echo $js['p_name'] ?></td>
								<td><?php echo $js['p_rate'] ?></td>
								<td><?php echo $js['p_photography'] ?></td>
								<td><?php echo $js['p_nol'] ?></td>
								<td><?php echo $js['p_click'] ?></td>
								<td><?php echo $js['p_cd'] ?></td>
								<td><?php echo $js['p_retouch'] ?></td>
								<td><?php echo $js['p_indoor'] ?></td>
								<td><?php echo $js['p_outdoor'] ?></td>
								<td><?php echo $js['p_duration'] ?></td>
								<td><?php echo $js['p_cp'] ?></td>
								<td><?php echo $js['p_print'] ?></td>
								<td><?php echo $js['p_lay'] ?></td>
								<td><?php echo $js['p_cprint'] ?></td>
								<td><?php echo $js['p_photobook'] ?></td>
								<td><?php echo $js['p_style'] ?></td>
								<td><?php echo $js['p_pickup'] ?></td>

								<td><a href="editpack.php?p_id=<?php echo $js['p_id'] ?>">Edit</a></td>

							    <td><a href="deletepack.php?p_id=<?php echo $js['p_id'] ?>">delete </a></td>
								
							</tr> 

							<?php  } ?>             
							

					</table></center>
				</div>
				<!-- /.col-lg-12 -->
			</div>

		</div>
		<!-- /#page-wrapper -->

	</div>
	<!-- /#wrapper -->

	<?php include("common/footer.php");?>

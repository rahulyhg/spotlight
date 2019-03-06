<?php
session_start();
include("common/header.php");
include("common/config.php");
$spotlight=new config;

if(isset($_POST['submit_video']))
{
	
	$video_name=$_POST['video_name'];
	$video_link=$_POST['video_link'];
    $spotlight->insert_video($video_name,$video_link);
}
$selectvideo=$spotlight->select_video();


?>


<body>
<?php include("common/admin_head.php");?>
	<div id="wrapper">

		<?php include("common/menu.php");?>

		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header"><center>View Video here</center></h1>

					<center><table class="table table-striped" border="1">
						<tr>
							<th>video name</th>
							<th>video Link</th>
							
							<th>Delete</th>
						</tr>
						<?php
						while($js = mysqli_fetch_assoc($selectvideo))
						{
						?>
							<tr>
								
								<td><?php echo $js['video_name']; ?></td>
								
                     <td><?php echo $js['video_link']; ?></td>
								
								
								<td><a href="deletevideo.php?video_id=<?php echo $js['video_id']; ?>">Delete</a></td>
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

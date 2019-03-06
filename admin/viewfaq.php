<?php
session_start();
include("common/header.php");
include("common/config.php");
$spotlight=new config;

if(isset($_POST['submit']))
{
	$faq=$_POST['faq'];
	
	$spotlight->insertfaq($faq);
}
$viewfaq=$spotlight->viewfaq();
?>


<body>
<?php include("common/admin_head.php");?>
	<div id="wrapper">

		<?php include("common/menu.php");?>

		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header"><center>View Questions</center></h1>

					<center><table class="table table-striped" border="1">
						<tr>
							<th>questions</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
						<?php
						while($js = mysqli_fetch_assoc($viewfaq))
						{
							$string="
							<tr>
								
								<td>".$js['faq']."</td>
								
								<td><a href='editfaq.php?faq_id=".$js['faq_id']."'>Edit</a></td>
								<td><a href='deletefaq.php?faq_id=".$js['faq_id']."'>Delete</a></td>
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

<?php
session_start();
include("common/header.php");
include("common/config.php");
$spotlight=new config;

if(isset($_POST['submit']))
{
	$f_id = $_POST['f_id'];
	$ans=$_POST['ans'];
	
	$spotlight->insertans($f_id,$ans);
}
$viewans=$spotlight->viewans();
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
							<th>FAQ Question</th>
							<th>FAQ Answer</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
						<?php
						while($js = mysqli_fetch_assoc($viewans))
						{
							$string="
							<tr>

							<td>".$js['faq']."</td>
								
								<td>".$js['ans']."</td>
								
								<td><a href='editans.php?ans_id=".$js['ans_id']."'>Edit</a></td>
								<td><a href='deleteans.php?ans_id=".$js['ans_id']."'>Delete</a></td>
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

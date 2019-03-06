<?php
session_start();
include("common/header.php");
include("common/config.php");
$spotlight=new config;

if(isset($_POST['submit']))
{
	$menu_name=$_POST['menu_name'];
	
	$spotlight->insertmenu($menu_name);
}
$selectmenus=$spotlight->selectallmenu();
?>


<body>
<?php include("common/admin_head.php");?>
	<div id="wrapper">

		<?php include("common/menu.php");?>

		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header"><center>View Menu</center></h1>

					<center><table class="table table-striped" border="1">
						<tr>
							<th>Menu menu_name</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
						<?php
						while($js = mysqli_fetch_assoc($selectmenus))
						{
							$string="
							<tr>
								
								<td>".$js['menu_name']."</td>
								
								<td><a href='editmainmenu.php?id=".$js['id']."'>Edit</a></td>
								<td><a href='deletemenu.php?id=".$js['id']."'>Delete</a></td>
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

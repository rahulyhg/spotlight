<?php
ob_start();
session_start();
include("common/header.php");
include("common/config.php");
$spotlight=new config;


if(isset($_REQUEST['status']) && $_REQUEST['user_id'] )
{
    $user_id = $_REQUEST['user_id'];
    $status = $_REQUEST['status'];
    if($status == 'active')
    {
        $u = mysqli_query($spotlight->spotlight,"update user_reg set user_status = 'inactive' where user_id='$user_id'");
      
        if($u)
        {
            header("location:register_user.php");
        }
    }
 else {
     $u = mysqli_query($spotlight->spotlight,"update user_reg set user_status = 'active' where user_id='$user_id'");
      
        if($u)
        {
            header("location:register_user.php");
        }
     
 }
    
}


if(isset($_REQUEST['go']))
{
    $model_code = $_POST['model_code'];
    $model_genre = $_POST['model_genre'];
    
    $sql = mysqli_query($spotlight->spotlight,"update `user_reg` set model_genre = '$model_genre' where model_code = '$model_code'");
 
    if($sql)
    {
        header("Location:register_user.php");
    }
    else
    {
        echo "something went wrong please contact to developer!! Thank You"; 
    }
}





$alluser=$spotlight->alluser();
ob_end_flush();
?>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>




<body>
 <?php include("common/admin_head.php");?>
	<div id="wrapper">

		<?php include("common/menu.php");?>

		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header"><center>Registered Users</center></h1>

					<center><table class="table table-striped" border="1"  style="text-align:center">
						<tr>
						    	<th> User type</th>
						    	<th>User Code</th>
						    	<th>User name</th>
							<th>	User email</th>
						
							<th>	User Whatsapp Number	</th>
							<th>	User Profile Image	</th>
							<th>Action</th>
							<th>	Status	</th>
							<th>	Delete	</th>
							
						
						
							
						</tr>
						<?php
						while($js = mysqli_fetch_assoc($alluser))
						
						{
						    $image = $js['model_image1'];
						$trim = trim('admin', $image);
						?>
							<tr>
							    	<td><?php echo $js['user_type']; ?></td>
								
								<td><?php echo $js['model_code']; ?></td>
							
								<td><?php echo $js['user_name']; ?></td>
								<td><?php echo $js['user_email']; ?></td>
								<td><?php echo $js['whtsapp_number']; ?></td>
								<td><img src="model/<?php echo $js['model_image1']; ?>" style="height: 70px;width: 70px;" class="img-responsive"></td>
								<?php
								$user_type= $js['user_type'];
								if($user_type=="model")
								{
								
								?>
								<td><form method="POST">
								    <input type="hidden" name="model_code" value="<?php echo $js['model_code']; ?>" >
								    <input type="text" name="model_genre" placeholder="Enter Genre"> <input type="submit" value="Go!" name="go"> 
								</form></td>
								<?php } else { ?>  <td></td>  <?php } ?>
								<td><a href="register_user.php?status=<?php echo $js['user_status']; ?>&user_id=<?php echo $js['user_id']; ?>"><?php echo $js['user_status']; ?> </a> </td>
							
								<td><a href="deleteuser.php?user_id=<?php echo $js['user_id']?>" onclick="return checkDelete()">Delete</a></td>
							
								
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

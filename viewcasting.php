<?php
session_start();
include("common/config.php");
$spotlight=new config;
if (isset($_POST['submit']))
 {


  $c_heading=$_POST['heading'];
  $c_text=$_POST['text'];
 



	$tmp_loc=$_FILES['cast']['tmp_name'];
  $tmp_img=$_FILES['cast']['tmp_name'];
  $name=$_FILES['cast']['name'];
  $new_path="model/".$name;
   $upload=move_uploaded_file($tmp_loc,$new_path);
   
   $tmp_loc2=$_FILES['cast2']['tmp_name'];
  $tmp_img2=$_FILES['cast2']['tmp_name'];
  $name2=$_FILES['cast2']['name'];
  $new_path2="model/".$name2;
   $upload2=move_uploaded_file($tmp_loc2,$new_path2);
   
   $tmp_loc3=$_FILES['cast3']['tmp_name'];
  $tmp_img3=$_FILES['cast3']['tmp_name'];
  $name3=$_FILES['cast3']['name'];
  $new_path3="model/".$name3;
   $upload3=move_uploaded_file($tmp_loc3,$new_path3);
   
    $tmp_loc4=$_FILES['cast4']['tmp_name'];
  $tmp_img4=$_FILES['cast4']['tmp_name'];
  $name4=$_FILES['cast4']['name'];
  $new_path4="model/".$name4;
   $upload4=move_uploaded_file($tmp_loc4,$new_path4);



   $query = mysqli_query($spotlight->spotlight,"INSERT INTO  `casting` (`c_img`,`c_img2`,`c_img3`,`c_img4`,`c_heading`,`c_text`) values ('$new_path','$new_path2','$new_path3','$new_path4','$c_heading','$c_text')");


 
    if($query)
    {
    	header("Location:viewcasting.php");
    }
    else
    {
    	echo "error";
    }
   

}

$viewcast=$spotlight->selectcast();


?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Pannel</title>

   <link href="style/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->         
    <link href="style/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="style/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="style/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="style/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="style/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

 
</head>
<body>
    <?php include("common/admin_head.php");?>

	<div id="wrapper">

		<?php include("common/menu.php");?>

		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header"><center>View Casting</center></h1>

					<center><table class="table table-striped" border="1">
						<tr>
							
							<th>View cast image</th>
							<th>View heading</th>
							<th>View text</th>
						
							<th colspan="2">Action</th>
						
							
						</tr>
						 <?php
            while($js = mysqli_fetch_assoc($viewcast))
              {?>
						
							<tr>
							  <td><img src="<?php echo $js['c_img'];?>" style="height: 70px;width: 70px;" class="img-responsive"></td>
								<td><?php echo $js['c_heading'];?></td>
								<td><?php echo $js['c_text'];?></td>
							
                                	<td><a href="editcasting.php?c_id=<?php echo $js['c_id']?>">Edit</a></td>
							
								<td><a href="deletecasting.php?c_id=<?php echo $js['c_id']?>">Delete</a></td>
							     <?php if($js['extra']==0){?>
								<td><a href="status_casting.php?approve=<?php echo $js['c_id']?>">Approve</a></td>
								<?php }else{?>
								<td><a href="status_casting.php?reject=<?php echo $js['c_id']?>">Reject</a></td>
								<?php }?>
                             </tr> 
							<?php } ?>               
					</table></center>
				</div>
				<!-- /.col-lg-12 -->
			</div>

		</div>
		<!-- /#page-wrapper -->

	</div>
	<!-- /#wrapper -->

	<?php include("common/footer.php");?>

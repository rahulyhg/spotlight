<?php

include("connect.php");
if($_GET['approve']){
	$id=$_GET['approve'];
	mysqli_query($connect,"UPDATE casting set extra=1 where c_id='$id' ");
	header("Location:viewcasting.php");
}

if($_GET['reject']){
	$id=$_GET['reject'];
	mysqli_query($connect,"UPDATE casting set extra=0 where c_id='$id' ");
	header("Location:viewcasting.php");
}

?>
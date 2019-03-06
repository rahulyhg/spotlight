<?php
session_start();
$name=$_POST['name'];
$password=$_POST['password'];

if($name=="spotlight" and $password=="S8866673588")
{
	$_SESSION['name']=$name;
	header("Location:dashboard.php");
}
else
{
	header("Location:error.php");
}

?>




	

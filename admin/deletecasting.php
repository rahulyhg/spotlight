<?php
ob_start();
require_once ("common/config.php");
$spotlight=new config;


$c_id=$_GET['c_id']; 
//$spotlight->deletecasting($c_id);

$result=mysqli_query($spotlight->spotlight,"DELETE FROM `casting` where c_id='".$c_id."'");

header('Location: viewcasting.php');
ob_end_flush();

?>

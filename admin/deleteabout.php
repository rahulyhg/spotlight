<?php
 ob_start();
include("common/config.php");
$spotlight=new config;
if(isset($_GET['about_id']))
$about_id=$_GET['about_id']; 
$spotlight->deletetabout($about_id);
header('Location: viewabout.php');
ob_end_flush();
?>

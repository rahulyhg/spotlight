<?php
ob_start();
include("common/config.php");
$spotlight=new config;
if(isset($_GET['work_id']))
$work_id=$_GET['work_id']; 
$spotlight->deletework($work_id);
header('Location: viewwork.php');
ob_end_flush();
?>

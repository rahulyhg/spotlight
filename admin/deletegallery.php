<?php
ob_start();
include("common/config.php");
$spotlight=new config;
if(isset($_GET['pic_id']))
$pic_id=$_GET['pic_id']; 
$spotlight->deletegallery($pic_id);
header('Location: viewgallery.php');
ob_end_flush();
?>

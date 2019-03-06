<?php
ob_start();
include("common/config.php");
$spotlight=new config;
if(isset($_GET['id']))
$id=$_GET['id']; 
$spotlight->deleteorder($id);
header('Location: vieworder.php');
ob_end_flush();
?>

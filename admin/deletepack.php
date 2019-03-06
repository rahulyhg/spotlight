<?php
ob_start();
include("common/config.php");
$spotlight=new config;
if(isset($_GET['p_id']))
$p_id=$_GET['p_id']; 
$spotlight->deletepack($p_id);
header('Location: viewpack.php');
ob_end_flush();
?>

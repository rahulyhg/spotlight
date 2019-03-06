<?php
 ob_start();
include("common/config.php");
$spotlight=new config;
if(isset($_GET['ans_id']))
$ans_id=$_GET['ans_id']; 
$spotlight->deletetans($ans_id);
header('Location: viewans.php');
ob_end_flush();
?>

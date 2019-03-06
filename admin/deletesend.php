<?php
ob_start();
include("common/config.php");
$spotlight=new config;
if(isset($_GET['id']))
$enquiry_id=$_GET['id']; 
$spotlight->deletesend($enquiry_id);
header('Location: viewsend.php');
ob_end_flush();
?>

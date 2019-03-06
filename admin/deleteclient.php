<?php
ob_start();
include("common/config.php");
$spotlight=new config;
if(isset($_GET['client_id']))
$client_id=$_GET['client_id']; 
$spotlight->deleteclient($client_id);
header('Location: viewpro.php');
ob_end_flush();
?>

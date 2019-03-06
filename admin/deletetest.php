<?php
 ob_start();
include("common/config.php");
$spotlight=new config;
if(isset($_GET['t_id']))
$t_id=$_GET['t_id']; 
$spotlight->deletetest($t_id);
header('Location: viewtest.php');
 ob_end_flush();
?>

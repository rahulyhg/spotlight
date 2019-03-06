<?php
 ob_start();
include("common/config.php");
$spotlight=new config;
if(isset($_GET['m_id']))
$m_id=$_GET['m_id']; 
$spotlight->deletespackages($m_id);
header('Location: viewpackages.php');
ob_end_flush();
?>

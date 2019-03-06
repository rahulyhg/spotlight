<?php
ob_start();
include("common/config.php");
$spotlight=new config;
if(isset($_GET['faq_id']))
$faq_id=$_GET['faq_id']; 
$spotlight->deletefaq($faq_id);
header('Location: viewfaq.php');
ob_end_flush();
?>

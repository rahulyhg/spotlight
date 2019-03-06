<?php
 ob_start();
include("common/config.php");
$spotlight=new config;

if(isset($_GET['video_id']))
$video_id=$_GET['video_id']; 
$spotlight->deletevideo($video_id);

header('Location: viewvideo.php');
ob_end_flush();
?>

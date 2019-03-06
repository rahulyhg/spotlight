<?php
 ob_start();
include("common/config.php");
$travel=new config;
if(isset($_GET['s_id']))
$s_id=$_GET['s_id']; 
$travel->deletesubmenu($s_id);
 header('Location: viewsubmenu.php');
  ob_end_flush();
?>


<?php
 ob_start();
include("common/config.php");
$spotlight=new config;
if(isset($_GET['sample_folio_id']))
$sample_folio_id=$_GET['sample_folio_id']; 
$spotlight->deletesample($sample_folio_id);
header('Location: viewsamplefolio.php');
ob_end_flush();
?>

<?php
include("connect.php");

$name=$_GET['name'];
$email=$_GET['email'];
$number=$_GET['number'];
$query=$_GET['query'];

mysqli_query($connect,"INSERT into contact_query values('','$name','$email','$number','$query')");

?>
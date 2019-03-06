<?php

include("connect.php");

if($_GET['id'] && $_GET['name'] && $_GET['email'] && $_GET['phone'] && $_GET['message']){

$id=$_GET['id'];
$name=$_GET['name'];
$email=$_GET['email'];
$phone=$_GET['phone'];
$message=$_GET['message'];
$model=mysqli_query($connect,"SELECT *  from user_reg where user_id='$id' ");
$row=mysqli_fetch_assoc($model);
$model_code=$row['model_code'];
$query=mysqli_query($connect,"INSERT into contact_query 
	values('','$name','$email','$phone','Model Code:$model_code and Query=  $message')");

}else{
	http_response_code(405);
}


?>
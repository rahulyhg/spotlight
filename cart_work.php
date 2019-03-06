<?php
session_start();
include "connect.php";

 if(isset($_GET['add'])){

 $items=0;
  foreach ($_SESSION as $name => $value) {
    if($value>0){
    if(substr($name,0,8)=='product_'){
        $items++;
  	}
}
}
if($items<6){
 if(isset($_SESSION['product_'.$_GET['add']])){
 	http_response_code(405);
 }
 $_SESSION['product_'.$_GET['add']] =1;
 $items++;
 $cartItems=$items;
  
			  $models="";
			  $try=array();

              foreach ($_SESSION as $name => $value) {
                if($value>0){
                	if(substr($name,0,8)=='product_'){
				    $length=strlen($name);
				    $id=substr($name,8,$length);
				    $query=mysqli_query($connect,"SELECT * FROM user_reg WHERE user_id=".mysqli_escape_string($connect,$id)." ");
				    if(!$query){
				      die("Connection error ".mysqli_error($connect));
				    }
				    while($row=mysqli_fetch_array($query)){
				    	$models.='<li class="media">
                            
                            
                            <div class="media-body media-middle">
                              <h4>
                                <a href="#">$row["user_name"]</a>
                              </h4>
                              
                            </div>
                            <div class="media-body media-middle">
                              <a href="#" class="remove" title="Remove this item">
                                <i class="rt-icon2-trash highlight"></i>
                              </a>
                            </div>
                          </li>';
          }
      }}}
      $total_models=$models;

      $response=array();
      $response['cartItems']=$cartItems;
      $response['total_models']=$total_models;
      echo $response;
			 
}else{
	http_response_code(404);
}
}

if(isset($_GET['delete'])){
    $_SESSION['product_'.$_GET['delete']]=0;
    unset($_SESSION['product_'.$_GET['delete']]); 
    }
 ?>
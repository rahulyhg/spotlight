<?php 
include("common/config.php");
$spotlight=new config;
   
   
   if(isset($_POST['casting_status']))
   {
       $model_code = $_POST['model_code'];
       $casting_enquiry_id  = $_POST['casting_enquiry_id'];
       $casting_status_name = $_POST['casting_status_name'];
       
      $casting_update = mysqli_query($spotlight->spotlight,"update casting_enquiry set casting_status = '$casting_status_name' where casting_enquiry_id = '$casting_enquiry_id' and model_code = '$model_code'");
      //echo "update casting_enquiry set casting_status = '$casting_status_name' where casting_enquiry_id = '$casting_enquiry_id' and model_code = '$model_code'";
      
      if($casting_update)
      {
          header("Location:viewapplications.php");
      }
      else
      {
          echo "please contact developer";
      }
   }

?>
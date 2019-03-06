<?php

session_start();

ob_start(); 

use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

 ?>

 <!DOCTYPE html><!--[if lt IE 7]>      

<html class="no-js lt-ie9 lt-ie8 lt-ie7">

   <![endif]--><!--[if IE 7]>         

   <html class="no-js lt-ie9 lt-ie8">

      <![endif]--><!--[if IE 8]>         

      <html class="no-js lt-ie9">

         <![endif]--><!--[if gt IE 8]><!-->

         <html class="no-js">

            <!--<![endif]--><!-- Mirrored from webdesign-finder.com/html/models/gallery-regular-4-cols.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Jul 2018 07:45:36 GMT -->

            <head>

               <title>Checkout</title>

               <meta charset="utf-8">

               <!--[if IE]>        

               <meta http-equiv="X-UA-Compatible" content="IE=edge">

               <![endif]-->    

               <meta name="description" content="">

               <meta name="viewport" content="width=device-width, initial-scale=1">

               <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->    

               <link rel="stylesheet" href="css/bootstrap.min.css">

               <link rel="stylesheet" href="css/main.css" id="color-switcher-link">

               <link rel="stylesheet" href="css/toast.min.css">

               <link rel="stylesheet" href="css/animations.css">

               <link rel="stylesheet" href="css/fonts.css">

               <script src="js/vendor/modernizr-2.6.2.min.js"></script>    <!--[if lt IE 9]>        <script src="js/vendor/html5shiv.min.js"></script>        <script src="js/vendor/respond.min.js"></script>    <![endif]-->

               <style type="text/css">    

               .martop{  

               margin-top:8px;  

               }

             

               </style>

            </head>

            <body>

               <!--[if lt IE 9]>        

               <div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>

               <![endif]-->    

           

               <!-- wrappers for visual page editor and boxed version of template -->    

               <div id="canvas">

               <div id="box_wrapper">

               <!-- template sections -->            <?php include ('header.php');

include ('connect.php'); ?>

               <section id="blog" style="padding:24px 0px;background-color:#333;">

                  <div class="container">

                     <div class="row">

                        <form  name="contactform" action="" method="post" style="background-color:#e0006c;padding:50px;">

                           <div class="row wow flipInY" data-wow-delay="0.5s">

                              <div class="col-md-6">

                                 <div class="col-md-12 text-center ">              <input style="color: #818181;background-color: #1a1a1a;" type="text" class="form-control" name="cart_name" placeholder="Your Name" required>            </div>

                                 <div class="col-md-12 text-center martop" >              <input style="color: #818181;background-color: #1a1a1a;" type="email" class="form-control" name="cart_email" <?php if (!empty($_SESSION['profile'])) { ?>  value="<?php echo $_SESSION['profile']->user_email ?>" <?php

} ?>   placeholder="Your Email Id" required>            </div>

                                 <div class="col-md-12 text-center martop">              <input style="color: #818181;background-color: #1a1a1a;" type="text" class="form-control" name="cart_mobile" placeholder="Your Mobile No." required>            </div>

                                 <div class="col-md-12  text-center martop">              <input style="color: #818181;background-color: #1a1a1a;" type="text" class="form-control" name="cart_company" placeholder="Your Company Name" required>            </div>

                                 <div class="col-md-12  text-center martop">             <input style="color: #818181;background-color: #1a1a1a;" type="date"  name="start_date" class="form-control"  placeholder="Shoot Start Date" required>            </div>

                                 <div class="col-md-12  text-center martop">              <input style="color: #818181;background-color: #1a1a1a;" type="text" class="form-control" name="location" placeholder="Shoot location" required>            </div>

                                 <div class="col-md-12  text-center martop">             <input style="color: #818181;background-color: #1a1a1a;" type="text"  name="budget" class="form-control"  placeholder="Your Budget" required>            </div>

                                 <div class="col-md-12  text-center martop">             <input style="color: #818181;background-color: #1a1a1a;" type="text"  name="shoot_type" class="form-control"  placeholder="Your Shoot Type" required>            </div>

                              </div>

                              <div class="col-md-6">

                                 <div class="row wow flipInY" data-wow-delay="0.5s">

                                    <div class="col-md-12 text-center " >              <textarea style="color: #818181;background-color: #1a1a1a;" class="form-control" style="    padding: 39px 26px;"  name="requirement" rows="6" placeholder="Complete Description of shoot incl. intended usage" required></textarea>            </div>

                                 </div>

                                 

                              </div>

                              <div class="col-md-6" style="color:white;font-weight:bold">

                                  <input type="checkbox" style="visibility:visible;" checked>  I agree to the  <a  data-toggle="modal" data-target="#term" style="font-size:16px;cursor:pointer;">Terms and Conditions</a> 

                                 </div>

                              <div class="col-md-12" style="margin-top:24px;">

                                 <div class="col-md-4">

                                    <div class="row wow martop">

                                       <div class="col-md-12 text-center martop">

                                          <!--    <a href ="models.php">                  <button class="btn btn-primary" style="font-size:11px !important;">View More Models</button></a> -->            

                                       </div>

                                    </div>

                                 </div>

                                 <div class="col-md-4">

                                    <div class="row wow martop">

                                       <div class="col-md-12 text-center martop">           

                                       <input type="submit" class="btn" style="font-size:11px;background:white;color:black;" name="book" <?php if($items<1) { ?> disabled  <?php } ?>  value="Book Model">      

                                       </div>

                                    </div>

                                 </div>

                        </form>

                        <div class="col-md-4">             <div class="row wow martop">            <div class="col-md-12 text-center martop">                       </div>          </div>         </div>     </div></div> <!-- Modal -->    

               </section>

               <?php include ('footer.php'); ?>            <?php include ('copyright2.php'); ?>        </div>        <!-- eof #box_wrapper -->    </div>    <!-- eof #canvas -->

               <div class="modal fade" id="term" role="dialog">

                  <div class="modal-dialog">

                     <!-- Modal content-->      

                     <div class="modal-content" style="background-color:#0d0d0d;color:white;">

                        <div class="modal-header">

                           <button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button>          

                           <h4 class="modal-title">Client agreement | Terms and Conditions</h4>

                        </div>

                        <div class="modal-body">

                           <p>Spotlight Studioz (“Agency”) will provide for you (“Client”) personnel for your booking in accordance with these terms and conditions, unless such is varied in writing by agreement between the parties.<br><br>

                           <h4>Confirmation</h4>

                           <div class="divider"></div>

                           No job shall commence until Agency receives confirmation of Client’s agreement to the booking details and the terms and conditions stated herein.<br><br>

                           <h4>Project Details</h4>

                           <div class="divider"></div>

                           Agency holds all rights to know all details pertaining to the work/shoot arranged by Client. As and when required Agency holds the right to ask documentation of any project for which booking or enquiry has been made.Under no circumstances Agency/Client can hire a third party without consent from both parties for the said booking. If found either party holds the right to terminate the agreement within 48 Hrs of such finding. Complete payment will be refunded by Agency or Client will be required to make entire payment under these circumstances.<br><br>

                           <h4>Payment</h4>

                           <div class="divider"></div>

                           A 50% booking deposit is required. Payment may be requested in advance for travel/accommodation expenses. Final payment is required 48 hours before the shoot commences. A finance credit charge of 18% APR will be added to all invoices not settled within the payment terms.<br><br>

                           <h4>Cancellation Fees</h4>

                           <div class="divider"></div>

                           If a booking is cancelled within three working days of the starting time the full fee will be charged. If a booking is cancelled outside of the three day period but within five working days of the starting time, 50% of the fee will be charged. With cancellations or alterations relating to events, Clients will be required to cover all costs incurred by Spotlight Studioz up to the cancellation date and a Management Fee.<br><br>

                           <h4>Remuneration</h4>

                           <div class="divider"></div>

                           We have options where we can accommodate a said budget from the Client based on their requirement which upon discussion can be agreed. While we do have Comp. Card for all individual talents which are subject to vary depending upon various factors associated with the project. Hence we request Client to be as specific as possible with their needs and requirement.<br><br>

                           <h4>Shoot Day</h4>

                           <div class="divider"></div>

                           On the day of booking Client can have a casual interaction prior to the shoot in presence of Agency member. Later interactions are strictly prohibited while also no well wishers or changes will be entertained will the booking is in progress. All concept and theme should be finalized by Client with crew (photographer/talent/creative team/Director) at least 4 days prior to booking date. Under certain circumstances this can be considered with a 48 Hrs period.<br><br>

                           <h4>Provisional Bookings</h4>

                           <div class="divider"></div>

                           Provisional bookings will automatically be cancelled if they are not confirmed within 48 hours of the proposed booking or if a definite booking is offered and the provisional booking cannot be confirmed.<br><br>

                           <h4>“Weather permitted” Bookings</h4>

                           <div class="divider"></div>

                           If a booking is “weather permitting” this must be made clear at the time of booking. At the first cancellation, half the fee is charged unless the client fails to cancel in time to prevent the models attendance, in this situation the full fee is payable. At the second cancellation the full fee is charged.<br><Br>

                           <h4>Model Release</h4>

                           <div class="divider"></div>

                           Models release/promotion form/booking voucher must be signed by the model and client at the end of every booking.<br><br>

                           <h4>Fashion Shows</h4>

                           <div class="divider"></div>

                           Payment of the agreed fee confers the right to make use of models’ services on the catwalk for the specified show and the right to use photographs and videos of the show for reporting purposes only. Any other usage must be negotiated at the time of booking.<br><br>

                           <h4>Video</h4>

                           <div class="divider"></div>

                           The normal daily rate will apply for videos plus a buy-out to be negotiated.<br><br>

                           <h4>Copyright</h4>

                           <div class="divider"></div>

                           The photographer/Client holds copyright to images. A release form must be signed by the photographer/Client. All usage must be stated prior to the assignment and fees must be negotiated with Spotlight Studioz for further usage.<br><Br>

                           <h4>Additional Fees</h4>

                           <div class="divider"></div>

                           To be agreed at the time of booking: Additional fees are payable for the right to use the photographs (or reproductions, or adaptations of, or drawings there from, either complete or in part, alone or in conjunction with any wording or drawings including electronic imaging) for all known or anticipated purposes other than the initial permitted use (e.g. for packs, swing tickets, record covers, show-cards, posters etc.) unless otherwise agreed in writing, the ‘permitted use’ cover editorial, experimental or press advertising.<br><br>

                           <h4>Exclusion Fees</h4>

                           <div class="divider"></div>

                           A special fee will be negotiated when the work is in conjunction with a product which preludes work for competing products. It is Client’s responsibility to check whether conflicting work has been done. If a model advertises a product he/she is able to work for any competitor unless an exclusion fee is negotiated.<br><br>

                           <h4>Test Photography</h4>

                           <div class="divider"></div>

                           A photographer is not entitled to use test/experimental photographs for commercial purposes unless specific arrangements have been made in writing with the agency prior to the photographic session.<br><br>

                           <h4>Dissatisfaction Procedure</h4>

                           <div class="divider"></div>

                           In the event that Client is not satisfied with Personnel provided by Agency, Client must notify Agency within the first 90 minutes of the event starting. If Client does not so notify Agency, Client shall be deemed to have accepted the Personnel and Agency will accept no liability in respect thereof and Client shall not be entitled to reject the Personnel or claim a discount.<br><br>

                           <h4>Complaints</h4>

                           <div class="divider"></div>

                           Any cause for complaint should be reported to Agency when it arises. Complaints cannot be considered in retrospect.<br><br>

                           <h4>Liability</h4>

                           <div class="divider"></div>

                           Agency shall not be liable for any loss suffered by Client.<br><br>

                           <h4>Restrictions (direct/indirect engagement of agency staff or subcontractors)</h4>

                           <div class="divider"></div>

                           Client agrees not to directly employ Agency’s staff within 9 months of the last day of the booking. If the Client does employ or engage Agency Personnel, Client will be liable to pay Agency a commission at its then current rates.<br><br>

                           <h4>Mixed Agency Bookings</h4>

                           <div class="divider"></div>

                           In the event that models from other agencies are working on the same assignment providing the same service as models from Spotlight Studioz, Spotlight Studioz reserves the right to charge at the same rate as the other agency.<br><br>

                           <h4>Storage of Uniform</h4>

                           <div class="divider"></div>

                           Where Agency is responsible for looking after uniform for Client, Agency reserves the right to charge Client for any storage, maintenance and carriage costs which may be incurred, having given reasonable notice to Client.<br><Br>

                           <h4>Insurance</h4>

                           <div class="divider"></div>

                           Agency is not responsible if the model fails to attend the booking. While a replacement or refund will be offered, the client is advised to insure against any loss which might result if the model does not keep a booking because of ill health or some other reason.<br><br>

                           <h4>Law</h4>

                           <div class="divider"></div>

                           These terms and conditions and the contract between Agency and Client governed by these terms and conditions shall be governed by State of Gujarat and the parties agree to submit to the exclusive jurisdiction of the Gujarat Courts.<br><br>

                           <h4>Financial</h4>

                           <div class="divider"></div>

                           Client agrees to keep all financial issues strictly confidential and agrees to only discuss rates with the Agency.<br><br>

                           <h4>Meal Allowance</h4>

                           <div class="divider"></div>

                           The client is responsible for providing a meal for models on all full day bookings.<br>Agency holds the right to make changes with terms and conditions as deemed appropriate. Any bookings made prior to change in terms will supersede the changes unless deemed and discussed by the Client.<br>

                           <center>© 2017 Spotlight Studioz. All Rights Reserved.</center>

                           </p>        

                        </div>

                        <div class="modal-footer">          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>        </div>

                     </div>

                  </div>

               </div>

               <script data-cfasync="false" src="../../cdn-cgi/scripts/f2bf09f8/cloudflare-static/email-decode.min.js"></script><script src="js/compressed.js"></script>    <script src="js/main.js"></script>    <script src="js/switcher.js"></script>    <script src="js/toast.min.js" type="text/javascript"></script>
<?php include("ajax.php") ?>

            </body>

           

            <!-- Mirrored from webdesign-finder.com/html/models/gallery-regular-4-cols.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Jul 2018 07:45:36 GMT -->

         </html>

         <?php

         include("connect.php");

         if(isset($_POST['book'])){

         $cart_code = rand(100,1000000);

         $cart_name= $_POST['cart_name'];

         $cart_email= $_POST['cart_email'];

         $cart_company= $_POST['cart_company'];

         $cart_mobile= $_POST['cart_mobile'];

         $start_date= $_POST['start_date'];

         $requirement = $_POST['requirement'];

         $location = $_POST['location'];

         $budget = $_POST['budget'];

         $shoot_type = $_POST['shoot_type'];

         $models_selected="";

         if(isset($_SESSION)){ 

         foreach ($_SESSION as $name => $value) { 

         if($name=='profile'){       

         continue;    }else{   

         if($value>0){    

         if(substr($name,0,8)=='product_'){      

         $mid=substr($name,8,9);       

         $model_id=mysqli_query($connect,"SELECT * from user_reg where user_id='$mid' ");    

         $m_row=mysqli_fetch_assoc($model_id);           

         $m=$m_row['model_code'];           

         $models_selected.=$m.",";   

         }    }}}}

         $query  = mysqli_query($connect,"insert into `cart` (`cart_code`, `cart_name`, `cart_email`, `cart_company`, `cart_mobile`, `start_date`, `requirement`, `model`, `location`, `cart_budget`, `cart_shoot_type`)   values (  '$cart_code',  '$cart_name',  '$cart_email',  '$cart_company',  '$cart_mobile',  '$start_date',  '$requirement',  '$models_selected',  '$location',  '$budget',  '$shoot_type')"); 

         if($query == TRUE){ $mail = new PHPMailer(true);   

         // Passing `true` enables exceptions

         try {    //Server settings    // $mail->SMTPDebug = 2;                          // Enable verbose debug output  

         $mail->isSMTP();                                      // Set mailer to use SMTP   

         $mail->Host = "smtp.zoho.com";   // Specify main and backup SMTP servers   

         $mail->SMTPAuth = true;                               // Enable SMTP authentication   

         $mail->Username = 'bookings@spotlightstudioz.com';                 // SMTP username   

         $mail->Password = 'Bookings@321';                           // SMTP password  

         $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted 

         $mail->Port = 465;                                    // TCP port to connect to    //Recipients  

         $mail->setFrom("bookings@spotlightstudioz.com","Spotlight Studioz Checkout Details");   

         $mail->addAddress($cart_email);     // Add a recipient    // $mail->addAddress('ellen@example.com');               // Name is optional    // $mail->addReplyTo('info@example.com', 'Information');    // $mail->addCC('cc@example.com');    // $mail->addBCC('bcc@example.com');    //Attachments    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name    //Content  

         $mail->isHTML(true);                                  // Set email format to HTML  

         $mail->Subject = 'Checkout Details';    
   
$product='
<div class="div1">
<div style="padding:12%;">
  <hr class="line2">
             <hr class="line1">
<table class="container-for-gmail-android" width="100%" style="background-color:white;">
   <tr>
            <td class="header-lg" style="text-align:center !important;">
              Checkout Details!
            </td>
          </tr>
          <tr>
            <td class="free-text">
                Thank You for showing interest in our Talents!
              Your request has been processed with Code :'.$cart_code.' Details of your selections & requirements have been listed below. Feel free to contact us for any changes.
            </td>
          </tr>
  <tr>
    <td class="content-padding">
      <center>
        <table width="600" class="w320">
         
            <tr>

        <td >

          Email  

        </td>

        <td>'.$cart_email.'</td>

    </tr>

    <tr>

        <td style=" " >

            Mobile

        </td>

          <td style=" ">'.$cart_mobile.'</td>

    </tr>

    <tr>

        <td >

            Company Name

        </td>

          <td style=" ">'.$cart_company.'</td>

    </tr>

    <tr>

        <td style=" " >

            Shoot Date

        </td>

          <td style=" ">'.$start_date.'</td>

    </tr>

    <tr>

        <td style=" ">

            Location

        </td>

          <td style=" ">'.$location.'</td>

    </tr>

    <tr>

        <td style=" " >

            Budget

        </td>

         <td style=" ">'.$budget.'</td>

    </tr>

        </table>

    </td>
  </tr>
  
         

        </table>
      </center>
    </td>
  </tr>

  
  
</table>
';

$product.='
<table class="container-for-gmail-android" width="100%" style="background-color:white;margin-top:24px;">
  
  <tr>
    <td class="content-padding">
      <center>
        <table width="600" class="w320">
         <thead style="border:1px solid;">
      <th style="border:1px solid;">S No.</th>
      <th style="border:1px solid;">Model Code</th>
      <th style="border:1px solid;">Model Image</th>
      <th style="border:1px solid;">Shoot Type</th>
      </thead>
      <tbody>
';
$i=0;
 foreach ($_SESSION as $name => $value) {
    
    if($name=='profile'){
        continue;
    }else{
     if($value>0){
     if(substr($name,0,8)=='product_'){
            $i++;
            $mid=substr($name,8,9);
            $model_id=mysqli_query($connect,"SELECT * from user_reg where user_id='$mid' ");
            $m_row=mysqli_fetch_assoc($model_id);
            $m1=$m_row['model_code'];
            $m2=$m_row['model_image1'];
 $product.='          
       <tr style="border:1px solid;">
        <td style="border:1px solid;text-align:center !important;">'.$i.'</th>
        <td style="border:1px solid;text-align:center !important;">'.$m1.'</td>
        <td style="border:1px solid;text-align:center !important;"><a  href="'.$m2.'"><img src="http://spotlightstudioz.com/admin/model/'.$m2.'" style="height:50px;width:50px;"></a></td>
        <td style="border:1px solid;text-align:center !important;">'.$shoot_type.'</td>
       </tr>

';
      }
    }
}
}
 $product.='



</tbody>
  
        </table>
        <p style="text-align:center;">To contact us,please visit <br />
<a href="mailto:support@spotlightstudioz.com" style="color:#39b;font-weight:bold;">support@spotlightstudioz.com</a></p>
      </center>
    </td>
  </tr>

  
  
</table>


</div>

</div>

';
$mail->Body    = '
<head>


  <style type="text/css">

    * {
      font-family: Helvetica, Arial, sans-serif;
    }

 

    td {
      font-family: Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #777777;
      text-align: center;
      line-height: 21px;
    }

    a {
      color: #676767;
      text-decoration: none !important;
    }

    .pull-left {
      text-align: left;
    }

    .pull-right {
      text-align: right;
    }

    .header-lg,
    .header-md,
    .header-sm {
      font-size: 32px;
      font-weight: 700;
      line-height: normal;
      padding: 35px 0 0;
      color: #4d4d4d;
    }

    .header-md {
      font-size: 24px;
    }

    .header-sm {
      padding: 5px 0;
      font-size: 18px;
      line-height: 1.3;
    }

.content-padding {
      padding: 20px 0 30px;
    }

    .mobile-header-padding-right {
      width: 290px;
      text-align: right;
      padding-left: 10px;
    }

    .mobile-header-padding-left {
      width: 290px;
      text-align: left;
      padding-left: 10px;
    }

    .free-text {
      width: 100% !important;
      padding: 10px 20px;
    }

    .block-rounded {
      border-radius: 5px;
      border: 1px solid #e5e5e5;
      vertical-align: top;
    }

    .button {
      padding: 30px 0;
    }

    .info-block {
      padding: 0 20px;
      width: 260px;
    }

    .block-rounded {
      width: 260px;
    }

    .info-img {
      width: 258px;
      border-radius: 5px 5px 0 0;
    }

    .force-width-gmail {
      min-width:600px;
      height: 0px !important;
      line-height: 1px !important;
      font-size: 1px !important;
    }

    .button-width {
      width: 228px
    }
.div1
{
  background-image: url("http://www.spotlightstudioz.com/images/parallax/call_to_action.jpg");
  background-repeat: no-repeat;
  background-size: cover;
}

  .line2{
      width:90%;
      height:5px;
      background-color: white;
       border-radius: 50px;
       border: 0px;
    }
    .line1{
      width:95%;
      height:5px;
      background-color: white;
       border-radius: 50px;
       border: 0px;
    }



  </style>


</head>'.$product;      
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';    
$mail->send(); 
} catch (Exception $e) {    
echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
} else {   
 echo "something went wrong"; 
 }   session_destroy();
echo "<script type='text/javascript'>
 $.toast({               
 heading: 'Success',                
text: 'Congratulations,models are booked successfully<br>You will shortly get an email regarding your checkout,Please also check spam folder<br>Redirecting to home page',               
 showHideTransition: 'fade',                
icon: 'success',                
position: 'top-right',                
hideAfter: 8000        
});        
setTimeout(function(){window.open('index.php','_self')},8000);
</script>";        
}?>




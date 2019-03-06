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
   td{
    text-align: left;
      }
  </style>



</head>
$product='
<div class="div1">
<div style="padding:12%;">
  <hr class="line2">
             <hr class="line1">
<table class="container-for-gmail-android" width="100%" style="background-color:white;">
  <tr>
            <td class="header-lg" style="text-align:center !important;">
              Activate Your Account!
            </td>
          </tr>
          <tr>
            <td class="free-text">
                Thank You for showing interest in our Talents!
              Your request has been processed with Code :'.$cart_code.' Details of your selections & requirements have been listed below. Feel free to contact us for any changes.
            </td>
          </tr>
  <tr>
    <td width="100%" class="content-padding">
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
<table class="container-for-gmail-android" width="100%" style="background-color:white;">
  
  <tr>
    <td width="100%" class="content-padding">
      <center>
        <table width="600" class="w320">
         <thead style="border:1px solid;">
      <th style="border:1px solid;">S No.</th>
      <th style="border:1px solid;">Model Code</th>
      <th style="border:1px solid;">Model Image</th>
      <th style="border:1px solid;">Shoot Type</th>
      </thead>
      
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
        <td style="border:1px solid;text-align:center !important;"><a  href="'.$m2.'"><img src="'.$m2.'" style="height:50px;width:50px;"></a></td>
        <td style="border:1px solid;text-align:center !important;">'.$shoot_type.'</td>
       </tr>

';
      }
    }
}
}
 $product.='
    </td>
  </tr>
  
         

        </table>
      </center>
    </td>
  </tr>

  <tr>
            <td>
              To contact us,please visit <br />
              <a href="mailto:support@spotlightstudioz.com" style="color:#39b;font-weight:bold;">support@spotlightstudioz.com</a>
            </td>
          </tr>
  
</table>


</div>

</div>

';
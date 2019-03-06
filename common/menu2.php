<?php
ob_start();
session_start();
ob_end_flush();
?>
<link rel="icon" type="img/fav.png" href="img/fav.png" >

 <style>
 
         
         .ShareWrap {
    width: 150px;
    height: 30px;
    position: fixed;
    left: -150px;
    top: 50%;
    margin-top: -57px;
    z-index: 999;
    -webkit-transition: ease all;
    -webkit-transition-delay: 0.3s;
    -moz-transition: ease all 0.3s;
    -o-transition: ease all 0.3s;
    transition: ease all 0.3s;
}
.ShareWrap .content {
    width: 150px;
    height: 159px;
    background: #2B2B2B;
    padding: 0;
}

.content {
    padding: 20px 0;
    border-top: 1px solid #211d1d;
    float: left;
    height: auto;
}
.ShareHead {
    width: 100%;
    height: 38px;
    color: #fff;
    background: #191818;
    font: 14px/32px arial;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    padding-left: 20px;
    text-transform: uppercase;
    margin: 0;
    float: left;
    position: relative;
    display: block;
    border-bottom: 1px solid #333;
    overflow: hidden;
}
p {
    
    text-align: justify;
}
.ShareWrap .content a {
    width: 100%;
    height: 30px;
    color: #929292;
    font: 13px/32px arial;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    padding-left: 20px;
    text-transform: uppercase;
    margin: 0;
    float: left;
    position: relative;
    display: block;
    border-left: 5px solid #2B2B2B;
    border-bottom: 1px solid #333;
    -webkit-transition: ease all;
    -webkit-transition-delay: 0.3s;
    -moz-transition: ease all 0.3s;
    -o-transition: ease all 0.3s;
    transition: ease all 0.3s;
}
.ShareWrap:after {
    content: "";
    position: absolute;
    right: -40px;
    top: 1px;
    width: 40px;
    height: 37px;
    background: url(../Images/icons.png) -266px -154px no-repeat   #2196F3;
    -webkit-border-radius: 0px 3px 0 0;
    -moz-border-radius: 0px 3px 0 0;
    -ms-border-radius: 0px 3px 0 0;
    -o-border-radius: 0px 3px 0 0;
    border-radius: 0px 3px 0 0;
}
.Feedback:after {
    content: "";
    position: absolute;
    right: -40px;
    top: 1px;
    width: 40px;
    height: 37px;
    background: url(../images/icons.png) -265px -234px no-repeat  #2196F3;
}
.ShareWrap:after {
    content: "";
    position: absolute;
    right: -40px;
    top: 1px;
    width: 40px;
    height: 37px;
    background: url(../images/icons.png) -266px -154px no-repeat  #2196F3;
    -webkit-border-radius: 0px 3px 0 0;
    -moz-border-radius: 0px 3px 0 0;
    -ms-border-radius: 0px 3px 0 0;
    -o-border-radius: 0px 3px 0 0;
    border-radius: 0px 3px 0 0;
}
.Feedback {
    width: 400px;
    height: 310px;
    position: fixed;
    left: -400px;
    top: 50%;
    margin-top: -19px;
    background: #2B2B2B;
    z-index: 99;
    -webkit-transition: ease all;
    -webkit-transition-delay: 0.3s;
    -moz-transition: ease all 0.3s;
    -o-transition: ease all 0.3s;
    transition: ease all 0.3s;
}
.Feedback .content {
    width: 400px;
    height: 215px;
    background: #2B2B2B;
    padding: 0;
    float: left;
}

.content {
    padding: 20px 0;
    border-top: 1px solid #211d1d;
    float: left;
    height: auto;
}.ShareHead {
    width: 100%;
    height: 38px;
    color: #fff;
    background: #191818;
    font: 14px/32px arial;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    padding-left: 20px;
    text-transform: uppercase;
    margin: 0;
    float: left;
    position: relative;
    display: block;
    border-bottom: 1px solid #333;
    overflow: hidden;
}
.padTop10 {
    padding-top: 10px;
}

.row {
    width: 100%;
    height: auto;
    float: left;
}
.Half {
    float: left;
    position: relative;
    width: 50%;
}
}

.Feedback input {
    margin: 5px 0 5px 30px;
}

input, select, textarea {
    background: #131313;
    border: 1px solid #646464;
    padding: 2px 5px;
    color: #fff;
}
.Feedback select {
    width: 90%;
    margin: 5px 0 5px 30px;
}
.input1{
     margin-left: 30px !important;
}
input{
    background: #131313;
    border: 1px solid #646464;
    padding: 2px 5px;
    color: #fff;
   
}
select{
     background: #131313;
    border: 1px solid #646464;
    padding: 2px 5px;
    color: #fff;
}
textarea{
    background: #131313;
    border: 1px solid #646464;
    padding: 2px 5px;
    color: #fff;
}
.Feedback textarea {
    width: 87%;
    margin: 5px 0 5px 30px;
    height: 40px;
}
.Feedback .btn, .Feedback .pager .right .btnNext, .pager .right .Feedback .btnNext, .Feedback .pager .right .btnPrev, .pager .right .Feedback .btnPrev, .Feedback .pager .right .btnLast, .pager .right .Feedback .btnLast, .Feedback .pager .right .btnFirst, .pager .right .Feedback .btnFirst {
    margin-left: 150px;
    padding: 5px 25px;
    background: #db0752;
    border: 1px solid #bc0747;
    font: normal 13px/19px "Trebuchet MS", Arial, Helvetica, sans-serif;
}

.help {
    width: 250px;
    height: 30px;
    position: fixed;
    left: -250px;
    top: 50%;
    margin-top: 20px;
    background: #2B2B2B;
    z-index: 9;
    -webkit-transition: ease all;
    -webkit-transition-delay: 0.3s;
    -moz-transition: ease all 0.3s;
    -o-transition: ease all 0.3s;
    transition: ease all 0.3s;
}
.help .content {
    width: 250px;
    height: 100px;
    top: 1px;
    background: #2B2B2B;
    padding: 0;
    float: left;
}

.content {
    padding: 20px 0;
    border-top: 1px solid #211d1d;
    float: left;
    height: auto;
}
.help .subtext {
    font: normal 13px/19px "Trebuchet MS", Arial, Helvetica, sans-serif;
    text-align: center;
    color: #9d9b9b;
}
.help .subtext b {
    font-size: 14px;
    font-weight: bold;
}
.help:after {
    content: "";
    position: absolute;
    right: -40px;
    top: 0px;
    width: 40px;
    height: 37px;
    background: url(../images/icons.png) -266px -192px no-repeat  #2196F3;
    -webkit-border-radius: 0 0 3px 0px;
    -moz-border-radius: 0 0 3px 0px;
    -ms-border-radius: 0 0 3px 0px;
    -o-border-radius: 0 0 3px 0px;
    border-radius: 0 0 3px 0px;
}
.ShareWrap:hover {
    left: 0;
}
.Feedback:hover {
    left: 0;
}
.help:hover {
    left: 0;
}

     </style>
<div class="navbar navbar-fixed-top" style="top: -100px;">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="index.php">
<img src="images/logo.png" alt="Spotlight Studioz" style="height: 44px;width: 132px;" class="img-responsive"/>

</a>
</div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav navbar-right">
<li><a href="index.php#home">HOME</a></li>
<li><a href="index.php#about">ABOUT</a></li>
<li ><a href="index.php#models">MODELS</a></li>


<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">SERVICES<b class="caret"></b></a>
<ul class="dropdown-menu">
<li><a href="our_partners.php">OUR PARTNERS</a></li>
<li><a href="client.php">CLIENTELE</a></li>
<li><a href="services.php">SERVICES</a></li>

<li><a href="index.php#blog">CASTING</a></li>


</ul>
</li>


<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">GALLERY<b class="caret"></b></a>
<ul class="dropdown-menu">
<li><a href="gallery.php">PHOTOS</a></li>
<li><a href="video.php">VIDEOS</a></li>



</ul>
</li>






<li><a href="index.php#sessions">PORTFOLIO</a></li>


<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">TIPS<b class="caret"></b></a>
<ul class="dropdown-menu">
<li><a href="faq.php">FAQ</a></li>
<li><a href="term.php">LEGAL POLICY</a></li>

</ul>
</li>



<li><a href="index.php#contact">CONTACT</a></li>

<?php if($_SESSION['profile']->user_name) { ?>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo strtoupper($_SESSION['profile']->user_name) ?><b class="caret"></b></a>
<ul class="dropdown-menu">
    <?php if($_SESSION['profile']->user_type == "client") { ?>
    <li><a href="client_profile.php">MY ACCOUNT</a></li>
        
<?php     } else {
    ?>
    
<li><a href="model_profile.php">MY ACCOUNT</a></li>
<?php } ?>
<li><a href="logout.php">LOGOUT</a></li>

</ul>
</li>
 <?php if($_SESSION['profile']->user_type == "client") { ?>
 
<li><a href="javascript:void(0);">   <img alt="" src="admin/model/<?php echo $_SESSION['profile']->	company_logo ?>" style="width:25px; height:25px;" >
            </a></li>
            <?php } else { ?>
            
            <li><a href="javascript:void(0);">   <img alt="" src="admin/model/<?php echo $_SESSION['profile']->model_image1 ?>" style="width:25px; height:25px;" >
            </a></li>
            <?php } ?>

<?php } else { ?>

<li><a href="reg.php">LOGIN</a></li>

<?php } ?>
<?php if(isset($_SESSION['PRODUCT']))
	{
	  $count = count($_SESSION['PRODUCT']);
?>

<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i><span>(<?php echo $count; ?>)</span></b></a>
<ul class="dropdown-menu">
<li><a href="javascript:void(0);">
    <?php
    
if(isset($_SESSION['PRODUCT']))
{ ?>
<table class="table table-striped">
    <thead class="">
      <tr>
        <th style="text-align: center;">#</th>
        <th style="text-align: center;">Model-image</th>
        <th style="text-align: center;">Model-code</th>
        <tH style="text-align: center;">action </tH>
      </tr>
    </thead>
    <tbody>
    		<?php
    		foreach($_SESSION['PRODUCT'] as $k=>$uid)
    		{
    		    //echo $uid;
    		    $sql = mysqli_query($spotlight->spotlight,"select * from `user_reg` where `user_id`='$uid'");
 		       $res = mysqli_fetch_assoc($sql);
 		       ?>

 <tr>

 <td><input type="checkbox" name="model[]" value="<?php echo $res['user_name']; ?>"    checked> <?php echo $res['model_code']; ?> </td>
 <td>
 <img src="admin/model/<?php echo $res['model_image1']; ?>" style="height:50px; width:50px;">
 </td>
 <td>
     <?php echo $res['model_code']; ?>
 </td>
 <td><a href="remove_cart.php?d_cid=<?php echo $k ?>">delete</a></td>

 </tr>

 <?php
 }
 ?>
 <?php
 if(!isset($_SESSION['PRODUCT']))
 {
 echo  '<td>Shortlist to change your Brand Value</td>';
 } ?>
</tbody>
 </table>
 <?php 
	} 
	?>
       <center>
           <button class="btn btn-default" <?php  if(empty($_SESSION['PRODUCT'])){ echo  'disabled'; } ?>>  <a href="cart.php">PROCEED</a> </button>
         </center>
    
</a></li>
<?php } ?>


</ul>
</div>
</div>
</div>
<div style="position:fixed;z-index:1000">
<div class="ShareWrap">
    <div class="content">
    <p class="ShareHead">Share On</p>
    <a href="https://www.facebook.com/spotlightstudiosin/" target="_blank">Facebook</a>
    <a href="https://twitter.com/SpotlightStdoz"  data-via="IndianModelClub" data-hashtags="Modeling" target="_blank">Tweet</a>
    <a onclick="instagram.com/spotlightstudiosin" data-action="share">Instagram </a>
  
 

    
    </div>
    </div>
    
    
    
    <div class="Feedback">
    <div class="content">
      <p class="ShareHead">Feedback - Tell us what you think.</p>
      <div class="row padTop10">

      <div class="Half"> 
        
      <input name="ctl00$txtEmailId" type="text" id="txtEmailId" placeholder="Email" class="input1">
          <span id="rfvEmailId" style="color:Red;display:none;">*</span>
      </div>
      <div class="Half"> <input class="input1" name="ctl00$txtMobileNo" type="text" id="txtMobileNo" placeholder="Mobile">
       <span id="rfvMobileNo" style="color:Red;display:none;">*</span>
      </div>
      </div>
      <div class="row">
          <select name="ctl00$ddlFeedback" id="ddlFeedback">
	<option value="0">--Please Select--</option>
	<option value="1">Improvements</option>
	<option value="2">Suggest new features/ideas</option>
	<option value="3">Others - General feedback</option>
	<option value="4">Report a Problem</option>

</select>
      <span id="rfvFeedback" style="color:Red;display:none;">*</span>
      </div>

      <div class="row">
          <textarea name="msg" rows="2" cols="20" id="txtFeedbackMessage" placeholder="Message"></textarea>
          <span id="rfvFeedbackMessage" style="color:Red;display:none;">*</span>
      </div>

      <div class="row text-center">
          <input class="index1 btn-default" type="submit" name="ctl00$btnSend" value="Sendfeedback" onclick="feedback@spotlightstudioz.com" id="btnSend" class="btn">
            <span id="reEmailId" style="color:Red;display:none;">Invalid EmailId.</span>
      </div>
    </div>
    </div>
    
    <div class="help">
    <div class="content">
     <p class="ShareHead">For Help</p>
     <div class="subtext">
     For any Help Call us<br>
     <b>+91 7487091884</b><br>
     We are happy to help you.
     </div>
    </div>
    </div>
    
    </div>
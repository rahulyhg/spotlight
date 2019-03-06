   <?php

session_start();

ob_start();

include("connect.php");

?><!DOCTYPE html><!--[if lt IE 7]>      

<html class="no-js lt-ie9 lt-ie8 lt-ie7">

   <![endif]--><!--[if IE 7]>        

   <html class="no-js lt-ie9 lt-ie8">

      <![endif]--><!--[if IE 8]>        

      <html class="no-js lt-ie9">

         <![endif]--><!--[if gt IE 8]><!-->

         <html class="no-js">

            <!--<![endif]--><!-- Mirrored from webdesign-finder.com/html/models/models2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Jul 2018 07:46:46 GMT -->

            <head>

               <title>Models</title>

               <meta charset="utf-8">

               <!--[if IE]>        

               <meta http-equiv="X-UA-Compatible" content="IE=edge">

               <![endif]-->    

               <meta name="description" content="">

               <meta name="viewport" content="width=device-width, initial-scale=1">

               <!-- Place favicon.ico and apple-touch-icon.png in the root directory --> 


               <link rel="stylesheet" href="css/bootstrap.min.css">  

               <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

               <link rel="stylesheet" href="css/main.css" id="color-switcher-link">

               <link rel="stylesheet" href="css/owl.carousel.min.css">
                
               <link rel="stylesheet" href="css/owl.carousel.default.min.css">

               <link rel="stylesheet" href="css/fastselect.min.css"> 

               <link rel="stylesheet" href="css/toast.min.css">

               <link rel="stylesheet" href="css/animations.css">

               <link rel="stylesheet" href="css/fonts.css">

<script src="js/compressed.js"></script>   
<script src="js/main.js"></script>
<script src="js/owl-carousel.js"></script>    
<script src="js/fastselect.min.js"></script> 
<script src="js/toast.min.js" type="text/javascript"></script>



               <script src="js/vendor/modernizr-2.6.2.min.js"></script>  

      <!--[if lt IE 9]>        <script src="js/vendor/html5shiv.min.js"></script>        <script src="js/vendor/respond.min.js"></script>    <![endif]-->
<style>
.bold{
font-size:13px;
}

.gitem,.gitems{
  cursor:pointer;
} 
.fstElement{
  background-color:#1a1a1a;
  font-size:12px;
  top:14px;
  border:2px solid;
}
.fstMultipleMode .fstQueryInputExpanded {
    padding:0px;
    text-align:center;
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

                     <!-- template sections -->            <?php

include('header.php');

?>                          

                     <section class="ds page_models models_square gorizontal_padding section_padding_80 columns_padding_0">

                        <div class="container-fluid" style="padding-top:0px;">
             <div class="row boxed-padding" style="margin-left:32px;margin-top:40px;">
            <div class="col-lg-7">
              <div class="filters isotope_filters inline-block margin_0 text-center">
                <a href="#" data-filter="*"  data-value="0" class="selected gitems">All</a>
                 <?php 
                                 $cat=mysqli_query($connect,"SELECT * from user_category order by user_category_name asc");
                                 while($row=mysqli_fetch_assoc($cat)){
                                 ?>
                                 <a data-value="<?php echo $row['user_category_id'] ?>" class="gitems" id="<?php echo $row['user_category_id']?>" ><?php echo $row['user_category_name'] ?></a>
                                 <?php } ?>
              </div>
            </div>
                <div class="col-lg-5 text-center">
              
              <form method="get" action="" class="form-inline">
              <!-- <div class="form-group"> -->
                <!-- <label for="skill">Skill</label> -->
              <select name="skill">
                <option value="">Select Skill</option>
                <?php
                $subcat=mysqli_query($connect,"SELECT * from user_sub_category");
                while($rows=mysqli_fetch_assoc($subcat)){
                  ?>
                  <option value="<?php echo $rows['user_sub_category_name'] ?>"><?php echo $rows['user_sub_category_name'] ?></option>
                <?php } ?>
              </select>
              <!-- </div> -->
              <!-- <div class="form-group"> -->
                <!-- <label for="location">Location</label> -->
 <select name="location" style="width:25%;">
  <option value="">Select Location</option>

                                                                        <option style="color:#a0a0a0;" value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>

                                                                        <option style="color:#a0a0a0;" value="Andhra Pradesh">Andhra Pradesh</option>

                                                                        <option style="color:#a0a0a0;" value="Arunachal Pradesh">Arunachal Pradesh</option>

                                                                        <option style="color:#a0a0a0;" value="Assam">Assam</option>

                                                                        <option style="color:#a0a0a0;" value="Bihar">Bihar</option>

                                                                        <option style="color:#a0a0a0;" value="Chandigarh">Chandigarh</option>

                                                                        <option style="color:#a0a0a0;" value="Chhattisgarh">Chhattisgarh</option>

                                                                        <option style="color:#a0a0a0;" value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>

                                                                        <option style="color:#a0a0a0;" value="Daman and Diu">Daman and Diu</option>

                                                                        <option style="color:#a0a0a0;" value="Delhi">Delhi</option>

                                                                        <option style="color:#a0a0a0;" value="Goa">Goa</option>

                                                                        <option style="color:#a0a0a0;" value="Gujarat">Gujarat</option>

                                                                        <option style="color:#a0a0a0;" value="Haryana">Haryana</option>

                                                                        <option style="color:#a0a0a0;" value="Himachal Pradesh">Himachal Pradesh</option>

                                                                        <option style="color:#a0a0a0;" value="Jammu and Kashmir">Jammu and Kashmir</option>

                                                                        <option style="color:#a0a0a0;" value="Jharkhand">Jharkhand</option>

                                                                        <option style="color:#a0a0a0;" value="Karnataka">Karnataka</option>

                                                                        <option style="color:#a0a0a0;" value="Kerala">Kerala</option>

                                                                        <option style="color:#a0a0a0;" value="Lakshadweep">Lakshadweep</option>

                                                                        <option style="color:#a0a0a0;" value="Madhya Pradesh">Madhya Pradesh</option>

                                                                        <option style="color:#a0a0a0;" value="Maharashtra">Maharashtra</option>

                                                                        <option style="color:#a0a0a0;" value="Manipur">Manipur</option>

                                                                        <option style="color:#a0a0a0;" value="Meghalaya">Meghalaya</option>

                                                                        <option style="color:#a0a0a0;" value="Mizoram">Mizoram</option>

                                                                        <option style="color:#a0a0a0;" value="Nagaland">Nagaland</option>

                                                                        <option style="color:#a0a0a0;" value="Orissa">Orissa</option>

                                                                        <option style="color:#a0a0a0;" value="Pondicherry">Pondicherry</option>

                                                                        <option style="color:#a0a0a0;" value="Punjab">Punjab</option>

                                                                        <option style="color:#a0a0a0;" value="Rajasthan">Rajasthan</option>

                                                                        <option style="color:#a0a0a0;" value="Sikkim">Sikkim</option>

                                                                        <option style="color:#a0a0a0;" value="Tamil Nadu">Tamil Nadu</option>

                                                                        <option style="color:#a0a0a0;" value="Tripura">Tripura</option>

                                                                        <option style="color:#a0a0a0;" value="Uttaranchal">Uttaranchal</option>

                                                                        <option style="color:#a0a0a0;" value="Uttar Pradesh">Uttar Pradesh</option>

                                                                        <option style="color:#a0a0a0;" value="West Bengal">West Bengal</option>

                                                                    </select>
              <!-- </div> -->
              <!-- <div class="form-group"> -->
                <!-- <label for="age_group">Age Group</label> -->

                <select name="age_group" style="width:25%;">
                  <option value="">Select Age Group</option>
                  <option value="15">10-15</option>
                  <option value="20">15-20</option>
                  <option value="25">20-25</option>
                  <option value="30">25-30</option>
                  <option value="35">30-35</option>
                  <option value="40">35-40</option>
                </select>
              <!-- </div> -->
              <!-- <div class="form-group"> -->
                <!-- <label for="age_group">Interested Project</label> -->
                <select name="project[]" multiple class="multipleSelect">
                  <option value="">Select Interested Project</option>
                  <option value="adult">Adult</option>
                  <option value="art_shoot">Art Shoot</option>
                  <option value="bikini">Bikini</option>
                  <option value="body_paint">Body Paint</option>
                  <option value="bold">Bold</option>
                  <option value="calendar">Calendar</option>
                  <option value="cosplay">Cosplay</option>
                  <option value="editorial">Editorial</option>
                  <option value="erotic">Erotic</option>
                  <option value="exotic">Exotic</option>
                  <option value="fashion">Fashion</option>
                  <option value="fetish">Fetish</option>
                  <option value="fit_modeling">Fit Modeling</option>
                  <option value="fitness">Fitness</option>
                  <option value="fetish">Fetish</option>
                  <option value="glamour">Glamour</option>
                  <option value="implied">Implied Nude</option>
                  <option value="indian">Indian</option>
                  <option value="jewellery">Jewellery</option>
                  <option value="lifestyle">LifeStyle</option>
                  <option value="lingerie">Lingerie</option>
                  <option value="magazine">Magazine</option>
                  <option value="nude">Nude</option>
                  <option value="parts_modeling">Parts Modeling</option>
                  <option value="pinup">Pinup</option>
                  <option value="promotional">Promotional</option>
                  <option value="ramp_model">Ramp Model</option>
                  <option value="semi_model">Semi Nude</option>
                  <option value="underwater">Underwater</option>
                  <option value="western">Western</option>
                </select>
              <!-- </div> -->
              <div style="text-align:center;margin-top:20px;">
              <input type="submit" value="Search" name="advanced_search" style="background-color:#e0006c;color:white;border:0px;padding:4px 20px;">
              <a style="background-color:#e0006c;color:white;border:0px;padding:8px 20px;" href="models.php">Reset<span style="visibility:hidden;">s</span></a>
            </div>
            </form>
            </div>
          
          </div>
                          
<div id="responseGallery">
          <div class="isotope_container isotope row masonry-layout bottommargin_20">

<?php


$user_reg =  mysqli_query($connect,"select * from user_reg where user_type!='client' and user_status='active' ");
          $rows=mysqli_num_rows($user_reg);
 if(isset($_GET['page'])){
                      $page=preg_replace('#[^0-9]#','',$_GET['page']);
                  }else{
                    $page=1;
                  }
$per_page=12;
 $last_page=ceil($rows/$per_page);
                  if($page<1){
                    $page=1;
                  }else if($page>$last_page){
                    $page=$last_page;
                  }
  $middleNumbers='';
                  $add1=$page+1;
                  $add2=$page+2;
                  $sub1=$page-1;
                  $sub2=$page-2;

                  if($page==1){
                    $middleNumbers.='<li data-value='.$page.' class="page-item gitem active"><a>'.$page.'</a></li>';
                    $middleNumbers.='<li data-value='.$add1.' class="page-item gitem"><a class="page-link">'.$add1.'</a></li>';

                  }else if($page==$last_page){
                    $middleNumbers.='<li data-value='.$sub1.' class="page-item gitem"><a class="page-link">'.$sub1.'</a></li>';
                    $middleNumbers.='<li data-value='.$page.' class="page-item gitem active"><a>'.$page.'</a></li>';

                  }else if($page>2 && $page<$last_page-1){
                    $middleNumbers.='<li data-value='.$sub2.' class="page-item gitem"><a class="page-link">'.$sub2.'</a></li>';
                    $middleNumbers.='<li data-value='.$sub1.' class="page-item gitem"><a class="page-link">'.$sub1.'</a></li>';
                    $middleNumbers.='<li data-value='.$page.' class="page-item gitem active"><a>'.$page.'</a></li>';
                    $middleNumbers.='<li data-value='.$add1.' class="page-item gitem"><a class="page-link">'.$add1.'</a></li>';
                    $middleNumbers.='<li data-value='.$add2.' class="page-item gitem"><a class="page-link">'.$add2.'</a></li>';

                  }else if($page>1 && $page<$last_page){
                    $middleNumbers.='<li data-value='.$sub1.' class="page-item gitem"><a class="page-link">'.$sub1.'</a></li>';
                    $middleNumbers.='<li data-value='.$page.' class="page-item gitem active"><a>'.$page.'</a></li>';
                    $middleNumbers.='<li data-value='.$add1.' class="page-item gitem"><a class="page-link">'.$add1.'</a></li>';

                  }
 $user_reg =  mysqli_query($connect,"select * from user_reg where user_type!='client' and user_status='active' LIMIT ".($page-1)*$per_page.",".$per_page." ");
if(isset($_GET['skill']) ||isset($_GET['location']) ||isset($_GET['age_group']) ||isset($_GET['project']) ){   
   $whereClauses = ""; 
        if (! empty($_GET['skill'])) $whereClauses ="AND user_sub_category='".mysqli_real_escape_string($connect,$_GET['skill'])."'";

        if (! empty($_GET['location'])) 
          $whereClauses.="AND model_state='".mysqli_real_escape_string($connect,$_GET['location'])."'"; 
        $where = ''; 

        if (! empty($_GET['age_group'])){ 
          $age=$_GET['age_group'];
          $range=$age-5;
          $whereClauses.="AND model_age BETWEEN $range AND $age "; 
        }
        $where = ''; 

        if (! empty($_GET['project'])){
          $totalSpec=sizeof($_GET['project']);
          for($i=0;$i<$totalSpec;$i++)
          {
          $spec=$_GET['project'][$i];
          if($i<1){
        $whereClauses.="AND model_modeling LIKE '%$spec%' "; 
          }else{
          $whereClauses.="OR model_modeling LIKE '%$spec%' "; 
         }
          }
          
        }
        $where = ''; 


       if (strlen($whereClauses) > 0) 
        { 
          
          $where = $whereClauses; 
        } 
        $query="SELECT * FROM user_reg where user_type!='client' and user_status='active' $where ";
        $user_reg = mysqli_query($connect,$query);
}
        
while($get_user = mysqli_fetch_assoc($user_reg)){ 

  $id= $get_user['user_id'];

  $model_code = $get_user['model_code'];
  
    $model_image1 = $get_user['model_image1'];

    $model_waist  = $get_user['model_waist'];

    $model_hips   = $get_user['model_hips'];

    $model_bust   = $get_user['model_bust'];

    $model_height = $get_user['model_height'];


?>

          


                     <div class="isotope-item col-lg-3 col-md-4 col-sm-6 col-xs-12 fashion" style="padding-left:30px;width:284.75px;">

                                 <div class="vertical-item content-absolute">

                                    <div class="item-media" style="padding-bottom:40px;margin-top:40px;">

                                       <?php

    if (strlen($model_image1) > 0) {

?>                                    <img src="admin/model/<?php

        echo $model_image1;

?>" alt="" style="width:284.75px;height:427.117px;">                                    <?php

    } else {

?>                                    <img src="http://placehold.it/250x400" alt="" style="width:284.75px;height:427.117px;">                                    <?php

    }

?>                                    

                                       <div class="media-links" style="width:284.75px;height:427.117px;">                                    </div>

                                    </div>

                                    <div class="item-content text-center before_cover cs">

                                       <div class="links-wrap">                                                                                    <a class="p-link" title="" href="model-single.php?id=<?php

    echo $id;

?>"><?php

    echo $model_code;

?></a>              


       
      <a data-target="#editBox" data-toggle="modal" id="<?php echo $id ?>"
 class="open-modal p-view prettyPhoto pull-right" title="" style="cursor:pointer;"></a> 


<a class="p-link addItem" style="cursor:pointer;" value="<?php echo $id;?>"><i class="fa fa-shopping-cart"></i></a>                                                                              </div>

                                       <div class="bg_overlay"></div>

                                       <div class="model-parameters">

                                          <div>                                            <span class="bold">Height</span>                                            <br>                                            <span><?php

    echo $model_height;

?></span>                                        </div>

                                          <div>                                            <span class="bold"><?php echo $get_user['model_gender']=="female"?"Bust":"Chest" ?></span>                                            <br>                                            <span><?php

    echo $model_bust;

?></span>                                        </div>

                                          <div>                                            <span class="bold">Waist</span>                                            <br>                                            <span><?php

    echo $model_waist;

?></span>                                        </div>

                                          <div>                                            <span class="bold"><?php echo $get_user['model_gender']=="female"?"Hips":"Biceps" ?></span>                                            <br>                                            <span><?php

    echo $model_hips;

?></span>                                        </div>

                                       

                                       </div>

                                    </div>

                                 </div>

                              </div>


<?php

}

?>

          </div>


  <div class="row">

            <div class="col-sm-12 text-center margin_0">

              

                

                  <div class="row">
            <div class="col-sm-12 text-center margin_0">
<?php if($rows>12 && empty($_GET)){ ?>              
              <ul class="pagination ">
                <li>
                  <a class="gitem" data-value="<?php echo $page-1 ?>">
                    <span class="sr-only">Prev</span>
                    <i class="rt-icon2-chevron-thin-left"></i>
                  </a>
                </li>
                
              <?php echo $middleNumbers ?>
                <li>
                  <a class="gitem" data-value="<?php echo $page+1 ?>" >
                    <span class="sr-only">Next</span>
                    <i class="rt-icon2-chevron-thin-right"></i>
                  </a>
                </li>
              </ul>
<?php }?>            
            </div>
          </div>

                

      

              

            </div>

          </div>

          </div>
          </div>
                        </div>

                     </section>

<div class="modal fade" id="editBox" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document" style="border-radius:0px;margin-top:4%;">
        <div class="modal-content">
            
            <div class="modal-body carousel-inner" style="padding:0px;">
           
            </div>
           
        </div>
    </div>
</div>    
                   

                     <?php

include("footer.php");

?>         

   <?php

include("copyright2.php");

?>        

                  </div>

                  <!-- eof #box_wrapper -->    

               </div>

               <!-- eof #canvas -->


            </body>

            <?php

include("ajax.php");

?>

<script type="text/javascript">
  $(document).ready(function(){
    $('.multipleSelect').fastselect();
    $('.fstQueryInput').attr('placeholder','Select Interested Project');
  });
</script>
<script type="text/javascript">
      var cat=0;
    $(document).ready(function(){
        $('.gitems').click(function(){
          $(".gitems").removeClass("selected");
           $(this).addClass("selected");
            cat=$(this).data("value");
            
        $.ajax({
        url : "model_name.php?gallery_id="+cat,
        type: "POST"
    }).done(function(response){
          $('#responseGallery').html(response);
        }).fail(function(response){
       
          $('#responseGallery').html("<h4 class='text-danger text-center'>No Models Added Yet</h4>");          
 
        });
       });
    });
  
         $(document).delegate(".gitem","click",function(){

            var id=$(this).data("value");
            console.log(id);
        $.ajax({
        url : "model_name.php?page="+id+"&gallery_id="+cat,
        type: "POST"
    }).done(function(response){
          $('#responseGallery').html(response);
          $('html, body').animate({ scrollTop: 0 }, 0);
        });
       });
  

</script>
<script>
$( document ).ready(function() { 
  $(document).delegate('.open-modal',"click",function(){
    var id = $(this).attr('id');
    $.ajax({
      type : 'post',
       url : 'file.php?id='+id, 
      success : function(data){
          $('#editBox').show('show'); 
          $('.carousel-inner').html(data); 
           $('.owl-carousel').owlCarousel({

            loop:true,

            nav:true,

            margin:10,

            autoplay:true,
            
            autoplayTimeout:4000,

            dots:true,

            responsive:{

                0:{

                    items:1

                },

                600:{

                    items:1,
                    singleItem: true

                },

                1000:{

                    items:1,
                    singleItem: true

                }

            }

        })
       }
    });
  });
});
</script>
<!-- Mirrored from webdesign-finder.com/html/models/models2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Jul 2018 07:48:18 GMT -->

         </html>


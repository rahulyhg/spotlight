<?php
   session_start();
   ob_start();
   include("connect.php");
   ?>
   <!DOCTYPE html><!--[if lt IE 7]>      
<html class="no-js lt-ie9 lt-ie8 lt-ie7">
   <![endif]--><!--[if IE 7]>         
   <html class="no-js lt-ie9 lt-ie8">
      <![endif]--><!--[if IE 8]>         
      <html class="no-js lt-ie9">
         <![endif]--><!--[if gt IE 8]><!-->
         <html class="no-js">
            <!--<![endif]--><!-- Mirrored from webdesign-finder.com/html/models/events-left.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Jul 2018 07:45:42 GMT -->
            <head>
               <title>Casting</title>
               <meta charset="utf-8">
               <!--[if IE]>        
               <meta http-equiv="X-UA-Compatible" content="IE=edge">
               <![endif]-->    
               <meta name="description" content="">
               <meta name="viewport" content="width=device-width, initial-scale=1">
               <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->    
               <link rel="stylesheet" href="css/bootstrap.min.css">
               <link rel="stylesheet" href="css/main.css" id="color-switcher-link">
               <link rel="stylesheet" href="css/animations.css">
               <link rel="stylesheet" href="css/fonts.css">
               <script src="js/vendor/modernizr-2.6.2.min.js"></script>    <!--[if lt IE 9]>        <script src="js/vendor/html5shiv.min.js"></script>        <script src="js/vendor/respond.min.js"></script>    <![endif]-->
            </head>
            <body>
               <!--[if lt IE 9]>        
               <div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
               <![endif]-->    
               <div class="preloader">
                  <div class="preloader_image"></div>
               </div>
               <!-- search modal -->    
               <div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
                  <div class="widget widget_search">
                     <form method="get" class="searchform form-inline" action="http://webdesign-finder.com/">
                        <div class="form-group">                    <input type="text" value="" name="search" class="form-control" placeholder="Type search keyword here..." id="modal-search-input">                </div>
                        <button type="submit" class="theme_button input_button">Search</button>            
                     </form>
                  </div>
               </div>
               <!-- wrappers for visual page editor and boxed version of template -->    
               <div id="canvas">
                  <div id="box_wrapper">
                     <!-- template sections -->            
                     <?php
                        include("header.php");
                        ?>                                
                     <section class="ds section_padding_70 section_padding_bottom_60 columns_padding_25">
                        <div class="container">
                           <div class="row">
                              <div class="col-sm-7 col-md-8 col-lg-8 col-sm-push-5 col-md-push-4 col-lg-push-4">
                                 <div class="row">
                                    <div class="col-sm-12 bottommargin_40">
                                       <div class="side-item event-item content-padding with_background">
                                            <?php
                                              if(isset($_GET['id'])){
                                               $id=$_GET['id'];
                                               $query=mysqli_query($connect,"SELECT * from casting where category_id='$id' and extra=1 ");
                                               }
                                             else
                                               {
                                              $query=mysqli_query($connect,"SELECT * from casting where extra=1 ");
                                              }

          $rowsCasting=mysqli_num_rows($query);
 if(isset($_GET['page'])){
                      $page=preg_replace('#[^0-9]#','',$_GET['page']);
                  }else{
                    $page=1;
                  }
$per_page=8;
 $last_page=ceil($rowsCasting/$per_page);
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
                if(!isset($_GET['id'])){

                  if($page==1){
                    $middleNumbers.='<li class="page-item active"><a>'.$page.'</a></li>';
                    $middleNumbers.='<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$add1.'">'.$add1.'</a></li>';

                  }else if($page==$last_page){
                    $middleNumbers.='<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$sub1.'">'.$sub1.'</a></li>';
                    $middleNumbers.='<li class="page-item active"><a>'.$page.'</a></li>';

                  }else if($page>2 && $page<$last_page-1){
                    $middleNumbers.='<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$sub2.'">'.$sub2.'</a></li>';
                    $middleNumbers.='<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$sub1.'">'.$sub1.'</a></li>';
                    $middleNumbers.='<li class="page-item active"><a>'.$page.'</a></li>';
                    $middleNumbers.='<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$add1.'">'.$add1.'</a></li>';
                    $middleNumbers.='<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$add2.'">'.$add2.'</a></li>';

                  }else if($page>1 && $page<$last_page){
                    $middleNumbers.='<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$sub1.'">'.$sub1.'</a></li>';
                    $middleNumbers.='<li class="page-item active"><a>'.$page.'</a></li>';
                    $middleNumbers.='<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$add1.'">'.$add1.'</a></li>';

                  }
       }else{
       
          if($page==1){
                    $middleNumbers.='<li class="page-item active"><a>'.$page.'</a></li>';
                    $middleNumbers.='<li class="page-item"><a class="page-link"
                     href="'.$_SERVER['PHP_SELF'].'?page='.$add1.'&id='.$id.' ">'.$add1.'</a></li>';

                  }else if($page==$last_page){
                    $middleNumbers.='<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$sub1.'&id='.$id.' ">'.$sub1.'</a></li>';
                    $middleNumbers.='<li class="page-item active"><a>'.$page.'</a></li>';

                  }else if($page>2 && $page<$last_page-1){
                    $middleNumbers.='<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$sub2.'&id='.$id.' ">'.$sub2.'</a></li>';
                    $middleNumbers.='<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$sub1.'&id='.$id.' ">'.$sub1.'</a></li>';
                    $middleNumbers.='<li class="page-item active"><a>'.$page.'</a></li>';
                    $middleNumbers.='<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$add1.'&id='.$id.' ">'.$add1.'</a></li>';
                    $middleNumbers.='<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$add2.'&id='.$id.' ">'.$add2.'</a></li>';

                  }else if($page>1 && $page<$last_page){
                    $middleNumbers.='<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$sub1.'&id='.$id.' ">'.$sub1.'</a></li>';
                    $middleNumbers.='<li class="page-item active"><a>'.$page.'</a></li>';
                    $middleNumbers.='<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$add1.'&id='.$id.' ">'.$add1.'</a></li>';

                  }

         }
                  if(isset($_GET['id'])){
                   $id=$_GET['id'];
                  $query=mysqli_query($connect,"SELECT * from casting where category_id='$id' and extra=1 LIMIT ".($page-1)*$per_page.",".$per_page." ");
                     }else{
                  $query =  mysqli_query($connect,"select * from `casting` where extra='1' LIMIT ".($page-1)*$per_page.",".$per_page." ");
                     }
if($rowsCasting<1){
echo "<h4 class='text-danger text-center' style='padding:20px;'>Sorry,No casting yet</h4>";
}else{
                                              while($row=mysqli_fetch_assoc($query)){ 
                                              ?>
                                          <div class="row">
                                             
                                             <div class="col-md-4">
                                                <div class="item-media">
                                                   <img src="admin/<?php echo $row['c_img'] ?>" alt="">                                                    
                                                   <div class="media-links">                                             
                                                   <a class="abs-link" title="" href="event-single-left.php?id=<?php echo $row['c_id'] ?>"></a>           
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-8">
                                              
                                                <div class="item-content">
                                                   <h3 class="entry-title topmargin_0">                                                       
                                                   <a href="event-single-left.php?id=<?php echo $row['c_id'] ?>"><?php echo $row['c_heading'] ?></a>           
                                                   </h3>
                                                   <p><?php echo substr($row['c_text'],0,100) ?>....</p>
                                                   <p class="item-meta grey">                         
                                                   <a href="event-single-left.php?id=<?php echo $row['c_id'] ?>"><i class="rt-icon2-calendar4 highlight"></i>View Details</a>                                                    </p>
                                                </div>
                                               
                                             </div>
                                          </div>
                                           <?php } } ?>
                                       </div>
                                    </div>
                                 </div>
   
                                <div class="row">
            <div class="col-sm-12 text-center margin_0">
<?php if($rowsCasting>8){
if(isset($_GET['id'])){
$get_id=$_GET['id'];
?>
              <ul class="pagination ">
                <li>
                  <a href="casting.php?page=<?php echo $page-1?>&id=<?php echo $get_id ?>">

                    <span class="sr-only">Prev</span>
                    <i class="rt-icon2-chevron-thin-left"></i>
                  </a>
                </li>
                
              <?php echo $middleNumbers;?>
                <li>
                  <a href="casting.php?page=<?php echo $page+1?>&id=<?php echo $get_id ?>">
                    <span class="sr-only">Next</span>
                    <i class="rt-icon2-chevron-thin-right"></i>
                  </a>
                </li>
              </ul>

<?php
 }
else{
?>
<ul class="pagination ">
                <li>
                  <a href="casting.php?page=<?php echo $page-1?>">

                     <span class="sr-only">Prev</span>
                    <i class="rt-icon2-chevron-thin-left"></i>
                  </a>
                </li>
                
              <?php echo $middleNumbers;?>
                <li>
                  <a href="casting.php?page=<?php echo $page+1?>">
                    <span class="sr-only">Next</span>
                    <i class="rt-icon2-chevron-thin-right"></i>
                  </a>
                </li>
              </ul>
<?php } } ?>
            </div>
          </div>
                       
                              </div>
                              <!--eof .col-sm-8 (main content)-->                        <!-- sidebar -->                        
                              <aside class="col-sm-5 col-md-4 col-lg-4 col-sm-pull-7 col-md-pull-8 col-lg-pull-8">
                                 <div class="with_background with_padding">
                                    <div class="widget widget_categories">
                                       <h3 class="widget-title">Categories</h3>
                                       <ul>
          <?php
            $categories=mysqli_query($connect,"SELECT * from casting_category");
            $completed=mysqli_query($connect,"SELECT * from casting where completed=1 ");
            while($rows=mysqli_fetch_assoc($categories)){
           ?>
                                          <li> 
                                           <a href="casting.php?id=<?php echo $rows['id']?>" title=""><?php echo $rows['name'] ?></a>  
                                          
                                       </li>
                                       <?php }?>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="with_background with_padding">
                                    <div class="widget widget_popular_entries">
                                       <h3 class="widget-title">Completed Assignments</h3>
                                       <ul class="media-list darklinks">
                                        <?php while($rows=mysqli_fetch_assoc($completed)){?>
                                          <li class="media">
                                             <a class="media-left" href="event-single-left.php?id=<?php echo $rows['c_id'] ?>">  
                                              <img class="media-object" src="admin/<?php echo $rows['c_img'] ?>" alt="">     
                                            </a>                                            
                                             <div class="media-body">
                                                <p>     
                                               <a href="event-single-left.php?id=<?php echo $rows['c_id'] ?>"><?php echo substr($rows['c_text'],0,40) ?>.... </a>     
                                           </p>
                                             </div>
                                          </li>
                                         <?php }?>
                                       </ul>
                                    </div>
                                 </div>
                                 
                                 <div class="with_background with_padding">
                                    <div class="widget widget_banner">
                                       <h3 class="widget-title">Aspiring Models</h3>
                                       <div class="vertical-item content-absolute ds">
                                          <div class="item-media">                                            <img src="images/models_square/01.jpg" alt="">                                        </div>
                                          <div class="item-content">
                                             <span class="main_bg_color">                                                New                                            </span>                                            
                                             <h2>                                                Portfolio                                                <br> Packages                                            </h2>
                                          </div>
                                          <div class="media-links">                                            <a href="appointment.php" class="abs-link"></a>                                        </div>
                                       </div>
                                    </div>
                                 </div>
                           </div>
                        </div>
                  </div>
                  </aside>                        <!-- eof aside sidebar -->                    
               </div>
               </div>            </section>    
           
        
           
               <?php
                  include("footer.php");
                  ?>            <?php
                  include("copyright2.php");
                  ?>         </div>        <!-- eof #box_wrapper -->    </div>    <!-- eof #canvas -->    <script data-cfasync="false" src="../../cdn-cgi/scripts/f2bf09f8/cloudflare-static/email-decode.min.js"></script><script src="js/compressed.js"></script>    <script src="js/main.js"></script>    <script src="js/switcher.js"></script>
            </body>
            <?php
               include("ajax.php");
               ?>
         </html>


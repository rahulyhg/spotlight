<?php

session_start();

?>

    <!DOCTYPE html>

    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->

    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->

    <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->

    <!--[if gt IE 8]><!-->

    <html class="no-js">

    <!--<![endif]-->

    <!-- Mirrored from webdesign-finder.com/html/models/gallery-regular-4-cols.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Jul 2018 07:45:36 GMT -->



    <head>

        <title>Title</title>

        <meta charset="utf-8">

        <!--[if IE]>        <meta http-equiv="X-UA-Compatible" content="IE=edge">    <![endif]-->

        <meta name="description" content="">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/bootstrap.min.css">

        <link rel="stylesheet" href="css/main.css" id="color-switcher-link">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css" />

        <link rel="stylesheet" href="css/animations.css">

        <link rel="stylesheet" href="css/fonts.css">

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>

        <script data-cfasync="false" src="../../cdn-cgi/scripts/f2bf09f8/cloudflare-static/email-decode.min.js"></script>

        <script src="js/compressed.js"></script>

        <script src="js/main.js"></script>


<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>

        <script src="js/switcher.js"></script>

        <!--[if lt IE 9]>        <script src="js/vendor/html5shiv.min.js"></script>        <script src="js/vendor/respond.min.js"></script>    <![endif]-->

    </head>



    <body>

        <!--[if lt IE 9]>        <div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>    <![endif]-->

        <div class="preloader">

            <div class="preloader_image"></div>

        </div>

        <!-- search modal -->

        <div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">

            <div class="widget widget_search">

                <form method="get" class="searchform form-inline" action="http://webdesign-finder.com/">

                    <div class="form-group">

                        <input type="text" value="" name="search" class="form-control" placeholder="Type search keyword here..." id="modal-search-input"> </div>

                    <button type="submit" class="theme_button input_button">Search</button>

                </form>

            </div>

        </div>

        <!-- wrappers for visual page editor and boxed version of template -->

        <div id="canvas">

            <div id="box_wrapper">

                <!-- template sections -->

                <?php

include('header.php');

include('connect.php');

?>

                 

                    <section class="ds page_portfolio section_padding_70 section_padding_bottom_60">

                        <div class="container">

                            <div class="row">

                                <div class="col-sm-12">

                                    <div class="filters isotope_filters text-center">

                                 <a href="#"  data-filter="*" data-value="0" class="selected gitems">All</a>

                                 <?php 

                                 $shoot=mysqli_query($connect,"SELECT * from galleryname");

                                 while($row=mysqli_fetch_assoc($shoot)){

                                 ?>

                 <a href="#" class="gitems"  data-value="<?php echo $row['g_id']?>" ><?php echo $row['gallery_name'] ?></a>


                                 <?php } ?>

                                  </div>
                            <div id="responseGallery">
                                    <div class="isotope_container isotope row masonry-layout" data-filters=".isotope_filters">

                                        <?php


$user_reg =  mysqli_query($connect,"select * from `gallerypic`");

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

 $user_reg =  mysqli_query($connect,"select * from `gallerypic` LIMIT ".($page-1)*$per_page.",".$per_page." ");

while ($get_user = mysqli_fetch_assoc($user_reg)) {

    $img = $get_user['img'];

?>

                                    <div class="isotope-item bottommargin_30 col-lg-3 col-md-6 col-sm-12 studio">

                                         <div class="vertical-item gallery-item content-absolute text-center cs">

                                                    <div class="item-media"> <img src="admin/<?php

    echo $img;

?>" alt="" style="height:175px;width:262.5px">

                                                        <div class="media-links">

                                                            <div class="links-wrap">

                                                                <a class="p-view prettyPhoto " title="" data-fancybox="gallery" href="admin/<?php

    echo $img;

?>"></a>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <?php

}

?>

                                    </div>

                                    <!-- eof .isotope_container.row -->

<div class="row">

                        <div class="col-sm-12 text-center margin_0">

                            

                                

                                    <div class="row">
                        <div class="col-sm-12 text-center margin_0">
              <?php if($rows>12){ ?>
                            <ul class="pagination ">
                                <li>
                                    <a class="gitem" data-value="<?php echo $page-1 ?>>
                                        <span class="sr-only">Prev</span>
                                        <i class="rt-icon2-chevron-thin-left"></i>
                                    </a>
                                </li>
                                
                           <?php echo $middleNumbers ?>
                                <li>
                                    <a class="gitem" data-value="<?php echo $page+1 ?>">
                                        <span class="sr-only">Next</span>
                                        <i class="rt-icon2-chevron-thin-right"></i>
                                    </a>
                                </li>
                            </ul>
              <?php } ?>
            
                        </div>
                    </div>

                                

            

                            

                        </div>

                    </div>

                    </div>


                                </div>

                                </div>

                            </div>

                        </div>

                    </section>

                    <section class="ds ms section_padding_30 page_social">

                        <div class="container">

                            <div class="row topmargin_20 bottommargin_10">

                                <div class="col-sm-12 text-center">

                                    <div class="page_social_icons">

                                        <a class="social-icon color-bg-icon soc-facebook" href="#" title="Facebook"></a>

                                        <a class="social-icon color-bg-icon soc-twitter" href="#" title="Twitter"></a>

                                        <a class="social-icon color-bg-icon soc-google" href="#" title="Google"></a>

                                        <a class="social-icon color-bg-icon soc-linkedin" href="#" title="LinkedIn"></a>

                                        <a class="social-icon color-bg-icon soc-pinterest" href="#" title="Pinterest"></a>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </section>

                    <?php

include('footer.php');

?>

                        <?php

include('copyright2.php');

?>

            </div>

            <!-- eof #box_wrapper -->

        </div>

        <!-- eof #canvas -->

        

    </body>

<?php //include("ajax.php")?>

<script type="text/javascript">
      var cat=0;
    $(document).ready(function(){
        $('.gitems').click(function(){
            cat=$(this).data("value");
            
        $.ajax({
        url : "gallery_name.php?gallery_id="+cat,
        type: "POST"
    }).done(function(response){
          $('#responseGallery').html(response);
        });
       });
    });
  
         $(document).delegate(".gitem","click",function(){

            var id=$(this).data("value");
            console.log(id);
        $.ajax({
        url : "gallery_name.php?page="+id+"&gallery_id="+cat,
        type: "POST"
    }).done(function(response){
          $('#responseGallery').html(response);
        });
       });
  

</script>

    <!-- Mirrored from webdesign-finder.com/html/models/gallery-regular-4-cols.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Jul 2018 07:45:36 GMT -->



    </html>


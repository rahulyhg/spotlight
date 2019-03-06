<?php
include("connect.php");
$product='<div class="isotope_container isotope row masonry-layout" data-filters=".isotope_filters">';
if($id==0){
$gallery =  mysqli_query($connect,"select * from `gallerypic` ");
}else{
$gallery =  mysqli_query($connect,"select * from `gallerypic` where img_id='$id' ");
}
					$rows=mysqli_num_rows($gallery);
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
if($id==0){               
 $user_reg =  mysqli_query($connect,"select * from `gallerypic` LIMIT ".($page-1)*$per_page.",".$per_page." ");
}else{
 $user_reg =  mysqli_query($connect,"select * from `gallerypic` where img_id='$id'  LIMIT ".($page-1)*$per_page.",".$per_page." ");
}                 




while($get_user = mysqli_fetch_assoc($user_reg)){	


$img = $get_user['img'];



$product.=<<<DELIMETER



  
  
	<div class="isotope-item bottommargin_30 col-lg-3 col-md-6 col-sm-3 col-sm-12 studio">

					<div class="vertical-item gallery-item content-absolute text-center">

										<div class="item-media">

											<img src="admin/$img" alt=""  style="height:175px;width:262.5px">

											<div class="media-links">

												<div class="links-wrap">

													<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="admin/$img"></a>

										

												</div>

											</div>

										</div>

									

									</div>

								</div>
								

DELIMETER;




}

$product.='</div>';
$product.=<<<DELIMETE

	<div class="row">

						<div class="col-sm-12 text-center margin_0">

							

								

									<div class="row">
						<div class="col-sm-12 text-center margin_0">
              
							<ul class="pagination ">
								<li>
									<a class="gitem" data-value=$page-1>
										<span class="sr-only">Prev</span>
										<i class="rt-icon2-chevron-thin-left"></i>
									</a>
								</li>
								
							$middleNumbers
								<li>
									<a class="gitem" data-value=$page+1 >
										<span class="sr-only">Next</span>
										<i class="rt-icon2-chevron-thin-right"></i>
									</a>
								</li>
							</ul>
            
						</div>
					</div>

								

			

							

						</div>

					</div>

					</div>

DELIMETE;

echo $product;


?>

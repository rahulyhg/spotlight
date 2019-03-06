<?php
include("connect.php");
$id=$_GET['gallery_id'];

if($id==0){
$user_reg =  mysqli_query($connect,"select * from user_reg where user_type!='client' ");	
}
else{
$user_reg =  mysqli_query($connect,"select * from user_reg where user_type!='client' and user_category='$id' ");
}
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
 if($id==0){               
 $user_reg =  mysqli_query($connect,"select * from user_reg where user_type!='client' LIMIT ".($page-1)*$per_page.",".$per_page." ");
}else{
 $user_reg =  mysqli_query($connect,"select * from user_reg where user_type!='client' and user_category='$id'  LIMIT ".($page-1)*$per_page.",".$per_page." ");
}                    
$product='<div class="isotope_container isotope row masonry-layout" data-filters=".isotope_filters">';


while($get_user = mysqli_fetch_assoc($user_reg)){	


    $id           = $get_user['user_id'];

    $model_code    = $get_user['model_code'];

    $model_image1 = $get_user['model_image1'];

    $model_waist  = $get_user['model_waist'];

    $model_hips   = $get_user['model_hips'];

    $model_bust   = $get_user['model_bust'];

    $model_height = $get_user['model_height'];




$product.=<<<DELIMETER



  
  
	
					           <div class="isotope-item col-lg-3 col-md-4 col-sm-6 col-xs-12 fashion" style="padding-left:30px;">

                                 <div class="vertical-item content-absolute">

                                    <div class="item-media" style="padding-bottom:40px;margin-top:40px;">
                             <img src="admin/model/$model_image1" alt="" style="width:284.75px;height:427.117px;">                              

                                       <div class="media-links" style="width:284.75px;height:427.117px;">                                    </div>

                                    </div>

                                    <div class="item-content text-center before_cover cs">

                                       <div class="links-wrap">                                                                                    
                                       <a class="p-link" title="" href="model-single.php?id=$id">
                                       $model_code
                                       </a>                                       
                                <a class="p-view prettyPhoto pull-right" title="" data-gal="prettyPhoto[gal]" href="admin/model/$model_image1"></a>                                            
                                <a class="p-link addItem" style="cursor:pointer;" value="$id">
                                <i class="fa fa-shopping-cart"></i></a>                                                                              </div>

                                       <div class="bg_overlay"></div>

                                       <div class="model-parameters">

                                          <div>                                            <span class="bold">Height</span>                                            <br>                                            <span>$model_height
</span>                                        </div>

                                          <div>                                            <span class="bold">Bust</span>                                            <br>                                            <span>

    $model_bust
</span>                                        </div>

                                          <div>                                            <span class="bold">Waist</span>                                            <br>                                            <span>

    $model_waist

</span>                                        </div>

                                          <div>                                            <span class="bold">Hips</span>                                            <br>                                            <span>

    $model_hips

</span>                                        </div>

                                       

                                       </div>

                                    </div>

                                 </div>

                              </div>





DELIMETER;




}

$product.='</div>';
if($rows>12){
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
}					
echo $product;


?>

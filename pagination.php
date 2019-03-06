<div class="row">
						<div class="col-sm-12 text-center margin_0">
							<ul class="pagination ">
								<li>
									<a href="models.php?page=<?php echo $page-1?>">
										<span class="sr-only">Prev</span>
										<i class="rt-icon2-chevron-thin-left"></i>
									</a>
								</li>
								
							<?php echo $middleNumbers;?>
								<li>
									<a href="models.php?page=<?php echo $page+1?>">
										<span class="sr-only">Next</span>
										<i class="rt-icon2-chevron-thin-right"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>




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
                  $user_reg =  mysqli_query($connect,"select * from `user_reg` where user_type!='client' LIMIT ".($page-1)*$per_page.",".$per_page." ");

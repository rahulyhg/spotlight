<?php
 

  class config 
  {
    var $spotlight;
  
    public function __construct()
    {
      $this->spotlight= new mysqli("localhost","root","","spotlight");
    }
  
    public function insertmenu($name)
    {
      $insertmenus=mysqli_querfy($this->spotlight,"insert into `main_menu`(`menu_name`)values('$name')");
    }
     public function selectallcat()
    {
      $selectallcat=mysqli_query($this->spotlight,"select * from `user_category`");
      return $selectallcat;
    }
  
    public function selectallmenu()
    {
      $selectmenus=mysqli_query($this->spotlight,"select * from `main_menu`");
      return $selectmenus;
    }
    public function selectallmodel()
    {
      $selectallmodel=mysqli_query($this->spotlight,"select * from `model`");
      return $selectallmodel;
    }
     public function selectenquiry()
    {
      $selectenquiry = mysqli_query($this->spotlight,"select * from `send_enquiry` ORDER BY `enquiry_id` DESC");
      return $selectenquiry;
    }
     public function allcart()
    {
      $allcart=mysqli_query($this->spotlight,"select * from `cart` ORDER BY `cart_id` DESC");
      return $allcart;
    }
     public function alluser()
    {
      $alluser=mysqli_query($this->spotlight,"select * from `user_reg` ORDER BY `user_id` DESC");
      return $alluser;
    }
    public function deletespackages($m_id)
    {
     $deleteparentmenu=mysqli_query($this->spotlight,"DELETE FROM model where m_id='".$m_id."'");   
   }
    public function deletegalleryname($g_id)
    {
     $deletegalleryname=mysqli_query($this->spotlight,"DELETE FROM galleryname where g_id='".$g_id."'");   
     mysqli_query($this->spotlight,"DELETE from gallerypic where img_id='".$g_id."'");
   }
   public function selectwhere($m_id)
   {
    $selectwhere=mysqli_query($this->spotlight,"select * from `model` where m_id = '".$m_id."'");
    return $selectwhere;
  }
  public function deletemenu($id)
  {
    $deletemenu=mysqli_query($this->spotlight,"DELETE FROM main_menu where id='".$id."'");   
  }
  
   public function deletesend($enquiry_id)
  {
    $deletesend=mysqli_query($this->spotlight,"DELETE FROM send_enquiry where enquiry_id='".$enquiry_id."'");   
  }
  
  public function deleteuser($user_id)
  {
    $deleteuser=mysqli_query($this->spotlight,"DELETE FROM user_reg where user_id='".$user_id."'"); 
    //echo "DELETE FROM user_reg where user_id='".$user_id."'"; die();
  }
  public function selectmenu($id)
  {
    $selectmenu=mysqli_query($this->spotlight,"select * from `main_menu` where id = $id");
    return $selectmenu;
  }
  public function inserttest($c_name,$c_details)
  {
   $inserttest=mysqli_query($this->spotlight,"insert into `testimonials`(`c_name`,`c_details`)values('$c_name','$c_details')");
  }
  public function selecttest()
  {
    $selecttest=mysqli_query($this->spotlight,"select * from `testimonials`");
    return $selecttest;
  }
  public function deletetest($t_id)
  {
    $deletetest=mysqli_query($this->spotlight,"DELETE FROM testimonials where t_id='".$t_id."'");   
  }
  public function selecttestwhere($t_id)
   {
    $selecttestwhere=mysqli_query($this->spotlight,"select * from `testimonials` where t_id = '".$t_id."'");
    return $selecttestwhere;
    }
  public function insertregistrations($name,$email,$mobile,$requirement)
  {
   $inserttest=mysqli_query($this->spotlight,"insert into `registration`(`name`,`email`,`mobile`,`requirement`)values('$name','$email','$mobile','$requirement')");
  
  }
  public function selectbanner()
  {
    $selectbanner=mysqli_query($this->spotlight,"select * from `banner`");
    return $selectbanner;
  }
  public function deletetbanner($b_id)
  {
    $deletetbanner=mysqli_query($this->spotlight,"DELETE FROM banner where b_id='".$b_id."'");   
  }
  public function selectcast()
  {
    $selectcast=mysqli_query($this->spotlight,"select * from `casting`");
    return $selectcast;
  }
  public function deletecasting($c_id)
  {
    $deletetcasting=mysqli_query($this->spotlight,"DELETE FROM casting where c_id='".$c_id."'");   
  }
  public function insertorder($m_id,$name,$mobile,$email)
  {
   $inserttest=mysqli_query($this->spotlight,"insert into `order`(`m_id`,`name`,`mobile`,`email`)values('$m_id','$name','$mobile','$email')");
  }
  public function selectorder()
  {
    $selectcast=mysqli_query($this->spotlight,"SELECT `order`.model_id, `model`.m_name,`order`.name,`order`.email,`order`.mobile,`order`.id FROM `order` INNER JOIN `model` ON `order`.model_id = `model`.m_id");
    return $selectcast;
  }
  public function deleteorder($id)
  {
    $deletetcasting=mysqli_query($this->spotlight,"DELETE FROM `order` where `id`='".$id."'"); 
 
  
  }
   public function insertpack($p_name,$p_rate,$p_photography,$p_nol,$p_click,$p_cd,$p_retouch,$p_indoor,$p_outdoor,$p_duration,$p_cp,$p_print,$p_lay,$p_cprint,$p_photobook,$p_style,$p_pickup)
    {
      $insertpackage=mysqli_query($this->spotlight,"insert into `package`(`p_name`,`p_rate`,`p_photography`,`p_nol`,`p_click`,`p_cd`,`p_retouch`,`p_indoor`,`p_outdoor`,`p_duration`,`p_cp`,`p_print`,`p_lay`,`p_cprint`,`p_photobook`,`p_style`,`p_pickup`) values ('$p_name','$p_rate','$p_photography','$p_nol','$p_click','$p_cd','$p_retouch','$p_indoor','$p_outdoor','$p_duration','$p_cp','$p_print','$p_lay','$p_cprint','$p_photobook','$p_style','$p_pickup')");
  
     
    }
    public function package()
    {
      $package=mysqli_query($this->spotlight,"select * from `package`");
     
      return $package;
    }
    public function selectpro()
    {
      $viewpro=mysqli_query($this->spotlight,"select * from `clients`");
     
      return $viewpro;
    }
    public function deleteclient($client_id)
  {
    $deletemenu=mysqli_query($this->spotlight,"DELETE FROM clients where client_id='".$client_id."'");   
  }
  public function editcastdata($c_id)
  {
    $editcastdata=mysqli_query($this->spotlight,"select * from `casting` where c_id = $c_id");
 
    return $editcastdata;
  }
   public function selectwherepro($client_id)
   {
    $selectwherepro=mysqli_query($this->spotlight,"select * from `clients` where client_id = '".$client_id."'");
    return $selectwherepro;
  }
  public function selectwork()
    {
      $viewwork=mysqli_query($this->spotlight,"select * from `work`");
   
      return $viewwork;
    }
    public function insertfaq($faq)
    {
      $insertfaq=mysqli_query($this->spotlight,"insert into `faq`(`faq`)values('$faq')");
    }
    public function viewfaq()
    {
      $viewfaq=mysqli_query($this->spotlight,"select * from `faq`");
   
      return $viewfaq;
    }
    public function insertans($f_id,$ans)
    {
      $insertans=mysqli_query($this->spotlight,"insert into `ans`(`ans`,`f_id`)values('$ans','$f_id')");
    }
    public function viewans()
  {
    $viewans=mysqli_query($this->spotlight,"SELECT `ans`.f_id, `faq`.faq,`ans`.ans,`ans`.ans_id FROM `ans` INNER JOIN `faq` ON `ans`.f_id = `faq`.`faq_id`");
  
    
    return $viewans;
  }
  public function selectservices()
    {
      $selectservices=mysqli_query($this->spotlight,"select * from `service`");
   
      return $selectservices;
    }
    public function insertgallery($name)
    {
      $insertmenus=mysqli_query($this->spotlight,"insert into `galleryname`(`gallery_name`)values('$name')");
    }
    public function gallery_name()
    {
      $gallery_name=mysqli_query($this->spotlight,"select * from `galleryname`");
   
      return $gallery_name;
    }
    public function insertgallerypic($imgid,$new_path)
  {
     $insertgallery=mysqli_query($this->spotlight,"insert into `gallerypic`(`img_id`,`img`)values('$imgid','$new_path')");
  }
  
   public function galleryjoin()
    {
      $galleryjoin=mysqli_query($this->spotlight,"SELECT * FROM gallerypic INNER JOIN galleryname ON gallerypic.img_id = galleryname.g_id");
      return $galleryjoin;
    }
  
    public function deletegallery($pic_id)
  {
    $deletegallery=mysqli_query($this->spotlight,"DELETE FROM gallerypic where pic_id='".$pic_id."'");   
  }
  
  public function selectgalleryname()
  {
    $selectgalleryname=mysqli_query($this->spotlight,"SELECT * from `galleryname`");
    
    return $selectgalleryname;
  } 
  
  public function updategallery($g_id,$new_path1,$pic_id)
  {
     $updatemenus=mysqli_query($this->spotlight,"UPDATE `gallerypic` SET `img_id`='".$g_id."',`img`='".$new_path1."' where pic_id='$pic_id'");
  }

    public function gallery_where($img_id)
  {
    $gallery_where=mysqli_query($this->spotlight,"SELECT * from `gallerypic` WHERE `img_id` = '$img_id' ");
   // echo "SELECT * from `gallerypic` WHERE `img_id` = '$img_id' "; die();
    return $gallery_where;
  } 

  public function glalery_new_arrival()
  {
    $new_gallerery=mysqli_query($this->spotlight,"SELECT * FROM `gallerypic` LIMIT 6 ");
    return $new_gallerery;
  }
  public function insert_video($video_name,$video_link)
  {
  $add_video=mysqli_query($this->spotlight,"insert into `video` (`video_link`,`video_name`) values ('$video_link','$video_name') ");
  
   return $add_video;
  }
  public function select_video()
  {
    $select_video=mysqli_query($this->spotlight,"SELECT * FROM `video`");

    return $select_video;
  }
   public function deletevideo($video_id)
  {
    $deletevideo=mysqli_query($this->spotlight,"DELETE FROM `video` where video_id='".$video_id."'");   
  }
   public function select_sample_folio()
  {
    $select_sample_folio=mysqli_query($this->spotlight,"SELECT * FROM `sample_folio`");
 
   return $select_sample_folio;
  }
  public function deletesample($sample_folio_id)
  {
    $deletevideo=mysqli_query($this->spotlight,"DELETE FROM `sample_folio` where sample_folio_id='".$sample_folio_id."'");   
  }
   public function selectans($ans_id)
  {
    $selectans=mysqli_query($this->spotlight,"select * from `ans` where ans_id = $ans_id");
    return $selectans;
  }
  
   public function updateans($ans,$ans_id)
  {
     $updateans=mysqli_query($this->spotlight,"UPDATE `ans` SET `ans`='".$ans."' where ans_id='$ans_id'");
     
    
  }
  public function deletetans($ans_id)
  {
    $deleteans=mysqli_query($this->spotlight,"DELETE FROM ans where ans_id='".$ans_id."'");
  }
   public function selectabout()
    {
      $selectabout=mysqli_query($this->spotlight,"select * from `about` ORDER BY `about_id` ASC;");
      return $selectabout;
    }
     public function deletefaq($faq_id)
  {
    $deletefaq=mysqli_query($this->spotlight,"DELETE FROM faq where faq_id='".$faq_id."'");   
  }
  public function deletework($work_id)
  {
    $deletework=mysqli_query($this->spotlight,"DELETE FROM work where work_id='".$work_id."'"); 
    //echo "DELETE FROM work where work_id='".$work_id."'"; die();  
  }
   public function select_about()
  {
    $select_about=mysqli_query($this->spotlight,"SELECT * FROM `about` ORDER BY `about_id` DESC");

    return $select_about;
  }
  public function deletetabout($about_id)
  {
    $deleteabout=mysqli_query($this->spotlight,"DELETE FROM about where about_id='".$about_id."'"); 
    //echo "DELETE FROM work where work_id='".$work_id."'"; die();  
  }
    public function insertorder1($model_id,$name,$email,$mobile,$company)
  {
     $insertgallery=mysqli_query($this->spotlight,"insert into `order`(`name`,`mobile`,`email`,`model_id`)values('$name','$mobile','$email','$model_id')");
   //  echo "insert into `order`(`name`,`mobile`,`email`,`model_id`)values('$name','$mobile','$email','$model_id')";
  }
  
  public function selectcasting()
  {
      $selectcasting = mysqli_query($this->spotlight,"select * from `casting`");
      return $selectcasting;
  }
  
  
  
}

?>
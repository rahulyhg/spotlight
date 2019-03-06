<?php

ob_start();

session_start();

  include("common/all_functions.php");
  include("connect.php");
$spotlight=new config;
  

  if(isset($_POST['submit']))

  {

     $imgid=$_POST['imgid'];  

    $targetDir = "upload/";
    
    if(!empty(array_filter($_FILES['img']['name']))){
        foreach($_FILES['img']['name'] as $key=>$val){

            $fileName = basename($_FILES['img']['name'][$key]);
            $targetFilePath = $targetDir.$fileName;
      
            
                if(move_uploaded_file($_FILES["img"]["tmp_name"][$key], $targetFilePath)){
                    mysqli_query($connect,"INSERT INTO gallerypic (img,img_id) VALUES('$fileName','$imgid') ");
                }
            
        }
        
      
    }

  }

  

  $galleryjoin=$spotlight->galleryjoin();

  
  if(isset($_GET['g_id']))

  {

  $g_id=$_GET['g_id'];

  $spotlight->deletegalleryname($g_id);

  header('refresh:2; viewgallery.php');

  }



  ?>

<body>

    <?php include("common/admin_head.php");?>

  <div id="wrapper">

    <?php include("common/menu.php");?>

    <div id="page-wrapper">

      <div class="row">

        <div class="col-lg-12">

          <h1 class="page-header">

            <center>View Gallery</center>

          </h1>

        </div>

      </div>

      

       <div class="row">

        <div class="col-lg-12">

          <div class="panel panel-default">

            <div class="panel-body">

              <div class="row">

                <div class="col-lg-12">

                  <center>

                    <table class="table table-striped">

                      <tr>

                        <td><strong>Gid</strong></td>

                        <td><strong>name</strong></td>

                        

                        <td><strong>Delete</strong></td>

                      </tr>

                      <?php

                      $sql = mysqli_query($spotlight->spotlight,"select * from `galleryname`");

                        while($js = mysqli_fetch_assoc($sql))

                        {

                            ?>

                      <tr>

                        <td><?php echo $js['g_id'];?></td>

                        <td><?php echo $js['gallery_name'];?></td>

                       

                        <td><a href="viewgallery.php?g_id=<?php echo $js['g_id']?>">Delete</a></td>

                      </tr>

                      <?php } ?>

                    </table>

                  </center>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

      

     <center> <h4>gallery image</h4></center>

      

      

      

      

      

      <div class="row">

        <div class="col-lg-12">

          <div class="panel panel-default">

            <div class="panel-body">

              <div class="row">

                <div class="col-lg-12">

                  <center>

                    <table class="table table-striped">

                      <tr>

                        <td><strong>Gid</strong></td>

                        <td><strong>Image</strong></td>

                        <td><strong>Edit</strong></td>

                        <td><strong>Delete</strong></td>

                      </tr>

                      <?php

                        while($js = mysqli_fetch_assoc($galleryjoin))

                        {

                            ?>

                      <tr>

                        <td><?php echo $js['gallery_name'];?></td>

                        <td><img src="<?php echo $js['img'];?>" class="img-responive" style="height:88px;"></td>

                        <td><a href="editgallery.php?pic_id=<?php echo $js['pic_id']?>">Edit</a></td>

                        <td><a href="deletegallery.php?pic_id=<?php echo $js['pic_id']?>">Delete</a></td>

                      </tr>

                      <?php } ?>

                    </table>

                  </center>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

  <script src="style/jquery/dist/jquery.min.js"></script>

  <script src="style/bootstrap/dist/js/bootstrap.min.js"></script>

  <script src="style/metisMenu/dist/metisMenu.min.js"></script>

  <script src="style/raphael/raphael-min.js"></script>

  <script src=".style/morrisjs/morris.min.js"></script>

  <script src="style/js/morris-data.js"></script>

  <script src="style/js/sb-admin-2.js"></script>

</body>

</html>
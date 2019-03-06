<?php
ob_start();
session_start();
if(empty($_SESSION['name']))
{
    header("Location:index.php");
}
include("common/header.php");


  ?>
</style>
<body>
 <?php include("common/admin_head.php");?>
    <div id="wrapper">

    <?php include("common/menu.php");?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><center>Welocme To Admin Panel</center></h1>
                </div>
                <div class="col-lg-12">
                    <center>
                        
                        <a href="register_user.php">
                    <div class="col-md-3" style="height: 200px;
    background-color: #FFC107;margin: 10px;width:30%">
                        <h3 style="margin-top: 76px;   color:  black;">
                        USERS</h3>
                    </div>
                    </a>
                    <a href="enquiries.php">
                     <div class="col-md-3" style="height: 200px;
    background-color: #009688;margin: 10px;background-image:url('img/n5.jpg');background-size:cover;width:30%"><h3 style="margin-top: 76px;   color:  black;">ENQUIRY</h3></div></a>
    <a href="addpackages.php">
                      <div class="col-md-3" style="height: 200px;
    background-color:   #c10e4b;margin: 10px;width:30%">
                          <h3 style="margin-top: 76px;    color:  black;">ADD MODEL</h3>
                      </div>
                      </a>
                      </center>
                     <a href="viewapplications.php">
                          <div class="col-md-3" style="height: 200px;
    background-color: #68b52b;margin: 10px;background-image:url('img/n1.jpg');background-size:cover;width:30%">
                              <h3 style="margin-top: 76px;   color:  black;">APPLICATION</h3>
                          </div>
                          </a>
                          <a href="send_enquiry.php">
                          <div class="col-md-3" style="height: 200px;
    background-color: #009688;margin: 10px;width:30%">
                             
                              <h3 style="margin-top: 76px;text-align: center;  color: black;">NOTIFICATION</h3>
                          </div>
                          </a>
                          <a href="addpro.php">
                           <div class="col-md-3" style="height: 200px;
    background-color: #009688;margin: 10px;background-image:url('img/n4.jpg');background-size:cover;width:30%">
                              <h3 style="margin-top: 76px;   color: black;">ADD CLIENT</h3>
                          </div>
                      </a>
    <!--                   <div class="col-md-3" style="height: 200px;-->
    <!--background-color: #009688;"><h3>ADD CAST</h3></div>-->
                    
                </div>
                <!-- /.col-lg-12 -->
            </div>
             
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php

include("common/footer.php") ;?>


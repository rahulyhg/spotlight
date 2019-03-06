<?php
ob_start();
 include("common/header.php");?>
 
 <style>
     .btn-success {
    color: #fff;
    background-color: #8a6d3b!important;
    border-color: #8a6d3b;
}
     
 </style>
<body  style="background-image: url('img/spotlight.jpg'); background-size:cover;" >

    <div class="container">
        <div class="row" style="margin-top: 191px; >
            <div class="col-md-8 col-md-offset-4">
            <img src="http://www.spotlightstudioz.com/images/logo.png" style="margin-left: 441px; height: 100px; margin-top: -169px;">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body" style="background-color: currentColor !important;">
                    <img src="admin_img/admin.png" class="img-responsive">
                         <form role="form" action="check.php" method="post" class="login-form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Enter UserName" name="name" autofocus required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Enter Password" name="password" type="password" required value="">
                                </div>
                               
                                
                                  <input type="submit" name="submit" class="btn btn-lg btn-success btn-block" value="Submit">
                               
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <?php
  ob_end_flush();
   include("common/footer.php");?>
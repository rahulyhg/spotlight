<?php
include("connect.php");
$user_id = 21;

$user_reg =  mysqli_query($connect,"select * from `user_reg` where user_id ='$user_id'");


while($get_user = mysqli_fetch_assoc($user_reg)){	


$user_name = $get_user['user_name'];
$model_gender = $get_user['model_gender'];
$mode_image1 = $get_user['model_image1'];
$mode_image2 = $get_user['model_image2'];

$bio = $get_user['model_biography'];
$model_code = $get_user['model_code'];
}






?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<header class="site-header">

</header>

<style>
html {
  font-family: "proxima-nova",sans-serif;
}

/* apply a natural box layout model to all elements */
*, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

html, html a {
  -webkit-font-smoothing: antialiased !important;
  text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.004);
}

a {
  text-decoration: none;
  color: inherit;
}

/* ==== */
.site-header {
  height: 44px;
  width: 100%;
  border-bottom: 1px solid #E1e1e1;
}

.cover-photo {
  width: 980px;
  height: 250px;
  margin: 0 auto;
  background-color: #f5f5f5;
  position: relative;
  z-index: 1;
}

.body {
  width: 980px;
  margin: 0 auto;
  z-index: 4;
  position: relative;
}

.left-col, .right-col {
  width: 226px;
  float: left;
  min-height: 400px;
  position: relative;
}

.left-col {
  margin-right: 24px;
  position: relative;
  top: -150px;
  left: 8px;
}

.center-col {
  float: left;
  width: 480px;
  margin-right: 24px;
  min-height: 400px;
}

.right-col {
  background-color: blue;
}

/* LEFT COL */
.user-info h1 {
  font-size: 24px;
  font-weight: 600;
  line-height: 1.2;
  padding-top: 4px;
}
.user-info h2 {
  color: #666;
  font-size: 16px;
}
.user-info .meta {
  padding: 8px 0;
  font-size: 14px;
}
.user-info .meta p {
  line-height: 1.6;
}
.user-info .meta i {
  font-size: 0.95em;
  padding-right: 2px;
}

.profile-avatar {
  width: 218px;
  height: 218px;
  border: 1px solid #e1e1e1;
  background-color: #fff;
  right: 0;
}
.profile-avatar .inner {
  width: 206px;
  height: 206px;
  margin: 5px;
}

/* CENTER */
.image-grid {
  width: 100%;
}
.image-grid li {
  float: left;
  background-color: #EFEFEF;
}
.image-grid.col-3 li {
  width: 32%;
  margin-right: 2%;
  margin-bottom: 2%;
  height: 0;
  padding-bottom: 30%;
  background-image: url(http://placekitten.com/200/200);
  -webkit-background-size: 100%;
  background-size: 100%;
}
.image-grid.col-3 li:nth-child(3n) {
  margin-right: 0;
}

.profile-nav {
  height: 46px;
  background-color: white;
  border-bottom: 2px solid #E1E1E1;
  margin-bottom: 8px;
}
.profile-nav ul > li {
  color: #999;
  font-size: 14px;
  float: left;
  line-height: 44px;
  font-weight: 600;
  padding: 0 22px;
  cursor: pointer;
}
.profile-nav li.active {
  color: #1E1E1E;
}

.content .unit {
  padding: 8px 0 10px 0;
  border-bottom: 2px solid #E1E1E1;
  margin-bottom: 8px;
}
.content .unit:last-child {
  margin-bottom: 16px;
}
.content .unit h3 {
  margin-bottom: 4px;
  color: #777;
}
.content .unit h3 a {
  color: #1e1e1e;
  font-weight: 600;
}
.content .unit p.time {
  color: #777;
  font-size: 14px;
  margin-bottom: 8px;
}
.content .unit .more {
  font-size: 14px;
  color: #777;
}
.content .unit .more a {
  color: #777;
}

</style>

<img class="cover-photo" src='admin/model/<?php echo $mode_image2?>'>

<div class="body">
  <section class="left-col user-info">
    <div class="profile-avatar">
    
<img class='inner' src='admin/model/<?php echo $mode_image1?>'>
</div>
    <h1><?php echo $user_name ?></h1>
    <h2><?php echo $model_gender ?></h2>
    <div class="meta">
   
     <p><i class="fa fa-fw fa-pen"></i><?php echo $bio ?></p>
    </div>
  </section>
  <section class="section center-col content">
    
    <!-- Nav -->
    <nav class="profile-nav">
      <ul>
       <li><a href='index.php'>Home</a></li>    
        <li><a href="user.php">Activity</a></li>
        <li  class="active">notification</li>
  <li  class="danger"><a href='logout.php'>Update</a></li>      
  <li  class="danger"><a href='logout.php'>Logout</a></li>      
</ul>
    </nav>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col"Shoot Date</th>
      <th scope="col">Shoot Location</th>
      <th scope="col">Shoot Requriment</th>
 <th scope="col">Shoot Type</th>
     
  </tr>
  </thead>
  <tbody>
 
<?php
$noti =  mysqli_query($connect,"select * from `send_enquiry` where model_code ='$model_code' ORDER BY `enquiry_id` DESC ");


$i = 0;
while($get_noti = mysqli_fetch_assoc($noti)){	

$i++;
$shoot_date = $get_noti['shoot_date'];


$loc = $get_noti['shoot_location'];

$type = $get_noti['shoot_type'];

$req = $get_noti['shoot_requirement'];


echo "    <tr>
<th scope='row'>$i</th>";

echo  "<td>$shoot_date</td>";
echo  "<td>$loc</td>";
echo  "<td>$req </td>";
echo  "<td>$type </td>    </tr>
";
}
   

?>
  </tbody>
</table>

    <!-- Wil hyped X-->
    
  </section>

</div>


<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/67239/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="//use.typekit.net/psm0wvc.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

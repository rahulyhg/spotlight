<?php
include("connect.php");
$Id = $_GET["id"];
$user_reg=mysqli_query($connect,"SELECT * from messages where id='$Id' ");
$rows=mysqli_fetch_assoc($user_reg);

?>
<p><?php echo $rows['content'] ?></p>
<a class="btn btn-primary pull-right reply_button" style="text-transform:capitalize;padding:4px 20px;color:white;"  id="<?php echo $rows['id'] ?>">Reply</a>
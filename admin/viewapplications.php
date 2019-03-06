<?php
ob_start();
session_start();
include("common/header.php");
include("common/config.php");
$spotlight=new config;


$selectenquiry =$spotlight->selectcasting();

?>


<body>
<?php include("common/admin_head.php");?>
	<div id="wrapper">

		<?php include("common/menu.php");?>
		 <script>
            function get_data(Casting_category)
            {
                //alert(Casting_category);
                var http = new XMLHttpRequest();
                http.open("get","get_data.php?Casting_category="+Casting_category,true);
                http.send();
                http.onreadystatechange=function()  
                {
                    if(http.readyState==4)
                    {
                       //alert(http.responseText);
                      document.getElementById('sub').innerHTML=http.responseText;
                    }
                }
            }
            </script>

		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header"><center>View Applications</center></h1>
    <center>    <div class="form-group">
                                            <label class="control-label" for="Select Main Menu Name">Select category</label>
                                           
                                            <select class="form-control" name="Casting_category"  id="Casting_category" onchange="get_data(this.value)">
                                                <option value="0">--select Casting --</option>
                                             <?php
                                                while($js = mysqli_fetch_assoc($selectenquiry))
                                                {
                                            ?>
                                            <option value="<?php echo $js['c_id']; ?>"><?php echo $js['c_heading']; ?></option>
                                            <?php }  ?>
                                            </select>
                                    </div>    </center>
                                    <div id="sub">
                                        
                                        
                                    </div>
				
				</div>
				<!-- /.col-lg-12 -->
			</div>

		</div>
		<!-- /#page-wrapper -->

	</div>
	<!-- /#wrapper -->

	<?php include("common/footer.php");
	ob_end_flush();
	?>

<?php
 ob_start();
include("common/header.php");
include("common/config.php");
$travel=new config;
$selectmenus=$travel->selectallmenu();
$selectsubmenus=$travel->selectallsubmenu();
if(isset($_REQUEST['submit']))
{
    $id=$_GET['id'];

    $m_id=$_POST['m_id']; 
    $s_id=$_POST['s_id'];
    $package_name=$_POST['package_name'];
    $tmp_loc1=$_FILES['img']['tmp_name'];
    $name1=$_FILES['img']['name'];
    $new_path1="img/".$name1;
    $start_date=$_POST['start_date'];
    $end_date=$_POST['end_date'];
    $tmp_loc2=$_FILES['pdf']['tmp_name'];
    $pdf=$_FILES['pdf']['name'];
    $new_path2="pdf/".$pdf;
    $select_day=$_POST['select_day'];
    $select_night=$_POST['select_night'];
    $destinations=$_POST['destinations'];
    $descriptions=$_POST['descriptions'];

    if($_FILES['img']['type']=="image/jpg" || $_FILES['img']['type']=="image/jpeg" || $_FILES['img']['type']=="image/png")
    {
        $upload=move_uploaded_file($tmp_loc1,$new_path1);
        $uploadpdf=move_uploaded_file($tmp_loc2,$new_path2);
         $travel->updatepackages($m_id,$s_id,$package_name,$new_path1,$start_date,$end_date,$new_path2,$select_day,$select_night,$destinations,$descriptions,$id);
           header("Location:viewpackages.php");    
    }
    else
    {
        echo "file must be in image formate";
    }
}
ob_end_flush();
?>

<style>
 input[type=date], input[type=time], input[type=datetime-local], input[type=month] {
  line-height: 16px;
}
</style>

<script src="jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#country').on('change',function(){
      var m_id = $(this).val();
      if(m_id){
        $.ajax({
          type:'POST',
          url:'ajaxData.php',
          data:'m_id='+m_id,
          success:function(html){
            $('#state').html(html);
            $('#city').html('<option value="">Select Main Menu first</option>'); 
          }
        }); 
      }else{
        $('#state').html('<option value="">Select Main Menu first</option>');
        $('#city').html('<option value="">Select Sub Menu first</option>'); 
      }
    });
    
    $('#state').on('change',function(){
      var s_id = $(this).val();
      if(s_id){
        $.ajax({
          type:'POST',
          url:'ajaxData.php',
          data:'s_id='+s_id,
          success:function(html){
            $('#city').html(html);
          }
        }); 
      }else{
        $('#city').html('<option value="">Select Sub Menu first</option>'); 
      }
    });
  });
</script>
<body>

  <div id="wrapper">

    <?php include("common/menu.php");?>

    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header"><center>Edit Package</center></h1>
        </div>
        <!-- /.col-lg-12 -->
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default">

            <div class="panel-body">
              <div class="row">
                <div class="col-lg-12">
                 <form role="form" action="" method="post" enctype="multipart/form-data">
                   <div class="form-group">
                    <label class="control-label" for="Select Main Menu Name">Select Main Menu Name</label>

                    <div class="select-boxes">
                      <?php
    
                      
                      $selectmenus=$travel->selectallmenu();
    
                      $rowCount = $selectmenus->num_rows;
                      ?>

                      <select name="m_id" id="country" class="form-control">

                        <option value="">Select Main Menu</option>

                        <?php

                        if($rowCount > 0){

                          while($row = $selectmenus->fetch_assoc()){ 

                            echo '<option value="'.$row['m_id'].'">'.$row['name'].'</option>';
                          }
                        }else{
                          echo '<option value="">Main Menu is not available</option>';
                        }
                        ?>
                      </select>
                      <br>
                      <label class="control-label" for="Select Main Menu Name">Select Sub Menu Name</label>
                      <select name="s_id" id="state" class="form-control">
                        <option value="">Select Main Menu first</option>
                      </select>
                      <br>
                      <label class="control-label" for="Select Main Menu Name">Select Parent Menu Name</label>
                      <select name="p_id" id="city" class="form-control">
                        <option value="">Select Sub menu first</option>
                      </select>
                    </div>

                    <br>

                    <div class="form-group">
                      <label class="control-label" for="Add Tour Name">Add Tour Name</label>
                      <input type="text" class="form-control" name="package_name">
                    </div>


                    <div class="form-group">
                      <label class="control-label" for="Add Tour Image">Add Tour Image</label>
                      <input type="file" class="form-control" name="img">
                    </div>


                    <div class="row">
                      <div class="col-md-6">
                        <div class="control-group">
                          <label for="Start Date" class="control-label">Start Date</label>
                          <input type="date" name="start_date">
                        </div>
                      </div>
                      <div class="col-md-6">
                       <div class="control-group">
                        <label for="End Date" class="control-label">End Date</label>
                        <input type="date" name="end_date">
                      </div>
                    </div>


                  </div>


                  <br>
                  <div class="form-group">
                    <label class="control-label" for="Add Tour Pdf">Add Tour Pdf</label>
                    <input type="file" class="form-control" name="pdf">
                  </div>


                  <div class="row">
                    <div class="col-md-6">


                      <div class="control-group">
                        <label for="Select No Of Days" class="control-label">Select No Of Days</label>
                        <div class="controls">
                          <select name="select_day">
                            <option value="">Choose No Of Days</option>

                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                          </select>


                        </div>
                      </div>


                    </div>
                    <div class="col-md-6">


                      <div class="control-group">
                        <label for="Select No Of Nights " class="control-label">Select No Of Nights</label>
                        <div class="controls">
                          <select name="select_night">
                            <option value="">Choose No Of Nights</option>

                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                          </select>


                        </div>
                      </div>


                    </div>
                  </div>
                  <br>



                  <div class="form-group">
                    <label class="control-label" for="Add Tour Destinations">Add Tour Destinations</label>
                    <input type="text" class="form-control" name="destinations">

                  </div>
                  <div class="form-group">
                    <label class="control-label" for="Add Tour Descriptions">Add Tour Descriptions</label>
                    <textarea class="form-control" rows="3" name="descriptions"></textarea>
                  </div>


                  <input class="btn btn-danger" type="reset" value="Reset">
                  <input type="submit" name="submit" class="btn btn-success btn-md pull-right" value="Submit">





                </form>

              </div>

            </div>
            <!-- /.row (nested) -->
          </div>
          <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
      </div>
      <!-- /.col-lg-12 -->
    </div>
  </div>
  <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
<?php include("common/footer.php");?>









































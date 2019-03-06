  <?php
       include("common/config.php");
   $spotlight=new config;
  
   
   
   
   
   
        if(isset($_REQUEST['Casting_category']))
        {
            
            $casting_id=$_REQUEST['Casting_category'];
           $s= mysqli_query($spotlight->spotlight,"select * from  casting_enquiry where casting_id= $casting_id");
         
          
            
        ?>
        
        <div id="sub">
             
					<center>
					    <form action="casting_status.php" method="POST">
					        
					    <table class="table table-striped" border="1" style="text-align: center;">
						<tr>
							<th>#</th>
							<th>Model Code</th>
							<th>current status</th>
							<tH colspan="2">status</tH>
						       </tr>
						  <?php while ($sub = mysqli_fetch_assoc($s))
                            {
                               
                                ?>
						
							<tr>
							 <td>1</td>
							  <td> <?php echo $sub['model_code']; ?></td>
							  <td><?php  $casting_id =  $sub['casting_status'];  
                            
                            if($casting_id == 1)
                            { echo "in process";
                            }
                            elseif($casting_id == 2)
                            {
                                echo "approved";
                            }
                            elseif($casting_id == 3)
                            {
                                echo "rejected";
                            }
                            ?></td>
							  <td> <select name="casting_status_name">
							      <option value="1" >in process</option>
							      <option value="2">approved</option>
							      <option value="3">rejected</option>
							      
							  </select> 
							  
							  </td>
							  
							  <td>
							      <input type="hidden" name="casting_enquiry_id" value="<?php echo $sub['casting_enquiry_id']; ?>">
							      <input type="hidden" name="model_code" value="<?php echo $sub['model_code']; ?>">
							      <input type="submit" name="casting_status" value="go!"> </td>
							
							</tr> 
							<?php } ?>
							</table>
							</form>
							</center>
        </div>
      
        <?php
        }
        ?>
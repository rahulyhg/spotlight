  <?php
       include("common/config.php");
   $spotlight=new config;
   
        if(isset($_REQUEST['user_category_id']))
        {
            
            $user_category=$_REQUEST['user_category_id'];
           $s= mysqli_query($spotlight->spotlight,"select * from  user_sub_category where user_category= $user_category");
         
          
            
        ?>
        <select name="user_sub_category" id="sub" required="">
         
        
            <?php while ($sub = mysqli_fetch_assoc($s))
                            {
                                ?>
                                
                            <option value="<?php echo $sub['user_sub_category_name']; ?>">
                                <?php echo $sub['user_sub_category_name']; ?>
                            </option>
                            <?php
                            }
                            ?>
         </select> 
        <?php
        }
        ?>
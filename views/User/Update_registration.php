<?php include "guesthouse_profile_header.php"; ?>
  
<div class="container">
  
        <?php foreach ($user_fetch_data as $profile):
          
         $u_id=$profile->user_id;

        ?>
 
    <div class="row">
  	     <div class="col-sm-offset-3 col-sm-6">

  		      <div class="tab-content">

          			<?php
                 $attributes = array('id'=>'UpdationForm');
                echo form_open("Update_controller/update_reg_data/$u_id",$attributes);
                ?>
               

                   <h2 class="text-center">Update Account</h2>
      <!-- Start User Name Input Tag  -->

                <div class="form-group">
                     <label for="username">Enter Your Name:</label>
                     <?php echo form_input(['class'=>'form-control', 'id'=>'username','required'=>'required', 'data-parsley-pattern'=>'/^[a-zA-Z ]*$/','data-parsley-trigger'=>'keyup', 'data-parsley-length'=>'[5, 50]', 'placeholder'=>'Enter Your Name:','name'=>'username','value'=>set_value('username',$profile->username)]);?>
                     <h7 style="color:#C70000"><?php echo form_error('username');?></h7>
                 
                </div>
                 
       
      <!-- End User Name Input Tag  -->

                <!-- Start Mobile Number Input Tag -->
                <div class="form-group">
                     <label for="mobile_number">Mobile No:</label>
                     <?php echo form_input(['type'=>'number','class'=>'form-control', 'id'=>'mobile_number', 'required'=>'required', 'data-parsley-type'=>'number','data-parsley-trigger'=>'keyup', 'data-parsley-length'=>'[10, 10]','placeholder'=>'Mobile or Contact:','name'=>'mobile_number','value'=>set_value('mobile_number',$profile->mobile_number)]);?>
                     <h7 style="color:#C70000"><?php echo form_error('mobile_number');?></h7>
                    
                </div>
      
      <!-- End Mobile Number Input Tag -->

      <!-- Start Email Input Tag -->
                <div class="form-group">
                     <label for="email">Email Id:</label>
                     <?php echo form_input(['type'=>'email','class'=>'form-control', 'id'=>'email', 'required'=>'required', 'data-parsley-type'=>'email','data-parsley-trigger'=>'keyup', 'placeholder'=>'Email Id:','name'=>'email','value'=>set_value('email',$profile->email)]);?>
                     <h7 style="color:#C70000"><?php echo form_error('email');?></h7>

                </div>
          
      <!-- End Email Input Tag -->

      
              <?php echo form_hidden('updated_at',date('Y-m-d H:i:s'));?>
    
     <!-- End Confirm Password Input Tag -->

     <!-- Start Check Box Input Tag -->
     
     <!-- End Check Box Input Tag -->

     <!-- Submit Btton Tag-->
               <div class="form-group">
                
                 <?php echo form_submit(['type'=>'submit','value'=>'Submit','class'=>'btn btn-success btn-block', 'id'=>'register']);?>
                     
              </div>
    

  		    </div>
  	 </div>
  	
  </div>
<?php endforeach;?>
</div>
  

<br><br>
<?php include "footer.php" ?>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.8.1/parsley.js"></script>
<script>
  
    $(document).ready(function(){
    $('#UpdationForm').parsley();
  });
</script>

<?php include"catering_profile_header.php"?>
	  <div class="container">
   <!--  <div class="col-md-6 col-md-offset-3">
              <div class="alert alert-danger alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-leble="Close">x</button>
              <div id="result"></div>
            
              </div>
          
          </div> --> 
  <?php
   
  if($reg_error = $this->session->flashdata('reg_error')):
       $user_class= $this->session->flashdata('user_class');
  ?>
  <div class="row">
    <div class="col-lg-6">
      <div class="alert <?= $user_class;?>">
        <?= $reg_error; ?>
      </div>
        
      
    </div>
    
  </div>
<?php endif; ?>  
		<div class="row">
  			<div class="col-sm-offset-3 col-sm-6">

  				<div class="tab-content">

  					<?php $attributes = array('id' =>'UpdationFormPassword');
  					 echo form_open('Update_Password_controller/update_catering_password_data',$attributes);?>

         			<h3 class="text-center">Update Your Account Password</h3>
     

			      <div class="form-group">
			      	<label for="password">Current Password OR Old Password</label>
					<?php echo form_password(['name'=>'password','class'=>'form-control','id'=>'oldpassword','required'=>'required','data-parsley-length'=>'[8, 20]','placeholder'=>'Old Password']);?>
			           <h7 style="color:#C70000"><?php echo form_error('password');?></h7>
			       
			      </div>
			       
       
      
			      <div class="form-group">
			           <label for="newpass">New  Password</label>
					<?php echo form_password(['name'=>'newpass','class'=>'form-control','id'=>'newpassword','required'=>'required','data-parsley-length'=>'[8, 20]','placeholder'=>'New Password']);?>
					
			           <h7 style="color:#C70000"><?php echo form_error('newpass');?></h7>
			          
			      </div>

			      <div class="form-group">
			      	<label>Confirm  Password</label>
					<?php echo form_password(['name'=>'confpassword','class'=>'form-control','id'=>'confirmpassword','required'=>'required','data-parsley-equalto'=>'#newpassword','placeholder'=>'Password Confirmation']);?>
					<h7 style="color:#C70000"><?php echo form_error('confpassword');?></h7>
			      	
			      </div>
				      <?php echo form_submit(['name'=>'submit','value'=>'Update Password','class'=>'btn btn-primary']);?>
						<?php echo form_close();?>
				</div>
			</div>
		</div>
	</div>
      
     
   
     

<br><br><br>
<?php include "footer.php" ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.8.1/parsley.js"></script>
<script>
  
    $(document).ready(function(){
    $('#UpdationFormPassword').parsley();
  });
</script>
 

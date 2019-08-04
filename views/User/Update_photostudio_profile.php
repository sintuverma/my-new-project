<?php include "photostudio_profile_header.php"; ?>


<div class="container">
	
	<div class="row">
		 <div class="col-md-6 col-md-offset-3">
		 	

		 	 	<?php foreach ($user_fetch_data as $profile):


		 	 	$studio_id= $profile->studio_id;

		 	 	?>
		 	 	
		 	 	
		<?php $attributes = array('id' =>'Updation_form');
		echo form_open("Update_controller/update_photostudio_profile_data/$studio_id",$attributes);  ?>
             
                 
                             <div class="form-group">

                                <label for="studio_name">Photo Studio Name:</label>

                                <?php echo form_input(['class'=>'form-control', 'id'=>'studio_name', 'placeholder'=>'Enter Name Here..','name'=>'studio_name','value'=>set_value('studio_name',$profile->studio_name)]);?>
									<h7 style="color:#C70000"><?php echo form_error('studio_name');?></h7>
                                 </div>

                              <div class="form-group">
                                  <label for="studio_address">Catering Services Company Address:</label>
                                  <?php echo form_input(['class'=>'form-control', 'id'=>'studio_address', 'placeholder'=>'Address','name'=>'studio_address','value'=>set_value('studio_address',$profile->studio_address)]);?>
                                  <h7 style="color:#C70000"><?php echo form_error('studio_address');?></h7>

                               </div>
                             
                              <div class="form-group">
									 <label for="studio_area">Catering Services Company Area:</label>
									 <h7 style="color:#C70000"><?php echo form_error('guesthouse_name');?></h7>

                              	<?php echo form_input(['class'=>'form-control', 'id'=>'studio_area', 'placeholder'=>'Area','name'=>'studio_area','value'=>set_value('studio_area',$profile->studio_area)]);?>
                              	<h7 style="color:#C70000"><?php echo form_error('studio_area');?></h7>
                              </div>

                              <div class="form-group">
                              	<label for=studio_pincode" ">Pincode:</label>

           						<?php echo form_input(['class'=>'form-control','type'=>'number' ,'id'=>'studio_pincode', 'placeholder'=>'Pincode or Postal Code','name'=>'studio_pincode','value'=>set_value('studio_pincode',$profile->studio_pincode)]);?>
           						<h7 style="color:#C70000"><?php echo form_error('studio_pincode');?></h7>
                                  
                              </div>
                              <div class="form-group">
                                  <label for="studio_city" ">City Or District Name:</label>
                                  <?php echo form_input(['class'=>'form-control' ,'id'=>'studio_city', 'placeholder'=>'City Or District Name','name'=>'studio_city','value'=>set_value('studio_city',$profile->studio_city)]);?>
                                  <h7 style="color:#C70000"><?php echo form_error('studio_city');?></h7>
                                  
                                    
                              </div>
                              
                          <div class="form-group">
      	                        <label for="Description">Services Description:</label>
      	                        <?php echo form_textarea(['class'=>'form-control','row'=>3,'id'=>'website','placeholder'=>'What kind services you provide in any events. Write Here....','name'=>'studio_services','value'=>set_value('studio_services',$profile->studio_services)]);?>
      	                        <h7 style="color:#C70000"><?php echo form_error('studio_services');?></h7>
                                   
                                    <br>
                                <button type="submit" class="btn btn-success btn-lg btn-block">Submit
                                </button>
                          </div>

      					</form>
      					<?php endforeach;?>
      					 
		</div>
	</div>
	
</div>
 
<?php include('footer.php');?>
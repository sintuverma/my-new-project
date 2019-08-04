<?php include "catering_profile_header.php"; ?>


<div class="container">
	
	<div class="row">
		 <div class="col-md-6 col-md-offset-3">
		 	

		 	 	<?php foreach ($user_fetch_data as $profile):


		 	 	$catering_id= $profile->caterers_id;

		 	 	?>
		 	 	
		 	 	
		<?php $attributes = array('id' =>'guesthouse_form');
		echo form_open("Update_controller/update_catering_profile_data/$catering_id",$attributes);  ?>
             
                 
                             <div class="form-group">

                                <label for="catering_name">Catering Services Company Name:</label>

                                <?php echo form_input(['class'=>'form-control', 'id'=>'catering_name', 'placeholder'=>'Enter Name Here..','name'=>'catering_name','value'=>set_value('catering_name',$profile->catering_name)]);?>
									<h7 style="color:#C70000"><?php echo form_error('catering_name');?></h7>
                                 </div>

                              <div class="form-group">
                                  <label for="address2">Catering Services Company Address:</label>
                                  <?php echo form_input(['class'=>'form-control', 'id'=>'address', 'placeholder'=>'Address','name'=>'caterers_address','value'=>set_value('caterers_address',$profile->caterers_address)]);?>
                                  <h7 style="color:#C70000"><?php echo form_error('caterers_address');?></h7>

                               </div>
                             
                              <div class="form-group">
									 <label for="area2">Catering Services Company Area:</label>
									 <h7 style="color:#C70000"><?php echo form_error('caterers_area');?></h7>

                              	<?php echo form_input(['class'=>'form-control', 'id'=>'area1', 'placeholder'=>'Area','name'=>'caterers_area','value'=>set_value('caterers_area',$profile->caterers_area)]);?>
                              	<h7 style="color:#C70000"><?php echo form_error('caterers_area');?></h7>
                              </div>

                              <div class="form-group">
                              	<label for="Pincode2" ">Pincode:</label>

           						<?php echo form_input(['class'=>'form-control','type'=>'number' ,'id'=>'pincode2', 'placeholder'=>'Pincode or Postal Code','name'=>'caterers_pincode','value'=>set_value('caterers_pincode',$profile->caterers_pincode)]);?>
           						<h7 style="color:#C70000"><?php echo form_error('caterers_pincode');?></h7>
                                  
                              </div>
                              <div class="form-group">
                                  <label for="city" ">City District Name:</label>
                                  <?php echo form_input(['class'=>'form-control' ,'id'=>'city2', 'placeholder'=>'City Or District Name','name'=>'caterers_city','value'=>set_value('caterers_city',$profile->caterers_city)]);?>
                                  <h7 style="color:#C70000"><?php echo form_error('caterers_city');?></h7>
                                  
                                    
                              </div>
                              
                          <div class="form-group">
      	                        <label for="Description">Services Description:</label>
      	                        <?php echo form_textarea(['class'=>'form-control','row'=>3,'id'=>'website','placeholder'=>'What kind services you provide in any events. Write Here....','name'=>'caterers_services','value'=>set_value('caterers_services',$profile->caterers_services)]);?>
      	                        <h7 style="color:#C70000"><?php echo form_error('caterers_services');?></h7>
                                   
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
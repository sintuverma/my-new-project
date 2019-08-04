<?php include "guesthouse_profile_header.php"; ?>


<div class="container">
	
	<div class="row">
		 <div class="col-md-6 col-md-offset-3">
		 	

		 	 	<?php foreach ($user_fetch_data as $profile):
		 	 	$g_id= $profile->guesthouse_id;
		 	 	?>
		 	 	
		 	 	
		<?php $attributes = array('id' =>'UpdationForm');
		echo form_open("Update_controller/update_guesthouse_data/$g_id",$attributes);  ?>
                 
                             <div class="form-group">

                                <label for="guesthouse name">Your Party Lawn, Palace, Hotel, Guest House, Banquet Hall Name:</label>

                                <?php echo form_input(['class'=>'form-control', 'id'=>'guesthouse_name', 'required'=>'required', 'data-parsley-pattern'=>'/^[a-zA-Z ]*$/','data-parsley-trigger'=>'keyup', 'data-parsley-length'=>'[5, 50]','placeholder'=>'Enter Name Here..','name'=>'guesthouse_name','value'=>set_value('guesthouse_name',$profile->guesthouse_name)]);?>
									<h7 style="color:#C70000"><?php echo form_error('guesthouse_name');?></h7>
                                 </div>

                              <div class="form-group">
                                  <label for="address">Your Party Lawn, Palace, Hotel, Guest House, Banquet Hall Address:</label>
                                  

                                  <?php echo form_input(['class'=>'form-control', 'id'=>'address','required'=>'required', 'data-parsley-pattern'=>'/^[a-zA-Z ]*$/','data-parsley-trigger'=>'keyup', 'data-parsley-length'=>'[5, 50]', 'placeholder'=>'Address','name'=>'guesthouse_address','value'=>set_value('guesthouse_address',$profile->guesthouse_address)]);?>
                                  <h7 style="color:#C70000"><?php echo form_error('guesthouse_address');?></h7>

                               </div>
                             
                              <div class="form-group">
									 <label for="address">Your Party Lawn, Palace, Hotel, Guest House, Banquet Hall Area:</label>
									 <h7 style="color:#C70000"><?php echo form_error('guesthouse_name');?></h7>

                              	<?php echo form_input(['class'=>'form-control', 'id'=>'area1','required'=>'required', 'data-parsley-pattern'=>'/^[a-zA-Z ]*$/','data-parsley-trigger'=>'keyup', 'data-parsley-length'=>'[5, 50]', 'placeholder'=>'Area','name'=>'guesthouse_area','value'=>set_value('guesthouse_area',$profile->guesthouse_area)]);?>
                              	<h7 style="color:#C70000"><?php echo form_error('guesthouse_area');?></h7>
                              </div>

                              <div class="form-group">
                              	<label for="Pincode" ">Pincode:</label>

           						<?php echo form_input(['class'=>'form-control','type'=>'number' ,'id'=>'pincode1','required'=>'required', 'data-parsley-type'=>'number','data-parsley-trigger'=>'keyup', 'data-parsley-length'=>'[6,6]', 'placeholder'=>'Pincode or Postal Code','name'=>'guesthouse_pincode','value'=>set_value('guesthouse_pincode',$profile->guesthouse_pincode)]);?>
           						<h7 style="color:#C70000"><?php echo form_error('guesthouse_pincode');?></h7>
                                  
                              </div>
                              <div class="form-group">
                                  <label for="city" ">City District Name:</label>
                                  <?php echo form_input(['class'=>'form-control' ,'id'=>'city1', 'required'=>'required', 'data-parsley-pattern'=>'/^[a-zA-Z ]*$/','data-parsley-trigger'=>'keyup', 'data-parsley-length'=>'[5, 50]','placeholder'=>'City Or District Name','name'=>'guesthouse_city','value'=>set_value('guesthouse_city',$profile->guesthouse_city)]);?>
                                  <h7 style="color:#C70000"><?php echo form_error('guesthouse_city');?></h7>
                                  
                                    
                              </div>
                             
                           <div class="form-group">
	                              <label for="website">Enter your website if You have any </label>

	                               <?php echo form_input(['class'=>'form-control' ,'id'=>'website',  'data-parsley-type'=>'url','data-parsley-trigger'=>'keyup','placeholder'=>'http://www.xyz.com','name'=>'guesthouse_official_site','value'=>set_value('guesthouse_official_site',$profile->guesthouse_official_site)]);?>
	                               <h7 style="color:#C70000"><?php echo form_error('guesthouse_official_site');?></h7>
                                    
           
                           </div>
                          <div class="form-group">
      	                        <label for="Description">Facility Or Services Providing Detail:</label>
      	                        <?php echo form_textarea(['class'=>'form-control','row'=>3,'id'=>'website','required'=>'required', 'data-parsley-trigger'=>'keyup', 'data-parsley-length'=>'[10, 1000]','placeholder'=>'What kind services you provide in any events. Write Here....','name'=>'guesthouse_facility','value'=>set_value('guesthouse_facility',$profile->guesthouse_facility)]);?>
      	                        <h7 style="color:#C70000"><?php echo form_error('guesthouse_facility');?></h7>
                                   
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.8.1/parsley.js"></script>
<script>
  
    $(document).ready(function(){
    $('#UpdationForm').parsley();
  });
</script>
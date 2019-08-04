
<?php 
foreach ($user_fetch_data as $data)
{

  ?>
 <h2  id="top_heading_profile"  style="text-transform: uppercase;"><?= $data->guesthouse_name;?></h2>
<?php

}
?> 
<br>
<div class="container">

         <div class="row">

          <?php
          if(count($user_fetch_image))
              {
            $count = 0;
           
               foreach($user_fetch_image as $image_name) 
                {
                  $count +=1;
                   $data=base_url().'upload/'.$image_name->guest_house_images;

                 ?>
                  <div class="mySlides"> 
                  <div class="numbertext"> <?php echo $count; ?> / 10</div>
                  <img src="<?php echo $data ?>"style="width:100%" class="img-thumbnail">
                  </div>
               <?php  
               }
             }
             else {
              ?>
              <h3 class="text-center text-danger">Please Upload Your Pictures <span> <?=  anchor("Upload_multiple_guesthouse_images/",'Upload',['class'=>'btn text-primary btn-info glyphicon glyphicon-camera ','style'=>'color:black;']);  ?></span></h3>
               
          <?php
             }
              ?>
        </div>
              <a class="prev" onclick="plusSlides(-1)">❮</a>
              <a class="next" onclick="plusSlides(1)">❯</a>
                <br>
              <div class="caption-container">
                <p id="caption"></p>
              </div>
                <br>
            <div class="row">
                
               
              <?php
              if(count($user_fetch_image))
              {
                
               $count=0;
                   foreach($user_fetch_image as $image_name) 
                    {
                      $count +=1;
                       $data=base_url().'upload/'.$image_name->guest_house_images;
                       

                     ?>
                    <div class="column">
                    <img class="demo cursor img-thumbnail" src="<?php  echo $data ?>" style="width:100%" onclick="currentSlide(<?php echo $count  ?>)" alt="Guest House Pictures">
                  </div>
                  <?php
                }
              }
              else
              {
                ?>
                <h5 class="text-danger text-center">Please Upload Your Pictures</h5>
<?php
              }
              ?>

     
       

   
          </div>      
</div> 
<br>


<br>
<br>

      
      <?php if(count($user_fetch_data)):?>
      <?php foreach($user_fetch_data as $data):
        
        ?>
        
  <div class="container">
      <div class="table-responsive">
          <table class="table" style="background-color: white;" >
          <tbody>
            <tr>
              <th>Profile Picture</th><td><button type="button" style="width:125px; height:125px; background:#1B7C7E; border:solid 2px red"class="img_btn" data-toggle="modal" data-target="#myModal"><img  style="width:100px; height:100px; margin-bottom: 10px;" id="profile_pic"src="<?php echo base_url('profile_pictures_folder/guestProfile_pic/'. $data->guest_profile_pic);?>" alt="Profile Image" ><span style="position:absolute;margin-top:102px; margin-left:-112px ;font-size: 11px; background: black; color: red"><i class="glyphicon glyphicon-pencil"></i>Change Your Profile Pic</span></button>
                <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Change Your Profile Picture</h4>
        </div>
        <div class="modal-body">
        <?php $attributes = array('id' =>'gueshouse_profile_img_update_form');
          echo form_open_multipart('Edit_Profile_Pictures/update_guesthouse_profile_picture',$attributes);?>
           <?= form_hidden('guesthouse_id',$data->guesthouse_id)?>
          <div class="form-group">
                <label for="" style="color:black">Upload Your Event Place Front Picture:</label>
                <input type="file" id="fileupload" name="guest_profile_pic" required  placeholder="Front Pic With Your Event Place name"accept="image/x-png,image/gif,image/jpeg"><center><div id="dvPreview"></div></center>
                  
            </div>
            <button type="submit" class="btn btn-primary" >Update</button>
        <?php echo form_close();?>
        </div>
        <div class="modal-footer">


          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
     
</div>
      <!-- </td> -->
            </tr>
                       <tr>
                        <th>Name:</th><td class="table_data"><?= $data->guesthouse_name;?></td>
                        
                  </tr>
                  <tr>
                       <th>Owner or Manager Name:</th><td class="table_data"><?php echo $data->username;?></td>

                  </tr>
                  <tr>
                       <th>Address:</th>
                       <td class="table_data"><?= $data->guesthouse_address ?>,<?= $data->guesthouse_area ?></td>
                 </tr>
                  <tr>
                       <th>Pincode:</th><td><?= $data->guesthouse_pincode?></td>
                  </tr>
                  <tr>
                       <th>City Or District:</th><td class="table_data"><?= $data->guesthouse_city ?></td>
                  </tr>
                  <tr>
                       <th>State :</th><td class="table_data" ><?= $data->guesthouse_state ?></td>
                  </tr>
                  <tr>
                        <th>Contact Number:</th><td>+91<?= $data->mobile_number ?></td>
                  </tr>
                  <tr>
                        <th>Website:</th><td><a id="url_link" href="<?php $data->guesthouse_official_site; ?>"><?= $data->guesthouse_official_site;?> </a></td>
                  </tr>
                  <tr>
                        <th>Email Id:</th><td><?php echo $data->email;?></td>
                   </tr>
                   <tr>
                         <th>Faciality & Services:</th><td><?=$data->guesthouse_facility;?></td>
                  </tr>
                  <?php endforeach; ?>
                   <?php else:?>
                    <tr>
                      <h3 class="text-danger text-center">Pleas Insert Your Data</h3>
                    </tr>
                    <?php endif;?>
                    <tr>

                       <?php if(count($prebooking_date)):?>
                      <?php foreach($prebooking_date as $booking_date)

                      {
                       
                        ?>
                         <th>Prebooking Date:</th><td><div><p style="text-align: justify; color:red"><?=$booking_date->multiple_date;?><div></p><br><button type="button" class="btn btn-primary glyphicon glyphicon-pencil" data-toggle="modal" data-target="#myDate">Change Date</button>
                                         <!-- Modal -->
  <div class="modal fade" id="myDate" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update Your Prebooking Date</h4>
        </div>
        <div class="modal-body">
        <?php $attributes = array('id' =>'');
          echo form_open('Date_picker_controller/date_picker_update',$attributes);?>
           <?= form_hidden('prebooking_date_id',$booking_date->prebooking_date_id)?>
          <div class="form-group">

            <?php echo form_input(['class'=>'form-control date', 'id'=>'multiple_date','required'=>'required',  'placeholder'=>'Update Date','name'=>'multiple_date','value'=>set_value('multiple_date',$booking_date->multiple_date),'autocomplete'=>'off']);?>
                  
            </div>
            <button type="submit" class="btn btn-primary" >Submit</button>
        <?php echo form_close();?>
        </div>
        <div class="modal-footer">


          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
                         </td> 
                         <?php
                        }
                        ?>
                    </tr>
                    
                   <?php else:?>
                    <tr>
                       <th>Prebooking Date:</th><td><h7 class="text-danger">Please Insert Date</h7>
                       <?php $attributes = array('id' =>'datePicker_form');
                echo form_open('',$attributes);?>
                <div class="form-group">
                      <?php echo form_input(['class'=>'form-control date','placeholder'=>'Enter Prebooking Date:', 'required'=>'required','id'=>'multiple_date','name'=>'multiple_date','value'=>set_value('multiple_date')]);?> 
                       <?=form_input(array('name' => 'user_id', 'type'=>'hidden', 'id' =>'user_id','value'=>$data->user_id));?>
                     
                      <br>
                      <?php echo form_submit(['class'=>'btn btn-primary', 'id'=>'submit1','type='=>'submit', 'value'=>'Submit']);?>
                      <?php echo form_close();?>
                      </td>
                    </tr>
                    <?php endif;?>
              
                    
               
          </tbody>
        </table>
        </div>
</div>
        <br><br>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/image_sliding_file.js"></script>
 
<script type="text/javascript">
 $(document).ready(function(){
    $("#fileupload").on('change', function () {

     //Get count of selected files
     var countFiles = $(this)[0].files.length;

     var imgPath = $(this)[0].value;
     var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
     var image_holder = $("#dvPreview");
     image_holder.empty();

     if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
         if (typeof (FileReader) != "undefined") {

             //loop for each file selected for uploaded.
             for (var i = 0; i < countFiles; i++) {

                 var reader = new FileReader();
                 reader.onload = function (e) {
                     $("<img />", {
                         "src": e.target.result,
                             "class": "thumb-image",
                             "style":"height: 75px;margin: 4px; border: 2px solid #444;padding: 1px;cursor: pointer;"
                     }).appendTo(image_holder);
                 }

                 image_holder.show();
                 reader.readAsDataURL($(this)[0].files[i]);
             }

         } else {
             alert("This browser does not support FileReader.");
         }
     } else {
         alert("Pls select only images");
     }
 });

  });
 </script>
<script type="text/javascript">
  $(document).ready(function(){
    
    $('.date').datepicker({
  multidate: true,
  format: 'dd-mm-yyyy'
});

  });
</script>

 <script>
  $(document).ready(function(){



      $('#datePicker_form').on('submit', function(event){
       var user_id = $("#user_id").val();
     var multipleDate = $("#multiple_date").val();
     var url= "<?php echo base_url(); ?>";
   
     
     
      
   $.ajax({
                    type: "POST",
                    url:url+'Date_picker_controller/date_picker_insert',
                     data:$(this).serialize(),
                    cache: false,
                    success: function(result){
                        if($('#datePicker_form').val('Submit'))
                   {

                                    swal({
                                  title: "Thanks For Registration.",
                                  
                                button: "Login",
                                  text: "Please Enter Your Email And Password after click SignIn",
                                  type: "success"
                              }).then(function() {
                                  window.location = "<?php echo base_url('Upload_multiple_guesthouse_images/profile');?>";
                              });
                  

                   }

                }       
          }) ;
      


             
    });
    });
     


   
    

  



  
</script>


<?php include('footer.php');?>





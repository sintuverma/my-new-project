<?php include "photostudio_profile_header.php"; ?>
<div class="container">
  <?php 
  if($msg = $this->session->flashdata('msg')):
       $msg_class= $this->session->flashdata('msg_class');

  ?>
  <div class="row">
    <div class="col-lg-6">
      <div class="alert <?= $msg_class;?>">
        <?= $msg; ?>
      </div>
        
      
    </div>
    
  </div>
<?php endif; ?>

  <div class="row">
   
  <?php 
  foreach ($profile as $profile)
  {
    $image_id=$profile->studio_image_id;
  $image_arr = explode(",", $profile->studio_pictures);

            foreach($image_arr as $image_name)
            {
              $data=base_url().'studioPictures/'.$image_name;

?>
         <div class="column">
        <img src="<?php  echo $data ?>" class="img-thumbnail" alt="Guest House Picture" ><center>
          <a href="javascript:void(0);" onclick="del(<?php echo $image_id;?>);">Delete</a> 
       <!--  &nbsp;<?= form_open('Update_images_controller/delete_catering_pictures'),
                        form_hidden('image_name',$image_name),
                        form_submit(['name'=>'submit','class'=>'btn btn-danger align-center', 'value'=>'Delete','id'=>'delete','onclick'=>"return ConfirmDialog();"]),
                        form_close();
                        ?> -->
                      </center>
                    </div>  
<?php
            } 
 
  }
 ?>

  
  </div>
 
  
   
<center>
<div class="form-div">
   <?php $attribute=array('id'=>'uploadForm');
  echo form_open_multipart('Upload_multiple_guesthouse_images/doupload/',$attribute);?>
  <?php echo form_hidden('user_id',$this->session->userdata('user_id'));?>
      <label for="file" class="input-label">
      <i class="glyphicon glyphicon-picture" id="pictureicon"></i>
      <span id="label_span">Select Pictures to Upload</span>
    </label>
      <input type="file" name="" id="file"name="userfile[]"placeholder="" multiple="true" /> <br><br>
     <div id="dvPreview"></div>
    <button type="submit" class="btn btn-primary">Upload</button>
  </div>
   <?php echo form_close(); ?><br><br>
    
     <div id="dvPreview"></div>
  </center>
       
    
</body>

<script type="text/javascript">
    var url="<?php echo base_url();?>";
    function del(id,imagename){
       var r=confirm("Do you want to delete this?");
        if (r==true)
          window.location = url+"Update_images_controller/delete_photostudio_pictures/"+id;
        else
          return false;
        } 
</script>
<script type="text/javascript">
  
  
  $(document).ready(function(){
   

    $("#file").on("change",function(e){
      var files=$(this)[0].files;
      if(files.length>=2)
      {
        $("#label_span").text(files.length+" "+" Files ready To Upload");
      }
      else{
        var filename=e.target.value.split('\\').pop();
        $("#label_span").text(filename);
      }
    });
    $("#file").on('change', function () {

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
</html>

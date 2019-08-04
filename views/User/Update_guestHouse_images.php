<?php include "guesthouse_profile_header.php"; ?>
<style type="text/css">
  .column {
  float: left;
  width:100px;
  padding: 5px;
  margin-left:10px;
}

.#delete{
  
   float: left;
  width: 50px;
  padding: 5px;
  margin-left: 80px;

}

/* Clear floats after image containers */
.row::after {
  content: "";
  clear: both;
  display: table;
}
.form-div{
      margin-top: 100px;
    }
    .input-label{
      background: #009688;
      color: #fff;
      padding: 30px;
      transition: 0.3s;
    }
    .input-label:hover{
      background:#26a69a ;
      cursor:pointer;
    }
    .pictureicon{ 
      margin-right:10px;


    }
    .glyphicon-picture{
     font-size: 20px;
    }
    #file{
      display: none;
    }
     #dvPreview {
  display: block;
}
</style>
  
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
  if( count($profile)==10)
  {
    foreach ($profile as $profile)
          {
            $image_id=$profile->gh_image_id;
          $image_arr = explode(",", $profile->guest_house_images);

                    foreach($image_arr as $image_name)
                    {
                      $data=base_url().'upload/'.$image_name;
                      ?>
                       <div class="column">
        <img src="<?php  echo $data ?>" class="img-thumbnail" alt="Guest House Picture" ><center>
          <a href="javascript:void(0);" class="btn btn-danger"onclick="del(<?php echo $image_id;?>);"><i class="glyphicon glyphicon-trash" id="pictureicon"></i>Delete</a> 
        </center>
      </div>
                  <?php
                    }
          }
    }
    else
    {

         foreach ($profile as $profile)
          {
            $image_id=$profile->gh_image_id;
            $image_arr = explode(",", $profile->guest_house_images);

                    foreach($image_arr as $image_name)
                    {
                      $data=base_url().'upload/'.$image_name;
                      ?>

                         <div class="column">
              <img src="<?php  echo $data ?>" class="img-thumbnail" alt="Guest House Picture" ><center>
              <a href="javascript:void(0);" class="btn btn-danger"onclick="del(<?php echo $image_id;?>);"><i class="glyphicon glyphicon-trash" id="pictureicon"></i></a> 
                </center>
                    </div>  
                   


                    <?php

                    }
          }
          ?>
          <br>
          <div>
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
           </div>
<?php

    }
    ?>

 


    
</body>

<script type="text/javascript">
    var url="<?php echo base_url();?>";
    function del(id,imagename){
       var r=confirm("Do you want to delete this?");
        if (r==true)
          window.location = url+"Update_images_controller/delete_guesthouse_images/"+id;
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

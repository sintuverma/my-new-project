<?php 
foreach ($user_fetch_data as $data) 
{
  
 ?>

<h2 class="blink" id="top_heading"  style="text-transform: uppercase;"><?= $data->catering_name;?></h2> 
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
                   $data=base_url().'cateringPictures/'.$image_name->catering_pictures;

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
              <h3 class="text-center text-danger">Please Upload Your Pictures <span> <?=  anchor("Upload_multiple_catering_pictures/",'Upload',['class'=>'btn text-primary btn-info glyphicon glyphicon-camera ','style'=>'color:black;']);  ?></span></h3>
               
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
                       $data=base_url().'cateringPictures/'.$image_name->catering_pictures;
                       

                     ?>
                    <div class="column">
                    <img class="demo cursor img-thumbnail" src="<?php  echo $data ?>" style="width:100%" onclick="currentSlide(<?php echo $count  ?>)" alt="Catering Services Pictures">
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
          <table class="table" style="background-color: white;text-transform: uppercase;">
          <tbody>
                       <tr>
                        <th>Name:</th><td class="table_data"><?= $data->catering_name;?></td>
                        
                  </tr>
                  <tr>
                       <th>Owner or Manager Name:</th><td class="table_data"><?php echo $data->username;?></td>
                  </tr>
                  <tr>
                       <th>Address:</th>
                       <td class="table_data"><?= $data->caterers_address ?>,<?= $data->caterers_area ?></td>
                 </tr>
                  <tr>
                       <th>Pincode:</th><td><?= $data->caterers_pincode?></td>
                  </tr>
                  <tr>
                       <th>City Or District:</th><td class="table_data"><?= $data->caterers_city ?></td>
                  </tr>
                  <tr>
                       <th>State :</th><td class="table_data" ><?= $data->caterers_state ?></td>
                  </tr>
                  <tr>
                        <th>Contact Number:</th><td><?= $data->mobile_number ?></td>
                  </tr>
                 
                  <tr>
                        <th>Email Id:</th><td><?php echo $data->email;?></td>
                   </tr>
                   <tr>
                         <th>Faciality & Services:</th><td><?=$data->caterers_services;?></td>
                  </tr>
                 
                   <?php endforeach; ?>
                   <?php else:?>
                    <tr>
                      <h3 class="text-danger text-center">Pleas Inser Data</h3>
                    </tr>
                    <?php endif;?>
                    
               
          </tbody>
        </table>
        </div>
</div>
        <br><br>


<script type="text/javascript" src="<?php echo base_url()?>assets/js/image_sliding_file.js"></script>

<?php include('footer.php');?>





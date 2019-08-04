<?php include "dashboardHeader.php"; ?>

 <h2 id="center_heading"> Select One form Click The Button</h2>

 <div class="container-fluid" id="form2">
    <div class="row"><br>
        <div class="col-sm-4  id="guest1" >
    	
              <h3 id="event_form_heading"> Party Lawn,Palace, Hotel, Guest House, Banquet Hall Name Form   </h3>
      
                  <a href=""><h4 class="head4 text-center">Hotel Place Party-Lawn</h4>  </a>
              
                          <div class="img">
                                <img src="<?php echo base_url()?>assets\images\hallformpic.jpg" class="img-responsive"id="guest_image"  alt="Image"> 
                          </div> <br><br>

                        <!-- Trigger the modal with a button -->

                            <button type="button" class="btn btn-danger btn-lg center-block btn-block" data-toggle="modal" data-target="#myModal" >Click Here
                            </button>

  <!-- Modal -->
              <div class="modal fade" id="myModal" role="dialog">

                  <div class="modal-dialog">
          
                            <!-- Modal content-->
                      <div class="modal-content " >
                           <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 id="modal_top_heading" class="modal-title" ><b> Hall For Events Services</b></h4>
                            </div>

                              <div class="modal-body">
                                    <div class="col-md-6 col-md-offset-3">
                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                          <button type="button" class="close" data-dismiss="alert" aria-leble="Close">x</button>
                                          <div id="result"></div>
                                        </div> 
                                    </div>
                                           <?php $attributes = array('id' =>'guesthouse_form');
                                            echo form_open_multipart('User/guestHouseDetail',$attributes);
                                            echo form_hidden('user_id',$this->session->userdata('user_id'));?>
                                             <div class="form-group">
                                                <label for="guesthouse name">Your Party Lawn, Palace, Hotel, Guest House, Banquet Hall Name:</label>
                                                   <input type="text" class="form-control" id="guesthouse_name" placeholder="Enter Name Here..." name="guesthouse_name" required data-parsley-pattern="/^[a-zA-Z ]*$/" data-parsley-trigger="keyup" data-parsley-length="[5, 50]">
                                             </div>
                                              <div class="form-group">
                                                  <label for="address">Your Party Lawn, Palace, Hotel, Guest House, Banquet Hall Address:</label>
                                                    <input type="text" class="form-control" id="address" placeholder="Address" name="guesthouse_address"required data-parsley-pattern="/^[a-zA-Z ]*$/" data-parsley-trigger="keyup" data-parsley-length="[5, 50]">
                                              </div>
                                              <div class="form-group">
                                                   <label for="address">Your Party Lawn, Palace, Hotel, Guest House, Banquet Hall Area:</label>
                                                      <input type="text" class="form-control" id="area1" placeholder="Area" name="guesthouse_area"required data-parsley-pattern="/^[a-zA-Z ]*$/" data-parsley-trigger="keyup" data-parsley-length="[5, 50]">
                                              </div>
                                              <div class="form-group">
                           
                                                  <label for="Pincode" ">Pincode:</label>
                                                      <input id="pincode1" class="form-control " type="number" name="guesthouse_pincode"  placeholder="Pincode or Postal Code "required data-parsley-type="number" data-parsley-trigger="keyup" data-parsley-length="[6, 6]">
                                              </div>
                                              <div class="form-group">
                                                  <label for="Pincode" ">Country:</label>
                                                     <select name="country" required id="country" class="form-control">
                                                       <option value="">--Select----Country</option>
                                                     </select>
                                              </div>
                                              <div class="form-group">
                                                <label for="State" >State:</label>
                                                   <select name="guesthouse_state" required id="state" class="form-control">
                                                     <option value="">--Select----State</option>
                                                   </select>
                                              </div>

                                              <div class="form-group">
                                                  <label for="city" ">City Name:</label>
                                                  <select name="guesthouse_city" required id="city" class="form-control">
                                                       <option value="">--Select-----City--</option>
                                                     </select>
                                                    
                                              </div>
                                              <div class="form-group">
                                                  <label for="" style="color:black">Upload Your Event Place Front Picture:</label>
                                                  <input type="file" id="fileupload" name="guest_profile_pic" required  placeholder="Front Pic With Your Event Place name"accept="image/x-png,image/gif,image/jpeg"><center><div id="dvPreview"></div></center>
                                                    
                                              </div>

                                       
                                       
                                               <div class="form-group">
                    	                              <label for="website">Enter your website if You have any </label>
                                                        <input type="text" class="form-control" id="website" name="guesthouse_official_site" placeholder="http://www.xyz.com  Optional"  data-parsley-type="url" data-parsley-trigger="keyup" >
                               
                                               </div>
                                                <div class="form-group">
                            	                        <label for="Description">Facility Or Services Providing Detail:</label>
                                                          <textarea class="form-control" rows="3" id="comment" placeholder="What kind services you provide in any events. Write Here...." name="guesthouse_facility"data-parsley-trigger="keyup" data-parsley-length="[10, 1000]"></textarea>
                                 
                                                          <br>
                                                      <button type="submit" class="btn btn-success btn-lg btn-block" id="submit">Submit
                                                      </button>
                                                </div>
                                              <?php echo form_close();?>
                              </div>
                        </div>   
                    </div>  
                </div>
            </div>
      <div class="col-sm-4"id="cat1">
      
                       <h3 id="catering_heading" style=" "> Catering Services Form   </h3>
                       <a href=""><h4 class="head4 text-center">Catering</h4></a>
                       <div class="img">
                            <img id="guest_image" src="<?php echo base_url()?>assets\images\cateringformpic.jpg" class="img-responsive"  alt="Image">
                        </div> <br> <br>
 
                            <!-- Trigger the modal with a button -->
 
                              <button type="button" class="btn btn-warning btn-lg center-block btn-block" data-toggle="modal" data-target="#myModal1">Click Here</button>

                  <!-- Modal -->
            <div class="modal fade" id="myModal1" role="dialog">
                  <div class="modal-dialog">
    
                        <!-- Modal content-->
                        <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" style="background-color: red" class="close" data-dismiss="modal">&times;</button>
                                          <h4 id="modal_top_heading" class="modal-title"><b>Catering Services</b></h4>
                              </div>
                              <div class="modal-body">
                                    <div class="col-md-6 col-md-offset-3">
                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                          <button type="button" class="close" data-dismiss="alert" aria-leble="Close">x</button>
                                          <div id="result1"></div>
                                        </div>
                                    </div>
                                          <?php $attributes = array('id' =>'catering_form');
                                         echo form_open_multipart('User/catering_details',$attributes); 
                                         echo form_hidden('user_id',$this->session->userdata('user_id'));?>

                                          <div class="form-group">
                                              <label for="catering_name">Catering Services Company Name:</label>
                                                   <input type="text" class="form-control" id="catering_name" placeholder="Enter Name Here..." name="catering_name" required data-parsley-pattern="/^[a-zA-Z ]*$/" data-parsley-trigger="keyup" data-parsley-length="[5, 50]">
                                          </div>

                                          <div class="form-group">
                                                <label for="address2">Catering Services Company Address:</label>
                                                    <input type="text" class="form-control" id="address2" placeholder="Address" name="caterers_address"  required data-parsley-pattern="/^[a-zA-Z ]*$/" data-parsley-trigger="keyup" data-parsley-length="[5, 50]">
                                          </div>

                                          <div class="form-group">
                                                <label for="area2">Catering Services Company Area:</label>
                                                    <input type="text" class="form-control" id="area2" placeholder="Area" name="caterers_area" required data-parsley-pattern="/^[a-zA-Z ]*$/" data-parsley-trigger="keyup" data-parsley-length="[5, 50]">
                                         </div>

                                          <div class="form-group">
                                                <label for="Pincode2" ">Pincode:</label>
                                                     <input id="pincode2" class="form-control " type="number" name="caterers_pincode"  placeholder="Pincode or Postal Code " required data-parsley-type="number" data-parsley-trigger="keyup" data-parsley-length="[6, 6]">
                                          </div>
                                          <div class="form-group">
                                              <label for="country" ">Country Name:</label>
                                                 <select name="country" required id="country2" class="form-control">
                                                   <option value="">--Select----Country</option>
                                                 </select>
                                           </div>

                                           <div class="form-group">
                                                    <label for="State" >State Name:</label>
                                                     <select name="caterers_state" required id="state2" class="form-control">
                                                      <option value="">--Select----State</option>
                                                    </select>
                                           </div>

                                          <div class="form-group">
                                              <label for="city" ">City Name:</label>
                                              <select name="caterers_city" required  id="city2" class="form-control">
                                                   <option value="">--Select-----City--</option>
                                                 </select>

                                                
                                          </div>
                                         <div class="form-group">
                                                  <label for="" style="color:black">Upload Your Event Place Front Picture:</label>
                                                  <input type="file" id="fileupload2" name="catering_profile_pic" required placeholder="Front Pic With Your Event Place name"accept="image/x-png,image/gif,image/jpeg"><center><div id="dvPreview2"></div></center>
                                                    
                                          </div>
                                               <div class="form-group">
                                                      <label for="Description">Services Description:</label>
                                                          <textarea class="form-control" rows="3" id="comment" placeholder="What kind services you provide in any events. Write Here...." name="caterers_services"data-parsley-trigger="keyup" data-parsley-length="[10, 1000]"></textarea>
                                 
                                                          <br>
                                                      <button type="submit" class="btn btn-success btn-lg btn-block" id="submit">Submit
                                                      </button>
                                              </div>
                                              <?php echo form_close();?>
                                         
         
                              </div>
                          </div> 
                    </div>
                </div>
          </div>

    <div class="col-sm-4" id="stu1">
        <h3 id="photo_top_heading"> Photography Studio Services Form   </h3>
            <a href=""><h4 class="head4 text-center">Studio</h4></a>
              <div class="img">
                  <img src="<?php echo base_url()?>assets\images\photostudio.jpg" id="guest_image" class="img-responsive" alt="Image">
              </div><br><br>
  
  <!-- Trigger the modal with a button -->
  
              <button type="button" class="btn btn-info btn-lg center-block btn-block" data-toggle="modal" data-target="#myModal2">Click Here</button>

  <!-- Modal -->
          <div class="modal fade" id="myModal2" role="dialog">
                <div class="modal-dialog">
    
      <!-- Modal content-->
                   <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 id="modal_top_heading" class="modal-title"><b>Photography Studio Services </b> </h4>
                        </div>

                        <div class="modal-body">
                            
                              <?php $attributes = array('id' =>'studio_form');
                                         echo form_open_multipart('User/studio_details',$attributes); 
                                         echo form_hidden('user_id',$this->session->userdata('user_id'));?>

                                  <div class="form-group">
                                        <label for="studio_name">Photography Studio Name:</label>
                                        <input type="text" class="form-control" id="studio_name" placeholder="Enter Name Here..." name="studio_name"  required data-parsley-pattern="/^[a-zA-Z ]*$/" data-parsley-trigger="keyup" data-parsley-length="[5, 50]"/>
                                  </div>
                                        <div class="form-group">
                                        <label for="address3">Photography Studio Address:</label>
                                          <input type="text" class="form-control" id="address3" placeholder="Address" name="studio_address" required data-parsley-pattern="/^[a-zA-Z ]*$/" data-parsley-trigger="keyup" data-parsley-length="[5, 50]">
                                        </div>

                                   <div class="form-group">
                                        <label for="address3">Photography Studio Area:</label>
                                              <input type="text" class="form-control" id="address3" placeholder="Area" name="studio_area" required data-parsley-pattern="/^[a-zA-Z ]*$/" data-parsley-trigger="keyup" data-parsley-length="[5, 50]">
                                   </div>

                                   <div class="form-group">
                                          <label for="Pincode" ">Pincode:</label>
                                                <input id="pincode3" class="form-control " type="number" name="studio_pincode"  placeholder="Pincode or Postal Code " required data-parsley-type="number" data-parsley-trigger="keyup" data-parsley-length="[6, 6]">
                                   </div>
                                   <div class="form-group">
                                  <label for="country">Country:</label>
                                     <select name="country" required id="country3" class="form-control">
                                       <option value="">--Select----Country</option>
                                     </select>
                                </div>
                                <div class="form-group">
                                      <label for="city" ">State Name:</label>
                                      <select name="studio_state" required id="state3" class="form-control">
                                           <option value="">--Select-----State--</option>
                                         </select>
                                    
                                </div>

                                <div class="form-group">

                                  <label for="city" ">City Name:</label>
                                  <select name="studio_city" required id="city3" class="form-control">
                                       <option value="">--Select-----City--</option>
                                  </select>
                                    
                                </div>
                                <div class="form-group">
                                                  <label for="" style="color:black">Upload Your Picture With Photostudio Services Company Name :</label>
                                                  <input type="file" id="fileupload3"name="studio_profile_pic" required value="" placeholder="Picture With Catering Services Company Name"accept="image/x-png,image/gif,image/jpeg"><center><div id="dvPreview3"></div></center>
                                                    
                                              </div>


                                  
                                    <div class="form-group">
                                          <label for="Description">Services Description:</label>
                                              <textarea class="form-control" rows="3" id="comment" placeholder="What kind services you provide in any events. Write Here...."name="studio_services" data-parsley-trigger="keyup" data-parsley-length="[10,1000]"></textarea>
                                               <br>
                                                    <button type="submit" class="btn btn-primary btn-lg btn-block" id="submit">Submit</button>
                                    </div>

                                   
                                </form>
                            </div>
                        </div> 
                    </div>         
                  </div>
                </div>
            </div>
</div>
    <br><br>
    <footer class="container-fluid text-center">
  <p> &copy;Copy right www.EventsHall.com 2018-2019</p>
</footer>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.8.1/parsley.js"></script>
 </body>
 </html>
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
 <script>
 $(document).ready(function(){
    $("#fileupload2").on('change', function () {

     //Get count of selected files
     var countFiles = $(this)[0].files.length;

     var imgPath = $(this)[0].value;
     var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
     var image_holder = $("#dvPreview2");
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
    $("#fileupload3").on('change', function () {

     //Get count of selected files
     var countFiles = $(this)[0].files.length;

     var imgPath = $(this)[0].value;
     var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
     var image_holder = $("#dvPreview3");
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
    $('#guesthouse_form').parsley();
    fetch_country_list();

     function fetch_country_list(){
          $.ajax({

              url:"fetch_country",
              method:"POST",
              dataType:'json',
              success:function(data){
                //console.log(data);
                if (data != 'err') {
                     var output = '';
                     for (var i = 0; i <data.length ; i++) {
                                 output +="<option>"+data[i].CITY_COUNTRY+"</option>"
                             }
                       $('#country').append(output);
                 }

              }

          })
       }

     $('#country').change(function(){
        var country = $('#country').val();
             $.ajax({
                      url:"fetch_state",
                      method:"POST",
                      dataType:'json',
                      data:{country:country},
                      success:function(data){
                        if (data != 'err') {
                              var output='';
                              for (var i = 0; i <data.length ; i++) {
                                    output +="<option>"+data[i].CITY_STATE+"</option>"
                              }
                              $('#state').append(output);

                          }

                      }
             })

        });
      $("#state").change(function(){
            var state = $("#state").val();
            $.ajax({
                  url:"fetch_city",
                  data:{state:state},
                  dataType:'json',
                  method:"POST",
                  success:function(data){
                    if (data != 'err') {
                        var output='';
                        for(var i=0;i<data.length;i++){
                              output +="<option>"+data[i].CITY_NAME+"</option>"
                        }

                        $('#city').append(output);
                    }

                  }

            })

 
        });
    $('#guesthouse_form').on('#submit',function(event){
      event.preventDefault();

      
    })

   })



  // Catering Form Validation 
   $(document).ready(function(){
    $('#catering_form').parsley();
    fetch_country_list();

     function fetch_country_list(){
          $.ajax({

              url:"fetch_country",
              method:"POST",
              dataType:'json',
              success:function(data){
                //console.log(data);
                if (data != 'err') {
                     var output = '';
                     for (var i = 0; i <data.length ; i++) {
                                 output +="<option>"+data[i].CITY_COUNTRY+"</option>"
                             }
                       $('#country2').append(output);
                 }

              }

          })
       }

     $('#country2').change(function(){
        var country = $('#country2').val();
             $.ajax({
                      url:"fetch_state",
                      method:"POST",
                      dataType:'json',
                      data:{country:country},
                      success:function(data){
                        if (data != 'err') {
                              var output='';
                              for (var i = 0; i <data.length ; i++) {
                                    output +="<option>"+data[i].CITY_STATE+"</option>"
                              }
                              $('#state2').append(output);

                          }

                      }
             })

        });
      $("#state2").change(function(){
            var state = $("#state2").val();
            $.ajax({
                  url:"fetch_city",
                  data:{state:state},
                  dataType:'json',
                  method:"POST",
                  success:function(data){
                    if (data != 'err') {
                        var output='';
                        for(var i=0;i<data.length;i++){
                              output +="<option>"+data[i].CITY_NAME+"</option>"
                        }

                        $('#city2').append(output);
                    }

                  }

            })

 
        });
    $('#catering_form').on('#submit',function(event){
      event.preventDefault();

      
    })

   })

   /* Studio Form Validation */

    $(document).ready(function(){
    $('#studio_form').parsley();
    fetch_country_list();

     function fetch_country_list(){
          $.ajax({

              url:"fetch_country",
              method:"POST",
              dataType:'json',
              success:function(data){
                //console.log(data);
                if (data != 'err') {
                     var output = '';
                     for (var i = 0; i <data.length ; i++) {
                                 output +="<option>"+data[i].CITY_COUNTRY+"</option>"
                             }
                       $('#country3').append(output);
                 }

              }

          })
       }

     $('#country3').change(function(){
        var country = $('#country3').val();
             $.ajax({
                      url:"fetch_state",
                      method:"POST",
                      dataType:'json',
                      data:{country:country},
                      success:function(data){
                        if (data != 'err') {
                              var output='';
                              for (var i = 0; i <data.length ; i++) {
                                    output +="<option>"+data[i].CITY_STATE+"</option>"
                              }
                              $('#state3').append(output);

                          }

                      }
             })

        });
      $("#state3").change(function(){
            var state = $("#state3").val();
            $.ajax({
                  url:"fetch_city",
                  data:{state:state},
                  dataType:'json',
                  method:"POST",
                  success:function(data){
                    if (data != 'err') {
                        var output='';
                        for(var i=0;i<data.length;i++){
                              output +="<option>"+data[i].CITY_NAME+"</option>"
                        }

                        $('#city3').append(output);
                    }

                  }

            })

 
        });
    $('#studio_form').on('#submit',function(event){
      event.preventDefault();

    })

   })
 </script>
<?php 
foreach ($user_fetch_data as $data)
{
  ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <title> <?= $data->username;?>  |</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/home.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/profile_style.css"> 
      <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/user_profile_page_style.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/parsleyvalidation_style.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/update_image_page_style.css">
     
</head>
 
 <body>
  <div class="navbar navbar-inverse  navbar-custom">
      <div class="container">
          <div class="navbar-header" href="#" class="pull-left">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>                        
              </button>
              <a class="pull-left" href="dashboard"><img  src="<?php echo base_url()?>assets\images\logo.png" alt="Brand" width="100px" height="50px"></a>
              <a class="navbar-brand" href="dashboard">Events Hall</a>
          </div>

         <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav navbar-right">

                 <li><a href="#"><span class="glyphicon glyphicon-user"></span>Welcome <?php echo $this->session->userdata('username'); ?></a></li>
                 <li><a href="<?php echo base_url()?>Upload_multiple_catering_pictures/catering_profile"><span class="glyphicon glyphicon-home"></span> Home</a></li>
               
   
    <button class="btn btn-primary glyphicon glyphicon-cog dropdown-toggle" type="button" data-toggle="dropdown" style="top:7px"> Setting
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      
      <li><?=  anchor("Update_controller/edit_catering_profile_data/{$data->user_id}",'Edit Your Profile',['class'=>'btn text-primary btn-info glyphicon glyphicon-pencil edit ','style'=>'color:black;']);  ?></li>
      <li class="divider"></li>
      <li><?=  anchor("Update_controller/edit_reg_account_catering/{$data->user_id}",'Edit Your Account',['class'=>'btn btn-info glyphicon glyphicon-pencil edit  ','style'=>'color:black;']);  ?></li>
      <li class="divider"></li>
      <li><?=  anchor("Update_controller/edit_catering_images/{$data->user_id}",'Edit Your Images',['class'=>'btn btn-info glyphicon glyphicon-pencil edit ','style'=>'color:black;']);  ?></li>
      <li class="divider"></li>
      <li><?=  anchor("Update_Password_controller/update_catering_password",'Change Password',['class'=>'btn text-primary btn-info glyphicon glyphicon-pencil edit ','style'=>'color:black;']);  ?></li>
      <li class="divider"></li>
      <li>
        <?=  anchor("User/logout",'Sign Out',['class'=>'btn btn-danger glyphicon glyphicon-off  ','style'=>'color:black;']);  ?></li>
       
     
    </ul>
  </div>
                
                 
                
              </ul>
          </div> 

      </div>
<br><br>
<?php
}
?>
<!DOCTYPE html>
 <html lang="en">
 <head>
 	  <title>Dashboard Page</title>
 	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/home.css">
	  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/userpage1_style.css">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/user_profile_page_style.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/parsleyvalidation_style.css">
     
      <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/uploadfile_style.css">

 </head>
 
 <body>
 	<div class="navbar navbar-inverse  navbar-custom">
      <div class="container">
          <div class="navbar-header" <a href="#" class="pull-left">
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
                 <li><a href="<?php echo base_url(); ?>User/Dashboard"><span class="glyphicon glyphicon-user"></span>Home</a></li>
                 <li><a href="#"><span class="glyphicon glyphicon-user"></span>Welcome <?php echo $this->session->userdata('username'); ?></a></li>
                <li><button type="submit" class="btn navbar-btn btn-danger" name="logout" id="logout" style="border-radius: 15px;"><a href="<?php echo base_url() ?>User/logout">Sign Out</a></button></li>
              </ul>
          </div> 

      </div>
  </div><br><br><br>

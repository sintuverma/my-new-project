<!DOCTYPE html>
<html>
<head>
  <title>Welcome to Sign In Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/js/login_validation.js"></script>
  
  
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/home.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/login_style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/profile_style.css">
  
</head>
<body>
  
 <div class="navbar navbar-inverse navbar-fixed navbar-custom">
      <div class="container">
          <div class="navbar-header" <a href="#" class="pull-left">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>                        
              </button>
              <a class="pull-left" href="<?php echo base_url()?>"><img  src="<?php echo base_url()?>assets/images/logo.png" alt="Brand" width="100px" height="50px"></a>
              <a class="navbar-brand" href="<?php echo base_url()?>">Events Hall</a>
          </div>

         <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url()?>"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                       <li><a href="<?php echo base_url('Admin/searchPage')?>"><span class="glyphicon glyphicon-search"></span> Search</a></li>
                           <li ><a href="<?php echo base_url();?>Login"><span class="glyphicon glyphicon-user"></span>SignIn</a></li>
                                <li><a  href="<?php echo site_url('Admin/registrtionForm');?>"><span class="glyphicon glyphicon-user"></span>SignUp</a></li>
                                     <li ><a href="<?php echo base_url('Admin/about_Us')?>"><span class="glyphicon glyphicon-book"></span>AboutUs</a></li>
                                         <li><a href="<?php echo base_url('Admin/contactUs')?>"><span class="glyphicon glyphicon-earphone"></span> ContactUs</a></li>
                   
               </ul>
              
          </div>
      </div>
  </div><br><br>
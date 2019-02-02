<?php
$title = "PAK Classified";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/theme.css" />
  <link rel="stylesheet" href="css/slider.css" />
  <link rel="stylesheet" href="css/fa/css/font-awesome.css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet" />
</head>

<body>
  <!-- Navbar starts here -->

  <nav class="navbar navbar-inverse navbar-expand-lg navbar-toggleable bg-inverse fixed-top">
    <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a href="" class="navbar-brand">VLX Pakistan Market Place</a>

    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mx-auto">
        <form class="form-inline">
          <a href="#" class="mr-sm-4 btn_login">
            <i class="fa fa-car"></i> Categories</a>

          <input type="text" class="search" autofocus placeholder="Find Cars, Mobile Phones and more..." />
          <button class="btn_search"><i class="fa fa-search"></i></button>

          <a href="#" class="ml-sm-5 btn_login" data-toggle="modal" data-target="#login">Login</a>
        </form>
      </ul>
    </div>
  </nav>

  <!-- Login Form Starts Here -->
  <div id="login" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Header -->
        <div class="modal-header">
          <h5 class="modal-title">Login Form</h5>
          <button class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Body -->
        <div class="modal-body">
          <!-- form row STARTS-->
          <div class="container">
            <div class="form-group">
              <label for="username">User Name</label>
              <input type="text" class="form-control" id="username" />
              <p class="text-left m-2 text-danger" id="message"></p>
            </div>

            <div class="form-group mb-sm-4">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" />
            </div>
            <a href="" class="text-muted ml-3">Forgot Password</a>
            <div class="form-group mt-sm-3">
              <button onclick="login();" class="btn btn-outline-primary btn-block" onclick="login();">
                Login
              </button>
            </div>
          </div>
        </div>
        <!-- Modal body Ends Here   -->

        <!-- Footer -->
        <div class="modal-footer">
          <a onclick="hideLogin()" data-toggle="modal" data-target="#signup" id="createAccount" class="text-primary">Create Your Account</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Login Form Ends Here -->

  <!-- ======================== SignUP Modal Starts Here =====
=========================================================== -->

  <div id="signup" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Header -->
        <div class="modal-header">
          <h5 class="modal-title">Create Your Account</h5>
          <button class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Body -->
        <div class="modal-body signup_Modal">
          <!-- form row STARTS-->
          <div class="row">
            <div class="form-group col-sm-12">
              <label for="create-username">User Name</label>
              <input type="text" class="form-control" id="create-username" />
            </div>
          </div>
          <!-- form row ends-->

          <!-- form row STARTS-->
          <div class="row">
            <div class="form-group col-sm-6">
              <label for="create-password">Password</label>
              <input type="text" class="form-control" id="create-password" />
            </div>

            <div class="form-group col-sm-6">
              <label for="confirmpass">Confirm Password</label>
              <input type="text" class="form-control" id="confirmpass" />
            </div>
          </div>
          <!-- form row ends-->

          <!-- form row STARTS-->
          <div class="row">
            <div class="form-group col-sm-12">
              <label for="email">Enter Email</label>
              <input type="text" class="form-control" id="email" />
            </div>
          </div>
          <!-- form row ends-->
          <a href="" class="btn btn-outline-danger btn-block">Signup</a>
        </div>
        <!-- Modal body Ends Here   -->

        <!-- === Modal Signup footer Starts =============-->
        <div class="modal-footer signup-footer">
          <a href="#" data-dismiss="modal" class="close">Continue to login your account</a>
        </div>
        <!-- /////// Modal Footer Ends Here //////////// -->
      </div>
    </div>
  </div>
  <!-- //////////////////// SignUp Modal Ends Here  //////////////
    /////////////////////////////////////////////////////////////// -->

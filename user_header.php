<?php 
    // session_start();
    include_once( 'includes/connection.php' );
    //include_once( 'includes/functions.php' );
    
    // print_r( $_SESSION );
    // auth_login();
?>



<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
      <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>lbs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="/assets/styles.css">
     <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="/assets/widgets/datatable/datatable.css">

    <!-- JS Core -->
    <script type="text/javascript" src="<?php echo PATH; ?>/assets/js-core.js"></script>
    <title>e_MART</title>

    <!-- Bootstrap core CSS -->
   

    

    <!-- Custom styles for this template -->
    <link href="css/full-slider.css" rel="stylesheet"><link rel="stylesheet" href="css/font-awesome.css">
    <style type="text/css">
      a {
        color: #000;
      }
      a:hover {
        color: #111;
      }
    </style>
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg  bg-white fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.html#">
         <img src="logo/logo.png" id="logo"> 
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="http://localhost/lbs/index.php"><b>HOME</b>
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/lbs/customer/login.php"><b>CLIENT LOGIN</b></a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="http://localhost/lbs/admin/login.php">Admin Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/lbs/index">Contact</a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>



<style type="text/css">
  #logo
  {
    width: 280px;
    height: 180px;
    margin-top:-30px;
    margin-left: -70px;

  }
</style>
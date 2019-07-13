<?php
// Initialize the session
session_start();
//create an array to set page-level variables
//$page=array();
//$page['title']='Admin Dashboard';  

// Check if the user is logged in, if not then redirect him to login page
// if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//     header("location: ../admin_login/login.php");
//     exit;
// }

include('../config/database.php');
?>

<?php 
  $activePage = basename($_SERVER['PHP_SELF'], ".php");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico"> -->

    <title>Buffet Catering</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="vendor/custom/css/buttons.css" rel="stylesheet">
    <link href="vendor/custom/css/style.css" rel="stylesheet">

    <!-- Font Awesome JS -->
    <script defer src="vendor/fontawesome/js/solid.js" ></script>
    <script defer src="vendor/fontawesome/js/fontawesome.js"></script>
    <link rel="stylesheet" href="vendor/fontawesome/css/fontawesome.min.css">

  </head>

  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-dark navbar-fixed-top bg-dark">
        <a class="navbar-brand" href="index.php">Buffet Catering</a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item <?= ($activePage == 'package') ? 'active':''; ?>">
              <a class="nav-link" href="package.php">Package</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Promotion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
          </ul>

          <ul class="navbar-nav mr-right">
            <?php
              error_reporting(0); // Turn off all error reporting
            ?>
            
            <?php 
            $Drop=$_SESSION["userName"];
            
                  // Check if the user is logged in, if not then redirect him to login page
                  if(isset($_SESSION["userName"]) == 1){
                      echo '<li class="nav-item dropdown" style="margin-right:20px">';
                      echo '<a class="nav-link dropdown-toggle" href="" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">User '.$Drop.'</a>';
                      // echo $_SESSION["userName"];'</a>';
                      echo '<div class="dropdown-menu" aria-labelledby="dropdown05">';
                      echo '<a class="dropdown-item" href="profile.php">Profile</a>';
                      // echo '<a class="dropdown-item" href="#">Another action</a>';
                      echo '</div></li>';
                  }else{
                      echo '';
                  }
                 
            ?>
            <?php 
                // Check if the user is logged in, if not then redirect him to login page
                if(isset($_SESSION["userName"]) == 1){
                    echo '<li id="order-button" class="no-bullets">';
                    echo '<a href="../user_login/logout.php">';
                    echo '<div class="button-small button-3d button-caution button-pill">';
                    echo 'Logout ';
                    echo '<i class="fas fa-sign-out-alt">';
                    echo '</i></div></a>';
                }else{
                    echo '<li id="order-button" class="no-bullets">';
                    echo '<a href="../user_login/login.php">';
                    echo '<div class="button-small button-3d button-primary button-pill"">';
                    echo 'Login ';
                    echo '<i class="fas fa-sign-in-alt">';
                    echo '</i></div></a>';
                }
            ?>
            </ul>
         
          <!-- <li id="order-button" class="no-bullets"><a href="#">
            <div class="button-small button-3d button-rounded button">Order Buffet <i class="fas fa-truck"></i></div></a>
          </li> -->
          <!-- <li id="order-button" class="no-bullets"><a href="#">
            <div class="button-small button-3d button-rounded button">Login <i class="fas fa-sign-in-alt"></i></div></a>
          </li> -->
        </div>
      </nav>
    </header>

     <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
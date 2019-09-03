<?php
// Initialize the session
//session_start();

//create an array to set page-level variables
//$page=array();
//$page['title']='Admin Dashboard';  

// Check if the user is logged in, if not then redirect him to login page
// if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//     header("location: ../admin_login/login.php");
//     exit;
// }

//include('../config/database.php');
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

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Min CSS -->
    <link rel="stylesheet" href="vendor/assets/css/bootstrap.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="vendor/assets/css/animate.min.css">
    <!-- IcoFont CSS -->
    <link rel="stylesheet" href="vendor/assets/icofont/icofont.min.css">
    <link rel="stylesheet" href="vendor/assets/icofont.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="vendor/assets/css/owl.carousel.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="vendor/assets/css/magnific-popup.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="vendor/assets/css/main.css">
    <!-- Custom CSS -->
    <link href="vendor/custom/css/buttons.css" rel="stylesheet">
    <link href="vendor/custom/css/style.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="vendor/assets/css/responsive.css">
    <!-- Font Awesome JS -->
    <script defer src="vendor/fontawesome/js/solid.js" ></script>
    <script defer src="vendor/fontawesome/js/fontawesome.js"></script>
    <link rel="stylesheet" href="vendor/fontawesome/css/fontawesome.min.css">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="vendor/assets/img/chef_icon.png">
    <!-- Page title -->
    <title>Buffet Catering</title> 
  </head>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light edu-navbar header-sticky">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img class="site-logo-img--light" src="vendor/assets/img/SpoonfedNYC_Logo.png" rel="logo" alt="Spoonfed"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="index.php">
                        Home
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" href="package.php">
                        Menus
                    </a>
                </li>
                <!-- Dropdown -->
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownEvent" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Promotions
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownEvent">
                        <li><a class="dropdown-item" href="upload-seminar.php">Seminar</a></li>
                        <li><a class="dropdown-item" href="upload-volunteer.php">Volunteer</a></li>
                        <li><a class="dropdown-item" href="upload-reading-request.php">Reading</a></li>
                    </ul>
                </li> -->

                <li class="nav-item dropdown">
                    <a class="nav-link" href="#">
                        Promotions
                    </a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#">
                        About us
                    </a>
                </li>
                
                <li class="nav-item dropdown">
                  <?php 
                  /*  $Drop=$_SESSION["userName"];
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
                  */
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
                        echo '<li class="nav-item  dropdown">';
                        echo '<a href="../user_login/login.php" class="button button-3d button-highlight button-rounded nav-color nav-button-size">';
                        echo 'Login ';
                        echo '<i class="fas fa-sign-in-alt">';
                        echo '</i></a>';
                    }
                  ?>
                </li>
            
            </ul>
        </div>
    </div>
</nav>
<!-- End navbar -->


        <!-- JQuery Min JS -->
        <script src="vendor/assets/js/jquery.1.12.4.min.js"></script>
        <!-- Popper Min JS -->
        <script src="vendor/assets/js/popper.min.js"></script>
        <!-- Bootstrap Min JS -->
        <script src="vendor/assets/js/bootstrap.min.js"></script>
        <!-- Owl Carousel JS -->
        <script src="vendor/assets/js/owl.carousel.min.js"></script>
        <!-- Magnific Popup JS -->
        <script src="vendor/assets/js/jquery.magnific-popup.min.js"></script>
        <!-- WayPonits JS -->
        <script src="vendor/assets/js/waypoints.js"></script>
        <!-- CounterUp JS -->
        <script src="vendor/assets/js/jquery.counterup.min.js"></script>
        <!-- Tilt JS -->
        <script src="vendor/assets/js/tilt.jquery.min.js"></script>
        <!-- Form Validator JS FILES -->
        <script src="vendor/assets/js/form-validator.min.js"></script>
        <!-- Contact Form JS -->
        <script src="vendor/assets/js/contact-form-script.js"></script>
        <!-- Script JS -->
        <script src="vendor/assets/js/script.js"></script>
    
        <!-- Bootstrap core JavaScript-->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" 
        crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="../../assets/js/vendor/popper.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
        <script src="../../assets/js/vendor/holder.min.js"></script>
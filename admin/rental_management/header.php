<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../../admin_login/login.php");
    exit;
}

include('../../config/database.php');
?>

<?php 
  $activePage = basename($_SERVER['PHP_SELF'], ".php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php echo $page['title']; ?></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../vendor/custom/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../vendor/custom/css/style.css">

    <!-- Font Awesome JS -->
    <script defer src="../vendor/custom/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="../vendor/custom/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">

        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3 style="text-align:center">Admin Dashboard</h3>
            </div>

            <ul class="list-unstyled components">
                <p style="text-align: center;"> 
                    <!-- <?php
                        $currentDateTime = date('Y-m-d H:i:s');
                        echo $currentDateTime;
                    ?> -->
                    <a href="../addAdmin.php"><button type="button" class="btn btn-light btn-block"><i class="fas fa-user"></i> &nbsp; Add Administrator</button></a>
                </p>
                
                <li>
                    <a href="../index.php">Home</a>
                </li>

                <li>
                    <a href="../food_management/index.php">Food Management</a>
                </li>

                <li>
                    <a href="../promotion_management/index.php">Promotion Management</a>
                </li>

                <li>
                    <a href="index.php">Furniture Management</a>
                </li>

                <li>
                    <a href="../package_management/index.php">Package Management</a>
                </li>

                <li>
                    <a href="../course_management/index.php">Course Management</a>
                </li>

                <li>
                    <a href="../dishes_management/index.php">Dishes Management</a>
                </li>

                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Admin / User Data</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="../adminData.php">Admin Data</a>
                        </li>
                        <li>
                            <a href="../userData.php">User Data</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>

                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" 
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" 
                    aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="../../admin_login/logout.php"><i class="fas fa-sign-out-alt"></i></a>                                
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        <!-- </div> -->

                <!-- Put Content here -->
                <!-- Put Content here -->
                <!-- Put Content here -->
                <!-- Put Content here -->
                <!-- Put Content here -->
                <!-- Put Content here -->


    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>


<!--header ends-->
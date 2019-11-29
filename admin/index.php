<?php 
    //create an array to set page-level variables
    $page=array();
    $page['title']='Admin Dashboard';
    /*once the file is impoted, the variables set above will become available to it*/

    //include the page header
    include('header.php');
?>
<?php include_once('header.php');?>

<style>
.hero-image {
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(102, 100, 100, 0.5)), url("vendor/assets/img/manage.jpg");
    height: 40%;
    width: 98%;
    margin-left: 1%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
  }

  .hero-text {
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
  }
</style>

<!-- Hero Image -->
<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:50px;color:white"><b>ADMIN DASHBOARD</b></h1>
    <!-- <p style="color:white">FOR YOUR TUMMY & YOUR HEART</p>
    <a href="package.php"><button>VIEW MENU</button></a> -->
  </div>
</div>
<!-- End Hero Image -->

<div class="row" style="margin-top:2%">
    <!-- Food -->
    <?php			
        $ttfood=mysqli_query($db,"select count(foodName)cfood from `food_details`");
            while($rowttfood=mysqli_fetch_array($ttfood)){
    ?>
    <div class="col-sm-4">
        <div class="card text-white bg-dark h-100">
        <div class="card-header">
            Type of Material (Food)
        </div>
        <div class="card-body">
            <p class="card-text">Total : <?php echo $rowttfood['cfood']; ?> Type</p>
        </div>
        </div>
    </div>

    <?php
        }
    ?>
    <!-- End food -->
    
    <!-- Promotion -->
    <?php			
        $ttpromo=mysqli_query($db,"select count(coupon_code)cpromo from `promotion`");
            while($rowttpromo=mysqli_fetch_array($ttpromo)){
    ?>
    <div class="col-sm-4">
        <div class="card text-white bg-dark h-100">
        <div class="card-header">
            Coupon Code 
        </div>
        <div class="card-body">
            <p class="card-text">Total : <?php echo $rowttpromo['cpromo']; ?> Code</p>
        </div>
        </div>
    </div>

    <?php
        }
    ?>
    <!-- End Promotion -->

    <!-- Furniture -->
    <?php			
        $ttfurni=mysqli_query($db,"select count(furniture_name)cfurni from `rental_details`");
            while($rowttfurni=mysqli_fetch_array($ttfurni)){
    ?>
    <div class="col-sm-4">
        <div class="card text-white bg-dark h-100">
        <div class="card-header">
            Furniture (Rental Item) 
        </div>
        <div class="card-body">
            <p class="card-text">Total : <?php echo $rowttfurni['cfurni']; ?> </p>
        </div>
        </div>
    </div>

    <?php
        }
    ?>
    <!-- End Furniture -->

    <!-- Package -->
    <?php			
        $ttpack=mysqli_query($db,"select count(package_name)cpack from `package`");
            while($rowttpack=mysqli_fetch_array($ttpack)){
    ?>
    <div class="col-sm-4" style="margin-top:2%">
        <div class="card text-white bg-dark h-100">
        <div class="card-header">
            Package 
        </div>
        <div class="card-body">
            <p class="card-text">Total : <?php echo $rowttpack['cpack']; ?> Set</p>
        </div>
        </div>
    </div>

    <?php
        }
    ?>
    <!-- End Package -->

    <!-- Course -->
    <?php			
        $ttcourse=mysqli_query($db,"select count(courseName)ccourse from `course`");
            while($rowttcourse=mysqli_fetch_array($ttcourse)){
    ?>
    <div class="col-sm-4" style="margin-top:2%">
        <div class="card text-white bg-dark h-100">
        <div class="card-header">
            Course 
        </div>
        <div class="card-body">
            <p class="card-text">Total : <?php echo $rowttcourse['ccourse']; ?> course</p>
        </div>
        </div>
    </div>

    <?php
        }
    ?>
    <!-- End Course -->

    <!-- Dishes -->
    <?php			
        $ttdis=mysqli_query($db,"select count(dishesName)cdis from `dishes`");
            while($rowttdis=mysqli_fetch_array($ttdis)){
    ?>
    <div class="col-sm-4" style="margin-top:2%">
        <div class="card text-white bg-dark h-100">
        <div class="card-header">
            Dishes 
        </div>
        <div class="card-body">
            <p class="card-text">Total : <?php echo $rowttdis['cdis']; ?> </p>
        </div>
        </div>
    </div>

    <?php
        }
    ?>
    <!-- End Dishes -->

</div>
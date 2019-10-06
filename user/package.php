<?php include_once('header.php');?>


<div class="container" style="margin-top:6%">
    <h1>Standard Buffet Packages</h1>
    <span>Choose from an extensive selection of buffet catering package that’s suitable for your budget, catered to all your celebrations</span>
</div>

<div class="container" style="margin-top:3%">
<div class="row" style="margin: 0 auto">

<?php 
    $r = mysqli_query($db,"SELECT * FROM package ");
    while($row = mysqli_fetch_array($r, MYSQLI_ASSOC)):
?>

<div class="col-sm-4" style="margin-bottom:3%">
    <div class="card" style="width: 20rem;">
    <?php echo '<img src="vendor/assets/img/Package/'.$row["package_img"].'"/>'; ?>
    <!-- <img src="vendor/img/cardpic.png" class="card-img-top" alt="..."> -->
    <div class="card-body">
        <h5 class="card-title"><?php echo $row["package_name"] ?></h5>
        <p class="card-text"><?php echo $row["package_courses"] ?> Courses | min <?php echo $row["min_pax"] ?> Pax</p>
        <p class="card-text">RM <?php echo $row["price"] ?> <sup>/PAX</sup></p>
        <a href="#" class="btn btn-primary">View Details</a>
    </div>
    </div>
</div>
<?php endwhile; ?>

<!-- <div class="col-sm-4">
    <div class="card" style="width: 20rem;">
    <img src="vendor/img/cardpic.png" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Package Set A</h5>
        <p class="card-text">8 Courses | min 30 Pax</p>
        <p class="card-text">RM 15.00 <sup>/PAX</sup></p>
        <a href="#" class="btn btn-primary">View Details</a>
    </div>
    </div>
</div> -->

<!-- <div class="col-sm-4">
    <div class="card" style="width: 20rem;">
    <img src="vendor/img/cardpic.png" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Package Set B</h5>
        <p class="card-text">5 Courses | min 20 Pax</p>
        <p class="card-text">RM 25.00 <sup>/PAX</sup></p>
        <a href="#" class="btn btn-primary">View Details</a>
    </div>
    </div>
</div>

<div class="col-sm-4">
    <div class="card" style="width: 20rem;">
    <img src="vendor/img/cardpic.png" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Package Set C</h5>
        <p class="card-text">11 Courses | min 20 Pax</p>
        <p class="card-text">RM 20.00 <sup>/PAX</sup></p>
        <a href="#" class="btn btn-primary">View Details</a>
    </div>
    </div>
</div>     -->
    
</div> <!--Close row-->
</div><!--Close container-->
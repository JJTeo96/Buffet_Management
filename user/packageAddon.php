<?php include('header.php'); ?>

<?php if(isset($_GET['id'])){
    $packageID=$_GET['id'];
} ?>

<?php if(isset($_GET['invoice'])){
    $invid=$_GET['invoice'];
} ?>

<style>
.form-control-inline {
    min-width: 0;
    width: 90px;
    display: inline;
}
</style>
<!-- Container -->
<div class="container" style="margin-top:3%">
  <div class="row">
    <div class="col-md-3">

    <?php
      $sql = mysqli_query($db,"SELECT * FROM package WHERE package_id = $packageID");
      while($row = mysqli_fetch_array($sql)){
    ?>
    <!-- card -->
    <div class="col-2">
      <div class="card" style="width: 18rem;">
        <p style="text-align:center"><i class="icofont-restaurant"></i> ORDER ITEMS</p><br/>
        <img src="vendor/assets/img/Package/<?php echo $row['package_img'];?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $row['package_name'];?></h5>
                <p class="card-text" id="pricepax">RM <?php echo $row['price'];?> / PAX</p>
            </div>
            <div class="card-footer text-muted">
                <?php
                    $nmpax = mysqli_query($db,"SELECT * FROM invoice WHERE invoice_id = '$invid'");
                    while($nup = mysqli_fetch_array($nmpax)){
                ?>
                <b>Number of Pax:</b> <?php echo $nup['num_pax'];?>
                <?php } ?>
            </div>
      </div>
    </div>
    <?php 
      }
    ?>

    <?php 
        $sql1 = mysqli_query($db,"SELECT * FROM dishes LEFT JOIN orders ON orders.disID = dishes.dishesID
        LEFT JOIN course ON course.courseID=dishes.courseID
        LEFT JOIN invoice ON invoice.invoice_id=orders.invoice_id WHERE invoice.invoice_id='$invid'");
    ?>

    <div class="col-2" style="margin-top:2%">
      <div class="card" style="width: 18rem;">
        <p style="text-align:center"><i class="icofont-restaurant"></i><b>DISHES</b></p><br/>
          <div class="card-body" style="margin-top:-8%">
                <?php while($row = mysqli_fetch_array($sql1, MYSQLI_ASSOC)):?>
                <ul>
                    <p><?php echo $row['courseName'] ?></p>
                    <li><?php echo $row['dishesName'];?></li>
                </ul>  
                <?php endwhile; ?>
            </div>
      </div>
    </div>
    <!--  end card-->
    </div>
    
    <div class="col-md-8 offset-md-1">

    <!-- Add On -->
    <div class="col-10" >
        <!-- <div class="demo demo-left">
            <div class="card text-center">
                <div class="card-body ">
                    <h3>Add On</h3>
                </div>
            </div>
        </div> -->
    </div>
            
    <div class="col-12">
        <div class="demo demo-left">
            <!-- Card -->
            <div class="card">
                <div class="card-header ">
                    Optional Equipment Rental List for Buffet Packages
                </div>
                <div class="card-body">

                <!-- Php Rental -->
                <?php 
                    $r = mysqli_query($db,"SELECT * FROM rental_details ");
                    while($rowr = mysqli_fetch_array($r, MYSQLI_ASSOC)):
                ?>

                <div class="form-group"> 
                    <div class="checkbox"> 
                        <label class="col-md-8">
                            <!-- <input type="checkbox" value="" name="Full set of Porcelain Wares and Glasswares">  -->
                            ◾ <?php echo $rowr['furniture_name']; ?>  
                        </label>
                        <input type="number" class="form-control form-control-inline" 
                        placeholder="Qty" name="Plastic Stools" min="1" max="30"> 
                        <span class="col-md-4">/ RM<?php echo $rowr['rental_price']; ?></span> 
                    </div> 
                </div>
                <?php endwhile; ?>
                <!-- End Php rental -->
               
                </div>
            </div>
            <!-- End Card -->           
        </div>
    </div>
    <!-- end rental -->
    
    <!-- Right table -->
    <div class="col-12" style="margin-top:3%">
        <div class="demo demo-left">
            <!-- Card -->
            <div class="card">
                <div class="card-header ">
                    Delivery Details
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <?php 
                    $userName=$_SESSION['userName'];
                            $userr = mysqli_query($db,"SELECT * FROM user WHERE userName = '$userName'");
                            while($rowu = mysqli_fetch_array($userr)){
                    ?>

                    <!-- Personal Infor -->
                    <i><h6 class="card-title">Personal Information</h6></i>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Name:</label>
                        <div class="col-sm-8">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $_SESSION['userName'] ?>">
                        </div>
                    </div>
                    <!-- End personal Infor -->

                    <!-- Contact Infor -->
                    <i><h6 class="card-title">Contact Information</h6></i>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Email Address:</label>
                        <div class="col-sm-8">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $rowu['userEmail'] ?>">
                        </div>
                        
                        <label for="staticEmail" class="col-sm-3 col-form-label">Contact 1:</label>
                        <div class="col-sm-8">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $rowu['userContact1'] ?>">
                        </div>

                        <label for="staticEmail" class="col-sm-3 col-form-label">Contact 2:</label>
                        <div class="col-sm-8">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $rowu['userContact2'] ?>">
                        </div>
                    </div>
                    <!-- End Contact Infor -->

                    <!-- Delivery Address  -->
                    <i><h6 class="card-title">Delivery address</h6></i>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Address:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="staticEmail" value="<?php echo $rowu['userAddress'] ?>">
                        </div>
                    </div>
                    <!-- End Delivery Address -->
                    <?php } ?>

                    <!-- Delivery Infor  -->
                    <i><h6 class="card-title">Delivery Information</h6></i>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Lift Access:</label>
                        <div class="col-sm-8">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="isNews" value="yes">
                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" 
                                value="no" checked>
                                <label class="form-check-label" for="inlineRadio2">No</label>
                            </div>
                            </div>

                            <label for="staticEmail" class="col-sm-3 col-form-label">Level:</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control form-control-inline" 
                                placeholder="Lvl" name="Plastic Stools" min="1" id="newsSource" disabled=""> 
                            </div>

                            <label for="staticEmail" class="col-sm-3 col-form-label">Delivery Date:</label>
                            <div class="col-sm-8">
                            <input class="form-control" nrequired type="text" name="shootdate" id="shootdate" title="Choose your desired date"
                            style="margin-top:1%">
                            <small id="DateHelp" class="form-text text-muted">Only can choose before 5 Days.</small>
                            </div>

                            <label for="staticEmail" class="col-sm-3 col-form-label">Level:</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control form-control-inline" 
                                placeholder="Lvl" name="Plastic Stools" min="1" id="newsSource" disabled=""> 
                            </div>
                        </div>
                    </div>
	            
                    <!-- End Delivery Infor -->



                </div>
                <!-- End Card body -->
            </div>
            <!-- End Card -->           
        </div>
    </div>
    <!-- End right table -->
    
    </div>
    <?php include_once('footer.php');?>
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
    $('#isNews').change(function(){
    $("#newsSource").prop("disabled", !$(this).is(':checked'));
    });

    $( function() {
	   	$( "#shootdate" ).datepicker({
	   		minDate: 5
	   	});
	});
    </script>

    
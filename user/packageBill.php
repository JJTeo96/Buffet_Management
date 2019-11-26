<?php include('header.php'); ?>

<?php if(isset($_GET['id'])){
    $packageID=$_GET['id'];
} ?>

<?php if(isset($_GET['invoice'])){
    $invid=$_GET['invoice'];
} ?>

<!-- Material Design Bootstrap -->
<link href="vendor/assets/MDB/css/mdb.min.css" rel="stylesheet">
<link href="vendor/assets/MDB/css/style.css" rel="stylesheet">

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
        <p style="text-align:center"><i class="icofont-restaurant"></i> ORDERED ITEMS</p><br/>
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
                    Selected Equipment Rental List
                </div>
                <div class="card-body">

                <!-- Php Rental -->
                <?php 
                    $r = mysqli_query($db,"SELECT * FROM rental_details 
                    LEFT JOIN rental_furni ON rental_furni.rental_id=rental_details.rental_id
                    LEFT JOIN invoice ON invoice.invoice_id=rental_furni.invoice_id WHERE invoice.invoice_id='$invid' 
                    AND rental_furni.quantity NOT LIKE '0'");
                    while($rowr = mysqli_fetch_array($r, MYSQLI_ASSOC)):
                ?>
                
                <div class="form-group row">
                        <label for="staticEmail" class="col-md-8 col-form-label">◾ <?php echo $rowr['furniture_name']; ?> : </label>
                        <div class="col-sm-3">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $rowr['quantity']; ?> ">
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
                    Summary
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <?php 
                    $userName=$_SESSION['userName'];
                            $userr = mysqli_query($db,"SELECT * FROM user
                            LEFT JOIN invoice ON invoice.userID=user.userID
                            WHERE user.userName = '$userName' AND invoice.invoice_id='$invid'");
                            while($rowui = mysqli_fetch_array($userr)){
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
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $rowui['userEmail'] ?>">
                        </div>
                        
                        <label for="staticEmail" class="col-sm-3 col-form-label">Contact 1:</label>
                        <div class="col-sm-8">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $rowui['userContact1'] ?>">
                        </div>

                        <label for="staticEmail" class="col-sm-3 col-form-label">Contact 2:</label>
                        <div class="col-sm-8">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $rowui['userContact2'] ?>">
                        </div>
                    </div>
                    <!-- End Contact Infor -->

                    <!-- Delivery Address  -->
                    <i><h6 class="card-title">Delivery address</h6></i>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Address:</label>
                        <div class="col-sm-8">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $rowui['addressD'] ?>">
                        </div>
                    </div>
                    <!-- End Delivery Address -->
                    

                    <!-- Delivery Infor  -->
                    <i><h6 class="card-title">Delivery Information</h6></i>
                    <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label">Level:</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control-plaintext form-control-inline" 
                                placeholder="Lvl" name="" min="1" id="newsSource" readonly value="<?php echo $rowui['levelFloor'] ?>"> 
                            </div>

                            <label for="staticEmail" class="col-sm-3 col-form-label">Delivery Date:</label>
                            <div class="col-sm-8">
                            <input   type="text" name="shootdate" id="" title="Choose your desired date"
                            style="margin-top:1%" value="<?php echo $rowui['eventDate'] ?>" readonly class="form-control-plaintext">
                            </div>

                            <label for="staticEmail" class="col-sm-3 col-form-label">Delivery Time:</label>
                            <div class="col-sm-8">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $rowui['eventTime'] ?>">
                            </div>
                        <!-- End Delivery Infor -->
                    </div>

                    <!-- Other Infor -->
                    <i><h6 class="card-title">Other Information</h6></i>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Promotion Code:</label>
                        <div class="col-sm-8">
                            <input type="text" readonly class="form-control-plaintext" id="" value="<?php echo $rowui['promotionCode'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Remark:</label>
                        <div class="col-sm-8">
                            <textarea class="form-control-plaintext" readonly id="exampleFormControlTextarea1" rows="3" ><?php echo $rowui['remark'] ?></textarea>
                        </div>
                    </div>
                    <!-- End Other Infor -->
                    <?php } ?>
                    </div>

                </div>
                <!-- End Card body -->
            </div>
            <!-- End Card -->           
        </div>
        
        

    </div>
    <!-- End right table -->

    

    <div class="col-4" style="margin-top: 3%;margin-left:55%;padding-bottom: 5%;" data-push-left="off-3" data-push-right="off-3" >
        <div class="demo demo-left">
            <div class="card text-center">
                <input type="submit" class="button button-royal button-rounded button-giant" value="Submit &raquo;"
                name="submitt">
            </div>
        </div>
    </div>
    
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

    
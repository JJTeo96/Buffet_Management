<?php include('header.php'); ?>

<?php if(isset($_GET['id'])){
    $packageID=$_GET['id'];
} ?>

<?php if(isset($_GET['invoice'])){
    $invid=$_GET['invoice'];
} ?>

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
                <div class="form-group" style="clear: both;"> 
                    <div class="checkbox"> 
                        <label class="col-md-8">
                            <input type="checkbox" value="30" name="Full set of Porcelain Wares and Glasswares" 
                            ng-change="change()" ng-model="addon1" class="ng-pristine ng-untouched ng-valid ng-empty"> 
                                Full set of Porcelain Wares and Glasswares (includes Stainless Steel Cutleries) 
                        </label> 
                        <span class="col-md-4">S$5+ / per pax</span> 
                    </div> 
                </div>

                <div class="form-group" style="clear: both;"> 
                    <div class="checkbox"> 
                        <label class="col-md-6">
                            <input type="checkbox" value="" ng-model="need_stools" 
                            ng-change="change()" class="ng-pristine ng-untouched ng-valid ng-empty">
                            Plastic Stools (Max. 30 pieces)
                        </label> <span class="col-md-2">
                            <input type="text" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" 
                            placeholder="qty" name="Plastic Stools" min="1" max="30" ng-disabled="!need_stools" 
                            ng-change="change()" ng-model="addon3" required="" disabled="disabled">
                            </span> <span class="col-md-4">S$1+ / each</span> </div> </div>
                            
                            <!-- Php rental -->
                            <?php 
                                $r = mysqli_query($db,"SELECT * FROM rental_details ");
                                while($row = mysqli_fetch_array($r, MYSQLI_ASSOC)):
                                    // $id=$row['package_id'];
                            ?>
                                <!--Checkbox -->
                                <!-- <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="<?php echo $row['furniture_name']; ?>" 
                                    value="<?php echo $row['furniture_name']; ?>" name="Rental">
                                    <label class="custom-control-label" for="<?php echo $row['furniture_name']; ?>"><?php echo $row['furniture_name']; ?></label>
                                </div> -->
                                <!-- End checkbox -->
                                
                                <div class="form-group">
                                    <label for="<?php echo $row['furniture_name']; ?>"><?php echo $row['furniture_name']; ?>
                                    <i class="fas fa-arrow-circle-down"></i></label>
                                    <input type="text" class="form-control" value="<?php echo $row['rental_id']; ?>"  name="rental_id" hidden >
                                    <input type="number" class="form-control" id="<?php echo $row['rental_id']; ?>" name="quantity" >
                                </div>
                                <?php endwhile; ?>
                            <!-- End Php rental -->
                            </div>
                        </div>
                    <!-- End Card -->           
                </div>
            </div>
    <!-- end rental -->
    
    </div>
    <div class="col-md-3"></div>
  </div>
  <!-- <div class="row">
    <div class="col-md-3 offset-md-3">.col-md-3 .offset-md-3</div>
    <div class="col-md-3 offset-md-3">.col-md-3 .offset-md-3</div>
  </div>
  <div class="row">
    <div class="col-md-6 offset-md-3">.col-md-6 .offset-md-3</div>
  </div>
</div> -->
<!-- End Container -->

<div class="col-10" style="margin-top:5%">
                <div class="demo demo-left">
                    <div class="card text-center">
                        <div class="card-body ">
                            <h3>Rental Services</h3>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-10">
                <div class="demo demo-left">
                    <!-- Card -->
                    <div class="card">
                            <div class="card-header ">
                                Rental Item
                            </div>
                            <div class="card-body"> 
                            
                            <!-- Php rental -->
                            <?php 
                                $r = mysqli_query($db,"SELECT * FROM rental_details ");
                                while($row = mysqli_fetch_array($r, MYSQLI_ASSOC)):
                                    // $id=$row['package_id'];
                            ?>
                                <!--Checkbox -->
                                <!-- <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="<?php echo $row['furniture_name']; ?>" 
                                    value="<?php echo $row['furniture_name']; ?>" name="Rental">
                                    <label class="custom-control-label" for="<?php echo $row['furniture_name']; ?>"><?php echo $row['furniture_name']; ?></label>
                                </div> -->
                                <!-- End checkbox -->
                                
                                <div class="form-group">
                                    <label for="<?php echo $row['furniture_name']; ?>"><?php echo $row['furniture_name']; ?>
                                    <i class="fas fa-arrow-circle-down"></i></label>
                                    <input type="text" class="form-control" value="<?php echo $row['rental_id']; ?>"  name="rental_id" hidden >
                                    <input type="number" class="form-control" id="<?php echo $row['rental_id']; ?>" name="quantity" >
                                </div>
                                <?php endwhile; ?>
                            <!-- End Php rental -->
                            </div>
                        </div>
                    <!-- End Card -->           
                </div>
            </div>

            
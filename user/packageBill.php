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
<script src="vendor/assets/js/ip.js"></script>


<style>
.form-control-inline {
    min-width: 0;
    width: 90px;
    display: inline;
}
#p{
    color:black;
}
</style>

<form action="packageBill.php" method="POST">
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
                    AND rental_furni.quantityFurni NOT LIKE '0'");
                    while($rowr = mysqli_fetch_array($r, MYSQLI_ASSOC)):
                ?>
                
                <div class="form-group row">
                        <label for="staticEmail" class="col-md-8 col-form-label">◾ <?php echo $rowr['furniture_name']; ?> : </label>
                        <div class="col-sm-3">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $rowr['quantity']; ?>" hidden>
                            <p id="p">Qty: <?php echo $rowr['quantityFurni']; ?> / RM<?php echo $rowr['rental_price']; ?></p>
                            <input type="text" name="leftquan" value="<?php echo $rowr['quantityFurni']; ?>" hidden>
                        </div>
                </div>
                <?php $leftquanti=$rowr['quantity']-$rowr['quantityFurni']; ?>
                <input type="text" id="quant" value="<?php echo $leftquanti; ?>" hidden>
                <input type="text" id="renID" value="<?php echo $rowr['rental_id']; ?>" hidden>
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
                            <input type="text" id="useridd" value="<?php echo $_SESSION['userID'] ?>" hidden>
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
                            <input type="text" readonly class="form-control-plaintext" id="promocode" value="<?php echo $rowui['promotionCode'] ?>">
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
        
        <!-- Payment Details-->
            <!-- Right table -->
            <div class="col-12" style="margin-top:3%">
                <div class="demo demo-left">
                    <!-- Card -->
                    <div class="card">
                        <div class="card-header ">
                            Bill Details
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <?php 
                                    $bill = mysqli_query($db,"SELECT * FROM invoice
                                    WHERE invoice_id='$invid'");
                                    while($rowBill = mysqli_fetch_array($bill)){
                            ?>

                            <!-- Bill Infor -->
                            <!-- <i><h6 class="card-title">Personal Information</h6></i> -->
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-6 col-form-label">Menu:</label>
                                <div class="col-sm-4">
                                    <!-- <input type="text" style="text-align:right" readonly class="form-control-plaintext" 
                                    id="" value="<?php echo $rowBill['priceMenu'] ?>"> -->
                                    <input type="text" id="priceMe" value="<?php echo $rowBill['priceMenu'] ?>" hidden>
                                    <p id="p">RM <?php echo $rowBill['priceMenu'] ?></p>
                                </div>

                                <label for="staticEmail" class="col-sm-6 col-form-label">Transport:</label>
                                <div class="col-sm-4">
                                    <!-- <input type="text" style="text-align:right" readonly class="form-control-plaintext" 
                                    id="" value="50"> -->
                                    <input type="text" id="trans" value="50" hidden>
                                    <p id="p" >RM 50</p>
                                </div>
                                
                                <!-- Rental -->
                                <?php 
                                    $ren = mysqli_query($db,"SELECT SUM(quantityFurni*rental_price)renTotal FROM rental_details
                                    LEFT JOIN rental_furni ON rental_furni.rental_id=rental_details.rental_id
                                    LEFT JOIN invoice ON invoice.invoice_id=rental_furni.invoice_id
                                    WHERE rental_furni.invoice_id='$invid'");
                                    while($rowRen = mysqli_fetch_array($ren)){
                                        // $RentalPrice=$rowRen['quantityFurni']*$rowRen['rental_price'];
                                        // $TotalRenPrice+=$RentalPrice;
                                ?>

                                <label for="staticEmail" class="col-sm-6 col-form-label">Optional Equipment(rental):</label>
                                <div class="col-sm-4">
                                    <input type="text" id="rentt" value="<?php echo $rowRen['renTotal'] ?>" hidden> 
                                    <p id="p">RM<?php echo $rowRen['renTotal'] ?></p>
                                    <!-- <input type="text" style="text-align:right" readonly class="form-control-plaintext" 
                                    id="" value="<?php echo $rowRen['renTotal'] ?>"> -->
                                </div>
                                
                                <!-- End rental -->

                                <label for="staticEmail" class="col-sm-6 col-form-label">Subtotal:</label>
                                <div class="col-sm-4">
                                    <?php $subTotal= $rowBill['priceMenu']+$rowRen['renTotal']+50 ?>
                                    <input type="text" id="subtt" value="<?php echo $subTotal?>" hidden>
                                    <!-- <input type="text" style="text-align:right" readonly class="form-control-plaintext" 
                                    id="" value="<?php echo $subTotal ?>"> -->
                                    <p id="p">RM <?php echo $subTotal ?></p>
                                </div>

                                 <!-- Discount -->
                                 <?php 
                                    $disc = mysqli_query($db,"SELECT * FROM promotion
                                    LEFT JOIN invoice ON invoice.promotionCode=promotion.coupon_code
                                    WHERE invoice_id='$invid'");
                                    while($rowDisc = mysqli_fetch_array($disc)){
                                ?>
                                <label for="staticEmail" class="col-sm-6 col-form-label">Discount:</label>
                                <div class="col-sm-4">
                                    <?php $discPrice= $subTotal*$rowDisc['discount_rate']/100 ?>
                                    <!-- <input type="text" style="text-align:right" readonly class="form-control-plaintext" 
                                    id="" value="<?php echo $rowBill['priceMenu'] ?>"> -->
                                    <input type="text" id="disco" value="<?php echo $discPrice?>" hidden>
                                    <p id="p">RM <?php echo $discPrice ?></p>
                                </div>
                                <?php }?>
                                <!-- End Discount -->

                                <label for="staticEmail" class="col-sm-6 col-form-label">SST 6%:</label>
                                <div class="col-sm-4">
                                    <?php 
                                    $afterDis=$subTotal-$discPrice;
                                    $sst= $afterDis*6/100 ?>
                                    <!-- <input type="text" style="text-align:right" readonly class="form-control-plaintext" 
                                    id="" value="<?php echo $sst ?>"> -->
                                    <input type="text" id="ssttt" value="<?php echo $sst?>" hidden>
                                    <p id="p">RM <?php echo $sst ?></p>
                                </div>

                                <label for="staticEmail" class="col-sm-6 col-form-label"><b>Grand Total:</b></label>
                                <div class="col-sm-4">
                                    <?php $GrandTotal= $subTotal+$sst ?>
                                    <input type="text" style="text-align:right" readonly class="form-control-plaintext" 
                                    id="" value="<?php echo $GrandTotal ?>" hidden>
                                    <b><p id="p">RM <?php echo $GrandTotal ?></p></b>
                                </div>

                            </div>
                            <!-- End Bill Infor -->
                            <?php }?>
                            
                            <?php } ?>
                            </div>

                        </div>
                        <!-- End Card body -->
                    </div>
                    <!-- End Card -->           
                </div>
            </div>
            <!-- End right table -->
        <!-- End Payment Details -->

    </div>
    <!-- End right table -->

    
    <input type="text" id="inv" value="<?php echo $invid ?>" hidden>
    <input type="text" id="tt" value="<?php echo $GrandTotal ?>" hidden>

    

    

    <div class="col-4" style="margin-top: 3%;margin-left:55%;padding-bottom: 5%;" data-push-left="off-3" data-push-right="off-3" >
        <div class="demo demo-left">
            
                <!-- Paypal -->
                <div id="paypal-button">

                <script src="https://www.paypalobjects.com/api/checkout.js"></script>

                <script>
                    paypal.Button.render({

                        env: 'sandbox', // Or 'sandbox'

                        client: {
                            // sandbox id
                            sandbox:    'AZ_2DK0P5kCtIu24a2jZuDDVRKLs2WndyuCCrbV-ql6X8pi_X-YSws74ggcic5MqvInSXr9s4Xy0vGxl'
                        },

                        commit: true, // Show a 'Pay Now' button

                        payment: function(data, actions) {
                            return actions.payment.create({
                                payment: {
                                    transactions: [
                                        {
                                            // data that you want to be noted
                                            amount: { total: '<?php echo $GrandTotal ?>', currency: 'MYR' },
                                            invoice_number: '<?php echo $invid ?>'
                                        }
                                    ]
                                }
                            });
                        },

                        onAuthorize: function(data, actions) {
                            return actions.payment.execute().then(function(payment) {
                                window.alert('Payment Complete!');

                                $(document).ready(function (e) {
                                // var invoice = document.getElementById("inv");
                                // var price = document.getElementById("tt");
                                
                                // Payment
                                var priceMe = document.getElementById("priceMe").value;
                                var trans = document.getElementById("trans").value;
                                var rentt = document.getElementById("rentt").value;
                                var subtt = document.getElementById("subtt").value;
                                var disco = document.getElementById("disco").value;
                                var ssttt = document.getElementById("ssttt").value;
                                var invoice = document.getElementById("inv").value;
                                var price = document.getElementById("tt").value;
                                // End payment

                                var quant = document.getElementById("quant").value;
                                var renID = document.getElementById("renID").value;
                                
                                var promocode = document.getElementById("promocode").value;
                                var useridd = document.getElementById("useridd").value;
                        
                                setTimeout(function () {
                                    $.ajax({
                                        url: address + "paypal.php",
                                        type: "POST",
                                        data: { price: price, invoice: invoice, quant:quant,renID:renID,priceMe:priceMe,trans:trans,
                                            rentt:rentt,subtt:subtt,disco:disco,ssttt:ssttt, promocode:promocode, useridd:useridd },
                                        success: function (data) {
                                            alert(data);
                                            window.location.href = '';
                                        }
                                    });
                                }, 5000);
                            });
                                // The payment is complete!
                                // You can now show a confirmation message to the customer
                            });
                        }

                    }, '#paypal-button');
			    </script>
                <!-- End Paypal -->

                <!-- <input type="submit" class="button button-royal button-rounded button-giant" value="Submit &raquo;"
                name="submitt"> -->
            
        </div>
    </div>
    
    </div>
    </form>
    <?php include_once('footer.php');?>
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
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
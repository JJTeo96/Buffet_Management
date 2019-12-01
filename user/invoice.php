<!-- <p>SpoonFedNYC</p>
<p>PTD 64888, Jalan Selatan Utama, km 15, 81300 Skudai, Johor</p>
<p>+607 5586605</p> -->
<?php include('../config/database.php');?>
<?php if(isset($_GET['userID'])){
    $userID=$_GET['userID'];
    // echo $packageID;
} ?>
<?php if(isset($_GET['invoiceID'])){
    $invoiceID=$_GET['invoiceID'];
    // echo $invoiceID;
    // echo "asd";
} ?>
<style>
    .invoice-title h2, .invoice-title h3 {
        display: inline-block;
    }

    .table > tbody > tr > .no-line {
        border-top: none;
    }

    .table > thead > tr > .no-line {
        border-bottom: none;
    }

    .table > tbody > tr > .thick-line {
        border-top: 2px solid;
    }
</style>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<?php
      $sql = mysqli_query($db,"SELECT * FROM invoice 
      LEFT JOIN user ON user.userID=invoice.userID
      LEFT JOIN package ON package.package_id=invoice.packageID
    --   LEFT JOIN package_dishes ON package_dishes.pk_dishesID=package.pk_dishesID
    --   LEFT JOIN dishes ON dishes.dishesID=package_dishes.dishesID
      WHERE invoice_id='$invoiceID'");
      while($row = mysqli_fetch_array($sql)){
?>
     
<div class="container">
    <div class="row">
        <div class="col-xs-12">
        	<div class="invoice-title">
    			<h2>INVOICE</h2><h3 class="pull-right">Order # <?php echo $row['invoice_id'];?></h3>
    		</div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    				<strong>Billed To:</strong><br>
                        <?php echo $row['userName'];?><br>
                        <?php echo $row['userAddress'];?><br>
                        <?php echo $row['userContact1'];?><br>
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
        			<strong>Shipped To:</strong><br>
                        <?php echo $row['userName'];?><br>
                        <?php echo $row['userAddress'];?><br>
                        <?php echo $row['userContact1'];?><br>
    				</address>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-xs-6">
                    <address>
    					<strong>Payment Method:</strong><br>
    					Paypal<br>
    					<?php echo $row['userEmail'];?>
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
    					<strong>Order Date:</strong><br>
    					<?php echo $row['createDate'];?><br><br><td>
    				</address>
    			</div>
    		</div>
    	</div>
    </div>
    
    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Ordered summary</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
        							<td><strong>Item</strong></td>
        							<td class="text-center"><strong>Price</strong></td>
        							<td class="text-center"><strong>Quantity</strong></td>
        							<td class="text-right"><strong>Totals</strong></td>
                                </tr>
    						</thead>
    						<tbody>
                                
                                <!-- foreach ($order->lineItems as $line) or some such thing here -->
    							<tr>
                                    <td>Package:  <?php echo $row['package_name'];?><br>
                                        <?php
                                            $order = mysqli_query($db,"SELECT * FROM dishes 
                                            LEFT JOIN orders ON orders.disID=dishes.dishesID
                                            LEFT JOIN invoice ON invoice.invoice_id=orders.invoice_id
                                            --   LEFT JOIN package_dishes ON package_dishes.pk_dishesID=package.pk_dishesID
                                            --   LEFT JOIN dishes ON dishes.dishesID=package_dishes.dishesID
                                            WHERE invoice.invoice_id='$invoiceID'");
                                            while($roworder = mysqli_fetch_array($order)){
                                        ?>
                                        -><?php echo $roworder['dishesName']?><br>
                                        <?php } ?><br>
                                        Numper of Pax: <?php echo $row['num_pax'];?>
                                        <br>
                                        <br>
                                        Event Date: <?php echo $row['eventDate'];?><br>
                                        Delivery Time: <?php echo $row['eventTime'];?>
                                    </td>
    								<td class="text-center">RM<?php echo $row['priceMenu'];?></td>
    								<td class="text-center">1</td>
    								<td class="text-right">RM<?php echo $row['priceMenu'];?></td>
                                </tr>
                               

                                <tr>
                                    <td>
                                        <?php
                                            $payment = mysqli_query($db,"SELECT * FROM payment 
                                            LEFT JOIN invoice ON invoice.invoice_id=payment.invoice_id
                                            WHERE invoice.invoice_id='$invoiceID'");
                                            while($rowpay = mysqli_fetch_array($payment)){
                                        ?>
                                        Transport<br>
                                        
                                    </td>
                                        
    								<td class="text-center">RM<?php echo $rowpay['trans']?></td>
    								<td class="text-center">1</td>
    								<td class="text-right">RM<?php echo $rowpay['trans']?></td>
                                </tr>
                                
                                <tr>
                                    <td><b>Rental List</b><br>
                                    <?php
                                            $rental = mysqli_query($db,"SELECT * FROM rental_details 
                                            LEFT JOIN rental_furni ON rental_furni.rental_id=rental_details.rental_id
                                            LEFT JOIN invoice ON invoice.invoice_id=rental_furni.invoice_id
                                            WHERE invoice.invoice_id='$invoiceID' AND rental_furni.quantityFurni NOT LIKE '0'");
                                            while($rowren = mysqli_fetch_array($rental)){
                                    ?> 
                                    </td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td><?php echo $rowren['furniture_name']?></td>
                                    <td class="text-center">RM<?php echo $rowren['rental_price']?></td>
                                    <td class="text-center"><?php echo $rowren['quantityFurni']?></td>
                                    <?php $total1ren=$rowren['rental_price']*$rowren['quantityFurni']?>
                                    <td class="text-right">RM<?php echo $total1ren?></td>
                                    <?php } ?>
                                </tr>
                                
    							<tr>
    								<td class="thick-line"></td>
    								<td class="thick-line"></td>
    								<td class="thick-line text-center"><strong>Subtotal</strong></td>
    								<td class="thick-line text-right">RM<?php echo $rowpay['subTotal'];?></td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Discount</strong></td>
    								<td class="no-line text-right">RM<?php echo $rowpay['discount'];?></td>
                                </tr>
                                <tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>SST (6%)</strong></td>
    								<td class="no-line text-right">RM<?php echo $rowpay['sst'];?></td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Total</strong></td>
                                    <td class="no-line text-right">RM<?php echo $rowpay['price'];?></td>
                                    <?php } ?>
    							</tr>
    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>
<?php 
      }
    ?>
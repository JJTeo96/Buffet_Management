<?php include('header.php'); ?>

<!--Head-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<!-- <link rel="stylesheet" href="../vendor/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Material Design Bootstrap -->
<!-- <link href="vendor/assets/MDB/css/mdb.min.css" rel="stylesheet">
<link href="vendor/assets/MDB/css/style.css" rel="stylesheet"> -->

<form method="POST" action="orderedRecord.php">
<div class="">
	<div style="height:50px;"></div>
	<div class="well" style="margin:auto; padding:auto; width:80%;">
	<h1 style="text-align:center">Order History</h1>
		<div style="height:50px;"></div>
		<table class="table table-striped table-bordered table-hover" id="table_id">
			<thead>
				<th>Package Name</th>
				<th>Number of Pax</th>
				<th>Total Price</th>
				<th>Invoice No</th>
				<th>Bill Date</th>
				<th>Print</th>
			</thead>
            
			<tbody>
			<?php
				include('../config/database.php');
        $userID=$_SESSION['userID'];
        $invoiceID=$row['invoice_id'];
        $query=mysqli_query($db,"select * from `invoice`
        LEFT JOIN package ON package.package_id=invoice.packageID 
        LEFT JOIN payment ON payment.invoice_id=invoice.invoice_id
        WHERE userID='$userID'");
				while($row=mysqli_fetch_array($query)){
					?>
					<tr>
						<td><?php echo $row['package_name']; ?></td>
						<td><?php echo $row['num_pax']; ?></td>	
						<td><?php echo $row['price']; ?></td>	
						<td><?php echo $row['invoice_id']; ?></td>	
						<td><?php echo $row['createDate']; ?></td>	
						<td>
            <a href="invoice.php?userID=<?php echo $userID; ?>&invoiceID=<?php echo $row['invoice_id']; ?>" class="btn btn-warning"> Invoice</a> || 
            <a href="deliveryOrder.php?userID=<?php echo $userID; ?>&invoiceID=<?php echo $row['invoice_id']; ?>" class="btn btn-danger"> Delivery Order</a>	
					</tr>
					<?php
				}
			
			?>
			</tbody>
		</table>
	</div>
</div>
</form>

<script src="https:////cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

<script>
    $(document).ready(function() {
    $('#table_id').DataTable( {
        "order": [[ 4, "desc" ]]
    } );
} );
</script>

</body>

<?php include('footer.php'); ?>

</html>

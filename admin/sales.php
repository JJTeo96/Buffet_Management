<?php 
    //create an array to set page-level variables
    $page=array();
    $page['title']='Sales Report';
    /*once the file is impoted, the variables set above will become available to it*/

    //include the page header
    include('header.php');
?>

<!--Head-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<!-- <link rel="stylesheet" href="../vendor/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Material Design Bootstrap -->
<link href="vendor/assets/MDB/css/mdb.min.css" rel="stylesheet">
<link href="vendor/assets/MDB/css/style.css" rel="stylesheet">

<form method="POST" action="sales.php">
<div class="container">
	<div style="height:50px;"></div>
	<div class="well" style="margin:auto; padding:auto; width:80%;">
	<h1 style="text-align:center">Sales </h1>
        <div style="height:50px;"></div>
        
		<table class="table table-striped table-bordered table-hover" id="table_id">
			<thead>
				<th>Invoice ID</th>
				<th>Package_name</th>
				<th>Number of Pax</th>
				<th>Date</th>
				<th>Price</th>
			</thead>
            
			<tbody>
			<?php
				include('../config/database.php');
				
                $query=mysqli_query($db,"select * from `invoice` 
                LEFT JOIN package ON package_id=invoice.packageID
                LEFT JOIN payment ON payment.invoice_id=invoice.invoice_id");
				while($row=mysqli_fetch_array($query)){
					?>
					<tr>
                        <input type="textbox"  value="<?php echo $row['pro_id']; ?>" name="pro_id" hidden>
						<td><?php echo $row['invoice_id']; ?></td>
						<td><?php echo $row['package_name']; ?></td>	
						<td><?php echo $row['num_pax']; ?></td>	
						<td><?php echo $row['createDate']; ?></td>	
						<td><?php echo $row['price']; ?></td>	
					</tr>
					<?php
				}
			
			?>
			</tbody>
		</table>
	</div>
</div>
</form>

<!-- <script src="https:////cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css"> -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" />


<script src="//code.jquery.com/jquery-1.12.3.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>

<script>
    $(document).ready(function() {
    $('#table_id').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'excelFlash', 'excel', 'pdf', 'print',{
            text: 'Reload',
            action: function ( e, dt, node, config ) {
                dt.ajax.reload();
            }
        }
        ]
    } );
} );
</script>

</body>
</html>



<?php 
    //create an array to set page-level variables
    $page=array();
    $page['title']='Rental Services Management';
    /*once the file is impoted, the variables set above will become available to it*/

    //include the page header
    include('header.php');
?>
<?php include_once('header.php');?>

<!--Head-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<!-- <link rel="stylesheet" href="../vendor/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="container">
	<div style="height:50px;"></div>
	<h1 style="text-align:center">Furniture Management</h1>
	<div class="well" style="margin:auto; padding:auto; width:80%;">
		<span class="pull-left"><a href="#addnew" data-toggle="modal" class="btn btn-primary">
        <span class="glyphicon glyphicon-plus"></span> Add New</a></span>

		<div style="height:50px;"></div>
		<table class="table table-striped table-bordered table-hover" id="table_id">
			<thead>
				<th>Furniture ID</th>
				<th>Furniture Name</th>
				<th>Quantity</th>
				<th>Rental Price</th>
				<th>Action</th>
			</thead>
            
			<tbody>
			<?php
				include('conn.php');
				
				$query=mysqli_query($conn,"select * from `rental_details`");
				while($row=mysqli_fetch_array($query)){
					?>
					<tr>
						<td><?php echo $row['rental_id']; ?></td>
						<td><?php echo $row['furniture_name']; ?></td>
						<td><?php echo $row['quantity']; ?></td>
						<td><?php echo $row['rental_price'];?></td>
						<td>
							<a href="#edit<?php echo $row['rental_id']; ?>" data-toggle="modal" class="btn btn-warning"> Edit</a> || 
							<a href="#del<?php echo $row['rental_id']; ?>" data-toggle="modal" class="btn btn-danger"> Delete</a> ||
                            <a href="#view<?php echo $row['rental_id']; ?>" data-toggle="modal" class="btn btn-info"> View</a>
							<?php include('button.php'); ?>
						</td>
					</tr>
					<?php
				}
			
			?>
			</tbody>
		</table>
	</div>
    
	<?php include('add_modal.php'); ?>

</div>

<script src="https:////cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

<script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
</script>

</body>
</html>
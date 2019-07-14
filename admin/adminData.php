<?php 
    //create an array to set page-level variables
    $page=array();
    $page['title']='Admin Management';
    /*once the file is impoted, the variables set above will become available to it*/

    //include the page header
    include('header.php');
?>

<!--Head-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<!-- <link rel="stylesheet" href="../vendor/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="container">
	<div style="height:50px;"></div>
	<div class="well" style="margin:auto; padding:auto; width:80%;">
	<h1 style="text-align:center">Admin Name List</h1>
		<div style="height:50px;"></div>
		<table class="table table-striped table-bordered table-hover" id="table_id">
			<thead>
				<th>Admin ID</th>
				<th>Name</th>
			</thead>
            
			<tbody>
			<?php
				include('../config/database.php');
				
				$query=mysqli_query($db,"select * from `admin`");
				while($row=mysqli_fetch_array($query)){
					?>
					<tr>
						<td><?php echo $row['adminID']; ?></td>
						<td><?php echo $row['adminName']; ?></td>	
					</tr>
					<?php
				}
			
			?>
			</tbody>
		</table>
	</div>
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
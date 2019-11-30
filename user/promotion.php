<?php include_once('header.php');?>

<?php
	if(isset($_POST['getCp'])){
        $getCp=$_POST['getCp'];
        $userID=$_SESSION['userID'];
            
        // mysqli_query($conn,"insert into promotionget (coupon_code, userID) 
        // values ('$getCp', '$userID')");
        
        $promoGet="INSERT INTO promotionget SET coupon_code='$getCp',userID='$userID'";
        $query = $db->query($promoGet);

        if($query){
            echo "<script>alert('Success !');</script>";
            echo "<script>window.location.assign('promotionApply.php');</script>";
            // echo "<script>window.location.assign('packageAddon.php');</script>";
        }else {
            echo "<script>alert('Fail !');</script>";
            // echo "<script>window.location.assign('combine-table.php');</script>";
		}
		$promoQuan="UPDATE promotion SET quantity= quantity - 1 WHERE coupon_code='$getCp'";
        $queryQuan = $db->query($promoQuan);
    }
	
?>

<!--Head-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<!-- <link rel="stylesheet" href="../vendor/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Material Design Bootstrap -->
<link href="vendor/assets/MDB/css/mdb.min.css" rel="stylesheet">
<link href="vendor/assets/MDB/css/style.css" rel="stylesheet">

<form method="POST" action="promotion.php">
<div class="container">
	<div style="height:50px;"></div>
	<div class="well" style="margin:auto; padding:auto; width:80%;">
	<h1 style="text-align:center">Promotion </h1>
		<div style="height:50px;"></div>
		<table class="table table-striped table-bordered table-hover" id="table_id">
			<thead>
				<th>Coupon Name</th>
				<th>Discount Rate</th>
				<th>Quantity</th>
				<th style="color:red">Get your Coupon Code HERE !!</th>
			</thead>
            
			<tbody>
			<?php
				include('../config/database.php');
				
				$query=mysqli_query($db,"select * from `promotion`");
				while($row=mysqli_fetch_array($query)){
					?>
					<tr>
                        <input type="textbox"  value="<?php echo $row['pro_id']; ?>" name="pro_id" hidden>
						<td><?php echo $row['coupon_code']; ?></td>
						<td><?php echo $row['discount_rate']; ?>%</td>	
						<td><?php echo $row['quantity']; ?></td>	
						<td><input type="submit" value="<?php echo $row['coupon_code']; ?>" name="getCp"  class="btn btn-info"/></td>	
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
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
</script>

</body>
</html>
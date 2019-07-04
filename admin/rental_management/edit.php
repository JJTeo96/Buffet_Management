<?php
	include('conn.php');
	
	$id=$_GET['id'];
	
	$furniture_name=$_POST['furniture_name'];
	$rental_price=$_POST['rental_price'];
	$quantity=$_POST['quantity'];

	// $foodRemark=$_POST['foodRemark'];
	
	mysqli_query($conn,"update rental_details set furniture_name='$furniture_name',quantity='$quantity', rental_price='$rental_price' where rental_id='$id'");
	header('location:index.php');

?>

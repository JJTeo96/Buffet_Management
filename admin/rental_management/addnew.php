<?php
	include('conn.php');
	
	$furniture_name=$_POST['furniture_name'];
	$rental_price=$_POST['rental_price'];
	// $foodRemark=$_POST['foodRemark'];
	
	
	mysqli_query($conn,"insert into rental_details (furniture_name, rental_price) values ('$furniture_name', '$rental_price')");
	header('location:index.php');

?>
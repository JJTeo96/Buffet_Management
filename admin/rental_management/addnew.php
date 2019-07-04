<?php
	include('conn.php');
	
	$furniture_name=$_POST['furniture_name'];
	$rental_price=$_POST['rental_price'];
	$quantity=$_POST['quantity'];
	// $foodRemark=$_POST['foodRemark'];
	
	
	mysqli_query($conn,"insert into rental_details (furniture_name, rental_price, quantity) values ('$furniture_name', '$rental_price', '$quantity')");
	header('location:index.php');

?>
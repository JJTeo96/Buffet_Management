<?php
	include('conn.php');
	
	$foodName=$_POST['foodName'];
	$foodQuantity=$_POST['foodQuantity'];
	$foodPrice=$_POST['foodPrice'];
	$foodRemark=$_POST['foodRemark'];
	
	
	mysqli_query($conn,"insert into food_details (foodName, foodQuantity, foodPrice, foodRemark) values ('$foodName', '$foodQuantity', '$foodPrice', '$foodRemark')");
	header('location:index.php');
	exit;
?>
<?php
	include('conn.php');
	
	$id=$_GET['id'];
	
	$foodName=$_POST['foodName'];
	$foodQuantity=$_POST['foodQuantity'];
	$foodPrice=$_POST['foodPrice'];
	$foodRemark=$_POST['foodRemark'];
	
	mysqli_query($conn,"update food_details set foodName='$foodName', foodQuantity='$foodQuantity', foodPrice='$foodPrice', foodRemark='$foodRemark' where foodID='$id'");
	header('location:index.php');
	exit;
?>

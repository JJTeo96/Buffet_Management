<?php
	include('conn.php');
	
	$coupon_code=$_POST['coupon_code'];
	$discount_rate=$_POST['discount_rate'];
	$quantity=$_POST['quantity'];
	// $foodRemark=$_POST['foodRemark'];
	
	
	mysqli_query($conn,"insert into promotion (coupon_code, discount_rate,quantity) values ('$coupon_code', '$discount_rate','$quantity')");
	header('location:index.php');
	exit;

?>
<?php
	include('conn.php');
	
	$id=$_GET['id'];
	
	$coupon_code=$_POST['coupon_code'];
	$discount_rate=$_POST['discount_rate'];
	$quantity=$_POST['quantity'];
	// $foodRemark=$_POST['foodRemark'];
	
	mysqli_query($conn,"update promotion set coupon_code='$coupon_code', discount_rate='$discount_rate', quantity='$quantity' where pro_id='$id'");
	header('location:index.php');
	exit;

?>

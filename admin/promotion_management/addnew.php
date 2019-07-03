<?php
	include('conn.php');
	
	$coupon_code=$_POST['coupon_code'];
	$discount_rate=$_POST['discount_rate'];
	// $foodRemark=$_POST['foodRemark'];
	
	
	mysqli_query($conn,"insert into promotion (coupon_code, discount_rate) values ('$coupon_code', '$discount_rate')");
	header('location:index.php');

?>
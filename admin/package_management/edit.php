<?php
	include('conn.php');
	
	$id=$_GET['id'];
	
	$package_name=$_POST['package_name'];
	$package_courses=$_POST['package_courses'];
	$price=$_POST['price'];
	$min_pax=$_POST['min_pax'];
	
	mysqli_query($conn,"update package set package_name='$package_name', package_courses='$package_courses', price='$price', min_pax='$min_pax' where package_id='$id'");
	header('location:index.php');

?>

<?php
	include('conn.php');
	
	$package_name=$_POST['package_name'];
	$package_courses=$_POST['package_courses'];
	$price=$_POST['price'];
	$min_pax=$_POST['min_pax'];
	
	
	mysqli_query($conn,"insert into package (package_name, package_courses, price, min_pax) values ('$package_name', '$package_courses', '$price', '$min_pax')");
	header('location:index.php');

?>
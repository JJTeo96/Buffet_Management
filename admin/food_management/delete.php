<?php
	include('conn.php');
	$id=$_GET['id'];
	mysqli_query($conn,"delete from food_details where foodID='$id'");
	header('location:index.php');
	exit;
?>
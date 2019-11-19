<?php
	include('conn.php');
	$id=$_GET['id'];
	mysqli_query($conn,"delete from dishes where dishesID='$id'");
	header('location:index.php');
	exit;

?>
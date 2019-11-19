<?php
	include('conn.php');
	
	$id=$_GET['id'];
	
	$dishesName=$_POST['dishesName'];
	$courseID=$_POST['courseID'];

	$sqlFurni = "update dishes set dishesName='$dishesName',courseID='$courseID' where dishesID='$id'";
	$query = $conn->query($sqlFurni);
	header('location:index.php');
	exit;

?>

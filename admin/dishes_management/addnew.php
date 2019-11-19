<?php
	include('conn.php');
	
	$dishesName=$_POST['dishesName'];
	$courseID=$_POST['courseID'];
	
	$sqlFurni = "insert into dishes (dishesName, courseID) values ('$dishesName', '$courseID')";
	$query = $conn->query($sqlFurni);
	header('location:index.php');
	exit;

?>
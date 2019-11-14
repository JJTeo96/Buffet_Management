<?php
	include('conn.php');
	
	$id=$_GET['id'];
	
	$courseName=$_POST['courseName'];
	// $foodRemark=$_POST['foodRemark'];
	
	mysqli_query($conn,"update course set courseName='$courseName' where courseID='$id'");
	header('location:index.php');
	exit;

?>

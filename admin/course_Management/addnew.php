<?php
	include('conn.php');
	
	$courseName=$_POST['courseName'];
	// $foodRemark=$_POST['foodRemark'];
	
	
	mysqli_query($conn,"insert into course (courseName) values ('$courseName')");
	header('location:index.php');
	exit;

?>
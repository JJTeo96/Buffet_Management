<?php
	include('conn.php');
	$id=$_GET['id'];
	mysqli_query($conn,"delete from course where courseID='$id'");
	header('location:index.php');
	exit;

?>
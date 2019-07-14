<?php
	include('conn.php');
	$id=$_GET['id'];
	mysqli_query($conn,"delete from package where package_id='$id'");
	header('location:index.php');
	exit;

?>
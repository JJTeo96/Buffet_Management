<?php
	include('conn.php');
	$id=$_GET['id'];
	mysqli_query($conn,"delete from promotion where pro_id='$id'");
	header('location:index.php');
	exit;

?>
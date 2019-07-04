<?php
	include('conn.php');
	$id=$_GET['id'];
	mysqli_query($conn,"delete from rental_details where rental_id='$id'");
	header('location:index.php');

?>
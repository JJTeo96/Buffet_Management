<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","root","","buffet_management_system");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>
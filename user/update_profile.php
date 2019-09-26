<?php
	//include database and object files
	include_once '../config/database.php';
    include_once 'header.php';
    if (empty($_SESSION['userName'])) {
        header('location: index.php');
    }
?>

<?php

	$userID=$_POST['userID'];

	$opassword 	= $_POST["opassword"];
	$npassword 	= $_POST["npassword"];
	$userIC 	= $_POST["userIC"];
	
	    $r = mysqli_query($db,"SELECT * FROM user WHERE userID = '$userID'");
        while($row = mysqli_fetch_array($r)){
        	
        		
					
					$query = "UPDATE user SET userIC='$userIC' WHERE userID=$userID";

	if(mysqli_query($db, $query)==true){
		echo "<script type='text/javascript'>alert('Update Successfull!');</script>";
		echo"<script>window.location.href = 'index.php'</script>";
	}else{
			echo "<script type='text/javascript'>alert('Update Failed!');</script>";
			echo"<script>window.location.href = 'index.php'</script>";
	}	
	
}

	?>
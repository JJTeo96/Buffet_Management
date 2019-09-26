<?php
	//include database and object files
	include_once 'config/config.php';
    include_once 'include/navbar.php';
    if (empty($_SESSION['username'])) {
        header('location: login.php');
    }
?>
<?php

	$id=$_POST['id'];

	$opassword 	= $_POST["opassword"];
	$npassword 	= $_POST["npassword"];
	$address 	= $_POST["address"];
	$old_password=md5($opassword);
	    $r = mysqli_query($db,"SELECT * FROM users WHERE id = '$id'");
        while($row = mysqli_fetch_array($r)){
        	$oldpassword=$row['password'];
        		if($oldpassword==$old_password){
					$password=md5($npassword);
					$query = "UPDATE users SET password='$password', address='$address' WHERE id=$id";

	if(mysqli_query($db, $query)==true){
		echo "<script type='text/javascript'>alert('Update Successfull!');</script>";
		echo"<script>window.location.href = 'index.php'</script>";
	}else{
			echo "<script type='text/javascript'>alert('Update Failed!');</script>";
			echo"<script>window.location.href = 'index.php'</script>";
	}	
	}else{
			echo "<script type='text/javascript'>alert('Password That You Insert Is Incorrect!');</script>";
			echo"<script>window.location.href = 'index.php'</script>";
	}
}

	?>
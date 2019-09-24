<?php
session_start();

include('../config/database.php');

if(isset($_POST['update'])){

$userID=$_POST['userID'];
$userName=$_POST['userName'];
// $userPassword=$_POST['lname'];
$userIC=$_POST['userIC'];
$userEmail=$_POST['userEmail'];
$userAddress=$_POST['userAddress'];
$userContact1=$_POST['userContact1'];
$userContact2=$_POST['userContact2'];


$query2=$mysqli->query("update user set userID='$userID',userName='$userName',userIC='$userIC',
userEmail='$userEmail',userAddress='$userAddress',userContact1='$userContact1',userContact2='$userContact2' where userID='$userID'");
}
?>

<html>

<head>
    <link href="Css/bootstrap.min.css" rel="stylesheet">
    <title>Edit Doctor</title>
    <link rel="shortcut icon" href="OBS/images/ico/red_cross_outline.png">
</head>

<body>
	<form method="POST" action="">
		<?php
			if(isset($_GET['userID'])){
			$id=$_GET['userID'];
		
			$query=mysql_query("select * from user where userID='$id'");
			while($row=mysql_fetch_array($query)){
				$userID=$row['userID'];
				$userName=$row['userName'];
				$userIC=$row['userIC'];
				$userEmail=$row['userEmail'];
				$userAddress=$row['userAddress'];
				$userContact1=$row['userContact1'];
				$userContact1=$row['userContact2'];
			}			
		?>
		<div class="form-group">
			<label>Doctor ID: </label>
			<input type="text" name="doc_id" class="form-control" value="<?php echo $userID; ?>" readonly />
		</div>
		<div class="form-group">
			<label>First Name: </label>
			<input type="text" name="fname" class="form-control" value="<?php echo $userName; ?>" required/>
		</div>
		<div class="form-group">
			<label>Last Name: </label>
			<input type="text" name="lname" class="form-control" value="<?php echo $userIC; ?>" required/>
		</div>
		<div class="form-group">
			<label>Specialist In: </label>
			<input type="text" name="specialistion" class="form-control" value="<?php echo $userEmail; ?>"/>
		</div>
		<div class="form-group">
			<label>Email: </label>
			<input type="email" name="email" class="form-control" value="<?php echo $userAddress; ?>"/>
		</div>
		<div class="form-group">
			<label>Contact Number: </label>
			<input type="text" name="contact" class="form-control" value="<?php echo $userContact1; ?>" required/>
		</div>
		
		<div class="form-group">
			<label>Address: </label>
			<textarea name="address" class="form-control"><?php echo $userContact2; ?></textarea>
		</div>
		
		<?php
			}
		?>
		<div><input type="submit" name="update" value="Update Profile"/></div>
	</form>
</body>
</html>
<?php
	include('conn.php');
	
	$package_name=$_POST['package_name'];
	$fileToUpload=$_POST['fileToUpload'];
	$package_courses=$_POST['package_courses'];
	$price=$_POST['price'];
	$min_pax=$_POST['min_pax'];
    $pkdis = "DIS" . time();
    $file_name = $_FILES["fileToUpload"]["name"];
	
	
    mysqli_query($conn,"insert into package (package_name, package_img, package_courses, price, min_pax, pk_dishesID) 
    values ('$package_name', '".$file_name."', '$package_courses', '$price', '$min_pax', '$pkdis')");
	

?>

<?php
    $target_dir = "../../user/vendor/assets/img/Package/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    // if (file_exists($target_file)) {
    //     echo "Sorry, file already exists.";
    //     $uploadOk = 0;
    // }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
?>

<?php

foreach($_POST['dishes'] as $selected){
    // echo "<script>alert('Total Price :" . $selected . "')</script>";
    // echo $selected;
    $pkdis = "DIS" . time();
    $sql = "INSERT INTO package_dishes (pk_dishesID,dishesID,display) VALUES ('$pkdis','$selected','1')";
    $query = $conn->query($sql);
    

    if($query){
        header('location:index.php');
        // exit;
        // echo $sql;
        // echo "<script>alert('Success !');</script>";
        // echo "<script>window.location.assign('packageAddon.php');</script>";
        // echo "<script>window.location.assign('packageAddon.php');</script>";
    }else {
        echo "<script>alert('Fail !');</script>";
        // echo "<script>window.location.assign('combine-table.php');</script>";
    }
}
?>
<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: ../admin/index.php");
    exit;
}

// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$adminName = $adminPassword = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["adminName"]))){
        $username_err = "<b><p style='color:red;'>Please enter username.</style></b>";
    } else{
        $adminName = trim($_POST["adminName"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["adminPassword"]))){
        $password_err = "<b><p style='color:red;'>Please enter your password.</style></b>";
    } else{
        $adminPassword = trim($_POST["adminPassword"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT adminID, adminName, adminPassword FROM admin WHERE adminName = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $adminName;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $adminID, $adminName, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($adminPassword, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["adminID"] = $adminID;
                            $_SESSION["adminName"] = $adminName;                            
                            
                            // Redirect user to welcome page
                            header("location: ../admin/index.php");
                            exit;
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "<b><p style='color:red;'>The password you entered was not valid.</style></b>";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "<b><p style='color:red;'>No account found with that username.</style></b>";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
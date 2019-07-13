<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$adminName = $adminPassword = $confirm_password = "";
$adminName_err = $adminPassword_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["adminName"]))){
        $adminName_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT adminID FROM admin WHERE adminName = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["adminName"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $adminName_err = "This username is already taken.";
                } else{
                    $adminName = trim($_POST["adminName"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Validate password
    if(empty(trim($_POST["adminPassword"]))){
        $adminPassword_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["adminPassword"])) < 6){
        $adminPassword_err = "Password must have atleast 6 characters.";
    } else{
        $adminPassword = trim($_POST["adminPassword"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($adminPassword_err) && ($adminPassword != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($adminName_err) && empty($adminPassword_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO admin (adminName, adminPassword) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $adminName;
            $param_password = password_hash($adminPassword, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){ 
                // Redirect to login page
                // header("location: login.php || ../admin_login/register.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"> -->
    <!-- <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style> -->
</head>

<body>

    <div class="container" style="margin-top:1%">
		<div class="col-md-9" style="margin: 0 auto">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($adminName_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="adminName" class="form-control" value="<?php echo $adminName; ?>">
                <span class="help-block"><?php echo $adminName_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($adminPassword_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="adminPassword" class="form-control" value="<?php echo $adminPassword; ?>">
                <span class="help-block"><?php echo $adminPassword_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <!-- <input type="reset" class="btn btn-default" value="Reset"> -->
            </div>
            <!-- <p>Already have an account? <a href="login.php">Login here</a>.</p> -->
        </form>
    </div>    
</body>
</html>
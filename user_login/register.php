<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$userName = $userPassword = $userIC = $userEmail = $userAddress = $userContact1 = $userContact2 = $register_date = $confirm_password = "";
$userName_err = $userPassword_err = $userIC_err = $userEmail_err = $userAddress_err = $userContact1_err = $userContact2_err = $register_date_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["userName"]))){
        $userName_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT userID FROM user WHERE userName = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["userName"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $userName_err = "This username is already taken.";
                } else{
                    $userName = trim($_POST["userName"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Validate password
    if(empty(trim($_POST["userPassword"]))){
        $userPassword_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["userPassword"])) < 6){
        $userPassword_err = "Password must have atleast 6 characters.";
    } else{
        $userPassword = trim($_POST["userPassword"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($userPassword_err) && ($userPassword != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }

    // Validate IC
    if(empty(trim($_POST["userIC"]))){
        $userIC_err = "Please enter a IC.";     
    }else{
        $userIC = trim($_POST["userIC"]);
    }
    
     // Validate Email
    if(empty(trim($_POST["userEmail"]))){
        $userEmail_err = "Please enter a email.";     
    }else{
        $userEmail = trim($_POST["userEmail"]);
    }
     // Validate Address
    if(empty(trim($_POST["userAddress"]))){
        $userAddress_err = "Please enter a address.";     
    }else{
        $userAddress = trim($_POST["userAddress"]);
    }
     // Validate Contact 1
    if(empty(trim($_POST["userContact1"]))){
        $userContact1_err = "Please enter a Contact.";     
    }else{
        $userContact1 = trim($_POST["userContact1"]);
    }
    // Validate Contact 2
    if((trim($_POST["userContact2"]))){
        $userContact2 = trim($_POST["userContact2"]);     
    }else{
        
    }

    // Check input errors before inserting in database
    if(empty($userName_err) && empty($userPassword_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO user (userName, userPassword, userIC, userEmail, userAddress, userContact1, userContact2 ) VALUES (?, ?, ?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssss", $param_username, $param_password, $param_ic, $param_email, $param_address, $param_contact1, $param_contact2);
            // Set parameters
            $param_username = $userName;
            $param_password = password_hash($userPassword, PASSWORD_DEFAULT); // Creates a password hash
            $param_ic = $userIC;
            $param_email = $userEmail;
            $param_address = $userAddress;
            $param_contact1 = $userContact1;
            $param_contact2 = $userContact2;
            
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){ 
                // Redirect to login page
                header("location: login.php");
                exit;
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

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- <link rel="icon" href="Favicon.png"> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>

<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center" style="margin-top:10%"> 
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header" style="text-align:center"><b>Register</b></div>
                        <div class="card-body">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <div class="form-group <?php echo (!empty($userName_err)) ? 'has-error' : ''; ?>">
                                <label>Username</label>
                                <input type="text" name="userName" class="form-control" value="<?php echo $userName; ?>">
                                <span class="help-block"><?php echo $userName_err; ?></span>
                            </div>    
                            <div class="form-group <?php echo (!empty($userPassword_err)) ? 'has-error' : ''; ?>">
                                <label>Password</label>
                                <input type="password" name="userPassword" class="form-control" value="<?php echo $userPassword; ?>">
                                <span class="help-block"><?php echo $userPassword_err; ?></span>
                            </div>
                            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                                <label>Confirm Password</label>
                                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                                <span class="help-block"><?php echo $confirm_password_err; ?></span>
                            </div>
                            <div class="form-group <?php echo (!empty($userIC_err)) ? 'has-error' : ''; ?>">
                                <label>I/C</label>
                                <input type="test" name="userIC" class="form-control" value="<?php echo $userIC; ?>">
                                <span class="help-block"><?php echo $userIC_err; ?></span>
                            </div>
                            <div class="form-group <?php echo (!empty($userEmail_err)) ? 'has-error' : ''; ?>">
                                <label>Email</label>
                                <input type="test" name="userEmail" class="form-control" value="<?php echo $userEmail; ?>">
                                <span class="help-block"><?php echo $userEmail_err; ?></span>
                            </div>
                            <div class="form-group <?php echo (!empty($userAddress_err)) ? 'has-error' : ''; ?>">
                                <label>Address</label>
                                <input type="test" name="userAddress" class="form-control" value="<?php echo $userAddress; ?>">
                                <span class="help-block"><?php echo $userAddress_err; ?></span>
                            </div>
                            <div class="form-group <?php echo (!empty($userContact1_err)) ? 'has-error' : ''; ?>">
                                <label>Contact 1</label>
                                <input type="test" name="userContact1" class="form-control" value="<?php echo $userContact1; ?>">
                                <span class="help-block"><?php echo $userContact1_err; ?></span>
                            </div>
                            <div class="form-group <?php echo (!empty($userContact2_err)) ? 'has-error' : ''; ?>">
                                <label>Contact 2</label>
                                <input type="test" name="userContact2" class="form-control" value="<?php echo $userContact2; ?>">
                                <span class="help-block"><?php echo $userContact2_err; ?></span>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Submit">
                                <input type="reset" class="btn btn-default" value="Reset">
                            </div>
                            <p>Already have an account? <a href="login.php">Login here</a>.</p>
                        </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>

</main>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
<?php include_once('authentication.php') ?>
 
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css"> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../admin/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="../admin/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../admin/vendor/jquery/jquery-3.3.1.min.js"></script>

    
    <title>Admin Login</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"> -->
</head>

<body>
    <main class="login-form cover">
        <div class="cotainer">
            <div class="row justify-content-center" style="margin-top:10%">
                <div class="col-md-4">
                    <div class="card ">
                        <div class="card-header">Admin Login</div>
                        <div class="card-body">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                                <label>Username</label>
                                <input type="text" name="adminName" class="form-control" value="<?php echo $adminName; ?>">
                                <span class="help-block"><?php echo $username_err; ?></span>
                            </div> 

                            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                                <label>Password</label>
                                <input type="password" name="adminPassword" class="form-control">
                                <span class="help-block"><?php echo $password_err; ?></span>
                            </div>
                
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Login">
                            </div>
                
                        <!-- <p>Don't have an account? <a href="register.php">Sign up now</a>.</p> -->
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>







</body>

</html>

<!-- ===================================================== -->

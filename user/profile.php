<?php include_once('header.php');?>

<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<?php
  if(isset($_POST['update'])){

  $userID=$_POST['userID'];
  $userName=$_POST['userName'];
  $userPassword=$_POST['userPassword'];
  $userIC=$_POST['userIC'];
  $userEmail=$_POST['userEmail'];
  $userAddress=$_POST['userAddress'];
  $userContact1=$_POST['userContact1'];
  $userContact2=$_POST['userContact2'];

  $query2=$mysqli->query("update user set userID='$userID',userName='$userName',userPassword='$userPassword',
          userIC='$userIC',userEmail='$userEmail',userAddress='$userAddress',userContact1='$userContact1',userContact2='$userContact2' where userID='$userID'");
  }
?>

<div class="container" style="margin-top:1%">
		<div class="col-md-9" style="margin: 0 auto">
		    <div class="card">
		        <div class="card-body">
		            <div class="row">
		                <div class="col-md-12">
		                    <h4>Profile</h4>
		                    <hr>
		                </div>
		            </div>
                
		            <div class="row">
		                <div class="col-md-12">
		                    <form method="POST" action="">
                        
                              <div class="form-group row">
                                <label for="username" class="col-4 col-form-label">User Name*</label> 
                                <div class="col-8">
                                  <input id="username" name="username" placeholder="Username" class="form-control here" required="required" type="text" value="<?php echo $_SESSION['userName'] ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="name" class="col-4 col-form-label">First Name</label> 
                                <div class="col-8">
                                  <input id="name" name="name" placeholder="First Name" class="form-control here" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="lastname" class="col-4 col-form-label">Last Name</label> 
                                <div class="col-8">
                                  <input id="lastname" name="lastname" placeholder="Last Name" class="form-control here" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="text" class="col-4 col-form-label">Nick Name*</label> 
                                <div class="col-8">
                                  <input id="text" name="text" placeholder="Nick Name" class="form-control here" required="required" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="select" class="col-4 col-form-label">Display Name public as</label> 
                                <div class="col-8">
                                  <select id="select" name="select" class="custom-select">
                                    <option value="admin">Admin</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="email" class="col-4 col-form-label">Email*</label> 
                                <div class="col-8">
                                  <input id="email" name="email" placeholder="Email" class="form-control here" required="required" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="website" class="col-4 col-form-label">Website</label> 
                                <div class="col-8">
                                  <input id="website" name="website" placeholder="website" class="form-control here" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="publicinfo" class="col-4 col-form-label">Public Info</label> 
                                <div class="col-8">
                                  <textarea id="publicinfo" name="publicinfo" cols="40" rows="4" class="form-control"></textarea>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="newpass" class="col-4 col-form-label">New Password</label> 
                                <div class="col-8">
                                  <input id="newpass" name="newpass" placeholder="New Password" class="form-control here" type="text">
                                </div>
                              </div> 
                              <div class="form-group row">
                                <div class="offset-4 col-8">
                                  <button name="submit" type="submit" class="btn btn-primary">Update My Profile</button>
                                </div>
                              </div>
                            </form>
                            <?php echo "$userName" ?>
                            <?php echo $erow['userName'];?>
		                </div>
		            </div>
		            
		        </div>
		    </div>
		</div>
	</div>
</div>
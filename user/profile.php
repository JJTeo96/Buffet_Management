<?php 
include_once('header.php');
$userName=$_SESSION['userName'];
        $r = mysqli_query($db,"SELECT * FROM user WHERE userName = '$userName'");
        while($row = mysqli_fetch_array($r)){
?>

<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
                    
		                    <form action="update_profile.php" method="POST">
                              <div class="form-group row">
                                <input type="hidden" name="userID" value="<?php echo $row['userID'];?>">
                                <label for="username" class="col-4 col-form-label">User Name : </label> 
                                <div class="col-8">
                                  <input id="username" name="username" placeholder="Username" class="form-control here"  type="text" value="<?php echo ucwords($row['userName']);?>">
                                  
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="name" class="col-4 col-form-label">IC : </label> 
                                <div class="col-8">
                                 
                                  <input id="" name="userIC" placeholder="IC" class="form-control here" type="text" value="<?php echo $row['userIC'];?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="lastname" class="col-4 col-form-label">Email : </label> 
                                <div class="col-8">
                                  <input id="" name="userEmail" placeholder="Email" class="form-control here" type="email" value="<?php echo $row['userEmail'] ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="text" class="col-4 col-form-label">Address : </label> 
                                <div class="col-8">
                                  <textarea id="" name="userAddress" placeholder="Address" class="form-control here"  type="text"><?php echo $row['userAddress'] ?></textarea>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="email" class="col-4 col-form-label">Contact 1 : </label> 
                                <div class="col-8">
                                  <input id="" name="userContact1" placeholder="Contact 1" class="form-control here"  type="text" value="<?php echo $row['userContact1'] ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="website" class="col-4 col-form-label">Contact 2 : </label> 
                                <div class="col-8">

                                <!-- If / Else-->
                                  <!-- <?php 
                                     if(isset($_SESSION["userContact2"]) == NULL){
                                      echo '-';
                                  }else{
                                    echo $value['userContact2'];
                                  }
                                  ?> -->

                                  <input id="" name="userContact2" placeholder="Contact 2" class="form-control here" type="text" value="<?php echo $row['userContact2'] ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <div class="offset-4 col-8">
                                  <!-- <button name="update" type="submit" class="btn btn-primary">Save</button> -->
                                </div>
                              </div>

                              <div>
                                <button name="update" type="submit" class="btn btn-primary">Update</button>
                              </div>
                        </form>

                            <?php } ?>

		                </div>
		            </div>
		            
		        </div>
		    </div>
		</div>
	</div>
</div>
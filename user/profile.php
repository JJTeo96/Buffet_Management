<?php include_once('header.php');?>

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
                    <?php
                      include_once '../config/database.php';
                      $Drop=$_SESSION["userName"];
                      $sql= "SELECT * FROM user where userName='$Drop';";
                      $result = $db->query($sql);
                      foreach ($result as $value){
                    
                    ?>
		                    <form method="POST" action="action.php">
                              <div class="form-group row">
                                <label for="username" class="col-4 col-form-label">User Name : </label> 
                                <div class="col-8">
                                  <!-- <input id="username" name="username" placeholder="Username" class="form-control here"  type="text" value="<?php echo $value['userName'] ?>"> -->
                                  <?php echo $value['userName'] ?>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="name" class="col-4 col-form-label">IC : </label> 
                                <div class="col-8">
                                  <?php echo $value['userIC'] ?>
                                  <!-- <input id="" name="userIC" placeholder="IC" class="form-control here" type="text" value="<?php echo $value['userIC'] ?>"> -->
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="lastname" class="col-4 col-form-label">Email : </label> 
                                <div class="col-8">
                                  <?php echo $value['userEmail'] ?>
                                  <!-- <input id="" name="userEmail" placeholder="Email" class="form-control here" type="email" value="<?php echo $value['userEmail'] ?>"> -->
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="text" class="col-4 col-form-label">Address : </label> 
                                <div class="col-8">
                                  <?php echo $value['userAddress'] ?>
                                  <!-- <textarea id="" name="userAddress" placeholder="Address" class="form-control here"  type="text"><?php echo $value['userAddress'] ?></textarea> -->
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="email" class="col-4 col-form-label">Contact 1 : </label> 
                                <div class="col-8">
                                  <?php echo $value['userContact1'] ?>
                                  <!-- <input id="" name="userContact1" placeholder="Contact 1" class="form-control here"  type="text" value="<?php echo $value['userContact1'] ?>"> -->
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="website" class="col-4 col-form-label">Contact 2 : </label> 
                                <div class="col-8">
                                  <?php 
                                     if(isset($_SESSION["userContact2"]) == NULL){
                                      echo '-';
                                  }else{
                                    echo $value['userContact2'];
                                  }
                                  ?>
                                  <!-- <input id="" name="userContact2" placeholder="Contact 2" class="form-control here" type="text" value="<?php echo $value['userContact2'] ?>"> -->
                                </div>
                              </div>
                              <div class="form-group row">
                                <div class="offset-4 col-8">
                                  <!-- <button name="update" type="submit" class="btn btn-primary">Save</button> -->
                                </div>
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
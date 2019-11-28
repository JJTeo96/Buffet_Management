<!-- <link rel="stylesheet" href="../vendor/custom/css/style.css" /> -->
<style>
.scrollbar-deep-purple::-webkit-scrollbar-track {
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #F5F5F5;
border-radius: 10px; }

.scrollbar-deep-purple::-webkit-scrollbar {
width: 12px;
background-color: #F5F5F5; }

.scrollbar-deep-purple::-webkit-scrollbar-thumb {
border-radius: 10px;
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #512da8; }

.scrollbar-cyan::-webkit-scrollbar-track {
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #F5F5F5;
border-radius: 10px; }

.scrollbar-cyan::-webkit-scrollbar {
width: 12px;
background-color: #F5F5F5; }

.scrollbar-cyan::-webkit-scrollbar-thumb {
border-radius: 10px;
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #00bcd4; }

.scrollbar-dusty-grass::-webkit-scrollbar-track {
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #F5F5F5;
border-radius: 10px; }

.scrollbar-dusty-grass::-webkit-scrollbar {
width: 12px;
background-color: #F5F5F5; }

.scrollbar-dusty-grass::-webkit-scrollbar-thumb {
border-radius: 10px;
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-image: -webkit-linear-gradient(330deg, #d4fc79 0%, #96e6a1 100%);
background-image: linear-gradient(120deg, #d4fc79 0%, #96e6a1 100%); }

.scrollbar-ripe-malinka::-webkit-scrollbar-track {
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-color: #F5F5F5;
border-radius: 10px; }

.scrollbar-ripe-malinka::-webkit-scrollbar {
width: 12px;
background-color: #F5F5F5; }

.scrollbar-ripe-malinka::-webkit-scrollbar-thumb {
border-radius: 10px;
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
background-image: -webkit-linear-gradient(330deg, #f093fb 0%, #f5576c 100%);
background-image: linear-gradient(120deg, #f093fb 0%, #f5576c 100%); }

.bordered-deep-purple::-webkit-scrollbar-track {
-webkit-box-shadow: none;
border: 1px solid #512da8; }

.bordered-deep-purple::-webkit-scrollbar-thumb {
-webkit-box-shadow: none; }

.bordered-cyan::-webkit-scrollbar-track {
-webkit-box-shadow: none;
border: 1px solid #00bcd4; }

.bordered-cyan::-webkit-scrollbar-thumb {
-webkit-box-shadow: none; }

.square::-webkit-scrollbar-track {
border-radius: 0 !important; }

.square::-webkit-scrollbar-thumb {
border-radius: 0 !important; }

.thin::-webkit-scrollbar {
width: 6px; }

.example-1 {
position: relative;
overflow-y: scroll;
height: 200px; }
</style>

<?php include('conn.php')?>

<!-- Add New -->
    <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Add New</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="addnew.php" enctype="multipart/form-data">
					<div class="form-group">
						<div>
							<label class="control-label" style="position:relative; top:7px;">Package Name:</label>
						</div>
						<div>
							<input type="text" class="form-control" name="package_name">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="form-group">
						<div>
							<label class="control-label" style="position:relative; top:7px;">Image:</label>
						</div>
						<div>
							<input type="file" name="fileToUpload" id="fileToUpload">
							<!-- <input type="text" class="form-control" name="package_courses"> -->
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="form-group">
						<div>
							<label class="control-label" style="position:relative; top:7px;">Courses:</label>
						</div>
						<div>
							<input type="text" class="form-control" name="package_courses">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div>
						<div>
							<label class="control-label" style="position:relative; top:7px;">Price /PAX:</label>
						</div>
						<div>
							<input type="text" class="form-control" name="price">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="form-group">
						<div>
							<label class="control-label" style="position:relative; top:7px;">Min /PAX:</label>
						</div>
						<div>
							<input type="text" class="form-control" name="min_pax">
						</div>
					</div>
					<style></style>
					<!-- Scrollbar -->
						<!-- Grid row -->
						<div class="row">

						<!-- Grid column -->
						<div class="col-md-12 mb-4">

						<?php
                            $sql2 = "SELECT * FROM dishes";
							$query2 = $conn->query($sql2);
						?>

						<!-- Exaple 1 -->
						<div class="card example-1 scrollbar-ripe-malinka">
							<div class="card-body">
							<h4 id="section1"><strong>Dishes:</strong></h4>
							<p>
								<?php
									$sql = "SELECT * FROM course";
									$query = $db->query($sql);
									if($query->num_rows>0){
										while($row=$query->fetch_assoc()){
											$courseID = $row['courseID'];
								?>
										
									<p style="margin-top:3%;color:black"><i><?php echo $row['courseName'] ?></i></p>
													
												<p>
													<!--Checkbox -->
													<?php
														$sql2 = "SELECT * FROM dishes WHERE courseID = '$courseID'";
														$query2 = $db->query($sql2);

														if($query2->num_rows>0){
															while($rowD = $query2->fetch_assoc()){

													?>

													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="<?php echo $rowD['dishesName']; ?>"
														value="<?php echo $rowD['dishesID']; ?>" name="dishes[]" onclick="chkbox(this);">
														<label class="custom-control-label" for="<?php echo $rowD['dishesName']; ?>" name="<?php echo $rowD['dishesName']; ?>">
														<?php echo $rowD['dishesName']; ?></label>
													</div>

													<?php
														}
													}
													?>
													<!-- End checkbox -->
								<?php
									}
								}
								?>
							</p>
							</div>
						</div>
						<!-- Exaple 1 -->
						</div>
						<!-- Grid column -->
						</div>
						<!-- Grid row -->

					<!-- End Scrollbar -->
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
	</div>
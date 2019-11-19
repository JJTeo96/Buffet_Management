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
				<form method="POST" action="addnew.php">
					<div class="form-group">
						<div>
							<label class="control-label" style="position:relative; top:7px;">Dishes Name:</label>
						</div>
						<div>
							<input type="text" class="form-control" name="dishesName">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="form-group">
						<div>
							<label class="control-label" style="position:relative; top:7px;">Course:</label>
						</div>
						<div>
						<!-- Select -->
						<?php 
							include('conn.php');
						?>

											
						<select class="form-control" id="exampleFormControlSelect1"  name="courseID">
							<?php
								$d = mysqli_query($db,"SELECT * FROM course ");
								while($row = mysqli_fetch_array($d)){
							?>
							<option value="<?php echo $row['courseID'];?>"><?php echo $row['courseName'];?></option>
							<?php 
								}
							?>
						</select>
						<!-- End select -->	
						</div>
					</div>
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

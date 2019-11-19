<!-- Delete -->
<div class="modal fade" id="del<?php echo $row['dishesID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Delete</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($conn,"select * from `dishes` LEFT JOIN course ON course.courseID = dishes.courseID where dishesID='".$row['dishesID']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h5>Dishes Name: <strong><?php echo $drow['dishesName']; ?></strong></h5> 
					<h5>Course Name: <strong><?php echo $drow['courseName']; ?></strong></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="delete.php?id=<?php echo $row['dishesID']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $row['dishesID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Edit</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($conn,"select * from `dishes` LEFT JOIN course ON course.courseID = dishes.courseID where dishesID='".$row['dishesID']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="edit.php?id=<?php echo $erow['dishesID']; ?>">
					<div class="row">
						<div class="col-lg-4">
							<label style="position:relative; top:7px;">Dishes Name:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" name="dishesName" class="form-control" value="<?php echo $erow['dishesName']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label style="position:relative; top:7px;">Course Name:</label>
						</div>
						<div class="col-lg-8">
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
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Save</button>
                </div>
				</form>
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- View -->
<div class="modal fade" id="view<?php echo $row['dishesID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Info</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($conn,"select * from `dishes` LEFT JOIN course ON course.courseID = dishes.courseID where dishesID='".$row['dishesID']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="edit.php?id=<?php echo $erow['dishesID']; ?>">
					<div class="row">
						<div class="col-lg-4">
							<label style="position:relative; top:7px;">Dishes Name:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" readonly  name="dishesName" class="form-control" value="<?php echo $erow['dishesName']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label style="position:relative; top:7px;">Course Name:</label>
						</div>
						<div class="col-lg-8">
							<!-- Select -->
							<?php 
								include('conn.php');
							?>					
							<select class="form-control" id="exampleFormControlSelect1" readonly name="courseID">
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
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Back</button>
                </div>
				</form>
            </div>
        </div>
    </div>
<!-- /.modal -->
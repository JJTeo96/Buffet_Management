<!-- Delete -->
    <div class="modal fade" id="del<?php echo $row['package_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Delete</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($conn,"select * from package where package_id='".$row['package_id']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h5>Package Name: <strong><?php echo $drow['package_name']; ?></strong></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="delete.php?id=<?php echo $row['package_id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit -->
<div class="modal fade" id="edit<?php echo $row['package_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Edit</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($conn,"select * from package where package_id='".$row['package_id']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="edit.php?id=<?php echo $erow['package_id']; ?>" enctype="multipart/form-data">
					<div class="row">
						<div class="col-lg-4">
							<label style="position:relative; top:7px;">Package Name:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" name="package_name" class="form-control" value="<?php echo $erow['package_name']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label style="position:relative; top:7px;">Image:</label>
						</div>
						<div class="col-lg-8">
							<input type="file" name="fileToUpload" id="fileToUpload">
							<!-- <input type="text" name="package_courses" class="form-control" value="<?php echo $erow['package_courses']; ?>"> -->
						</div>
						
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label style="position:relative; top:7px;">Courses:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" name="package_courses" class="form-control" value="<?php echo $erow['package_courses']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label style="position:relative; top:7px;">Price /PAX:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" name="price" class="form-control" value="<?php echo $erow['price']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label style="position:relative; top:7px;">Min /PAX:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" name="min_pax" class="form-control" value="<?php echo $erow['min_pax']; ?>">
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
<div class="modal fade" id="view<?php echo $row['package_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Info</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($conn,"select * from package where package_id='".$row['package_id']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="edit.php?id=<?php echo $erow['package_id']; ?>">
					<div class="row">
						<div class="col-lg-4">
							<label style="position:relative; top:7px;">Package Name:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" readonly  name="package_name" class="form-control" value="<?php echo $erow['package_name']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label style="position:relative; top:7px;">Courses:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" readonly  name="package_courses" class="form-control" value="<?php echo $erow['package_courses']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label style="position:relative; top:7px;">Price /PAX:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" readonly  name="price" class="form-control" value="<?php echo $erow['price']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label style="position:relative; top:7px;">Min /PAX:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" name="min_pax" readonly  class="form-control" value="<?php echo $erow['min_pax']; ?>">
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

<!-- View -->
<div class="modal fade" id="dis<?php echo $row['package_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Selected Dishes</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
				<?php 
				$pid=$row['package_id'];
					$sqldis = mysqli_query($conn,"SELECT * FROM dishes LEFT JOIN course ON course.courseID = dishes.courseID
					LEFT JOIN package_dishes ON package_dishes.dishesID=dishes.dishesID
					LEFT JOIN package ON package.pk_dishesID=package_dishes.pk_dishesID
					WHERE package.package_id='$pid'");
				?>
				<div class="container-fluid">
				<?php while($rowdis = mysqli_fetch_array($sqldis, MYSQLI_ASSOC)):?>
					<p style="color:black"><b><?php echo $rowdis['courseName'] ?></b> -> <?php echo $rowdis['dishesName'];?></p>
                    
                <?php endwhile; ?>
            </div>
        </div>
    </div>
<!-- /.modal -->
<!-- Delete -->
    <div class="modal fade" id="del<?php echo $row['foodID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Delete</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($conn,"select * from food_details where foodID='".$row['foodID']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h5>Food Name: <strong><?php echo $drow['foodName']; ?></strong></h5> 
					<h5>Quantity: <strong><?php echo $drow['foodQuantity']; ?></strong></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="delete.php?id=<?php echo $row['foodID']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $row['foodID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Edit</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($conn,"select * from food_details where foodID='".$row['foodID']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="edit.php?id=<?php echo $erow['foodID']; ?>">
					<div class="row">
						<div class="col-lg-4">
							<label style="position:relative; top:7px;">Food Name:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" name="foodName" class="form-control" value="<?php echo $erow['foodName']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label style="position:relative; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" name="foodQuantity" class="form-control" value="<?php echo $erow['foodQuantity']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label style="position:relative; top:7px;">Price:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" name="foodPrice" class="form-control" value="<?php echo $erow['foodPrice']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label style="position:relative; top:7px;">Remark:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" name="foodRemark" class="form-control" value="<?php echo $erow['foodRemark']; ?>">
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
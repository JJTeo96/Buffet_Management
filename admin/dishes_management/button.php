<!-- Delete -->
    <div class="modal fade" id="del<?php echo $row['rental_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Delete</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($conn,"select * from rental_details where rental_id='".$row['rental_id']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h5>Furniture Name: <strong><?php echo $drow['furniture_name']; ?></strong></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="delete.php?id=<?php echo $row['rental_id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $row['rental_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Edit</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($conn,"select * from rental_details where rental_id='".$row['rental_id']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="edit.php?id=<?php echo $erow['rental_id']; ?>">
					<div class="row">
						<div class="col-lg-4">
							<label style="position:relative; top:7px;">Furniture Name:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" name="furniture_name" class="form-control" value="<?php echo $erow['furniture_name']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label style="position:relative; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" name="quantity" class="form-control" value="<?php echo $erow['quantity']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label style="position:relative; top:7px;">Price:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" name="rental_price" class="form-control" value="<?php echo $erow['rental_price']; ?>">
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
<div class="modal fade" id="view<?php echo $row['rental_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Info</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($conn,"select * from rental_details where rental_id='".$row['rental_id']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="edit.php?id=<?php echo $erow['rental_id']; ?>">
					<div class="row">
						<div class="col-lg-4">
							<label style="position:relative; top:7px;">Furniture Name:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" readonly  name="furniture_name" class="form-control" value="<?php echo $erow['furniture_name']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label style="position:relative; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" readonly name="quantity" class="form-control" value="<?php echo $erow['quantity']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label style="position:relative; top:7px;">Price:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" readonly  name="rental_price" class="form-control" value="<?php echo $erow['rental_price']; ?>">
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
<!-- Delete -->
    <div class="modal fade" id="del<?php echo $row['pro_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Delete</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($conn,"select * from promotion where pro_id='".$row['pro_id']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h5>Coupon Code: <strong><?php echo $drow['coupon_code']; ?></strong></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="delete.php?id=<?php echo $row['pro_id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $row['pro_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Edit</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($conn,"select * from promotion where pro_id='".$row['pro_id']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="edit.php?id=<?php echo $erow['pro_id']; ?>">
					<div class="row">
						<div class="col-lg-4">
							<label style="position:relative; top:7px;">Coupon Code:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" name="coupon_code" class="form-control" value="<?php echo $erow['coupon_code']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label style="position:relative; top:7px;">Discount Rate:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" name="discount_rate" class="form-control" value="<?php echo $erow['discount_rate']; ?>">
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
<div class="modal fade" id="view<?php echo $row['pro_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Info</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($conn,"select * from promotion where pro_id='".$row['pro_id']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="edit.php?id=<?php echo $erow['pro_id']; ?>">
					<div class="row">
						<div class="col-lg-4">
							<label style="position:relative; top:7px;">Coupon Code:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" readonly  name="coupon_code" class="form-control" value="<?php echo $erow['coupon_code']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label style="position:relative; top:7px;">Discount Rate:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" readonly  name="discount_rate" class="form-control" value="<?php echo $erow['discount_rate']; ?>">
						</div>
					</div>

					<!-- <div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label style="position:relative; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" readonly name="quantity" class="form-control" value="<?php echo $erow['quantity']; ?>">
						</div>
					</div> -->
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
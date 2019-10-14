<?php include('header.php'); ?>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Material Design Bootstrap -->
<link href="vendor/assets/MDB/css/mdb.min.css" rel="stylesheet">
<link href="vendor/assets/MDB/css/style.css" rel="stylesheet">
<!-- Gridlex -->
<link rel="stylesheet" href="vendor/assets/gridlex/gridlex.min.css">

<link href="vendor/assets/js/script.js" rel="stylesheet">


<?php
    $sql = mysqli_query($db,"SELECT * FROM package WHERE package_id = '2'");
    while($row = mysqli_fetch_array($sql)){
?>

<div class="grid" style="margin-top:5%">
    <div class="col-3_md-12_md-first" data-push-left="off-1" >
        <div class="demo demo-left">
            <!-- Left side card -->
            <div class="col-2">
                <div class="card" style="width: 18rem;">
                <p style="text-align:center"><i class="icofont-restaurant"></i> YOUR SELECTION</p><br/>
                <img src="vendor/assets/img/Package/ValueA.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['package_name'];?></h5>
                        <p class="card-text">RM <?php echo $row['price'];?> / PAX</p>
                        <a href="package.php" class="btn btn-danger">CHANGE SELECTION</a>
                    </div>
                </div>
            </div>
            <!-- End Left side card -->

            <!-- Left side card -->
            <div class="col-2">
                <div class="card" style="width: 18rem;">
                    <p style="text-align:center;margin-top:5%;margin-bottom:-5%"><i class="icofont-users-alt-3"></i> NUMBER OF PAX</p>
                    <div class="card-body">
                        <p class="card-text" style="text-align:center;">(Minimum <?php echo $row['min_pax'];?> Pax) | <?php echo $row['package_courses'];?> courses</p>
                        <!-- Number -->
                        <div class="form-group">
                            <!-- <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                            <input class="quantity" min="<?php echo $row['min_pax'];?>" name="quantity" value="<?php echo $row['min_pax'];?>" type="number">
                            <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button> -->
                            <div class="form-group row">
                                <div class="col-10">
                                    <input class="form-control" type="number" min="<?php echo $row['min_pax'];?>" 
                                    value="<?php echo $row['min_pax'];?>" id="number">
                                </div>
                            </div>
                        </div>
                        <!-- End number -->

                        <!-- Number per pax -->
                        <h5 style="color:Red">Number of Pax Selected</h5>
                        <h3 id="pax">40</h3>
                        <input type="hidden" id="hTotalPax" value="40">
                        <h5 style="color:Red">Price</h5>
                        <h3 id="price">RM559.60</h3>
                        <!-- End number per pax -->
                    </div>
                </div>
            </div>
            <!-- End Left side card -->
        </div>
    </div>
    
    <!-- Right side -->
    <div class="col grid-column">
        <div class="col grid-equalHeight">
            <div class="col-10">
                <div class="demo demo-left">
                    <div class="card text-center">
                        <div class="card-body ">
                            <h3>Select <?php echo $row['package_courses'];?> Courses</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col grid-equalHeight" style="margin-top:-50%">
            <div class="col-5">
                <div class="demo demo-left">
                    <!-- Card -->
                    <div class="card">
                        <div class="card-header">
                            Rice/Noodles
                        </div>
                        <div class="card-body">
                            <?php
                                $query=mysqli_query($db,"SELECT d.dishesName, c.*
                                FROM dishes d
                                JOIN course c ON d.courseID = c.courseID WHERE c.courseID='1'" );
                                while($row=mysqli_fetch_array($query)){
                            ?>
                            <!--Checkbox -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="<?php echo $row['dishesName']; ?>" 
                                value="<?php echo $row['dishesName']; ?>" name="Rice">
                                <label class="custom-control-label" for="<?php echo $row['dishesName']; ?>"><?php echo $row['dishesName']; ?></label>
                            </div>
                            <!-- End checkbox -->

                            <?php 
                                }
                            ?>
                        </div>
                    </div>
                <!-- End Card -->
                </div>
            </div>

            <div class="col-5">
                <div class="demo demo-left">
                    <!-- Card -->
                    <div class="card">
                            <div class="card-header ">
                                Vegetable
                            </div>
                            <div class="card-body">
                                <?php
                                    $query=mysqli_query($db,"SELECT d.dishesName, c.*
                                    FROM dishes d
                                    JOIN course c ON d.courseID = c.courseID WHERE c.courseID='2'" );
                                    while($row=mysqli_fetch_array($query)){
                                ?>
                                <!--Checkbox -->
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="<?php echo $row['dishesName']; ?>" 
                                    value="<?php echo $row['dishesName']; ?>" name="Vegetable">
                                    <label class="custom-control-label" for="<?php echo $row['dishesName']; ?>"><?php echo $row['dishesName']; ?></label>
                                </div>
                                <!-- End checkbox -->

                                <?php 
                                    }
                                ?>
                            </div>
                        </div>
                    <!-- End Card -->           
                </div>
            </div>

            <div class="col-5">
                <div class="demo demo-left">
                    <!-- Card -->
                    <div class="card">
                        <div class="card-header">
                            Chicken
                        </div>
                        <div class="card-body">
                            <?php
                                $query=mysqli_query($db,"SELECT d.dishesName, c.*
                                FROM dishes d
                                JOIN course c ON d.courseID = c.courseID WHERE c.courseID='3'" );
                                while($row=mysqli_fetch_array($query)){
                            ?>
                            <!--Checkbox -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="<?php echo $row['dishesName']; ?>" 
                                value="<?php echo $row['dishesName']; ?>" name="Chicken">
                                <label class="custom-control-label" for="<?php echo $row['dishesName']; ?>"><?php echo $row['dishesName']; ?></label>
                            </div>
                            <!-- End checkbox -->

                            <?php 
                                }
                            ?>
                        </div>
                    </div>
                <!-- End Card -->
                </div>
            </div>

            <div class="col-5">
                <div class="demo demo-left">
                    <!-- Card -->
                    <div class="card">
                            <div class="card-header">
                                Dessert
                            </div>
                            <div class="card-body">
                                <?php
                                    $query=mysqli_query($db,"SELECT d.dishesName, c.*
                                    FROM dishes d
                                    JOIN course c ON d.courseID = c.courseID WHERE c.courseID='4'" );
                                    while($row=mysqli_fetch_array($query)){
                                ?>
                                <!--Checkbox -->
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="<?php echo $row['dishesName']; ?>" 
                                    value="<?php echo $row['dishesName']; ?>" name="Dessert">
                                    <label class="custom-control-label" for="<?php echo $row['dishesName']; ?>"><?php echo $row['dishesName']; ?></label>
                                </div>
                                <!-- End checkbox -->

                                <?php 
                                    }
                                ?>
                            </div>
                        </div>
                    <!-- End Card -->           
                </div>
            </div>

            <div class="col-5">
                <div class="demo demo-left">
                    <!-- Card -->
                    <div class="card">
                        <div class="card-header">
                            Drinks
                        </div>
                        <div class="card-body">
                            <?php
                                $query=mysqli_query($db,"SELECT d.dishesName, c.*
                                FROM dishes d
                                JOIN course c ON d.courseID = c.courseID WHERE c.courseID='5'" );
                                while($row=mysqli_fetch_array($query)){
                            ?>
                            <!--Checkbox -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="<?php echo $row['dishesName']; ?>" 
                                value="<?php echo $row['dishesName']; ?>" name="Drinks">
                                <label class="custom-control-label" for="<?php echo $row['dishesName']; ?>"><?php echo $row['dishesName']; ?></label>
                            </div>
                            <!-- End checkbox -->

                            <?php 
                                }
                            ?>
                        </div>
                    </div>
                <!-- End Card -->
                </div>
            </div>

            <div class="col-5">
                <div class="demo demo-left">
                    <!-- Card -->
                    <div class="card">
                            <div class="card-header">
                                Other
                            </div>
                            <div class="card-body">
                                <?php
                                    $query=mysqli_query($db,"SELECT d.dishesName, c.*
                                    FROM dishes d
                                    JOIN course c ON d.courseID = c.courseID WHERE c.courseID='6'" );
                                    while($row=mysqli_fetch_array($query)){
                                ?>
                                <!--Checkbox -->
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="<?php echo $row['dishesName']; ?>" 
                                    value="<?php echo $row['dishesName']; ?>" name="Other">
                                    <label class="custom-control-label" for="<?php echo $row['dishesName']; ?>"><?php echo $row['dishesName']; ?></label>
                                </div>
                                <!-- End checkbox -->

                                <?php 
                                    }
                                ?>
                            </div>
                        </div>
                    <!-- End Card -->           
                </div>
            </div>

            <div class="col-10" style="margin-top:5%">
                <div class="demo demo-left">
                    <div class="card text-center">
                        <div class="card-body ">
                            <h3>Rental Services</h3>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Php rental -->
            <?php
                $sql = mysqli_query($db,"SELECT * FROM rental_details");
                while($row = mysqli_fetch_array($sql)){
            ?>

            <div class="col-10">
                <div class="demo demo-left">
                    <!-- Card -->
                    <div class="card">
                            <div class="card-header ">
                                Rental Item
                            </div>
                            <div class="card-body">
                                <?php
                                    $query=mysqli_query($db,"SELECT * FROM rental_details");
                                    while($row=mysqli_fetch_array($query)){
                                ?>
                                <!--Checkbox -->
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="<?php echo $row['furniture_name']; ?>" 
                                    value="<?php echo $row['furniture_name']; ?>" name="Rental">
                                    <label class="custom-control-label" for="<?php echo $row['furniture_name']; ?>"><?php echo $row['furniture_name']; ?></label>
                                </div>
                                <!-- End checkbox -->

                                <?php 
                                    }
                                ?>
                            </div>
                        </div>
                    <!-- End Card -->           
                </div>
            </div>
            <!-- Php rental -->
            <?php
                };
            ?> 
            <!-- End Php rental -->

            <div class="col-4" style="margin-top:5%" data-push-left="off-3" data-push-right="off-3" >
                <div class="demo demo-left">
                    <div class="card text-center">
                        <a href="#" class="button button-royal button-rounded button-giant">Next >></a>
                    </div>
                </div>
            </div>
            
        </div>
        
    <!-- End Right side -->    
    </div>
</div>

<?php
    };
?>

<!-- Checkbox select once -->
<script>
    $('input[type="checkbox"]').on('change', function() {
        $('input[name="' + this.name + '"]').not(this).prop('checked', false);
    });
</script>
<!-- End Checkbox select once -->
   
    
   























<!-- Sample -->


<!-- <div class="grid">
    <div class="col-2" data-push-left="off-1">col-2 data-push-left="off-2"</div>
    <div class="col-5 grid" data-push-left="off-1">
    <div class="col-8 grid">
            <div class="col-12" style="text-align:center">
                col-6
            </div>
            <div class="col-6">
                col-4
            </div>
            <div class="col-6">
                col-4
            </div>
            <div class="col-6">
                col-4
            </div>
            <div class="col-6">
                col-4
            </div>
    
    </div>


<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<div class="grid">
    <div class="col-1">空格</div>
    <div class="col-1 ">card</div>
    <div class="col-4 ">空格</div>
    
    <div class="col-6 grid">
        
        <div class="col-8 grid">
            <div class="col-12">
                col-6
            </div>
            
            <div class="col-6">
                col-4
            </div>
            <div class="col-6">
                col-4
            </div>
            <div class="col-6">
                col-4
            </div>
            <div class="col-6">
                col-4
            </div>
            
        </div>
    </div>
</div> -->

<!-- backup -->
<!-- <?php

				
				$query=mysqli_query($db,"SELECT d.dishesName, c.*
                FROM dishes d
                JOIN course c ON d.courseID = c.courseID WHERE c.courseID='1'" );
				while($row=mysqli_fetch_array($query)){
					?>
					<table>
                    <tr></tr>
                    </table>
						<p><?php echo $row['dishesName']; ?></p>
					
					</tr>
					<?php
				}
			
			?> -->
            <!-- backup -->
<!-- <style type="text/css">
.sty{
    border-top:1px solid #000;
}
</style>
<div class="card" style="width: 18rem;">

            <?php

				
				$query=mysqli_query($db,"SELECT d.dishesName, c.*
                FROM dishes d
                JOIN course c ON d.courseID = c.courseID WHERE c.courseID='1'" );
				while($row=mysqli_fetch_array($query)){
					?>
				
                    
                    <form action="" method="post">
                        <input type="radio" name="radio" value="<?php echo $row['dishesName']; ?>"><?php echo $row['dishesName']; ?>
                    
                    </form>

					
				
					<?php
				}
			
			?>

</div>

<div class="card" style="width: 18rem;">

            <?php

				
				$query=mysqli_query($db,"SELECT d.dishesName, c.*
                FROM dishes d
                JOIN course c ON d.courseID = c.courseID WHERE c.courseID='2'" );
				while($row=mysqli_fetch_array($query)){
					?>
				
                    
                    <form action="" method="post">
                        <input type="radio" name="radio" value="<?php echo $row['dishesName']; ?>"><?php echo $row['dishesName']; ?>
                    
                    </form>

					
				
					<?php
				}
			
			?>

</div> -->
            <!-- Sample End -->


                                   
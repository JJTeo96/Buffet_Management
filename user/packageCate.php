<?php include('header.php'); ?>

<?php if(isset($_GET['id'])){
    $packageID=$_GET['id'];
    // echo $packageID;
} ?>

<?php if(isset($_GET['pk_dishesID'])){
    $pk_dishesID=$_GET['pk_dishesID'];
    // echo $pk_dishesID;
}?>



<!-- Submit orders -->
<?php if(isset($_POST['submitt'])){
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        echo "<script>alert('You must Login!');</script>";
        echo "<script>window.location.assign('../user_login/login.php');</script>";
        exit;
    }else{
        foreach($_POST['order'] as $selected){
            // echo "<script>alert('Total Price :" . $selected . "')</script>";
            // echo $selected;
            $orderID = "INV" . time();
            $sql = "INSERT INTO orders (disID,invoice_id) VALUES ('$selected','$orderID')";
            $query = $db->query($sql);

            if($query){
                // echo "<script>alert('Success !');</script>";
                // echo "<script>window.location.assign('packageAddon.php');</script>";
                // echo "<script>window.location.assign('packageAddon.php');</script>";
            }else {
                echo "<script>alert('Fail !');</script>";
                // echo "<script>window.location.assign('combine-table.php');</script>";
            }
        }

        $Drop=$_SESSION['userID'];
        $packageIDs=$_POST['package_id'];
        $num_pax=$_POST['tot_amount'];
        $priceMenu=$_POST['fee'];

        $sql5="INSERT INTO invoice(userID, packageID, invoice_id, num_pax, priceMenu)
        VALUES ('$Drop','$packageIDs','$orderID','$num_pax','$priceMenu')";
        $query5 = $db->query($sql5);
        echo "<script>window.location.assign('packageAddon.php?id=$packageID&invoice=$orderID');</script>";
    }
}
?>
<!-- End Submit order -->

<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Material Design Bootstrap -->
<link href="vendor/assets/MDB/css/mdb.min.css" rel="stylesheet">
<link href="vendor/assets/MDB/css/style.css" rel="stylesheet">
<!-- Gridlex -->
<link rel="stylesheet" href="vendor/assets/gridlex/gridlex.min.css">
<!-- <link href="vendor/assets/js/script.js" rel="stylesheet"> -->
<?php
function display()
{
    // echo "hello ";
    echo "<script>window.location.assign('packageAddon.php?id=".$packageID."&invoice=".$orderID."');</script>";
}
if(isset($_POST['submitt']))
{
   display();
}
?>
<?php
    $sql = mysqli_query($db,"SELECT * FROM package WHERE package_id = $packageID");
    while($row = mysqli_fetch_array($sql)){
?>

<form method="post" action="packageCate.php?id=<?php echo $packageID; ?>" name="myform" >

<div class="grid" style="margin-top:5%">
    <div class="col-3_md-12_md-first" data-push-left="off-1" >
        <div class="demo demo-left">
            <!-- Left side card -->
            <div class="col-2">
                <div class="card" style="width: 18rem;">
                <p style="text-align:center"><i class="icofont-restaurant"></i> YOUR SELECTION</p><br/>
                <img src="vendor/assets/img/Package/<?php echo $row['package_img'];?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['package_name'];?></h5>
                        <p class="card-text" id="pricepax">RM <?php echo $row['price'];?> / PAX</p>
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
                        <p class="card-text" style="text-align:center;">
                            (Minimum <?php echo $row['min_pax'];?> Pax) | <?php echo $row['package_courses'];?> courses
                            <input type="text" name="package_id" value="<?php echo $row['package_id'];?>" hidden>
                            <input type="text" id="selectcourses" value="<?php echo $row['package_courses'];?>" hidden>
                        </p>
                        <!-- Number  per pax -->
                        <div class="form-group">
                        <!-- <input type="text" id="price3" value="<?php echo $row['price'];?>" size="3" hidden> -->
                            <!-- <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                            <input class="quantity" min="<?php echo $row['min_pax'];?>" name="quantity" value="<?php echo $row['min_pax'];?>" type="number">
                            <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button> -->
                            <div class="form-group row">
                                <div class="col-10">
                                    <input class="form-control" type="number" min="<?php echo $row['min_pax'];?>"
                                    value="<?php echo $row['min_pax'];?>" id="numpax" name="numpax">
                                </div>
                            </div>
                        </div>
                        <h5 style="color:Red">Number of Pax Selected</h5>
                            <input class="form-control-plaintext" name="tot_amount" id="tot_amount" type="text"
                            value="<?php echo $row['min_pax'];?>" style="font-size:20px" readonly>
                            <input type="text" id="price3" value="<?php echo $row['price'];?>" size="3" hidden>

                        <h5 style="color:Red">Price (RM)</h5>
                            <?php $currentprice=$row['min_pax']*$row['price'];?>
                            <input class="form-control-plaintext" name="fee" type="text" id="price2"
                            value="<?php echo $currentprice?>" readonly style="font-size:20px">
                        <!-- End number per pax -->
                    </div>
                </div>
            </div>
            <!-- End Left side card -->
        </div>
    </div>

    <!-- Calculation Script -->
    <script type="text/javascript">
      var form = document.forms['myform'];

      form.numpax.onkeyup = function(){
        form.price2.value = form.numpax.value* form.price3.value;
        updateTotal();
      }
    </script>
    <!-- End Calculation Script -->

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

        <?php
            $sql = "SELECT * FROM course 
            -- LEFT JOIN dishes ON dishes.courseID=course.courseID
            -- LEFT JOIN package_dishes ON package_dishes.dishesID=dishes.dishesID
            -- -- LEFT JOIN package ON package.pk_dishesID=package_dishes.pk_dishesID 
            -- WHERE package_dishes.display='1'";
            $query = $db->query($sql);
            if($query->num_rows>0){
            while($row=$query->fetch_assoc()){
                $courseID = $row['courseID'];
        ?>
            <!-- Course -->
            <div class="col-5">
                <div class="demo demo-left">
                    <!-- Card -->
                    <div class="card">
                        <div class="card-header">
                            <?php echo $row['courseName'] ?>
                        </div>
                        <div class="card-body">
                            <!--Checkbox -->
                            <?php
                            // $sql2 = "SELECT * FROM dishes WHERE courseID = '$courseID'";
                            $sql2="SELECT * FROM dishes LEFT JOIN course ON course.courseID = dishes.courseID
                            LEFT JOIN package_dishes ON package_dishes.dishesID=dishes.dishesID
                            LEFT JOIN package ON package.pk_dishesID=package_dishes.pk_dishesID
                            WHERE package.pk_dishesID='$pk_dishesID'AND course.courseID=$courseID";
                            $query2 = $db->query($sql2);

                            if($query2->num_rows>0){
                                while($rowD = $query2->fetch_assoc()){

                            ?>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="<?php echo $rowD['dishesName']; ?>"
                                value="<?php echo $rowD['dishesID']; ?>" name="order[]" onclick="chkbox(this);">
                                <label class="custom-control-label" for="<?php echo $rowD['dishesName']; ?>" name="<?php echo $rowD['dishesName']; ?>">
                                <?php echo $rowD['dishesName']; ?></label>
                            </div>
                            <?php
                                }
                            }
                            ?>
                            <!-- End checkbox -->
                        </div>
                    </div>
                <!-- End Card -->
                </div>
            </div>

            <!-- End Course -->
            <?php
                }
            }
            ?>

            <div class="col-4" style="margin-top: 3%;padding-bottom: 5%;" data-push-left="off-3" data-push-right="off-3" >
                <div class="demo demo-left">
                    <div class="card text-center">
                        <input type="submit" class="button button-royal button-rounded button-giant" value="Next &raquo;"
                        name="submitt" onclick="return ale()">

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
</form>

<?php include_once('footer.php');?>

<!-- Checkbox select once -->
<!-- <script>
    $('input[type="checkbox"]').on('change', function() {
        $('input[name="' + this.name + '"]').not(this).prop('checked', false);
    });
</script> -->
<!-- End Checkbox select once -->

<!-- $sql = "SELECT * FROM dishes LEFT JOIN orders ON orders.disID = dishes.dishesID" -->
<?php
    $sql = mysqli_query($db,"SELECT * FROM package WHERE package_id = $packageID");
    while($row = mysqli_fetch_array($sql)){
?>

<script language="javascript">
    function chkbox(elm)
    {
        var obj=document.getElementsByName("order[]");
        var num=0;
        for (var i=0;i<obj.length ;i++ )
            if (obj[i].checked) num++;

        if (num>form.selectcourses.value){
            alert("Only can choose maximum <?php echo $row['package_courses'];?> courses！");
            for (var i=0;i<obj.length ;i++){
                elm.checked=false;
            }
        }
    }
    function checkNum() {
        var ipts = document.getElementsByName('order[]'), num = 0;
        for (var i = 0; i < ipts.length; i++) if (ipts[i].checked) num++;
        return num >= form.selectcourses.value;
    }

    function ale(){
        if(checkNum()){
            return true;
        }
        else{
            alert("You must choose at least <?php echo $row['package_courses'];?> courses! ");
            return false;
        }
    }

    $(document).ready(function() {
            $('#numpax').keyup(function(ev) {
                var total = $('#numpax').val() * 1;
                var tot_price = total ;
                var divobj = document.getElementById('tot_amount');
                divobj.value = tot_price;
            });
        });
</script>

<?php } ?>
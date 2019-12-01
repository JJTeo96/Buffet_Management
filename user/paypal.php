<?php
            //fetch.php
            header("Access-Control-Allow-Origin: *");

            include("../config/database.php");

            // $date = $_POST['date'];
            $price = $_POST['price'];
            $invoice = $_POST['invoice'];
            $leftquanti=$_POST['quant'];
            $renID=$_POST['renID'];
            $priceMe=$_POST['priceMe'];
            $trans=$_POST['trans'];
            $rentt=$_POST['rentt'];
            $subtt=$_POST['subtt'];
            $disco=$_POST['disco'];
            $ssttt=$_POST['ssttt'];
            $promocode=$_POST['promocode'];
            $useridd=$_POST['useridd'];
            
                $query = "INSERT INTO payment(date,priceMenu,trans,renTotal,subTotal,discount,sst,price, invoice_id)
                VALUES(now(),'$priceMe','$trans','$rentt','$subtt','$disco','$ssttt','$price','$invoice')";
                $result = mysqli_query($db, $query);
                if($result){
                    echo "Insert pointhistory success";
                }else{
                    echo "insert pointhistory error";
                }

                $queryquant = "UPDATE rental_details SET quantity='$leftquanti' where rental_id='$renID'";
                $resultquant = mysqli_query($db, $queryquant);

                $queryquant = "DELETE FROM promotionget WHERE coupon_code='$promocode' AND userID='$useridd'";
                $resultquant = mysqli_query($db, $queryquant);
            
            
?>

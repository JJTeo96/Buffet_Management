<?php include('header.php'); ?>

<?php 

echo $_SESSION['paxSelect'];
// echo $_SESSION['paxPrice']; ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
  <html>
  <head>
    <title>Registration Form</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  </head>

  <body>
    <form action="<?php echo $editFormAction; ?>" method="POST" name="myform">
      <h1>Registration</h1>
      <!-- <input type="radio" name="fee" id="Adult" value=55.00> Adult $55 <br>
      <input type="radio" name="fee" id="Couple" value=95.00> Couple $95 <br>
      <input type="radio" name="fee" id="Student" value=25.00> Student $25<br><br> -->



      Number of Children: <input name="childnum" type="text" id="Children" value="" size="3">
      &nbsp;&nbsp; Cost: $&nbsp;<input name="fee" type="text" id="childfee" value="0" size="8"><br>
      

      <h3>Cost</h3>
      Total: <input name="total" id="total" type="text" onFocus="this.blur();" size="8" readonly>
      <!-- Paid: $<input name="amountpaid" id="amountpaid" type="text" size="8"> -->

      <br><br>
      <input name="Submit" type="submit" class="button"  value="Register"></td>
    </form>

    <script type="text/javascript">
      var form = document.forms['myform'];
      var adultTotal = 0;
      var kidsTotal = 0;

      function updateTotal(tot1, tot2){
        form.total.value = (adultTotal + kidsTotal).toFixed(2);
      }

    //   for(var i=0; i<form.elements.length; i++){
    //     if(form.elements[i].type.match(/(checkbox|radio)/i)){
    //       form.elements[i].onclick = function(){
    //         for(var i=0,total=0; i<this.form.elements.length; i++){
    //           var input = this.form.elements[i];
    //           if(input.type.match(/(checkbox|radio)/i) && input.checked){
    //             adultTotal = input.value/1;
    //           }
    //           updateTotal();
    //         }
    //       }
    //     }
    //   }

      form.Children.onkeyup = function(){
        form.childfee.value = form.Children.value*10;
        kidsTotal = Number(form.childfee.value);
        updateTotal();
      }

    //   form.onsubmit = function(){
    //     for(var i=0; i<this.elements.length; i++){
    //       var input = this.elements[i];
    //       if(input.type.match(/(radio)/i)){
    //         input.value = input.id+'/'+input.value;
    //       }
    //     }
    //   }
    </script>
  </body>
</html>
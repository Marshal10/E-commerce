<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Buy</title>
    <link href="style2.css" rel="stylesheet" />
  </head>

  <body>
    <div class="loader_bg">
      <div class="loader"><img src="images/loading.gif" alt="#" /></div>
   </div>
    <div class="main-container">
        <h1>Checkout</h1>
      <form action="ordertable.php" method="POST">
        <div class="txt_field first">
          <label> Name </label
          ><input type="text" name="username" value="<?php echo $_SESSION['username'];?>" required /><br /><br />
        </div>
        <div class="txt_field first">
          <label> Address </label
          ><input type="text" name="addr" value="<?php echo $_SESSION['address'];?>" required /><br /><br />
        </div>
        <div class="txt_field first">
          <label> Email </label
          ><input type="email" name="email" value="<?php echo $_SESSION['email'];?>" required /><br /><br />
        </div>
        <div class="txt_field first">
          <label> Phone </label
          ><input type="text" name="phone" value="<?php echo $_SESSION['phone'];?>" required /><br /><br />
        </div>
        <div class="txt_field first">
          <label> Product </label
          ><select name="product">
            <br /><br />
            <option selected hidden>Select</option>
            <option value="Dell_Inspiron_3880">Dell Inspiron 3880</option>
            <option value="Apple_Mackbook_Pro">Apple Mackbook Pro</option>
            <option value="Iphone_13">Iphone 13</option>
            <option value="ASUS_Vivobook_14">ASUS Vivobook 14</option>
            <option value="HP_Laptop">HP Laptop</option>
            <option value="Moto_G52">Moto G52</option>
            <option value="Realme_9">Realme 9</option>
            <option value="Lenovo_AIO_Desktop">Lenovo AIO Desktop</option>
            <option value="XPS_15_Laptop">XPS 15 Laptop</option></select>
            <br /><br />
        </div>
        <div class="txt_field first">
          <label> Payment Mode </label
          ><select name="payment">
            <br /><br />
            <option selected hidden>Select</option>
            <option value="Debit">Debit</option>
            <option value="Credit">Credit</option>
            <option value="COD">Cash On Delivery</option>
            s</select
          ><br /><br />
        </div>
        <div><input type="submit" value="Place Order" class="submit" /></div>
      </form>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>

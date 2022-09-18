<?php
session_start();

$name=$_POST['username'];
$address=$_POST['addr'];
$emailid=$_POST['email'];
$phone=$_POST['phone'];
$product=$_POST['product'];
$payment=$_POST['payment'];
$con = mysqli_connect("localhost", "root", "", "project") or
       die('Could not connect: ' . mysqli_error());
    $sql="INSERT INTO orders (username,addr,email,phone,product,payment)
          values ('$name','$address','$emailid',$phone,'$product','$payment')";      
    if(mysqli_query($con, $sql)){
        echo "Thank You,your order has been registered sucessfully.\n";
        echo "<br><a href='logout1.php'>Home</a>";
    }
    else
        echo "Error .\n" . mysqli_error($con);
    mysqli_close($con);
?>

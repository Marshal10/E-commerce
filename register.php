<?php
session_start();

$username=$_POST['username'];
$address=$_POST['address'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
if (!empty($username) || !empty($email) || !empty($password) || !empty($address) || !empty($phone)){
    $conn= mysqli_connect("localhost","root","","project");



    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }
    else{
         $SELECT="SELECT cmail FROM customer WHERE cmail=? LIMIT 1";
         $INSERT="INSERT INTO customer (caddr,cname,cmail,cphone,password)values(?,?,?,?,?)";



         $stmt=$conn->prepare($SELECT);
         $stmt->bind_param("s",$email);
         $stmt->execute();
         $stmt->bind_result($email);
         $stmt->store_result();
         $rnum=$stmt->num_rows;



         if($rnum==0){
             $stmt->close();
             $stmt=$conn->prepare($INSERT);
             $stmt->bind_param("sssss",$address,$username,$email,$phone,$password);
             $stmt->execute();
             echo "You have been registered successfully";
             echo"<br><a href='login.html'>Login Page</a>";
         }
         else{
             echo "Someone already register using this email";
         }
         $stmt->close();
         $conn->close();
    }
 }
 else
 {
     echo "All fields are required";
     die();
 }
?>

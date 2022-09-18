<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];



$con=mysqli_connect("localhost","root","","project");
if($con->connect_error){
    die("Failed to connect : ".$con->connect_error);
}
else{
    $stmt=$con->prepare("SELECT * FROM admin WHERE amail=?");
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt_result=$stmt->get_result();
    if($stmt_result->num_rows>0){
         $data=$stmt_result->fetch_assoc();
         $_SESSION['username']=$data['aname'];
         $_SESSION['address']=$data['aaddr'];
         $_SESSION['email']=$data['amail'];
         
         if($data['apass']===$password){
             echo "<h2>Login Successful!</h2>";
             ?>
              <script>
                location.replace("admin.php");
              </script>
             <?php
            //  echo"<a href='index.html'>Home</a><br>";
            //  echo"<a href='product.html'>Click here to buy products</a>";
         }
         else{
            echo"<h2>Invalid Email or Password</h2>";
         }
    }
    else{
        echo"<h2>Invalid Email or Password</h2>";
    }
}
?>
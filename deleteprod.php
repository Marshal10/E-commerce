<?php
if(isset($_GET["id"])){
    $id=$_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database="project";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password,$database);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql="DELETE FROM `product` WHERE pid=$id";
    $conn->query($sql);
}

header("location:products.php");
exit;
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>cla</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body style="margin:50px;">
<div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
    <h1>List of Products</h1>
    <a class="btn btn-primary" href="createprod.php" role="button">New Product</a><br>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>ID<th>
                <th>Product Name<th>
                <th>Category ID<th>
                <th>Price<th>
                <th>Action<th>
            </tr>
        </thead>

        <tbody>
            <?php
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

        $sql="Select * from product";
        $result=$conn->query($sql);

        if(!$result){
            die("Invalid query: ".$conn->error);
        }

        while($row=$result->fetch_assoc()){
            echo"<tr>
                <td>".$row["pid"]."<td>
                <td>".$row["pname"]."<td>
                <td>".$row["catgid"]."<td>
                <td>".$row["price"]."<td>
                <td>
                    <a class='btn btn-primary btn-sm' href='editprod.php?id=$row[pid]'>Edit</a>
                    <a class='btn btn-danger btn-sm' href='deleteprod.php?id=$row[pid]'>Delete</a>
                </td>    
            </tr>";
        }
            ?>
        </tbody>
    </table>
    <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
</body>
</html>
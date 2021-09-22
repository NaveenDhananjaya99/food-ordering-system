<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cw2_food";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `order_details` ";
$result = $conn->query($sql);


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>before login page</title>
    <link rel="stylesheet" href="vendors/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="vendors/css/7.1 Grid.css">
    <link rel="stylesheet" href="vendors/css/ionicons.min.css">
</head>
<body>


	<header>
        <nav>
            <div class="row">
                <img src="resources/css/img/logo.jpg" alt="food logo" class="logo">
                <ul class="main-nav">

                   
                    <li> <a href="admin.php">Admin page </a> </li>
                
                    <li> <a href="preview.php">LOG OUT </a> </li>

                </ul>
            </div>
        </nav>
         <div class="hero-text-box">
             <h1>welcome to, <br> submit section.</h1>
            
         </div>
    
        </div>

        <div class=" local">
            <a href="#">↑</a>
        </div>
       

    </header>

  
<section>
   <h2>this is your order detais</h2>
<table class="content-table">
  <thead>

  <tr class=>
            <td>name</td>
            <td>quantity</td>
            <td>email</td>
            <td>address</td>
        </tr>


  </thead>
        
    
<?php if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["name"]."</td><td>".$row["quntity"]." </td><td>".$row["email"]."
   </td><td>".$row["address"]."</td></tr>";
  }
} else {
  echo "0 results";
}
$conn->close(); ?>

</table>

</section>


             <footer>
                <div class="row">
                    <div class="col span-1-of-2">
                        <ul class="footer-nav">

                            <li><a href="#"> About us </a></li>
                            <li><a href="#"> Blog </a></li>
                            <li><a href="#"> Press </a></li>
                            <li><a href="#"> iOS App </a></li>
                            <li><a href="#">  Android App </a></li>
                            

                        </ul>

                    </div>

                    <div class="col span-1-of-2">

                        <ul class="social-links">

                            <li><a href="#"> <i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"> <i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"> <i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"> <i class="ion-social-instagram"></i></a></li>



                        </ul>

                        

                    </div>
                </div>

                <div class="row">
                    <p>
                        copyright &copy; 2020 by fooddil. All right reserved.
                    </p>
                </div>
            </footer>  




</body>
</html>
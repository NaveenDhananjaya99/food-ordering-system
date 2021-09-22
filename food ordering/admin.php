<?php

include('db.php');

	if (isset($_POST['submit'])) {
		$uname=$_POST['name'];
		$Password=$_POST['code'];
		$Email=$_POST['price'];
        $image=$_POST['image'];
		

		$result = mysqli_query( $con,"INSERT INTO products (name,code,price,image) VALUES ('".$uname."', '".$Password."','".$Email."','". $image."')");
		if(!$result)
		{
			die("NO query");
		}

		header("location:admin.php");

	
mysqli_close($connection);	
	}

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

                   
                    <li> <a href="preview.php">log out </a> </li>
                    <li> <a href="orderdetails.php">Order details</a> </li>

                </ul>
            </div>
        </nav>
         <div class="hero-text-box">
             <h1>welcom addmin <br> customers are wating for you.</h1>
            
         </div>
    
        </div>

        <div class=" local">
            <a href="#">↑</a>
        </div>
       

    </header>



<section class="form">
    <h2> enter your new item</h2>
               
                <div class="row">


                    <form action="#" method="post" class="contact-form" name="myForm">


                      



                        <div class="row">
                            <div class="col span-1-of-3">
                                <label for="name">Name</label>
                            </div>
                            <div class="col span-2-of-3">
                                <input type="text"  id="name" placeholder="Item name"  name="name">
                            </div>
                        </div>


                               <div class="row">
                            <div class="col span-1-of-3">
                                 <label for="Password" >code</label>
                            </div>
                            <div class="col span-2-of-3">
                                <input type="text" name="code" id="code" placeholder="code">
                            </div>
                        </div>



                        <div class="row">
                            <div class="col span-1-of-3">
                                <label for="Email" >price</label>
                            </div>
                            <div class="col span-2-of-3">
                               <input type="price" name="price" placeholder="price">
                            </div>
                        </div>



                        <div class="row">
                            <div class="col span-1-of-3">
                                <label for="image" >image</label>
                            </div>
                            <div class="col span-2-of-3">
                               <input type="text" name="image" placeholder="image">
                            </div>
                        </div>

                           

                        
                       

                        


                        <div class="row">
                            <div class="col span-1-of-3">
                                <label >&nbsp;</label>
                            </div>
                            <div class="col span-2-of-3">
                              <input type="submit" value="Submit" name="submit" class="submit">
                            </div>
                        </div>



                    </form>


                </div>

                

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
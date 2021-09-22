<?php
	$host="localhost";
	$user ="new1";
	$pass="" ;
	$db="cw2_food";
	$connection= mysqli_connect($host,$user,$pass,$db);

	if (isset($_POST['submit'])) {
		$uname=$_POST['fname'];
		$Password=$_POST['pwd'];
		$Email=$_POST['Email'];
		$Adress= $_POST['Adress'];

		$query = "INSERT INTO logindetails (name,password,email,address) VALUES ('".$uname."', '".$Password."','".$Email."','".$Adress."')";
		$result = mysqli_query($connection,$query);
		if(!$result)
		{
			die("NO query");
		}

		header("location:preview.php");

	
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

                   
                    <li> <a href="preview.php">Sign up </a> </li>

                </ul>
            </div>
        </nav>
         <div class="hero-text-box">
             <h1>welcome to, <br> our food lovers family.</h1>
            
         </div>
    
        </div>

        <div class=" local">
            <a href="#">↑</a>
        </div>
       

    </header>



<section class="form">
               
                <div class="row">


                    <form action="#" onsubmit="return validateFormlogin()" method="post" class="contact-form" name="myForm">


                      


                        <div class="row">
                            <div class="col span-1-of-3">
                                <label for="name"  >Name</label>
                            </div>
                            <div class="col span-2-of-3">
                                <input type="text"  id="name" placeholder="Your name"  name="fname">
                            </div>
                        </div>


                               <div class="row">
                            <div class="col span-1-of-3">
                                 <label for="Password" >Password</label>
                            </div>
                            <div class="col span-2-of-3">
                                <input type="Password" name="pwd" id="pp" placeholder="Passwords">
                            </div>
                        </div>



                        <div class="row">
                            <div class="col span-1-of-3">
                                <label for="Email" >Email</label>
                            </div>
                            <div class="col span-2-of-3">
                               <input type="Email" name="Email" placeholder="Email">
                            </div>
                        </div>

                           

                        
                       

                        <div class="row">
                            <div class="col span-1-of-3">
                                <label for="message">Address</label>
                            </div>
                            <div class="col span-2-of-3">
                               <textarea type="Adress" name="Adress" placeholder="Adress">
                               	
                               </textarea> 
                            </div>
                        </div>


                        <div class="row">
                            <div class="col span-1-of-3">
                                <label for="phone num" >Mobile Number</label>
                            </div>
                            <div class="col span-2-of-3">
                               <input type="Mobile" name="Number" placeholder="Mobile Number">
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



            <script type="text/javascript" src=" resources/javascript/nnn.js"></script>
</body>
</html>
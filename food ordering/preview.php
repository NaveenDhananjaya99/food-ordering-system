<?php
	$host="localhost";
	$user ="new1";
	$pass="" ;
	$db="cw2_food";
	$connection=mysqli_connect($host,$user,$pass,$db);

	if (isset($_POST['submit'])) {
		$uname=$_POST['fname'];
		$Password=$_POST['pwd'];

		$query = "select * from logindetails where name = '".$uname."'AND Password='".$Password."' limit 1 ";
		$result = mysqli_query($connection,$query);
		

		if (mysqli_num_rows($result)==1) {
			echo "you loged";
			
			if($uname=="admin"){
				header("location:admin.php");
			}
            else{
                header("location:meals.php");
            }

			

		}
		else{
			echo " <script> alert('incorrect pasword')</script>";

			
            
		}
	}

?>
<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" href="resources/css/stylecookies.css" />
</head>


<body>
   
    <header>
        <nav>
            <div class="row">
                <img src="resources/css/img/logo.jpg" alt="food logo" class="logo">
                <ul class="main-nav">

                    <li> <a href="#meal">Foods </a> </li>
                   
                    <li> <a href="#city">Our cities </a> </li>
                    <li> <a href="#sign up">Sign up </a> </li>
                    <li> <a href="login.php">Create New  </a> </li>

                </ul>
            </div>
        </nav>
         <div class="hero-text-box">
             <h1>Goodbye junk food. <br> Hello super healthy meals.</h1>
             <a class="btn btn-full" href="#sign up" > I'm Hungry</a>
             <a class="btn btn-ghots" href="#sign up" > Show me more </a>
         </div>
    
        </div>

        <div class=" local">
            <a href="#">↑</a>
        </div>
       

    </header>

<div class="cookie-container">
        <!--cookies section-->
        <p>
            We use cookies in this website to give you the best experience on our site and show you relevant ads. To find out more, read our
            <a class="a_tag" href="#">privacy policy</a> and <a class="a_tag" href="#">cookie policy</a>.
            <!--this two links for mange and read the about policies-->
            <!--add the tyore policies here-->
        </p>

        <button class="cookie-btn">  <!--this button for acept-->
        Accept
      </button>
        <button class="cookie-btn_deny">  <!--this button for deny-->
        Deny  
      </button>

    </div>

    

    
    

    <section class="section-f">
        

        <div class="row">

            <h2>Get food fast &mdash; Not fast food</h2>

            <p class="para1">
                Hello, we’re Omnifood, your new premium food delivery service. We know you’re always busy. No time for cooking. So let us take care of that, we’re really good at it, we promise!
            </p>


        </div>

        <dciv class="row">
            <div class="col  span_1_of_4 box"  >
                <i class="ion-ios-infinite-outline icon-big"></i>
                <h3> Up to 365 days/year</h3>
                <p>
                    Never cook again! We really mean that. Our subscription plans include up to 365 days/year coverage. You can also choose to order more flexibly if that's your style.
                </p>

            </div>
            <div class="col span_1_of_4 box">
                <i class="ion-ios-stopwatch-outline icon-big"></i>
                <h3> Ready in 20 minutes</h3>
                <p>
                    You're only twenty minutes away from your delicious and super healthy meals delivered right to your home. We work with the best chefs in each town to ensure that you're 100% happy.
                </p>

            </div>
            
            <div class="col span_1_of_4 box">
                <i class="ion-ios-nutrition-outline icon-big"></i>
                <h3>  100% organic</h3>
                <p>
                    All our vegetables are fresh, organic and local. Animals are raised without added hormones or antibiotics. Good for your health, the environment, and it also tastes better!
                </p>

            </div>
            
            <div class="col span_1_of_4 box">
                <i class="ion-ios-cart-outline icon-big"></i>
                <h3> Order anything</h3>
                <p>
                    We don't limit your creativity, which means you can order whatever you feel like. You can also choose from our menu containing over 100 delicious meals. It's up to you!
                </p>

            </div>
        </div>

        

    </section>

    
    
    

    <section class="section-meals" >
       <ul class="meal-show ">
           <li>
               <figure class="meal-photo">
                   <img src="resources\css\img\1.jpg" alt="	Korean bibimbap with egg and vegetables">
               </figure>
           </li>
           <li>
            <figure class="meal-photo" >
                <img src="resources\css\img\2.jpg" alt="Simple italian pizza with cherry tomatoes">
            </figure>
        </li>
        <li>
            <figure class="meal-photo">
                <img src="resources\css\img\3.jpg" alt="Chicken breast steak with vegetables ">
            </figure>
        </li>
        <li>
            <figure class="meal-photo" >
                <img src="resources\css\img\4.jpg" alt="Autumn pumpkin soup">
            </figure>
        </li>


       </ul>



       <ul class="meal-show">
          <li>
              <figure class="meal-photo">
                  <img src="resources\css\img\5.jpg" alt="Paleo beef steak with vegetables">
              </figure>
           </li>
         <li>
              <figure class="meal-photo">
                 <img src="resources\css\img\6.jpg" alt="Healthy baguette with egg and vegetables">
              </figure>
         </li>
         <li>
              <figure class="meal-photo">
                  <img src="resources\css\img\7.jpg" alt="Burger with cheddar and bacon">
              </figure>
           </li>
          <li>
              <figure class="meal-photo">
                  <img src="resources\css\img\8.jpg" alt="Granola with cherries and strawberries">
              </figure>
          </li>


        </ul>



    </section>

        

           <section class="section-city" id="city">

            <div class="row">
                <h2> We're currently in these cities</h2>
            </div>

            <div class="row">

                <div class="col span_1_of_4 box ">


                    <img src="resources/css/img/mathara.jpg" alt="MATHARA">
                    <h3>Mathara</h3>


                    <div class="city-feture">

                        <i class="ion-ios-person icon-small"></i>
                        1600+ happy eaters

                    </div>

                    <div class="city-feture">

                        <i class="ion-ios-star icon-small"></i>
                        60+ top chefs

                    </div>

                    <div class="city-feture">

                        <i class="ion-social-twitter icon-small"></i>
                       
                        <a href="#" class="a"> @Hungry_mathara</a>

                    </div>

                </div>


                <div class="col span_1_of_4  box">


                    <img src="resources/css/img/galle.jpg" alt="GALLE">
                    <h3>Galle</h3>


                    <div class="city-feture">

                        <i class="ion-ios-person icon-small"></i>
                       
                        3700+ happy eaters
                        
                        

                    </div>

                    <div class="city-feture">

                        <i class="ion-ios-star icon-small"></i>
                        160+ top chefs

                    </div>

                    <div class="city-feture">

                        <i class="ion-social-twitter icon-small"></i>
                        
                        <a href="#" class="a"> @Hungry_galle</a>

                    </div>

                </div>


                <div class="col span_1_of_4  box ">


                    <img src="resources/css/img/hambanthota.jpg" alt=" HAMBANTHOTA">
                    <h3> Hambanthota</h3>


                    <div class="city-feture ">

                        <i class="ion-ios-person icon-small"></i>
                        2300+ happy eaters
                       
          
           
          

                    </div>

                    <div class="city-feture">

                        <i class="ion-ios-star icon-small"></i>
                        110+ top chefs

                    </div>

                    <div class="city-feture">

                        <i class="ion-social-twitter icon-small"></i>
                        
                        <a href="#" class="a">@Hungry_Hambanthota</a>

                    </div>

                </div>


                <div class="col span_1_of_4  box ">


                    <img src="resources/css/img/kandy.jpg" alt=" kandy">
                    <h3> Kandy</h3>


                    <div class="city-feture">

                        <i class="ion-ios-person icon-small"></i>
                        1200+ happy eaters
                       
                        
                        
                       

                    </div>

                    <div class="city-feture">

                        <i class="ion-ios-star icon-small"></i>
                        50+ top chefs

                    </div>

                    <div class="city-feture">

                        <i class="ion-social-twitter icon-small"></i>
                        
                        <a href="#" class="a"> @Hungry_Kandy</a>

                    </div>

                </div>


            </div>

           </section>


           <section class="section-imotional ">
               

                  <div class="row">
                   <h2> Our customers can't live without us </h2>
                 </div>


                <div class="col span-1-of-3 ">
                <blockquote>

                    Omnifood is just awesome! I just launched a startup which leaves me with no time for cooking, so Omnifood is a life-saver. Now that I got used to it, I couldn't live without my daily meals!
                    <cite> <img src="resources/css/img/customer-1.jpg" alt="cus1"> Ronal kalhara </cite>

                </blockquote>

               </div>
               <div class="col span-1-of-3 ">
                <blockquote>

                    Inexpensive, healthy and great-tasting meals, delivered right to my home. We have lots of food delivery here in Lisbon, but no one comes even close to Omifood. Me and my family are so in love!
                    <cite> <img src="resources/css/img/customer-2.jpg" alt="cus2"> Ishini devindi </cite>

                </blockquote>

              </div>
              <div class="col span-1-of-3">
                <blockquote>

                    I was looking for a quick and easy food delivery service in San Franciso. I tried a lot of them and ended up with Omnifood. Best food delivery service in the Bay Area. Keep up the great work!
                    <cite> <img src="resources/css/img/customer-3.jpg" alt="cus1"> Sajana Akash </cite>

                </blockquote>

               </div>

           

 
            </section>

            <section class="section-price" id="meal">

                <div class="row">

                    <h2> Start eating healthy today </h2>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">

                        <div class="plan-box">

                            <div>
                                <h3>Premium</h3>
                                <p class="plan-price"> RS.6390 <span>per month</span>  </p>
                                <p class="plan-price-meal">That’s only Rs.330 per meal</p>
                            </div>
                            <div>
                                <ul>
                                    <li><i class="ion-ios-checkmark-empty icon-small"> </i>1 meal every day</li>
                                    <li><i class="ion-ios-checkmark-empty icon-small">  </i>Order 24/7</li>
                                    <li><i class="ion-ios-checkmark-empty icon-small"> </i>Access to newest creations</li>
                                    <li><i class="ion-ios-checkmark-empty icon-small"> </i>Free delivery</li>
                                </ul>
                            </div>
                            <div><a href="#sign up"class="btn btn-full">sign up</a></div>
                        </div>

                    </div>




                    <div class="col span-1-of-3">

                        <div class="plan-box">

                            <div>
                                <h3>Pro</h3>
                                <p class="plan-price">RS.3500  <span>per month</span>  </p>
                                <p class="plan-price-meal">That’s onlyRS.140 per meal</p>
                            </div>
                            <div>
                                <ul>
                                    <li><i class="ion-ios-checkmark-empty icon-small"> </i>1 meal 10 days/month</li>
                                    <li><i class="ion-ios-checkmark-empty icon-small">  </i>Order 24/7</li>
                                    <li><i class="ion-ios-checkmark-empty icon-small"> </i>Access to newest creations</li>
                                    <li><i class="ion-ios-checkmark-empty icon-small"> </i>Free delivery</li>
                                </ul>
                            </div>
                            <div><a href="#sign up"class="btn btn-ghots">sign up</a></div>
                        </div>

                    </div>





                    <div class="col span-1-of-3">

                        <div class="plan-box">

                            <div>
                                <h3>Premium</h3>
                                <p class="plan-price">RS.190  <span>per meal</span>  </p>
                                <p class="plan-price-meal">&nbsp; </p>
                            </div>
                            <div>
                                <ul>
                                    <li><i class="ion-ios-checkmark-empty icon-small"></i>1 meal</li>
                                    <li><i class="ion-ios-checkmark-empty icon-small">  </i>Order from 8 am to 12 pm</li>
                                    <li><i class="ion-ios-close-empty icon-small"> </i></li>
                                    <li><i class="ion-ios-checkmark-empty icon-small"> </i> Free delivery</li>
                                </ul>
                            </div>
                            <div><a href="#sign up"class="btn btn-ghots">sign up</a></div>
                        </div>

                    </div>


                </div>





                
                
                
               
                
                
                
                

            </section>

            <section class="form" id="sign up">
                <div class="row">
                    <h2>
                        We're happy to hear from you

                    </h2>
                </div>

                <div class="row">


                   <form name="myForm" action="#" onsubmit="return validateForm()" method="post" class="contact-form">


                        <div class="row">
                            <div class="col span-1-of-3">
                                <label for="User Name" >User Name</label>
                            </div>
                            <div class="col span-2-of-3">
                            <input type="text" name="fname" placeholder="Name">
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
                                <label >&nbsp;</label>
                            </div>
                            <div class="col span-1-of-3">
                            <input type="submit" value="Submit" name="submit">

                              
                            </div>
                        </div>

                        <div class="row">
                            <div class="col span-1-of-3">
                                <label >&nbsp;</label>
                            </div>
                            <div class="col span-1-of-3">
                               

                            <a class="btn btn-ghots" href="login.php">new account</a> 
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

            <script type="text/javascript" src="resources/javascript/main.js"></script>
            <script type="text/javascript" src=" resources/javascript/nnn.js"></script>
    </body>
   
</html>
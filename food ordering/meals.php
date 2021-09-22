<?php
session_start();
include('db.php');
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query(
$con,
"SELECT * FROM `products` WHERE `code`='$code'"
);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
$image = $row['image'];
 
$cartArray = array(
 $code=>array(
 'name'=>$name,
 'code'=>$code,
 'price'=>$price,
 'quantity'=>1,
 'image'=>$image)
);
 
if(empty($_SESSION["shopping_cart"])) {
    $_SESSION["shopping_cart"] = $cartArray;
    $status = " <div> </div>";
}else{
    $array_keys = array_keys($_SESSION["shopping_cart"]);
    if(in_array($code,$array_keys)) {
 $status = " <div> </div>"; 
    } else {
    $_SESSION["shopping_cart"] = array_merge(
    $_SESSION["shopping_cart"],
    $cartArray
    );
    $status = " <div> </div>";
 }
 
 }
}
?>
<!DOCTYPE html>
    <html lang="en">
 <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
 

        <link rel="stylesheet" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Source+Sans+Pro&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="vendors/css/7.1 Grid.css">
       <link rel="stylesheet" href="vendors/css/ionicons.min.css">
  </head>
    <body>

    <?php
      if(!empty($_SESSION["shopping_cart"])) {
    $cart_count = count(array_keys($_SESSION["shopping_cart"]));
    ?>

<?php
}
?>

    <header>
        <nav>
            <div class="row">
                <img src="resources/css/img/logo.jpg" alt="food logo" class="logo">
                <ul class="main-nav">

                   
                    
                    <li> <a href="preview.php">LOG OUT</a> </li>
                    <li> <a href="CART.php">cart </a> </li>

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

    

 



<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>

<?php
}
?>

<section class='section-price' id='main-meal'>
<div class="row">

<h2> Main meals </h2>
</div>


<?php
$result = mysqli_query($con,"SELECT * FROM `products`");
while($row = mysqli_fetch_assoc($result)){
    echo "

    <div class='row'>
        <div class='col'>
        <form action=''method='post'  >

            <div class='plan-box'>
            <input type='hidden' name='code' value=".$row['code']." />

            

                
                    
            <div class='price'> <strong>  RS. ".$row['price']." only</strong></div>  
                   
                   
                    
                

                <div class='box img'><img src='".$row['image']."' /></div>


                <div>
                    <ul>
                        <li><i class='ion-ios-checkmark-empty icon-small'> </i>for one person</li>
                        <li><i class='ion-ios-checkmark-empty icon-small'>  </i>Order 24/7</li>
                        <li><i class='ion-ios-checkmark-empty icon-small'> </i>Access to newest creations</li>
                        <li><i class='ion-ios-checkmark-empty icon-small'> </i>Free delivery</li>
                    </ul>
                </div>

              
                <div ><a href='order.php'class='btn btn-full'>buy it now</a></div>
                <div class='cart'>
                <button type='submit' class='btn-cart '><i class='ion-ios-cart icon-small'></i></button>

                </div>
            </div>

        </form>

        </div>
        ";
        }




mysqli_close($con);
?>

</section>
 
<div style="clear:both;"></div>
 
<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>

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
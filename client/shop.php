<?php
session_start();

$username=$_SESSION['username'];

include_once "../shared/connection.php";
$c="select * from orders where username='$username';";
$object=mysqli_query($conn,$c);
$count=mysqli_num_rows($object);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="home.css">

        <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script>
        <style>
            .cart-count{
                width:20px;
                height:20px;
                border-radius:50%;
                background-color:azure;
                padding:4px;
                position:absolute;
                right:-2px;
                top:-10px;
                font-weight:bold;
            }
        </style>
    </head>
    <body>
        <section id="header">
         <a href="#"><img src="../images/Logo/logo1.png" class="logo" alt=""></a>
         
         <div>
            <ul id="navbar">       
                <li><a href="home.php">Home</a></li>
                <li><a class="active" href="shop.php">Shop</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="fa fa-shopping-bag"></i></a>
                    <span class="cart-count"><?php
                      echo "$count";
                    ?></span>                
                </li>
                <li><a href="logout.php">Logout</a></li>
                <a href="#" id="close"><i class="fa fa-times"></i></a>
            </ul>
         </div>

         <div id="mobile">
            <a href="cart.php"><i class="fa fa-shopping-bag icon1"></i></a>
            <button id="bar"><i class="fas fa-outdent icon1"></i></button>
         </div>
        </section>

        <section id="page-header">
            <h2>#stayhome</h2>
            <p>Save more with coupons and up to 70% off ! </p>
        </section>

<?php

    include_once "../shared/connection.php";

    $mysqli_obj=mysqli_query($conn,"select * from products");

    echo "<section id='product1' class='section-p1'>
    <div class='pro-container'>";

    while($row=mysqli_fetch_assoc($mysqli_obj)){
    $pid=$row['pid'];
    $cmp_name=$row['cmp_name'];
    $name=$row['name'];
    $price=$row['price'];
    $details=$row['details'];
    $impath=$row['impath'];

            echo "<a style='text-decoration:none;' href='sproduct.php?pid=$pid'><div class='pro'>
                    <img src='$impath' alt=''>
                    <div class='des'>
                        <span>$cmp_name</span>
                        <h5>$name</h5>
                        <div class='start'>
                            <i class='fas fa-star'></i>
                            <i class='fas fa-star'></i>
                            <i class='fas fa-star'></i>
                            <i class='fas fa-star'></i>
                            <i class='fas fa-star'></i>
                        </div>
                        <h4>$$price</h4>
                    </div>
                    <a href='addToCart.php?pid=$pid'><i class='fa fa-shopping-cart cart'></i></a>
                </div>
                </a>";
    }

        echo "</div>
        </section>";

        echo "<section id='pagination' class='section-p1'>
            <a href='#'>1</a>
            <a href='#'>2</a>
            <a href='#'><i class='fa fa-long-arrow-alt-right'></i></a>
        </section>

        <section id='newsletter' class='section-p1 section-m1'>
            <div class='newstext'>
                <h4>Sign Up For Newsletter</h4>
                <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
            </div>
            <div class='form'>
                <input type='text' placeholder='Your E-mail Address'>
                <button class='normal'>Sign Up</button>
            </div>
        </section>

        <footer class='section-p1'>
            <div class='col follow'>
                <h4>Follow Us</h4>
                <div class='icons'>
                    <i class='fab fa-facebook-f icon'></i>
                    <i class='fab fa-twitter icon'></i>
                    <i class='fab fa-instagram icon'></i>
                    <i class='fab fa-youtube icon'></i>
                </div>
            </div>

            <div class='col'>
                <h4>About Us</h4>
                <a href='#'>Delivery Information</a>
                <a href='#'>Privacy Policy</a>
                <a href='#'>Terms and conditions</a>
                <a href='#'>Contact us</a>
            </div>

            <div class='col'>
                <h4>My Account</h4>
                <a href='#'>View Cart</a>
                <a href='#'>My Orders</a>
                <a href='#'>Help</a>
            </div>
        </footer>

        <p class='copyright section-p1'>&COPY;SMart 2022</p>
        
        <script src='home.js'></script>
    </body>
</html>";
?>
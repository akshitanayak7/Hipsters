<!DOCTYPE html>
<html>
    <head>
        <title>Vendor Portal</title>
        <link rel="stylesheet" href="../client/home.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script>

        <style>
            #product1 .pro button{
                padding:10px;
                margin:10px;
                border:none;
                background-color:#cdd4f8;
            }
            #product1 .pro button:hover{
                background-color:#E3E6F3;
            }
        </style>
    </head>
    <body>
    <section id="header">
         <a href="#"><img src="../images/Logo/logo1.png" class="logo" alt=""></a>
         
         <div>
            <ul id="navbar">       
                <li><a class="active" href="view.php">View Products</a></li>
                <li><a href="upload.php">Upload Product</a></li>
                <li><a href="order.php">View Orders</a></li>
                <a href="#" id="close"><i class="fa fa-times"></i></a>
                <li><a href="logout.php">Logout</a></li>
            </ul>
         </div>

         <div id="mobile">
            <button id="bar"><i class="fas fa-outdent icon1"></i></button>
         </div>
        </section>
        
        <script src="../client/home.js"></script>
    </body>
</html>

<?php

include_once "../shared/connection.php";

$mysqli_obj=mysqli_query($conn,"select * from products");

echo " <section id='product1' class='section-p1'>
           <div class='pro-container'>";

while($row=mysqli_fetch_assoc($mysqli_obj)){
    $pid=$row['pid'];
    $cmp_name=$row['cmp_name'];
    $name=$row['name'];
    $price=$row['price'];
    $details=$row['details'];
    $impath=$row['impath'];

    echo "<div class='pro'>
    <img src='$impath' alt=''>
    <div class='des'>
        <span>$cmp_name</span>
        <h5>$name</h5>
        <p>$details</p>
        <div class='start'>
            <i class='fas fa-star'></i>
            <i class='fas fa-star'></i>
            <i class='fas fa-star'></i>
            <i class='fas fa-star'></i>
            <i class='fas fa-star'></i>
        </div>
        <h4>$$price</h4>

           <div class='text-end'>
              <a href='edit_product.php?pid=$pid'>
                <button>EDIT</button>
              </a>
              <a href='delete_product.php?pid=$pid'>
                <button>DELETE</button>
              </a>
           </div>
        </form>
       </div>
    </div>";
}

echo "</div>
    </section>";

?>
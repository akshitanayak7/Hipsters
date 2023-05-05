<?php

include_once "../shared/connection.php";

?>
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
                <li><a href="view.php">View Products</a></li>
                <li><a href="upload.php">Upload Product</a></li>
                <li><a class="active" href="order.php">View Orders</a></li>
                <a href="#" id="close"><i class="fa fa-times"></i></a>
                <li><a href="logout.php">Logout</a></li>
            </ul>
         </div>

         <div id="mobile">
            <button id="bar"><i class="fas fa-outdent icon1"></i></button>
         </div>
        </section>

        <section id="cart" class="section-p1">
            <table width="100%">
                <thead>
                    <tr>
                        <td>Username</td>
                        <td>Company Name</td>
                        <td>Image</td>
                        <td>Product</td>
                        <td>Price</td>
                    </tr>
                </thead>

<?php
    echo "<tbody>";

    $cmd="select * from orders;";
    $sql_obj=mysqli_query($conn,$cmd);

    if(mysqli_num_rows($sql_obj)==0){
       echo "<center><h3 style='margin-bottom:50px;margin-top:40px;'>No orders yet!</h3></center>";
    }

    else{

    while($row=mysqli_fetch_assoc($sql_obj)){
        $username=$row['username'];
        $pid=$row['pid'];

        $com="select * from products where pid=$pid";
        $obj=mysqli_query($conn,$com);
        $row1=mysqli_fetch_assoc($obj);

        $imname=$row1['impath'];
        $name=$row1['name'];
        $price=$row1['price'];
        $cmp_name=$row1['cmp_name'];

               echo "<tr>
                        <td>$username</td>
                        <td>$cmp_name</td>
                        <td><img src='$imname' alt=''></td>
                        <td>$name</td>
                        <td>$$price</td>
                    </tr>";
    }
  }
    echo "</tbody>
            </table>
         </section>";
?>
   </body>
   <script src="../client/home.js"></script>
</html>
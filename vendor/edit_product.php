<?php
  $pid=$_GET['pid'];

  include_once "../shared/connection.php";
  $cmd="select * from products where pid=$pid";
  $obj=mysqli_query($conn,$cmd);
  $row=mysqli_fetch_assoc($obj);
  $name=$row['name'];
  $details=$row['details'];
  $price=$row['price'];
  $imname=$row['impath'];
  $cmp_name=$row['cmp_name'];

echo "<!DOCTYPE html>
<html>
    <head>
        <title>Edit</title>

        <!-- <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js' integrity='sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3' crossorigin='anonymous'></script> -->

        <link rel='stylesheet' href='../login.css'>
        
        <style>
             section{
             position: relative;
             height: 160vh;
             width: 100%;
             background: url(../images/form_background/img2.jpg);
             background-size: cover;
             background-position: center center;
            } 
            #back{
                color:white;
                font-size:20px;
            }
        </style>

    </head>
    <body>
  
       <section>
        <div class='form-container'>
            
            <form enctype='multipart/form-data' action='edit.php?pid=$pid' method='post'>

                <h2>Edit Your Product</h2>

                <p>Company Name : $cmp_name</p>
                <input class='form-control' placeholder='New Company Name' type='text' name='cmp_name'>

                <p>Product Name : $name</p>
                <input class='form-control' placeholder='New Product Name' type='text' name='name'>

                <p>Price : $$price</p>
                <input class='form-control' placeholder='New Price in dollars' type='text' name='price'>

                <p>Description : $details</p>
                <textarea class='form-control' placeholder='New Product Description' name='details' cols='60' rows='5'></textarea>

                <div>
                <img src='$imname' widht='200px' height='200px'><p>Old Image</p>
                </div>
                <input class='form-control' type='file' accept='.jpg,.png' name='imname'>

                <input class='btn form-control' type='submit' value='EDIT'>
                
                <center><a id='back' href='view.php'>Go Back!</a></center>

            </form>
        </div>
     </section>
    </body>
</html>";
?>
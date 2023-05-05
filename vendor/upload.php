<!DOCTYPE html>
<html>
    <head>
        <title>Upload</title>

        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> -->

        <link rel="stylesheet" href="../login.css">
        
        <style>
             section{
             position: relative;
             height: 100vh;
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
        <div class="form-container">
            
            <form enctype="multipart/form-data" action="upload_server.php" method="post">

                <h2>Upload Product</h2>

                <input class="form-control" placeholder="Company Name" type="text" name="cmp_name" required>

                <input class="form-control" placeholder="Product Name" type="text" name="name" required>

                <input class="form-control" placeholder="Enter Price in dollars" type="text" name="price" required>

                <textarea class="form-control" placeholder="Enter Product Description" name="details" cols="60" rows="5" required></textarea>

                <input class="form-control" type="file" accept=".jpg,.png" name="imname" required>

                <input class="btn form-control" type="submit" value="UPLOAD">
                
                <center><a id="back" href='view.php'>Go Back!</a></center>

            </form>
        </div>
     </section>
    </body>
</html>
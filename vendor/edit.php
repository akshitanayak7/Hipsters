<?php

$pid=$_GET['pid'];
include_once "../shared/connection.php";

$src_path=$_FILES['imname']['tmp_name'];
   if(!empty($src_path)){
       date_default_timezone_set("Asia/Kolkata");
       $unique=date("YmdHis").".jpg";

       $dest_path="../images/Products/$unique";

       move_uploaded_file($src_path,$dest_path);

       $status=mysqli_query($conn,"update products set impath='$dest_path' where pid=$pid");
       if(!$status){
          echo "There is some problem in updating your product";
          die;
       }
}

$cmp_name=$_POST['cmp_name'];
if(!empty($cmp_name)){
  $status=mysqli_query($conn,"update products set cmp_name='$cmp_name' where pid=$pid");
  if(!$status){
      echo "There is some problem in updating your product";
      die;
  }
}

$name=$_POST['name'];
if(!empty($name)){
      $status=mysqli_query($conn,"update products set name='$name' where pid=$pid");
      if(!$status){
          echo "There is some problem in updating your product";
          die;
      }
}

$details=$_POST['details'];
if(!empty($details)){
      $status=mysqli_query($conn,"update products set details='$details' where pid=$pid");
      if(!$status){
          echo "There is some problem in updating your product";
          die;
      }
}

$price=$_POST['price'];
if(!empty($price)){
      $status=mysqli_query($conn,"update products set price=$price where pid=$pid");
      if(!$status){
          echo "There is some problem in updating your product";
          die;
      }
}

echo "<center><h2 style='margin-top:40px;'>Your Product has been Updated Successfully !</h2>
      <a href='view.php'>Click here to go back to the main page!</a><center>"

?>
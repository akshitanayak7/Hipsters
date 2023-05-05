<?php

$src_path=$_FILES['imname']['tmp_name'];

date_default_timezone_set("Asia/Kolkata");
$unique=date("YmdHis").".jpg";

$dest_path="../images/Products/$unique";

move_uploaded_file($src_path,$dest_path);

$cmp_name=$_POST['cmp_name'];
$name=$_POST['name'];
$details=$_POST['details'];
$price=$_POST['price'];

include_once "../shared/connection.php";

$cmd="insert into products(cmp_name,name,details,price,impath) values('$cmp_name','$name','$details',$price,'$dest_path')";

$status=mysqli_query($conn,$cmd);
 
if($status){
 echo "<center><h2 style='color:#1a1a1a;'>Product Uploaded Successfully !</h2>
       <a style='color:#1a1a1a;' href='view.php'>Click here to go back to the main page.</a></center>";
}

?>
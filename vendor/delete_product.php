<?php

include_once "../shared/connection.php";

$pid=$_GET['pid'];
$cmd="delete from products where pid='$pid'";

$status=mysqli_query($conn,$cmd);

if($status){
    header('location:view.php');
}
else{
    echo "Cannot delete. Check the syntax.";
}

?>
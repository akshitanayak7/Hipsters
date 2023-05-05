<?php
    session_start();

    $uname=$_SESSION['username'];

    $pid=$_GET['pid'];

    // if(!isset($_SESSION['cart'])){
    //     $_SESSION['cart']=array();
    // }

    // $local_cart=$_SESSION['cart'];

    include_once "../shared/connection.php";

    $com="select * from orders where username='$uname' and pid=$pid";
    $sql_obj=mysqli_query($conn,$com);
    if(mysqli_num_rows($sql_obj)!=0){
        echo "<center><h2 style='margin-top:30px;'>Product is already available in cart !</h2></center>";
    }
    
    else{
    $cmd="insert into orders values('$uname',$pid)";

    $status=mysqli_query($conn,$cmd);
    header('location:javascript:history.back()');
    }
?>
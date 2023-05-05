<?php

session_start();
$_SESSION['username']=$_GET['username'];

$username=$_POST['username'];
$password=$_POST['password1'];
$mobile=$_POST['mobile'];

$conn=new mysqli("localhost","root","","acme");

try{
    $cmd="insert into accounts values('$username','$password','$mobile')";

    $status=mysqli_query($conn,$cmd);

   if($status){
        header('location:client/home.php');
   }
}
catch(Exception $e){
        echo "<h1>Username already exists. Enter another Username.</h1></br>
        <a href='register.html'>Try again!</a>";
}

?>
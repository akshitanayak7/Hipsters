<?php

session_start();

$uname=$_GET['username'];
$password=$_GET['password'];

$_SESSION['username']=$uname;

$conn=new mysqli("localhost","root","","acme");

$sql_obj=mysqli_query($conn,"select * from accounts where username='$uname' and password='$password';");
$total_rows=mysqli_num_rows($sql_obj);

if($total_rows==0){
    $_SESSION['login']=false;
    echo "<h1>Invalid Login Credentials.<h1></br>
    <a href='login.html'>Login again!</a>";
    die;
}

$_SESSION['login']=true;
header('location:client/home.php');

?>
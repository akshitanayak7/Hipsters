<?php

session_start();

$uname=$_GET['username'];
$password=$_GET['password'];

if($uname=='admin' && $password=='adminpage123'){
     $_SESSION['login']=true;
     header('location:view.php');
}
else{
    echo "<center><h2 style='margin-top:30px;'>Invalid Credentials!</h2>
          <a href=admin_login.html>GO BACK!</a></center>";
}

?>
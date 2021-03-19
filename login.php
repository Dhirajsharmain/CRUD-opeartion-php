<?php
 session_start();
 require "connect.php";
 $email=$_POST['email'];
 $password=$_POST['password'];
 $query="select * from `table1` where `email`='$email' && `password`='$password'";
 $result=mysqli_query($connect, $query);
 $num=mysqli_num_rows($result);

 if($num==1)
 {
 $_SESSION['email']=$email;
 $_SESSION['password']=$password;
 header('location: index.php');
 }
 else{
 echo "check your email and password";
 header('location: insert.php');
 }

?>
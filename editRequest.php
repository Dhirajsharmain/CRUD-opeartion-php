<?php
require "connect.php";
$id = $_COOKIE['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];
$password = $_POST['password'];
$query = "UPDATE `table1` SET `name`='$name',`email`='$email',`mobile`='$mobile',`gender`='$gender',`password`='$password' WHERE `id`='$id'";

$fire = mysqli_query($connect,$query);
if($fire){
    header("Location: index.php?msg=success");
}else{
    header("Location: index.php?msg=fail");
}

?>
<?php
//if (isset($_POST['submit'])) {
 require "connect.php";  
 $name=$_POST['name'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 $mobile=$_POST['mobile'];
 $gender=$_POST['gender'];
 $query="insert into `table1` (`name`, `email`, `password`, `mobile`, `gender`) VALUES ('$name','$email','$password', '$mobile', '$gender')";  
 $fire=mysqli_query($connect,$query);

if($fire){
    header("Location: insert.php?msg=success");
}else{
    header("Location: insert.php?msg=fail");
}

if(isset($_GET['msg'])){
    if($_GET['msg'] == "success"){
        echo "<script>alert('Operation Successful')</script>";
    }else{
        echo "<script>alert('Operation Failed')</script>";
    }
}
//}
?>



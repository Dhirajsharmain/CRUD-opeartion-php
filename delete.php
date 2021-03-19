<?php
if ( isset( $_GET['id'] ) ) {
    require "connect.php";
    $id = $_GET['id'];
    $query = "DELETE FROM `table1` WHERE `id`='$id'";
    $fire = mysqli_query($connect,$query);
    if($fire){
        header("Location: index.php?msg=success");
    }else{
        header("Location: index.php?msg=fail");
    }
}
?>
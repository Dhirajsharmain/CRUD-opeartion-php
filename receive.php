<?php
//session_start();
require "connect.php";
  
$id=$_GET['id'];
//$_SESSION["id"] = $id;
setcookie("id", $id, time() + (86400 * 30));

$query = "SELECT * FROM `table1` WHERE `id`='$id'";
$fire = mysqli_query($connect,$query);
$result = mysqli_fetch_assoc($fire);
if($result['gender'] == 'Female'){
    $gender = "Female";
}elseif($result['gender'] == 'Male'){
    $gender = "Male";
}elseif($result['gender'] == 'Other'){
    $gender = "Other";
}

?>

<?php 
require "header.php"; 
?>
<html>
<body>
<div class="rform">
    <h1>REGISTER</h1>
    <form action="editRequest.php" method="post">
        <input type="text" name="name" value="<?php echo $result['name']; ?>" placeholder="Enter your name">
        <input type="email" name="email" value="<?php echo $result['email']; ?>" placeholder="Enter your email">
        <input type="number" name="mobile" value="<?php echo $result['mobile']; ?>" placeholder="Enter your mobile">
        <select name="gender" id="">
            <option value="" <?php if($gender != "Female" && $gender != "Male" && $gender != "Other"){echo "selected"; }?>>Select Gender</option>
            <option value="Female" <?php if($gender == "Female"){echo "selected"; }?>>Female</option>
            <option value="Male" <?php if($gender == "Male"){echo "selected"; }?>>Male</option>
            <option value="Other" <?php if($gender == "Other"){echo "selected"; }?>>Other</option>
        </select>
        <input type="text" name="password" placeholder="Enter your password" value="<?php echo $result['password']; ?>">
        <input type="submit" value="Edit" name="edit">
    </form>
</div>
</body>

</html>

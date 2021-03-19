<?php
session_start();
require "connect.php";
if ( isset( $_SESSION['email'] ) && isset( $_SESSION['password'] ) ) {
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    $query = "select * from `table1` WHERE `email`='$email' AND `password`='$password'";
    $fire = mysqli_query( $connect, $query );
    if ( !$fire ) {
        header( "Location: login.php?msg=fail" );
    } elseif ( !$isAdminFromDB ) {
        header( "Location: login.php?msg=fail" );
    }
} else {
    header( "Location: login.php?msg=fail" );
}

require "header.php";

//if ( isset( $_GET['msg'] ) ) {
//    if ( $_GET['msg'] == "success" ) {
//        echo "<script>alert('Operation Successful')</script>";
//    } else {
//        echo "<script>alert('Operation Failed')</script>";
//    }
//}
?>
<html>

<body>
	<center>
		<table>
			<tr>
				<th>Name</th>
				<!--        <th>Email</th>-->
				<th>Gender</th>
				<th colspan="2">Operations</th>
			</tr>
			<?php
foreach ( $fire as $row ) {
    echo '<tr><td>'.$row["name"].'</td><td>'.$row["gender"].'</td><td><a href="receive.php?id='.$row["id"].'">Edit</a></td><td><a href="delete.php?id='.$row["id"].'">Delete</a></td></tr>';
}
?>
		</table>
	</center>
</body>

</html>
<?php
//session_start();
$Server = 'localhost';
$Username = 'root';
$Password = '';
$Database = 'training';

$connect = new mysqli( $Server, $Username, $Password, $Database );
if ( $connect->connect_error ) {
    die("Database connection failed");
}
?>
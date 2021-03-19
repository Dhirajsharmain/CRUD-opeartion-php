<?php
echo '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        .header {
            height: 50px;
            line-height: 50px;
            width: 100%;
            display: block;
            background: black;
            margin-bottom: 50px;
            text-align: center;
        }

        .header a {
            text-transform: uppercase;
            font-size: 18px;
            color: aliceblue;
            display: inline-block;
            text-decoration: none;
            width: 200px;
            text-align: center;
        }

        .header a:hover {
            cursor: pointer;
            color: blue;
        }

        .rform {
            width: 100%;
            text-align: center;
        }
        
        .gen{
        width: 50px;
        }

        input,
        select,
        option {
            display: block;
            margin: 0 auto;
            margin-top: 15px;
            width: 300px;
            border: 0px;
            height: 40px;
            padding: 10px;
            box-shadow: 0 0 20px -10px rgba(0, 0, 0, 0.25);
        }

        input[type="submit"]:hover {
            cursor: pointer;
            background: #aaa;
        }
        th,td{
        width:100px;
        }
        
        button{
        padding:10px;
        }

    </style>
</head>

<body>
    <div class="header">
        <a href="loginEdit.php">List</a>
        <a href="insert.php">Register</a>
        <a href="insert.php">Logout</a>
    </div>';
?>

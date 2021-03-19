<?php
 require "header.php";?>


<html>
<head> </head>
<body>
    <div class="rform">
        <h2>Registration Form</h2>
        <form action="reg.php" method="post">
            <input type="text" name="name" placeholder="enter your name"><br>
            <input type="email" name="email" placeholder="enter your email id"><br>
            <input type="number" name="mobile" placeholder="enter your mobile no"><br>
            <select name="gender" id="">
                <option value="">Select Gender</option>
                <option value="Female">Female</option>
                <option value="Male">Male</option>
                <option value="Other">Other</option>
            </select>
            <input type="password" name="password" placeholder="enter the password"><br><br>
            IsAdmin:
            <input type="radio" name="isAdmin" value="Yes">YES
            <input type="radio" name="isAdmin" value="No">No<br/>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>

</html>

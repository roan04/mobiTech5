<!DOCTYPE html>
<html>

<head>
    <title>Login | MobiTech </title>
    <link rel="stylesheet" type="text/css" href="../CSS/styleLogin.css">

</head>



<body>
    <div class="loginbox">
        <img src="../Pictures/logo.png" class="avatar">
        <h1>Login Here </h1>

        <form action="process.php" method="get">

            <label for="uname">Email</label>
            <input type="email" name="uname" placeholder="Enter Email">

            <label for="password">Passsword</label>
            <input type="password" name="password" placeholder="Enter password">

            <input type="checkbox" value="lsRememberMe" id="rememberMe">
            <label for="rememberMe">Remember me</label>


            <input type="submit" name="" value="Login">

            <br>
            <a href="">Forgot password?</a>
            <br>
            <a href="register.html">Don't have an account?</a>

        </form>
    </div>

<?php

?>

</body>

</html>
<!DOCTYPE html>

<html>

<head>
    <title>Create Account | MobiTech </title>
    <link rel="stylesheet" type="text/css" href="../CSS/styleRegister.css">

</head>

<body>
    <div class="loginbox">
        <img src="../Pictures/logo.png" class="avatar">
        <h1>Register Here </h1>

        <form action="../Includes/register.inc.php"  method="post">
            <label for="fname">First Name</label>
            <input type="text"  name="fname" placeholder="Enter First Name">

            <label for="lname">Last Name</label>
            <input type="text" name="lname" placeholder="Enter Last Name">

            <label for="uname">Email</label>
            <input type="email" name="uname"  placeholder="Enter Email">

            <label for="password">Passsword</label>
            <input type="password" name="password"  placeholder="Enter password">

            <input type="submit" name="submit" value="Create Account">
        </form>
    </div>


</body>


</html>
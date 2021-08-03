<?php include('mainserver.php') ?>
<html>
<head>
<title>Talentia-Register</title>
    <link rel="stylesheet" type="text/css" href="Register-css.css">
<body>
    <div class="registerbox">
        <h1>Register Here</h1>
        <form action = "Don't_have_account.php" method="post">
            <?php include('errors.php'); ?>
            <p for="Name"> Username</p>
            <input type="text" name="username" placeholder="Enter Your Name">
            <p for="Email">Email Id</p>
            <input type="email" name="email" placeholder="Enter Your Email Id">
            <p for = "Password">Password</p>
            <input type="password" name="password_1" placeholder="Enter Password">
            <p for = "Confirm Password">Confirm Password</p>
            <input type="password" name="password_2" placeholder="Enter Password Again">
            <button type="submit" name = "Register" class="btn">Register</button></a><br><br><br>
        </form>
    </div>
</body>
</head>
</html>
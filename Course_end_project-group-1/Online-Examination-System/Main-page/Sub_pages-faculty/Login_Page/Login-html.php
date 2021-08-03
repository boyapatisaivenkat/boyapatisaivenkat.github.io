<?php include('facultyserver.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>Talentia-Login</title>
    <link rel="stylesheet" type="text/css" href="Login-css.css">
<body>
    <div class="loginbox">
        <h1>Login Here</h1>
        <form method = "POST" action='#'>
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username" required>
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" required><br><br>
            <button type="submit" name = "Login" class="btn">Login</button></a><br><br><br>
            <a href="Don't_have_account.php">Don't have an account?</a>
        </form>
    </div>
</body>
</head>
</html>


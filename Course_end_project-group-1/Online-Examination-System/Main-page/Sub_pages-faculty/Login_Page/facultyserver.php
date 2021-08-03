<?php
session_start();
$username = "";
$email="";
$errors=array();

$db=mysqli_connect('localhost','root','','freg');




if(isset($_POST['Register']))

{
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);


    if(empty($username))
    {
        array_push($errors, "Username is Mandatory");  
    }
    if(empty($email))
    {
        array_push($errors, "Email is Mandatory");  
    }
    if(empty($password_1))
    {
        array_push($errors, "Password is Mandatory");  
    }
    if($password_1 != $password_2)
    {
        array_push($errors, "Kindly Re-enter the Same Password");  
    }

    if(count($errors) == 0)
    {
        $password = md5($password_1);
        $sql = "INSERT INTO users (username, email, password) 
        VALUES ('$username', '$email', '$password')";
        mysqli_query($db, $sql);
        $_SESSION['username']=$username;
        $_SESSION['success']; echo '<script>alert("Registration Successful")</script>';

        header("Location: Login-html.php");
    }


}

if(isset($_POST['Login']))

{
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    


    if(empty($username))
    {
        array_push($errors, "Username is Mandatory");  
    }
    if(empty($password))
    {
        array_push($errors, "Password is Required");  
    }

    if(count($errors) == 0)
    {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username ='$username' AND password ='$password'";
        $result = mysqli_query($db, $query);
        if (mysqli_num_rows($result) == 1)
        {
            $_SESSION['username']=$username;
            $_SESSION['success']='You are now Logged In';
            header("Location: Subject-html.html");
        }
        else
        {
           echo '<script>alert("Invalid Credentials")</script>'; 
            
        }
    }
}

?>

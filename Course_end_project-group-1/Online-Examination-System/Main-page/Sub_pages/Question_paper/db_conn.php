<?php  

$sname = "localhost";
$username = "root";
$password = "";

$db_name = "ans_db";

$conn = mysqli_connect($sname, $username, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
	exit();
}
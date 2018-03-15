<?php
session_start(); 
$error='';
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Usuário e senha obrigatorio";
}
else
{

$username=$_POST['username'];
$password=md5($_POST['password']);

$connection = mysqli_connect("localhost", "root", "");

$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($connection, $username);
$password = mysqli_real_escape_string($connection, $password);

$db = mysqli_select_db($connection, "company");

$query = mysqli_query($connection, "select * from login where password= md5('$password') AND username='$username'");
//$result = mysqli_result($connection, $query);
$rows = mysqli_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: profile.php"); // Redirecting To Other Page
} else {
$error = "Usuario ou senha invalidos";
}
mysqli_close($connection); // Closing Connection
}
}
?>
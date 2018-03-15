<?php
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection,"company");
session_start();
$user=$_SESSION['login_user'];
$sql=mysqli_query($connection,"select username from login where username='$user'");
$row = mysqli_fetch_assoc($sql);
$login_session =$row['username'];
if(!isset($login_session)){
mysqli_close($connection); 
header('Location: index.php'); 
}
?>
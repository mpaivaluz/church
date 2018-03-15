<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Tela de Login</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">
<h1>Tela de Login</h1>
<div id="login">
<h2>Login Form</h2>
<form action="" method="post">
<label>Login :</label>
<input id="username" name="username" placeholder="username" type="text">
<label>Senha :</label>
<input id="password" name="password" placeholder="**********" type="password">
<input name="submit" type="submit" value=" Login ">
<span><?php echo $error; ?></span>
</form>
<p>Caso não tenha o cadastro clique se cadastre <a href="Cadastro.php">Aqui</a></p>
</div>
</div>
</body>
</html>
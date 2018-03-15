<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Logado</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="profile">
<b id="welcome">Bem vindo: <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="logout.php">Sair</a></b>
</div>
</body>
</html>
<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: profile.php");

}
?>
<!DOCTYPE html>
<html>
<head>
<title>Cadastro</title>
<link href="style.css" rel="stylesheet" type="text/css">
<script charset="UTF-8" type="text/javascript" src="JS/script.js">

</script>
</head>
<body>
	<button onclick="window.location.href='index.php'">Voltar</button>
<form id="formCadastro" name="formulario" action="ativarcadastro.php" method="POST">
					<label><h1 class="label">Nome</h1></label>
					<input type="text" name="Nome" required placeholder="Digite seu Nome"><br><br>
					<label><h1 class="label">SobreNome</h1></label>
					<input type="text" name="SobreNome" required placeholder="Digite seu SobreNome"><br><br>
					<label><h1 class="label">E-mail</h1></label><br>
					<input type="email" name="Email" required placeholder="Digite seu Email"><br>
					<label><h1 class="label">Login</h1></label>
					<input type="text" name="username" required placeholder="Digite seu Login"><br><br>
					<label for="txtSenha"><h1 class="senha">Senha</h1></label>
                    <input id="txtSenha" name="password" type="password" required placeholder="Digite uma Senha" title="Senha" /> <br><br>
                    <label for="repetir_senha"><h1 class="senha">Confirmar Senha</h1></label>
                    <input id="repetir_senha" name="repetir_senha" type="password" required  placeholder="Repetir Senha" title="Repetir Senha" oninput="validaSenha(this)" /> <br> <br>
                    <button type="submit" class="enviar">Enviar</button>
    </form>
</body>
</html>
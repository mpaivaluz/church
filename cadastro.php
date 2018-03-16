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
    <div class="box-parent-login">
	<div class="well bg-white box-login">
		<h1 class="ls-login-logo">locaweb</h1>
		<form role="form">
			<fieldset>
 
				<div class="form-group ls-login-user">
					<label for="userLogin">Usuário</label>
					<input class="form-control ls-login-bg-user input-lg" id="userLogin" type="text" aria-label="Usuário" placeholder="Usuário">
				</div>
 
				<div class="form-group ls-login-password">
					<label for="userPassword">Senha</label>
					<input class="form-control ls-login-bg-password input-lg" id="userPassword" type="password" aria-label="Senha" placeholder="Senha">
				</div>
 
				<a href="#" class="ls-login-forgot">Esqueci minha senha</a>
 
				<input type="submit" value="Entrar" class="btn btn-primary btn-lg btn-block">
				<p class="txt-center ls-login-signup">Não possui um usuário na Locaweb?
					<a href="#">Cadastre-se agora</a>
				</p>
 
			</fieldset>
		</form>
	</div>
</div>
</body>
</html>



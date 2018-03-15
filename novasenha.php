<!DOCTYPE html>
<html>
<head>
<title>Cadastro</title>
<link href="style.css" rel="stylesheet" type="text/css">
<script charset="UTF-8" type="text/javascript" src="JS/script.js">

</script>
</head>
<body>
<form id="formCadastro" name="formulario" action="enviarnovasenha.php" method="POST">
					<label><h1 class="label">Confirme seu E-mail</h1></label><br>
					<input type="email" name="Email" required placeholder="Email"><br>
					<label for="txtSenha"><h1 class="senha">Nova Senha</h1></label>
                    <input id="txtSenha" name="password" type="password" required placeholder="Digite uma Senha" title="Senha" /> <br><br>
                    <label for="repetir_senha"><h1 class="senha">Confirmar Nova Senha</h1></label>
                    <input id="repetir_senha" name="repetir_senha" type="password" required  placeholder="Repetir Senha" title="Repetir Senha" oninput="validaSenha(this)" /> <br> <br>
                    <button type="submit" class="enviar">Enviar</button>
    </form>
</body>
</html>
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
<form id="formCadastro" name="formulario" action="enviaresqueceusenha.php" method="POST">
					<label><h1 class="label">Confirme seu e-mail</h1></label><br>
					<input type="email" name="Email" required placeholder="Digite seu Email"><br>
                    <button type="submit" class="enviar">Enviar</button>
    </form>
</body>
</html>
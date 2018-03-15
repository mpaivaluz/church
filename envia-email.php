<?php
$username  = $_POST['username'];
$email = $_POST['Email'];
$nome = $_POST['Nome'];
$sobrenome = $_POST['SobreNome'];
$subject = "Confirmação de cadastro no site teste";
$message = "Ola, oi Obrigado por se cadastrar $nome $sobrenome"; 
//",Bem Vindo(a)";
$headers = "To: $nome <$email>" . "\r\n";
$headers .= "From: Teste <mpaivaluz@gmail.com>" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
mail($email, $subject, $message, $headers);
?>
<?php
$email = $_POST['Email'];
$con = mysqli_connect('localhost', 'root', '') or die ('Erro ao conectar ao banco');
$db = mysqli_select_db($con, "company");
$sql = "SELECT email from login where email='$email'";
$query = mysqli_query($con, $sql);
$row = mysqli_num_rows($query);
if (($row)=='0'){
		echo "<script>window.location='esqueceusenha.php';alert('Email não existe');</script>";
} else {
$subject = "Link para alteração de email";
$message = "<p>Clique para alterar a senha <a href='http://179.83.255.44/church/novasenha.php'>aqui</a></p>"; 
//",Bem Vindo(a)";
$headers = "To: <$email>" . "\r\n";
$headers .= "From: Teste <mpaivaluz@gmail.com>" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
mail($email, $subject, $message, $headers);
echo "<script>window.location='index.php';alert('email enviado com sucesso');</script>";
}
?>
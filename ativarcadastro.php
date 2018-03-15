<?php
$nome = $_POST['Nome'];
$sobrenome = $_POST['SobreNome'];
$email = $_POST['Email'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$con = mysqli_connect('localhost', 'root', '') or die ('Erro ao conectar ao banco');
$db = mysqli_select_db($con, "company");
$sql = "SELECT * from login where username='$username' or email='$email'";
$query = mysqli_query($con, $sql);
$row = mysqli_num_rows($query);
if (($row)=='0'){
	$result = "INSERT INTO login (nome, sobrenome, email, username, password) VALUES ('$nome', '$sobrenome', '$email', '$username', md5('$password'))";
	$insert = mysqli_query($con, $result);
	include "envia-email.php";
	echo "<script>window.location='index.php';alert('Cadastro realizado com sucesso');</script>";
}
 else {
	echo "<script>window.location='cadastro.php';alert('Usuario ou Email ja existe');</script>";
}
mysqli_close($con);
?>
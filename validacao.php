<?php
$username = $_POST['username'];
$con = mysqli_connect('localhost', 'root', '') or die ('Erro ao conectar ao banco');
$db = mysqli_select_db($con, "company");
$sql = "SELECT username from login where username='$username'";
$query = mysqli_query($con, $sql);
$row = mysqli_num_rows($query);
if (($row)=='1'){
	echo "<script>window.location='index.php';alert('Cadastro realizado com sucesso');</script>";
}else {
	$error = "Usuario ja existe";
}

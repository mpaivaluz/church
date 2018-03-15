<?php
$email = $_POST['Email'];
$password = md5($_POST['password']);
$con = mysqli_connect('localhost', 'root', '') or die ('Erro ao conectar ao banco');
$db = mysqli_select_db($con, "company");
$sql = "SELECT email from login where email='$email'";
$query = mysqli_query($con, $sql);
$row = mysqli_num_rows($query);
if (($row)=='0'){
		echo "<script>window.location='novasenha.php';alert('Email não existe');</script>";
} else {
	$result = "UPDATE login SET password = md5('$password') where email = '$email'";
	$rodarquery = mysqli_query($con, $result);
	echo "<script>window.location='index.php';alert('Senha alterada com sucesso');</script>";
}
?>
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

}


?>
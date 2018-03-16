<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Tela de Login</title>
<!--
<link rel="stylesheet" type="text/css" href="css/style.css">
-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
</head>
<body>
<!--
<div id="main">
<h1>Tela de Login</h1>
<div id="login">
<h2>Login Form</h2>
<form action="" method="post">
<label>Login :</label>
<input id="username" name="username" placeholder="username" type="text">
<label>Senha :</label>
<input id="password" name="password" placeholder="**********" type="password">
<input name="submit" type="submit" value=" Login ">
<span><?php echo $error; ?></span>
</form>
<p>Caso não tenha o cadastro clique <button onclick="window.location.href='Cadastro.php'">Aqui</button></p>
<p><a href="Esqueceusenha.php">Esqueceu sua senha?</a></p>
</div>
</div>
-->
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="" autocomplete="on" method="post"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label class="uname" data-icon="u" >Login</label>
                                    <input id="username" name="username" placeholder="username" type="text">
                                </p>
                                <p> 
                                    <label class="youpasswd" data-icon="p">Senha</label>
                                    <input id="password" name="password" placeholder="**********" type="password">
                                </p>
                                <p class="login button"> 
                                    <input name="submit" type="submit" value="Login" /> 
                                    <span><?php echo $error; ?></span>
								</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="Cadastro.php" class="to_register">Join us</a>
								</p>
                            </form>
                        </div>
</body>
</html>
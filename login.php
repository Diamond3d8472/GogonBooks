<?php session_start(); if(isset($_SESSION['usuarioUsername'])){header("Location: index.php");}?>
<!DOCTYPE html>
<html>
<head>
	<title>Realize o login</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="img/wave.png" alt='Sem suporte a imagem'>
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form method="POST" action="forms/validal.php">
				<img src="img/avatar.svg" alt='Sem suporte a imagem'>
				<h2 class="title">Bem-vindo</h2>
				<h4>Entre com login para poder comprar na nossa loja</h4>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Usuario</h5>
           		   		<input type="text" name="username" class="input" required>
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Senha</h5>
           		    	<input type="password" name="senha" class="input" required>
            	   </div>
				</div>
				<div class="row">
					<a href="index.php?page=CadUser">Nao tem conta, crie a sua hoje.</a>
				</div>
				<input type="submit" class="btn" value="Login">
					<?php if (isset( $_SESSION['loginErro'])){
						echo  '<h4 class = "title">'.$_SESSION['loginErro'].'</h4';
						unset($_SESSION['loginErro']);
					}else{
						echo '';
					}?>
			</form>
		</div>
	</div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>

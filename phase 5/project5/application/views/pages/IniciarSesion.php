<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>/css/leanevent.css">
		<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<title>Iniciar Sesión</title>
</head>

<body id="wrapper">
	<header id="main-header">
		<div class="header">
			<h1 class="menu">
				<span class="logoblanco">
				<img class="logo" src="<?php echo base_url(); ?>images/logo-blanco.png" alt="logo-blanco.png">
				</span>
				<span class="name">LEANEVENTOS</span>
				<a class="navlink" href="<?php echo base_url(); ?>ComprarBoletos" target="_blank"> Comprar Boletos </a>
				<a class="currentPage" href="<?php echo base_url(); ?>IniciarSesion" target="_blank"> Iniciar Sesión </a>
				<a class="navlink" href="<?php echo base_url(); ?>Contacto" target="_blank"> Contacto </a>
				<a class="navlink" href="<?php echo base_url(); ?>Registrate" target="_blank"> Regístrate </a>
				<a class="navlink" href="http://goutami.uta.cloud/Padmanabhan_LEANEVENT/Blog/" target="_blank"> Blog </a>
				<a class="navlink" href="<?php echo base_url(); ?>QuienesSomos" target="_blank"> Quiénes Somos </a>
				<a class="navlink" href="<?php echo base_url(); ?>"> Inicio </a>
			</h1>
		</div>		
	</header>

	<main>
		<div class="imgslide2">
			<img class="bannercboleto" src="<?php echo base_url(); ?>images/bannerlogin.jpg" alt="bannerlogin.jpg">
		</div>
		<div class="ctext">
			INICIAR SESIÓN
		</div>
		<div class="ctab">
			<a class="comprarinicio" href="ComprarBoletos.html"> Inicio </a>
		INICIAR SESIÓN
		</div>
		<div class="blankbox"></div>
		<div class="formbox">
			Iniciar Sesión
			<div>

					<?php echo form_open('Logins/login_user'); ?>
				<!-- <form id="myForm" action="<?php //echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> -->
					<div class="nombreapellido">
						<span class="cnombre">Nombre de Usuario</span>
						<span class="contra">Contraseña</span>
					</div>
					<span class="nombrebox">
						<input type="email" class="cnombretext" placeholder="Nombre de Usuario o Correo" name="email" value="<?php echo set_value('email'); ?>">
					</span>
					<span class="apelidobox">
						<input type="password" class="cnombretext" placeholder="Contraseña" name="pass" value="<?php echo set_value('pass'); ?>">
					</span>
					<div>
						<?php echo form_error('email'); ?>
						<?php echo form_error('pass'); ?>
					</div>
					<!-- <div class="error"><?= $emailErr ?></div> -->
					<div class="forgot"><a class="forgotlink" href="<?php echo base_url(); ?>RecuperarContrasena" target="_blank"> Olvido Su contraseña?</a></div>
					<div class="messagebutton">
						<input type="submit" class="mensajebutton" value="Entra" name="login">
					</div>
				</form>
			</div>
		</div>

	</main>

	<footer class="main-footer">
		<div class="socialtext">
			LEAN EN LAS REDES SOCIALES
		</div>
		<div class="social">
			<i class="fab fa-twitter"></i>
			<i class="fab fa-facebook-f"></i>
			<i class="fab fa-instagram"></i>
		</div>
		<div class="copy">
			<span>Copyright &copy; 2019 All rights reserved | This web is made with <i class="far fa-heart"></i> by <span class="copyname">Goutami</span></span> <span><a href="#top" class="uparrow"><i class="fas fa-arrow-circle-up fa-lg"></i></a></span>
		</div>
	</footer>
	<script src="main.js"></script>
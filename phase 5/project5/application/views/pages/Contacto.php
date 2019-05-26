<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>/css/leanevent.css">
		<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">	
		<title>Contacto</title>
</head>

<body id="wrapper">
	<header id="main-header">
		<nav class="header">
			<h1 class="menu">
				<span class="logoblanco">
				<img class="logo" src="<?php echo base_url(); ?>images/logo-blanco.png" alt="logo-blanco.png">
				</span>
				<span class="name">LEANEVENTOS</span>
				<a class="navlink" href="<?php echo base_url(); ?>ComprarBoletos" target="_blank"> Comprar Boletos </a>
				<a class="navlink" href="<?php echo base_url(); ?>IniciarSesion" target="_blank"> Iniciar Sesión </a>
				<a class="currentPage" href="<?php echo base_url(); ?>Contacto" target="_blank"> Contacto </a>
				<a class="navlink" href="<?php echo base_url(); ?>Registrate" target="_blank"> Regístrate </a>
				<a class="navlink" href="http://goutami.uta.cloud/Padmanabhan_LEANEVENT/Blog/" target="_blank"> Blog </a>
				<a class="navlink" href="<?php echo base_url(); ?>QuienesSomos" target="_blank"> Quiénes Somos </a>
				<a class="navlink" href="<?php echo base_url(); ?>"> Inicio </a>
			</h1>
		</nav>		
	</header>

	<main>
		<div class="imgslide2">
			<img class="bannercboleto" src="<?php echo base_url(); ?>images/bannercontacto.jpg" alt="bannercontacto.jpg">
		</div>
		<div class="ctext">
			CONTACTO
		</div>
		<div class="ctab">
			<a class="comprarinicio" href="ComprarBoletos.html"> Inicio </a>
		CONTACTO
		</div>
		<div class="infohead">
			Información del contacto
		</div>
		<div class="info">
			<address class="address">
				<i class="fas fa-map-marker-alt"></i>
				<span>198 West 21th Street, Suite 721 New York NY 10016</span>
				<span class="tele">
					<i class="fas fa-phone"></i>
					<a href="tel:123-523-5598" class="telephone">+1235 2355 98</a>
				</span>
				<span class="tele">
					<i class="far fa-paper-plane"></i> info@diazapps.com
				</span>
				<span class="tele">
					<i class="fas fa-globe"></i> diazapps.com
				</span>
			</address>
		</div>

		<div class="sociales">
			LEAN en las redes sociales
		</div>

		<div>
			<img class="fb" src="<?php echo base_url(); ?>images/facebook.png">
			<img class="fb" src="<?php echo base_url(); ?>images/twitter.png">
			<img class="fb" src="<?php echo base_url(); ?>images/instagram.png">
			<img class="fb" src="<?php echo base_url(); ?>images/correo.png">
		</div>
		<div class="socialaddress">
			<span class="socialfb">LEAN Ayuda Humanitaria</span>
			<span class="socialtwitter">@LeanEmergente</span>
			<span class="socialinsta">LeanAyudaHumanitaria</span>
			<span class="socialcorreo">lean.emergente@gmail.com</span>
		</div>
		<div class="formbox">
			Estar en contacto
			<div>
				<?php echo form_open('Contacts/contact_us'); ?>
				<!-- <form id="myForm" action="<?php //echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> -->
					<div class="nombreapellido">
						<span class="cnombre">Nombre</span>
						<span class="capellido">Apellido</span>
					</div>
					<span class="nombrebox">
						<!-- <input id="firstName" onkeyup="validateFname()" name="contactofname" type="text" class="cnombretext" placeholder="Tu Nombre" required>  -->
						<input id="firstName" onkeyup="validateFname()" name="contactofname" type="text" class="cnombretext" placeholder="Tu Nombre" value="<?php echo set_value('contactofname'); ?>">
					</span>
					<span class="apelidobox">
						<!-- <input id="lastName" onkeyup="validateLname()" name="contactolname" type="text" class="cnombretext" placeholder="Tu Apellido" required> -->
						<input id="lastName" onkeyup="validateLname()" name="contactolname" type="text" class="cnombretext" placeholder="Tu Apellido" value="<?php echo set_value('contactolname'); ?>">
					</span>
					<div>
						<?php echo form_error('contactofname'); ?>
						<?php echo form_error('contactolname'); ?>
						<label id="firstNamePrompt" class="promptSize"></label>
						<label id="lastNamePrompt" class="promptSize"></label>
					</div>

					<div class="nombreapellido">
						<div class="cnombre">Correo</div>
						<div class="correobox">	
														
							<!-- <input id="emailId" onkeyup="validateEmail()" name="contactoemail" type="email" class="ccorreotext" placeholder="Tu correo electrónico" required> -->
							<input id="emailId" onkeyup="validateEmail()" name="contactoemail" type="email" class="ccorreotext" placeholder="Tu correo electrónico" value="<?php echo set_value('contactoemail'); ?>">
							<label id="emailIdPrompt" class="promptSize"></label>
							<?php echo form_error('contactoemail'); ?>
						</div>
					</div>
					<div class="cnombre">Tema</div>
					<div class="correobox">
						<!-- <input id="topic" onkeyup="validateTopic()" name="contactotopic" type="text" class="ccorreotext" placeholder="Su asunto de este mensaje" required> -->
						<input id="topic" onkeyup="validateTopic()" name="contactotopic" type="text" class="ccorreotext" placeholder="Su asunto de este mensaje" value="<?php echo set_value('contactotopic'); ?>">
						<label id="topicPrompt" class="promptSize"></label>
						<?php echo form_error('contactotopic'); ?>
					</div>
					<div class="cnombre">Mensaje</div>
					<div class="correobox">
						<!-- <textarea id="message" onkeyup="validateMessage()" name="contactomsg" class="cmessagetext" placeholder="Di algo sobre nosotros" required></textarea> -->
						<textarea id="message" onkeyup="validateMessage()" name="contactomsg" class="cmessagetext" placeholder="Di algo sobre nosotros" value="<?php echo set_value('contactomsg'); ?>"></textarea>
						<label id="messagePrompt" class="promptSize"></label>
						<?php echo form_error('contactomsg'); ?>
					</div>
					<div class="messagebutton">
						<input type="submit" class="mensajebutton" value="Enviar mensaje" name="contactSubmit" onclick="validateSubmit()">
						
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
	<script type="text/javascript" src="main.js"></script>
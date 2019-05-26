		<title>Registrate</title>
	</head>
	<body id="wrapper">
	<header>
		<nav class="header">
			<h1 class="menu">
				<span class="logoblanco">
				<img class="logo" src="<?php echo base_url(); ?>images/logo-blanco.png" alt="logo-blanco.png">
				</span>
				<span class="name">LEANEVENTOS</span>
				<a class="navlink" href="<?php echo base_url(); ?>ComprarBoletos" target="_blank"> Comprar Boletos </a>
				<a class="navlink" href="<?php echo base_url(); ?>IniciarSesion" target="_blank"> Iniciar Sesión </a>
				<a class="navlink" href="<?php echo base_url(); ?>Contacto" target="_blank"> Contacto </a>
				<a class="currentPage" href="<?php echo base_url(); ?>Registrate" target="_blank"> Regístrate </a>
				<a class="navlink" href="http://goutami.uta.cloud/Padmanabhan_LEANEVENT/Blog/" target="_blank"> Blog </a>
				<a class="navlink" href="<?php echo base_url(); ?>QuienesSomos" target="_blank"> Quiénes Somos </a>
				<a class="navlink" href="<?php echo base_url(); ?>"> Inicio </a>
			</h1>
		</nav>		
	</header>

	<main class="main-register-area">
		<div class="imgslide2">
			<img class="bannerabouth" src="<?php echo base_url(); ?>images/bannerregistro.jpg" alt="bannerregistro.jpg">
		</div>
		<div class="ctext">
			REGÍSTRATE
		</div>
		<div class="rtab">
			<span class="comprarinicio">Inicio </span>  REGÍSTRATE
		</div>
		<div class="registerbox">
			Elija el tipo de usuario para registrarse
			<div class="registerbuttonbox">
					<span class="indbutton"> <a href="<?php echo base_url(); ?>IndividualSignup"> <button id="myBtn" class="registerbutton">Como Individual</button></a> </span>
					<span class="indbutton"> <a href="<?php echo base_url(); ?>BusinessSignup"> <button id="myBtn2" class="registerbutton">Como Negocio o Fundacion</button></a></span>
					<span class="indbutton"><a href="<?php echo base_url(); ?>AgentSignup"><button id="myBtn3" class="registerbutton">Como agente LEAN</button></a></span>
			</div>
			
		</div>
		<div id="myModal" class="modal">
			<div class="modal-content">
				
				<div class="recuperar">Registro Individual</div>
					<?php echo validation_errors(); ?>
					<?php echo form_open('Registers/register'); ?>
					<!-- <form id="myForm" action="<?php //echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> -->
					<div class="forgotbox">
						<span>Correo</span>
						<span class="contraform">Contraseña</span>
					</div>
					<div class="correoform">
						<span class="lfieldpadding">
						<input id="emailId" onkeyup="validateEmail()" name="email" type="email" class="correoind" placeholder="Correo">
						</span>
						<span class="lfieldpadding">
						<input id="pass" onkeyup="validatePwd()" name="pass" type="password" class="correoind" placeholder="Contraseña">
						</span>
						<label id="emailIdPrompt" class="promptSize"></label>
						<label id="passPrompt" class="promptSize"></label>

					</div>

					<div class="forgotbox">
						<span>Nombre</span>
						<span class="contraform">Apellido</span>
					</div>
					<div class="correoform">
						<span class="lfieldpadding">
						<input id="firstName" onkeyup="validateFname()" name="fname" type="text" class="correoind" placeholder="Nombre">
						</span>
						<span class="lfieldpadding">
						<input id="lastName" onkeyup="validateLname()" name="lname" type="text" class="correoind" placeholder="Apellido">
						</span>
						<label id="firstNamePrompt" class="promptSize"></label>
						<label id="lastNamePrompt" class="promptSize"></label>
						<!-- <span class="error"><?= $fnameErr ?></span> -->
						<!-- <span class="error"><?= $lnameErr ?></span> -->
					</div>
					<div class="forgotbox">
						Dirección
					</div>
					<div class="correoform">
						<input id="address" name="address" type="text" class="forgotcorreo" placeholder="Dirección">
						<div>
							<!-- <span class="error"><?= $cityErr ?></span> -->
						</div>
					</div>
					<div class="forgotbox">
						Ciudad
					</div>
					<div class="correoform">
						<input id="city" onkeyup="validateCity()" name="city" type="text" class="forgotcorreo" placeholder="Ciudad">
						<div>
							<label id="cityPrompt" class="promptSize"></label>
							<!-- <span class="error"><?= $cityErr ?></span> -->
						</div>
					</div>
					<div class="forgotbox">
						<span>Estado</span>
						<span class="contraform">Código Postal</span>
					</div>
					<div class="correoform">
						<span class="lfieldpadding">
						<input list="statedatalist" class="correoind" placeholder="Escoger" id="state" onchange="validateState()" name="state">
						<datalist id="statedatalist">

							<option value="Alabama">
							<option value="Alaska">
							<option value="Arizona">
							<option value="Arkansas">
							<option value="California">
							<option value="Colorado">
							<option value="Connecticut">
							<option value="Delaware">
							<option value="District Of Columbia">
							<option value="Florida">
							<option value="Georgia">
							<option value="Hawaii">
							<option value="Idaho">
							<option value="Illinois">
							<option value="Indiana">
							<option value="Iowa">
							<option value="Kansas">
							<option value="Kentucky">
							<option value="Louisiana">
							<option value="Maine">
							<option value="Maryland">
							<option value="Massachusetts">
							<option value="Michigan">
							<option value="Minnesota">
							<option value="Mississippi">
							<option value="Missouri">
							<option value="Montana">
							<option value="Nebraska">
							<option value="Nevada">
							<option value="New Hampshire">
							<option value="New Jersey">
							<option value="New Mexico">
							<option value="New York">
							<option value="North Carolina">
							<option value="North Dakota">
							<option value="Ohio">
							<option value="Oklahoma">
							<option value="Oregon">
							<option value="Pennsylvania">
							<option value="Rhode Island">
							<option value="South Carolina">
							<option value="South Dakota">
							<option value="Tennessee">
							<option value="Texas">
							<option value="Utah">
							<option value="Vermont">
							<option value="Virginia">
							<option value="Washington">
							<option value="West Virginia">
							<option value="Wisconsin">
							<option value="Wyoming">

						</datalist>
						</span>
						<span class="lfieldpadding">
						<input name="zip" type="numbers" class="correoind" id="zip" onkeyup="validateZip()">
						</span>
						<label id="statePrompt" class="promptSize"></label>
						<!-- <span class="error"><?= $stateErr ?></span> -->
						<label id="zipPrompt" class="promptSize"></label>
						<!-- <span class="error"><?= $zipErr ?></span> -->
					</div>
					<div class="regbutton">
						<input type="submit" class="envbutton" value="Registrarse" name="regSubmit" onclick="validateSubmit()">
						<label id="submitPrompt" class="promptSize"></label>
					</div>
					<div class="forgotbutton">
						<!-- <button class="cerrarbutton" id = "cerrarbutton"> Cerrar </button> -->
						<input type="submit" class="cerrarbutton" name="cerrarbutton" value="Cerrar">
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
	<script  type="text/javascript" src="js/main.js"></script>
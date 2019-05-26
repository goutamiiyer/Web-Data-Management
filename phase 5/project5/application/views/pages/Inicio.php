		<title>Inicio</title>
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
					<a class="navlink" href="<?php echo base_url(); ?>Registrate" target="_blank"> Regístrate </a>
					<a class="navlink" href="http://goutami.uta.cloud/Padmanabhan_LEANEVENT/Blog/" target="_blank"> Blog </a>
					<a class="navlink" href="<?php echo base_url(); ?>QuienesSomos" target="_blank"> Quiénes Somos </a>
					<a class="currentPage" href="<?php echo base_url(); ?>"> Inicio </a>
				</h1>
			</nav>		
		</header>
	<main>
		
		<div class="imgslide2">
			<img class="bannerlean" src="<?php echo base_url(); ?>images/bannerlean2.jpg" alt="bannerlean2.jpg">
		</div>
		<div>
			<img class="leanimg" src="<?php echo base_url(); ?>images/logo-blanco.png" alt="logo-blanco.png">
		</div>
		<div class="whatwedo">
			<div class="quehacemos">
				<span class="dash">-------------------</span><strong class="">¿QUÉ HACEMOS?</strong><span class="dash">-------------------</span>
			</div>
			<div class="homepara">
				La asociación civil LEAN fue creada con el objetivo de ayudar, a través de acciones concretas, a nuestros conciudadanos en Venezuela ante la grave escasez de medicinas e insumos médicos en que se encuentra el país. Nuestra misión consiste en recolectar ayuda médico sanitaria en delegaciones en España y, a través de agentes de transporte, llevarlos a Venezuela para que otras asociaciones se encarguen de su distribución. De esta manera aportamos nuestro granito de arena ayudando a llevar asistencia humanitaria a Venezuela. Somos una asociación sin fines de lucro, dedicada a la defensa de los Derechos Humanos.
			</div>
		</div>

		<div>
			<div class="tablerow">
				<table>
					<tr class="row">
						<td class="column1">478</td>
						<td class="column2">60,000</td>
						<td class="column2">45</td>
					</tr>
					<tr>
						<td class="column1">VOLUNTARIOS</td>
						<td class="column2">PERSONAS BENEFICIADAS</td>
						<td class="column2">ALIADOS</td>
					</tr>
				</table>
			</div>
		</div>

		<div>
			<img class="bannerabout" src="<?php echo base_url(); ?>images/bannerabout1.jpg" alt="bannerabout1.jpg">
		</div>
		
		<div class="fronttext">
			<div class="quote">
				"La injusticia, en cualquier parte, es una amenaza a la justicia en todas partes."
			</div>
			<div class="mlk">
				<em>Martin Luther King</em>
			</div>
		</div>
		<div class="aliados">
			<span class="dash">-------------------</span><strong class="">ALIADOS</strong><span class="dash">-------------------</span>
		</div>

	</main>
	<aside class="sponsors">
		<img class="sponsor1" src="<?php echo base_url(); ?>images/logo1.PNG" alt="logo1.png">
		<img class="sponsor1" src="<?php echo base_url(); ?>images/logo2.PNG" alt="logo2.png">
		<img class="sponsor1" src="<?php echo base_url(); ?>images/logo3.PNG" alt="logo3.png">
		<img class="sponsor1" src="<?php echo base_url(); ?>images/logo4.PNG" alt="logo4.png">
		<div class="caret">
		<i class="fas fa-caret-square-left fa-lg"></i>
		<i class="fas fa-caret-square-right fa-lg"></i>				
		</div>			
	</aside>
	<footer class="main-footer">
		<div class="colorfooter">
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
			<i class="far fa-paper-plane fa-lg"></i><span class="register">Registrese para recibir un boletin</span>
			<input type="email" class="mail" name="email">
			<button class="button1" name="subscribe">Suscribir</button>
			</form>
		</div>
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
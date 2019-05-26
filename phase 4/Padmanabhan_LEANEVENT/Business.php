<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<title>Individual</title>
	<link rel="stylesheet" type="text/css" href="css/leanevent.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body id="wrapper">
	<header>
		<nav class="header">
			<h1 class="menu">
				<span class="logoblanco">
				<img class="logo" src="imagenes/logo-blanco.png" alt="logo-blanco.png">
				</span>
				<span class="name">LEANEVENTOS</span>
				<a class="currentPage" href="Individual.php" target="_blank"> Fundacion </a>
				<a class="navlink" href="HomeBusiness.php"> Inicio </a>
			</h1>
		</nav>		
	</header>

	<main>
		<div class="imgslide2">
			<img class="bannercboleto" src="imagenes/bannercontacto.jpg" alt="bannercontacto.jpg">
		</div>
		<div class="ctext">
			PERFIL
		</div>
		<div class="ctab">
			<a class="comprarinicio" href="ComprarBoletos.php"> Inicio </a>
		PERFIL
		</div>
		<div class="infohead">
			Tu Información del Perfil
		</div>

		<div class="profileinfo">
			<address class="profaddress">
				<span class="inscrito"> <i class="fas fa-book"></i> Nombre del Inscrito</span>
				<span class="profileaddr"><i class="fas fa-map-marker-alt"></i>
				198 West 21th Street, </span><div class="suite">Suite 721 New York NY 10016</div>
			</address>
			<div class="profaddress">
				<i class="fas fa-book"></i> Apellidos del Inscrito
				<span class="tele">
					<i class="fas fa-phone"></i>
					<a href="tel:123-523-5598" class="telephone">+1235 2355 98</a>
				</span>
			</div>
			<div class="profaddress">
				<i class="fas fa-user-alt"></i> Nombre del Usuario
				<span class="tele">
					<i class="far fa-paper-plane"></i> nombredecorreo@gmail.com
				</span>
			</div>
		</div>
		<div>
			<img class="user" src="imagenes/nologo.png" alt="nologo.png">
		</div>
		<div>
			<img class="user2" src="imagenes/nologo.png" alt="nologo.png">
		</div>

		
		<div class="profbox">
			Estar en contacto
			<div>
				<form>
					<div class="nombreapellido">
						<span class="cnombre">Nombre</span>
					</div>
					<span class="nombrebox">
						<input type="text" class="cnombretext" placeholder="Tu Nombre">
					</span>
					<div class="papellido">Apellido</div>
					<div>
						<input type="text" class="cnombretext" placeholder="Tu Apellido">
					</div>
					<div class="fotobox">
						<input type="button" class="fotobutton" value="Seleccionar   Foto">
					</div>
					<div class="nombreapellido">
						<div class="cnombre">Correo</div>
						<div class="correobox">									
							<input type="text" class="pcorreo" placeholder="Tu correo electrónico">
						</div>
					</div>
					<div class="cnombre">
						<span >Telefono</span>
						<span class="usuario">Usuario</span>
						<span class="usuario">Contraseña</span>
					</div>
					<div class="correobox">
						<input type="text" class="ptelefono" placeholder="Telefono">
						<input type="text" class="ptelefono" placeholder="Nombre de Usuario">
						<input type="text" class="ptelefono" placeholder="Contraseña">
					</div>
					<div class="nota">Nota</div>
					<div class="solo">Solo puedes cambiar los datos (Telefono Contraseña y Foto)</div>
					<div class="guardar">
						<input type="button" class="fotobutton" value="Guardar Cambios">
					</div>
				</form>
			</div>
		</div>
	</main>

	<footer class="main-footer">
		<div class="copy">
			<span>Copyright &copy; 2019 All rights reserved | This web is made with <i class="far fa-heart"></i> by <span class="copyname">Goutami</span></span> <span><a href="#top" class="uparrow"><i class="fas fa-arrow-circle-up fa-lg"></i></a></span>
		</div>
	</footer>
</body>
</html>
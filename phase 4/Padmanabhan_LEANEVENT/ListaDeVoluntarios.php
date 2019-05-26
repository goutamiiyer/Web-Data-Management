<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<title>Lista de Voluntarios</title>
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
				<a class="navlink" href="Agente.php" target="_blank"> Agente </a>
				<a class="navlink" href="Eventos.php" target="_blank"> Eventos </a>
				<a class="navlink" href="ListaDeFundaciones.php" target="_blank"> Lista de Fundaciones </a>
				<a class="currentPage" href="ListaDeVoluntarios.php" target="_blank"> Lista de Voluntarios </a>
				<a class="navlink" href="HomeAgentLEAN.php"> Inicio </a>
			</h1>
		</nav>		
	</header>

	<main class="main-register-area">
		<h2 class="ListOfEvents">Lista de Eventos</h2>
		<div class="listtable">
			<table class="table">
				<thead class="tableheading">
					<tr>
						<th  colspan="2" class="details">NOMBRE DE VOLUNTARIO</th>
						<th class="place">CORREO</th>
						<th class="date">TELEFONO</th>
						<th class="hour">EVENTO</th>
						<th class="help">RESPONSABLE</th>
					</tr>
				</thead>
				<tbody class="tablebody">
					<tr class="rowtable">
						<td class="imgblockuser"><img class="yellowbanner" src="imagenes/user.png"></td> 
						<td class="tableimgdet">Nombre del Voluntario</td>
						<td class="tabledet">Direccion del lugar</td>
						<td class="tabledet">14/01/2019</td>
						<td class="tabledet">8 AM</td>
						<td class="tabledet"> <a href="Bienvenido.html"> <input type="button" class="confirmarbutton" value="Confirmar"></a></td>
					</tr>
					<tr>
						<td class="imgblockuser"><img class="yellowbanner" src="imagenes/user.png"> </td>
						<td class="tableimgdet"> Nombre del Voluntario</td>
						<td class="tabledet">Direccion del lugar</td>
						<td class="tabledet">14/01/2019</td>
						<td class="tabledet">8 AM</td>
						<td class="tabledet"> <a href="Bienvenido.html"> <input type="button" class="confirmarbutton" value="Confirmar"> </a></td>
					</tr>
					<tr>
						<td class="imgblockuser"><img class="yellowbanner" src="imagenes/user.png"> </td>
						<td class="tableimgdet"> NNombre del Voluntario</td>
						<td class="tabledet">Direccion del lugar</td>
						<td class="tabledet">14/01/2019</td>
						<td class="tabledet">8 AM</td>
						<td class="tabledet"> <a href="Bienvenido.html"> <input type="button" class="confirmarbutton" value="Confirmar"> </a></td>
					</tr>
				</tbody>
			</table>
		</div>
	</main>
	<footer class="main-footer">
		<div class="copy">
			<span>Copyright &copy; 2019 All rights reserved | This web is made with <i class="far fa-heart"></i> by <span class="copyname">Goutami</span></span> <span><a href="#top" class="uparrow"><i class="fas fa-arrow-circle-up fa-lg"></i></a></span>
		</div>
	</footer>
</body>
</html>
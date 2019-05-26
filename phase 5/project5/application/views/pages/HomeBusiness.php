	<title>Home Business</title>
</head>

<body id="wrapper">
	<header>
		<nav class="header">
			<h1 class="menu">
				<span class="logoblanco">
				<img class="logo" src="<?php echo base_url(); ?>images/logo-blanco.png" alt="logo-blanco.png">
				</span>
				<span class="name">LEANEVENTOS</span>
				<a class="navlink" href="<?php echo base_url(); ?>Business" target="_blank"> Fundacion </a>
				<a class="currentPage" href="<?php echo base_url(); ?>HomeBusiness"> Inicio </a>
			</h1>
		</nav>		
	</header>

	<main class="main-register-area">
		<h2 class="ListOfEvents">Lista de Eventos</h2>
		<div class="listtable">
			<table class="table">
				<thead class="tableheading">
					<tr>
						<th  colspan="2" class="details">DETALLES DEL EVENTOS</th>
						<th class="place">LUGAR</th>
						<th class="date">FECHA</th>
						<th class="hour">HORA</th>
						<th class="help">ASISTENCIA</th>
					</tr>
				</thead>
				<tbody class="tablebody">
					<tr class="rowtable">
						<td class="imgblock"><img class="yellowbanner" src="<?php echo base_url(); ?>images/minibaner1.jpg"></td> 
						<td class="tableimgdet">NO PERDAMOS LA FE</td>
						<td class="tabledet">UTA College park</td>
						<td class="tabledet">10/05/2019</td>
						<td class="tabledet">1 PM</td>
						<td class="tabledet"> <input type="submit" id="myBtn" class="confirmarbutton" value="Confirmar"></td>
					</tr>
					<tr>
						<td class="imgblock"><img class="yellowbanner" src="<?php echo base_url(); ?>images/minibaner2.jpg"> </td>
						<td class="tableimgdet"> LA IMPORTANCIA DE LOS ALIMENTOS</td>
						<td class="tabledet">UTA College park</td>
						<td class="tabledet">10/05/2019</td>
						<td class="tabledet">1 PM</td>
						<td class="tabledet"> <input type="submit" id="myBtn2" class="confirmarbutton" value="Confirmar"></td>
					</tr>
					<tr>
						<td class="imgblock"><img class="yellowbanner" src="<?php echo base_url(); ?>images/minibaner3.jpg"> </td>
						<td class="tableimgdet"> EDUCANDO PARA EL FUTURO</td>
						<td class="tabledet">UTA College park</td>
						<td class="tabledet">10/05/2019</td>
						<td class="tabledet">1 PM</td>
						<td class="tabledet"> <input type="submit" id="myBtn3" class="confirmarbutton" value="Confirmar"></td>
					</tr>
				</tbody>
			</table>
		</div>
				<div id="myModal" class="modal">
			<div class="modal-content">
				<form id="myForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
					<span class="recuperar">Bienvenido</span>
					<div class="gracias">Gracias por ser un Voluntario en nuestros evento.</div>
					<div class="forgotbutton">
						<button class="cerrarbutton">
							Close
						</button>
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
	<script src="js/main.js"></script>
	<title>Eventos</title>
</head>

<body id="wrapper">
	<header>
		<nav class="header">
			<h1 class="menu">
				<span class="logoblanco">
				<img class="logo" src="<?php echo base_url(); ?>images/logo-blanco.png" alt="logo-blanco.png">
				</span>
				<span class="name">LEANEVENTOS</span>
				<a class="navlink" href="<?php echo base_url(); ?>Agente" target="_blank"> Agente </a>
				<a class="currentPage" href="<?php echo base_url(); ?>Eventos" target="_blank"> Eventos </a>
				<a class="navlink" href="<?php echo base_url(); ?>ListaDeFundaciones" target="_blank"> Lista de Fundaciones </a>
				<a class="navlink" href="<?php echo base_url(); ?>ListaDeVoluntarios" target="_blank"> Lista de Voluntarios </a>
				<a class="navlink" href="<?php echo base_url(); ?>HomeAgentLEAN"> Inicio </a>
			</h1>
		</nav>		
	</header>

	<main class="main-register-area">
		<h2 class="ListOfEvents">Lista de Eventos</h2>
		<div>
			<a href="<?php echo base_url(); ?>AddEvent"> <button type="submit" class="fancyAddBtn" name="editBtn"> 
				Agregar
			</button></a>
		</div>
		<div class="listtable">
			<table class="eventstable">
				<thead class="tableheading">
					<tr>
						<th  colspan="2" class="details">DETALLES DEL EVENTOS</th>
						<th class="place">LUGAR</th>
						<th class="date">FECHA</th>
						<th class="hour">MODIFICAR</th>
						<th class="help">ELIMINAR</th>
					</tr>
				</thead>
				<tbody class="tablebody">
					<tr class="rowtable">
						<td class="imgblock"><img class="yellowbanner" src="<?php echo base_url(); ?>images/minibaner1.jpg"></td> 
						<td class="tableimgdet">NO PERDAMOS LA FE</td>
						<td class="tabledet">UTA College park</td>
						<td class="tabledet">10/05/2019</td>
						<td class="tabledet"><button type="submit" class="fancyEditBtn" name="editBtn"> <i class="far fa-edit"></i></button></td>
						<td class="tabledet"><button type="submit" class="fancyDeleteBtn" name="editBtn"> <i class="far fa-trash-alt"></i></button></td>
					</tr>
					<tr>
						<td class="imgblock"><img class="yellowbanner" src="<?php echo base_url(); ?>images/minibaner2.jpg"> </td>
						<td class="tableimgdet">LA IMPORTANCIA DE LOS ALIMENTOS</td>
						<td class="tabledet">UTA College park</td>
						<td class="tabledet">10/05/2019</td>
						<td class="tabledet"><button type="submit" class="fancyEditBtn" name="editBtn"> <i class="far fa-edit"></i></button></td>
						<td class="tabledet"><button type="submit" class="fancyDeleteBtn" name="editBtn"> <i class="far fa-trash-alt"></i></button></td>					</tr>
					<tr>
						<td class="imgblock"><img class="yellowbanner" src="<?php echo base_url(); ?>images/minibaner3.jpg"> </td>
						<td class="tableimgdet"> EDUCANDO PARA EL FUTURO</td>
						<td class="tabledet">UTA College park</td>
						<td class="tabledet">10/05/2019</td>
						<td class="tabledet"><button type="submit" class="fancyEditBtn" name="editBtn"> <i class="far fa-edit"></i></button></td>
						<td class="tabledet"><button type="submit" class="fancyDeleteBtn" name="editBtn"> <i class="far fa-trash-alt"></i></button></td>
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
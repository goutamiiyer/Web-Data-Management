<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>/css/leanevent.css">
		<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">	
	<title>Registro De Evento</title>
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
	<main>

		<div class="imgslide2">
			<img class="bannercboleto" src="<?php echo base_url(); ?>images/bannerregistro.jpg" alt="bannerregistro.jpg">
		</div>
		<div class="ctext">
			REGISTRO DE EVENTO
		</div>
		<div class="ctab">
			<a class="comprarinicio" href="ComprarBoletos.php"> EVENTOS </a>
		REGISTRO
		</div>
		
		<div class="profbox">
			<div class="addheading">Registro de Evento</div>
			<div>

				<?php echo form_open('Adds/add_event'); ?>
				<!-- <form> -->
					<div class="nombreapellido">
						<span class="cnombre">Nombres</span>
					</div>
					<span class="nombrebox">
						<input type="text" class="cnombretext" placeholder="Nombre del Evento" name="eventname" value="<?php echo set_value('eventname'); ?>">
					</span>
					<?php echo form_error('eventname'); ?>
					<div class="papellido">Responsable</div>
					<div>
						<input type="text" class="cnombretext" placeholder="Nombre del Responsable" name="responsible" value="<?php echo set_value('responsible'); ?>">
					</div>
					<?php echo form_error('responsible'); ?>
					<div>
						<img class="addphoto" src="<?php echo base_url(); ?>images/imagensubir.png" alt="user.png">
					</div>
					<!-- <?php //echo form_open_multipart('Adds/add_event');?> -->
					<div class="fotobox">
						<input type="submit" class="fotobutton" value="Seleccionar   Imagen">
					</div>
					<div class="nombreapellido">
						<div class="cnombre">Lugar</div>
						<div class="correobox">									
							<input type="text" class="pcorreo" placeholder="Direcion del Lugar del Eventos" name="place" value="<?php echo set_value('place'); ?>">
						</div>
						<?php echo form_error('place'); ?>
					</div>
					<div class="cnombre">
						<span >Fecha</span>
						<span class="usuario">Hora</span>
						<span class="usuario">Valor de Boleto</span>
					</div>
					<div class="correobox">
						<input type="text" class="ptelefono" placeholder="00/00/0000" name="date" value="<?php echo set_value('date'); ?>">
						<input type="text" class="ptelefono" placeholder="00:00" name="hour" value="<?php echo set_value('hour'); ?>">
						<input type="text" class="ptelefono" placeholder="$000.00" name="cost" value="<?php echo set_value('cost'); ?>">
					</div>
					<?php echo form_error('date'); ?>
					<?php echo form_error('hour'); ?>
					<?php echo form_error('cost'); ?>
					
					<div class="guardar">
						<input type="submit" class="fotobutton" value="Guardar">
					</div>
				</form>
			</div>
		</div>
	<footer class="main-footer">
		<div class="copy">
			<span>Copyright &copy; 2019 All rights reserved | This web is made with <i class="far fa-heart"></i> by <span class="copyname">Goutami</span></span> <span><a href="#top" class="uparrow"><i class="fas fa-arrow-circle-up fa-lg"></i></a></span>
		</div>
	</footer>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<title>Business Sign Up</title>
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>/css/leanevent.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body id="wrapper">
	<div class="forgotpop">
		<div class="forgotform">
			<div class="recuperar">Registro Negocio o Fundacion</div>
				
				<?php echo form_open('Registers/register_business'); ?>
<!-- 			<form> -->
				
				<div class="forgotbox">
					<span>Correo</span>
					<span class="contraform">Contraseña</span>
				</div>
				<div class="correoform">
					<span class="lfieldpadding">
					<input id="emailId" name="email" type="email" class="correoind" placeholder="Correo" value="<?php echo set_value('email'); ?>">
					</span>
					<span class="lfieldpadding">
					<input id="pass" name="pass" type="password" class="correoind" placeholder="Contraseña" value="<?php echo set_value('pass'); ?>">
					</span>
					<?php echo form_error('email'); ?>
					<?php echo form_error('pass'); ?>

				</div>

				<div class="forgotbox">
					<span>Nombre</span>
					<span class="contraform">Apellido</span>
				</div>
				<div class="correoform">
					<span class="lfieldpadding">
					<input id="firstName" name="fname" type="text" class="correoind" placeholder="Nombre" value="<?php echo set_value('fname'); ?>">
					</span>
					<span class="lfieldpadding">
					<input id="lastName" name="lname" type="text" class="correoind" placeholder="Apellido" value="<?php echo set_value('lname'); ?>">
					</span>
					<?php echo form_error('fname'); ?>
					<?php echo form_error('lname'); ?>
					<!-- <span class="error"><?= $fnameErr ?></span> -->
					<!-- <span class="error"><?= $lnameErr ?></span> -->
				</div>
				<div class="forgotbox">
					Dirección
				</div>
				<div class="correoform">
					<input id="address" name="address" type="text" class="forgotcorreo" placeholder="Dirección" value="<?php echo set_value('address'); ?>">
					<div>
						<?php echo form_error('address'); ?>
						<!-- <span class="error"><?= $cityErr ?></span> -->
					</div>
				</div>
				<div class="forgotbox">
					Ciudad
				</div>
				<div class="correoform">
					<input id="city" name="city" type="text" class="forgotcorreo" placeholder="Ciudad" value="<?php echo set_value('city'); ?>">
					<div>
						<?php echo form_error('city'); ?>
						<!-- <span class="error"><?= $cityErr ?></span> -->
					</div>
				</div>
				<div class="forgotbox">
					<span>Estado</span>
					<span class="contraform">Código Postal</span>
				</div>
				<div class="correoform">
					<span class="lfieldpadding">
					<input list="statedatalist" class="correoind" placeholder="Escoger" id="state" name="state" value="<?php echo set_value('state'); ?>">
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
					<input name="zip" type="numbers" class="correoind" id="zip" value="<?php echo set_value('zip'); ?>">
					</span>
					<?php echo form_error('state'); ?>
					<?php echo form_error('zip'); ?>
					<!-- <span class="error"><?= $stateErr ?></span> -->
					
					<!-- <span class="error"><?= $zipErr ?></span> -->
				</div>
				<div>
					<input type="radio" name="btype" value="1" value="<?php echo set_value('negocio1'); ?>"> <span class="negocio1">Tipo de negocio 1</span>
					<input type="radio" name="btype" value="2" value="<?php echo set_value('negocio2'); ?>"> <span class="negocio1">Tipo de negocio 2</span>
					<input type="radio" name="btype" value="3" value="<?php echo set_value('negocio3'); ?>"> <span class="negocio1">Tipo de negocio 3</span>
				</div>
				<?php echo form_error('btype'); ?>
				<br>

				<div class="regbutton">
					<input type="submit" class="envbutton" value="Registrarse" name="regSubmit" >
					
				</div>
				<div class="forgotbutton">
					<!-- <button class="cerrarbutton" id = "cerrarbutton"> Cerrar </button> -->
					<input type="submit" class="cerrarbutton" name="cerrarbutton" value="Cerrar">
				</div>
			</form>
		</div>
	</div>
</body>
</html>
<?php 
	session_start();
	$_SESSION["message"] = "";
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "leaneventos";
	
	$conn = new mysqli($servername, $username, $password, $dbname) or die("unable to connect");
	
	$firstName = $lastName = $email = $pass = $city = $state = $zip = "";
	$fnameErr = $lnameErr = $emailErr = $passErr = $cityErr = $stateErr = $zipErr = $submitErr = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		if(empty($_POST["email"]))
		{
			$emailErr = "Email is required";
		}
		else
		{	
			$email = test_input($_POST["email"]);
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
			{
				$emailErr = "Invalid email format"; 
			}
		}
		if(empty($_POST["pass"]))
		{
			$passErr = "Password is required";
		}
		else
		{
			$pass = test_input($_POST["pass"]);
			if(!preg_match("/^[a-zA-Z0-9]{8,}$/",$pass))
			{
				$passErr = "at least 8 characters. No Special characters";
			}
			
		}		
		if(empty($_POST["fname"]))
		{
			$fnameErr = "First Name is required";
		}
		else
		{
			$firstName = test_input($_POST["fname"]);
			if(!preg_match("/^[A-Za-z]*$/",$firstName))
			{
				$fnameErr = "Only letters allowed for first Name";
			}
			
		}
		
		if(empty($_POST["lname"]))
		{
			$lnameErr = "Last Name is required";
		}
		else
		{	
	  		$lastName = test_input($_POST["lname"]);
	  		if(!preg_match("/^[A-Za-z]*$/",$lastName))
			{
				$lnameErr = "Only letters allowed for last Name";
			}
		}

		if(empty($_POST["city"]))
		{
			$cityErr = "City is required";
		}
		else
		{	
	  		$city = test_input($_POST["city"]);
	  		if(!preg_match("/^.+$/",$city))
			{
				$cityErr = "Only letters allowed for last Name";
			}
		}

		if(empty($_POST["state"]))
		{
			$stateErr = "State is required";
		}
		else
		{
			$state = test_input($_POST["state"]);
		}

		if(empty($_POST["zip"]))
		{
			$zipErr = "Postal code is required";
		}
		else
		{	
	  		$zip = test_input($_POST["zip"]);
	  		if(!preg_match("/^[A-Za-z]*$/",$zip))
			{
				$zipErr = "Only numbers allowed for Postal code";
			}
		}

		
		// if(isset($_POST['regSubmit'])) 
		// {
			$role = "Individual";
			$uname = "";
			$address = "";
			$phone = "";
			$fullName = $firstName . " " . $lastName;
			$nameOfFoundation = "";
			$TypeOfBusiness1 = "";
			$TypeOfBusiness2 = "";
			$TypeOfBusiness3 = "";
			$agentRegistrationNumber = 0;

			$sql = "INSERT INTO user (Role, EmailOfUser, PasswordOFUser, UserName, FirstNameOfUser, LastNameOfUser, Address, City, State, PostalCode, Telephone, FullName, NameOfFoundation, TypeOfBusiness1, TypeOfBusiness2, TypeOfBusiness3, AgentRegistrationNumber) 
			VALUES ('$role', '$email', '$pass', '$uname', '$firstName', '$lastName', '$address', '$city', '$state', '$zip', '$phone', '$fullName', '$nameOfFoundation', '$TypeOfBusiness1', '$TypeOfBusiness2', '$TypeOfBusiness3', '$agentRegistrationNumber')";
			echo "Submitted";
			echo $conn->error;
			if($conn->query($sql) === TRUE)
			{
				header("location: HomeIndividual.php");
			}
			else
			{
				$_SESSION["message"] = "User cannot be added";
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
			$conn->close();
		// }
		// else
		// {
		// 	$submitErr = "Empty form cannot be submitted";
		// }

	}
	function test_input($data) 
	{
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<title>Regístrate</title>
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
				<a class="navlink" href="ComprarBoletos.php" target="_blank"> Comprar Boletos </a>
				<a class="navlink" href="IniciarSesion.php" target="_blank"> Iniciar Sesión </a>
				<a class="navlink" href="Contacto.php" target="_blank"> Contacto </a>
				<a class="currentPage" href="Registrate.php" target="_blank"> Regístrate </a>
				<a class="navlink" href="http://goutami.uta.cloud/Padmanabhan_LEANEVENT/Blog/" target="_blank"> Blog </a>
				<a class="navlink" href="QuienesSomos.php" target="_blank"> Quiénes Somos </a>
				<a class="navlink" href="index.php"> Inicio </a>
			</h1>
		</nav>		
	</header>

	<main class="main-register-area">
		<div class="imgslide2">
			<img class="bannerabouth" src="imagenes/bannerregistro.jpg" alt="bannerregistro.jpg">
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
					<span class="indbutton"><button id="myBtn" class="registerbutton">Como Individual</button></span>
					<span class="indbutton"><button id="myBtn2" class="registerbutton">Como Negocio o Fundacion</button></span>
					<span class="indbutton"><button id="myBtn3" class="registerbutton">Como agente LEAN</button></span>
			</div>
			<div class="error"><?= $submitErr ?></div>
		</div>
		<div id="myModal" class="modal">
			<div class="modal-content">
				<!-- <span class="close">&times;</span> -->
				<div class="recuperar">Registro Individual</div>
					<form id="myForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
					<div class="forgotbox">
						<span>Correo</span>
						<span class="contraform">Contraseña</span>
					</div>
					<div class="correoform">
						<span class="lfieldpadding">
						<input id="emailId" onkeyup="validateEmail()" name="email" type="email" class="correoind" placeholder="Correo" required>
						</span>
						<span class="lfieldpadding">
						<input id="pass" onkeyup="validatePwd()" name="pass" type="password" class="correoind" placeholder="Contraseña" required>
						</span>
						<label id="emailIdPrompt" class="promptSize"></label>
						<label id="passPrompt" class="promptSize"></label>
						<span class="error"><?= $emailErr ?></span>
						<span class="error"><?= $passErr ?></span>
					</div>

					<div class="forgotbox">
						<span>Nombre</span>
						<span class="contraform">Apellido</span>
					</div>
					<div class="correoform">
						<span class="lfieldpadding">
						<input id="firstName" onkeyup="validateFname()" name="fname" type="text" class="correoind" placeholder="Nombre" required>
						</span>
						<span class="lfieldpadding">
						<input id="lastName" onkeyup="validateLname()" name="lname" type="text" class="correoind" placeholder="Apellido" required>
						</span>
						<label id="firstNamePrompt" class="promptSize"></label>
						<label id="lastNamePrompt" class="promptSize"></label>
						<span class="error"><?= $fnameErr ?></span>
						<span class="error"><?= $lnameErr ?></span>
					</div>
					<div class="forgotbox">
						Dirección
					</div>
					<div class="correoform">
						<input id="city" onkeyup="validateCity()" name="city" type="text" class="forgotcorreo" placeholder="Ciudad" required>
						<div>
							<label id="cityPrompt" class="promptSize"></label>
							<span class="error"><?= $cityErr ?></span>
						</div>
					</div>
					<div class="forgotbox">
						<span>Estado</span>
						<span class="contraform">Código Postal</span>
					</div>
					<div class="correoform">
						<span class="lfieldpadding">
						<input list="statedatalist" class="correoind" placeholder="Escoger" id="state" onchange="validateState()" name="state" required>
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
						<input name="zip" type="numbers" class="correoind" id="zip" onkeyup="validateZip()" required>
						</span>
						<label id="statePrompt" class="promptSize"></label>
						<span class="error"><?= $stateErr ?></span>
						<label id="zipPrompt" class="promptSize"></label>
						<span class="error"><?= $zipErr ?></span>
					</div>
					<div class="regbutton">
						<input type="submit" class="envbutton" value="Registrarse" name="regSubmit" onclick="validateSubmit()">
						<label id="submitPrompt" class="promptSize"></label>
					</div>
					<div class="forgotbutton">
						<button class="cerrarbutton"> Cerrar </button>
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
	<script  src="main.js"></script>
</body>
</html>
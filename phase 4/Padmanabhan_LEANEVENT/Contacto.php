<?php 
	session_start();
	$_SESSION["message"] = "";
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "leaneventos";
	
	$conn = new mysqli($servername, $username, $password, $dbname) or die("unable to connect");
	
	$firstName = $lastName = $email = $topic = $message = "";
	$fnameErr = $lnameErr = $emailErr = $topicErr = $messageErr = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		if(empty($_POST["contactofname"]))
		{
			$fnameErr = "First Name is required";
		}
		else
		{
			$firstName = test_input($_POST["contactofname"]);
			if(!preg_match("/^[A-Za-z]*$/",$firstName))
			{
				$fnameErr = "Only letters allowed for first Name";
			}
			
		}
		if(empty($_POST["contactolname"]))
		{
			$lnameErr = "Last Name is required";
		}
		else
		{	
	  		$lastName = test_input($_POST["contactolname"]);
	  		if(!preg_match("/^[A-Za-z]*$/",$lastName))
			{
				$lnameErr = "Only letters allowed for last Name";
			}
		}
		if(empty($_POST["contactoemail"]))
		{
			$emailErr = "Email is required";
		}
		else
		{	
			$email = test_input($_POST["contactoemail"]);
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
			{
				$emailErr = "Invalid email format"; 
			}
		}
		if(empty($_POST["contactotopic"]))
		{
			$topicErr = "Topic is required";
		}
		else
		{
			$topic = test_input($_POST["contactotopic"]);
		}
		if(empty($_POST["contactomsg"]))
		{
			$messageErr = "Message is required";
		}
		else
		{

			$message = test_input($_POST["contactomsg"]);
		}
		if(isset($_POST["contactSubmit"])) 
		{

			$sql = "INSERT INTO contact (FirstName, LastName, Email, Topic, Message) 
			VALUES ('$firstName', '$lastName', '$email', '$topic', '$message')";
			echo "Submitted";
			echo $conn->error;
			if($conn->query($sql) === TRUE)
			{
				header("location: Contacto.php");
			}
			else
			{
				$_SESSION["message"] = "Contact information cannot be inserted";
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
			$conn->close();
		}
		else
		{
			echo "Empty form cannot be submitted";
		}

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
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<title>Contacto</title>
	<link rel="stylesheet" type="text/css" href="css/leanevent.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body id="wrapper">
	<header id="main-header">
		<nav class="header">
			<h1 class="menu">
				<span class="logoblanco">
				<img class="logo" src="imagenes/logo-blanco.png" alt="logo-blanco.png">
				</span>
				<span class="name">LEANEVENTOS</span>
				<a class="navlink" href="ComprarBoletos.php" target="_blank"> Comprar Boletos </a>
				<a class="navlink" href="IniciarSesion.php" target="_blank"> Iniciar Sesión </a>
				<a class="currentPage" href="Contacto.php" target="_blank"> Contacto </a>
				<a class="navlink" href="Registrate.php" target="_blank"> Regístrate </a>
				<a class="navlink" href="http://goutami.uta.cloud/Padmanabhan_LEANEVENT/Blog/" target="_blank"> Blog </a>
				<a class="navlink" href="QuienesSomos.php" target="_blank"> Quiénes Somos </a>
				<a class="navlink" href="index.php"> Inicio </a>
			</h1>
		</nav>		
	</header>

	<main>
		<div class="imgslide2">
			<img class="bannercboleto" src="imagenes/bannercontacto.jpg" alt="bannercontacto.jpg">
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
			<img class="fb" src="imagenes/facebook.png">
			<img class="fb" src="imagenes/twitter.png">
			<img class="fb" src="imagenes/instagram.png">
			<img class="fb" src="imagenes/correo.png">
		</div>
		<div class="socialaddress">
			<span class="socialfb">LEAN Ayuda Humanitaria</span>
			<span class="socialtwitter">@LeanEmergente</span>
			<span class="socialinsta">LeanAyudaHumanitaria</span>
			<span class="socialcorreo">lean.emergente@gmail.com</span>
		</div>
		<p><?= $_SESSION['message'] ?></p>
		<div class="formbox">
			Estar en contacto
			<div>
				<form id="myForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
					<div class="nombreapellido">
						<span class="cnombre">Nombre</span>
						<span class="capellido">Apellido</span>
					</div>
					<span class="nombrebox">
						<input id="firstName" onkeyup="validateFname()" name="contactofname" type="text" class="cnombretext" placeholder="Tu Nombre" required> 
					</span>
					<span class="apelidobox">
						<input id="lastName" onkeyup="validateLname()" name="contactolname" type="text" class="cnombretext" placeholder="Tu Apellido" required>
					</span>
					<div>
						<label id="firstNamePrompt" class="promptSize"></label>
						<span class="error"><?= $fnameErr ?></span>
						<label id="lastNamePrompt" class="promptSize"></label>
						<span class="error"><?= $lnameErr ?></span>
					</div>

					<div class="nombreapellido">
						<div class="cnombre">Correo</div>
						<div class="correobox">	
														
							<input id="emailId" onkeyup="validateEmail()" name="contactoemail" type="email" class="ccorreotext" placeholder="Tu correo electrónico" required>
							<label id="emailIdPrompt" class="promptSize"></label>
							<span class="error"><?= $emailErr ?></span>
					
						</div>
					</div>
					<div class="cnombre">Tema</div>
					<div class="correobox">
						<input id="topic" onkeyup="validateTopic()" name="contactotopic" type="text" class="ccorreotext" placeholder="Su asunto de este mensaje" required>
						<label id="topicPrompt" class="promptSize"></label>
						<span class="error"><?= $topicErr ?></span>
					</div>
					<div class="cnombre">Mensaje</div>
					<div class="correobox">
						<textarea id="message" onkeyup="validateMessage()" name="contactomsg" class="cmessagetext" placeholder="Di algo sobre nosotros" required></textarea>
						<label id="messagePrompt" class="promptSize"></label>
						<span class="error"><?= $messageErr ?></span>
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
</body>
</html>
<?php
session_start();
if(!isset($_SESSION['email'])){
      header('Location: ../logout.html');
    }
$con = mysqli_connect("localhost","root","noopur22");
mysqli_select_db($con,'wdm');
$query = "SELECT * FROM users WHERE email='" . $_SESSION['email'] . "'";
$result1 = mysqli_query($con,$query);
while($row1 = $result1->fetch_assoc()) { 	
	$fname =  $row1["fname"];
}
$query1 = "SELECT * FROM services WHERE email='" . $_SESSION['email'] . "'";
$result = mysqli_query($con,$query1);

?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/pet.css">
	<title>Business | Pet Store</title>
	<script type="text/javascript">
	function validateForm() {
    var d1 = document.forms["business"]["bname"].value;
    var d2 = document.forms["business"]["service"].value;
    if (d2 == "") {
        alert("Service must be filled out");
        return false;
    }
}
	</script>
</head>
<body>
<div id="wrapper">
<h1 style="color: white;"><?php echo $fname;?>'s Pet Store for Business</h1>
<nav>
<a href="businesshome.php">Add Service</a>
<a href="viewservice.php">View Services</a>
<a href="bprofile.php">Profile</a>
<a href="logout.php">Logout</a>
</nav>
<div class="column">
<img src="../images/banner.png">
<div class="content">
<h2>Services</h2>
<?php
while($row = $result->fetch_assoc()) {
		echo "ID:";
		echo $row['id'];
		echo '<br>';
		echo "Business Name:";
        echo $row['business'];
        echo '<br>';
        echo "Service Name:";
        echo $row['service'];
        echo '<br>';
        echo '<hr>';
    }
?>
<footer><em>Copyright &copy 2018 Pet Store<br><u><a href="mailto:akshay@waikar.com">dheeraj@ravishankar.com</a></u></em></footer><br>
</div>
</div>
</div>
</body>
</html>
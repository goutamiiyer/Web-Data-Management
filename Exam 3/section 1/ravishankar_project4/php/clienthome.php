<?php
session_start();
if(!isset($_SESSION['email'])){
      header('Location: ../logout.html');
    }
$con = mysqli_connect("localhost","root","noopur22");
mysqli_select_db($con,'wdm');
$query1 = "SELECT * FROM users WHERE email='" . $_SESSION['email'] . "'";
$result = mysqli_query($con,$query1);
while($row = $result->fetch_assoc()!=null) {
        $fname =  $row["fname"];
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/pet.css">
	<title>Client | Pet Store</title>
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
<h1 style="color: white;"><?php echo $fname;?>'s Pet Store as client</h1>
<nav>
<a href="clienthome.php">Add Pet</a>
<a href="viewpets.php">View Pets</a>
<a href="cprofile.php">Profile</a>
<a href="logout.php">Logout</a>
</nav>
<div class="column">
<img src="../images/banner.png">
<div class="content">
<h2>My Pet</h2>
<h5>Required information is marked with an asterisk (*).</h5>
<form method="POST" action="clientup.php" name="business" onsubmit="return validateForm()">
<table>
	<tr>
		<td>Client Name: </td>
		<td><input type="text" name="cname" required></td>
	</tr>
	<tr>
		<td>* My pet: </td>
		<td><input type="text" name="pet" required></td>
	</tr>
	<tr>
		<td><input type="submit" name="Submit"></td>
	</tr>
</table><br><br><br>
<footer><em>Copyright &copy 2018 Pet Store<br><u><a href="mailto:akshay@waikar.com">dheeraj@ravishankar.com</a></u></em></footer><br>
</div>
</div>
</div>
</body>
</html>
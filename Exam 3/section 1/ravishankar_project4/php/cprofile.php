<?php
session_start();
if(!isset($_SESSION['email'])){
      header('Location: ../logout.html');
    }
$con = mysqli_connect("localhost","root","noopur22");
mysqli_select_db($con,'wdm');
$query1 = "SELECT * FROM users WHERE email='" . $_SESSION['email'] . "'";
$result1 = mysqli_query($con,$query1);
$query = "SELECT * FROM users WHERE email='" . $_SESSION['email'] . "'";
$result = mysqli_query($con,$query);
while($row = $result->fetch_assoc()) {
    $fname =  $row["fname"];
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/pet.css">
	<title>Client | Pet Store</title>
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
<h2>Profile</h2>
<?php
while($row1 = $result1->fetch_assoc()) {
		echo "ID : ";
		echo $row1['id'];
		echo '<br>';
		echo "Name : ";
        echo $row1['fname'];
        echo $row1['lname'];
        echo '<br>';
        echo "Email : ";
        echo $row1['email'];
        echo '<br>';
        echo "Phone : ";
        echo $row1['phone'];
        echo '<br>';
        echo "Password : ";
        echo $row1['password'];
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
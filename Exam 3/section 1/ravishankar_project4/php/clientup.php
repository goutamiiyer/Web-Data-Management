<?php
session_start();
$email = $_SESSION['email'];
$con = mysqli_connect("localhost","root","noopur22");
mysqli_select_db($con,'wdm');
$client = $_POST['cname'];
$pet = $_POST['pet'];
$query = "INSERT INTO pets(id,client,pet,email) VALUES(NULL,'$client','$pet','$email')";
if (isset($client)) {
$result = mysqli_query($con,$query);
header("Location: viewpets.php");
}
mysqli_close($con);
?>
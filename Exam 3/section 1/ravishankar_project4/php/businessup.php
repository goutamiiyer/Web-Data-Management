<?php
session_start();
$email = $_SESSION['email'];
$con = mysqli_connect("localhost","root","noopur22");
mysqli_select_db($con,'wdm');
$business = $_POST['bname'];
$service = $_POST['service'];
$query = "INSERT INTO services(id,business,service,email) VALUES(NULL,'$business','$service','$email')";
if (isset($service)) {
$result = mysqli_query($con,$query);
header("Location: viewservice.php");
}
mysqli_close($con);
?>
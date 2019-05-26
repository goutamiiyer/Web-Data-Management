<?php
$con = mysqli_connect("localhost","root","noopur22");
mysqli_select_db($con,'wdm');
$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$business = $_POST['business'];
$unique_pw = substr(uniqid(rand(), true), 10, 10);
$query = "INSERT INTO users(id,fname,lname,email,phone,business,roleid,password) VALUES(NULL,'$f_name','$l_name','$email','$phone','$business',1,'$unique_pw')";
if (isset($f_name)) {
$result = mysqli_query($con,$query);
mail( $email, "Petstore Login Details", "Hello ".$f_name." The username is your mail id and your passord is".$passord);
header("Location: ../submit.html");
}
mysqli_close($con);
?>
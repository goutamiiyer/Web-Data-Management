<?php
$con = mysqli_connect("localhost","root","noopur22");
mysqli_select_db($con,'wdm');
if (empty($_POST['f_name'])) {
    echo "First Name required<br>";
  } else {
    $f_name = $_POST['f_name'];
}
if (empty($_POST['l_name'])) {
    echo "Last Name required<br>";
  } else {
    $l_name = $_POST['l_name'];
}
if (empty($_POST['email'])) {
    echo "Email required<br>";
  } else {
    $email = $_POST['email'];
}
$f_name="";
$phone = $_POST['phone'];
$unique_pw = substr(uniqid(rand(), true), 10, 10);
$sender = 'dheeraj.ravishankar@mavs.uta.edu';
$subject = "Petstore Login Details";
$message = "Hello ".$f_name.".Thank you for registering as a client. Your login credentials are: Username - ".$email." Password - ".$unique_pw;
$headers = 'From:' . $sender;
$query1 = "SELECT * FROM users WHERE email='" . $email . "'";
if(mysqli_num_rows(mysqli_query($con,$query1)) == 1){
	header("Location: ../exists.html");
}
else{
$query = "INSERT INTO users(id,fname,lname,email,phone,business,roleid,password) VALUES(NULL,'$f_name','$l_name','$email','$phone','',2,'$unique_pw')";
mail($email, $subject, $message, $headers);
if(isset($f_name)) {
$result = mysqli_query($con,$query);
header("Location: ../submit1.html");
}
}
mysqli_close($con);
?>
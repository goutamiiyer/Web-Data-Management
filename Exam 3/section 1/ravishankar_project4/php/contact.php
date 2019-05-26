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
if (empty($_POST['comment'])) {
    echo "Comment Required<br>";
    echo "<a href='../contactus.html'>< Go back</a>";
  } else {
    $comment = $_POST['comment'];
}
$phone = $_POST['phone'];
$query = "INSERT INTO contact(id,fname,lname,email,phone,comment) VALUES(NULL,'$f_name','$l_name','$email','$phone','$comment')";
if (isset($f_name)) {
$result = mysqli_query($con,$query);
header("Location: ../submit.html");
}
mysqli_close($con);
?>
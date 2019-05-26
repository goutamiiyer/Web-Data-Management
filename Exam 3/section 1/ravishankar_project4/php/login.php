<?php
session_start();
$database = 'wdm';
   $host = 'localhost';
   $user = 'root';
   $pass = 'noopur22';
   $dbh = new PDO("mysql:dbname={$database};host={$host}", $user, $pass);
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
if (empty($_POST['email'])) {
    echo "Email required<br>";
  } else {
    $email = $_POST['email'];
}
if (empty($_POST['password'])) {
    echo "Password required<br>";
  } else {
    $password = $_POST['password'];
}
$q = "SELECT * FROM users WHERE email='$email' and password='$password'";
$query = $dbh->prepare($q);
$query->execute(array(':email' => $email, ':password' => $password));
if($query->rowCount() == 0){
  header('Location: ../error.html');
}else{
$row = $query->fetch(PDO::FETCH_ASSOC);
session_regenerate_id();
$_SESSION['user_id'] = $row['id'];
$_SESSION['email'] = $row['email'];
$_SESSION['role'] = $row['roleid'];
$_SESSION['f_name'] = $row['fname'];
$_SESSION['lname'] = $row['lname'];
session_write_close();
if( $_SESSION['role'] == 1){
   header('Location: businesshome.php');
}else{
   header('Location: clienthome.php');
}
}
?>
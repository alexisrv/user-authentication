<?php
include 'db.php';
session_start();

$email = $_POST['l_email'];
$password = $_POST['password'];
$password=hash('sha512',$password);
$db = new Database();
$query = $db->connect()->prepare('SELECT * FROM users WHERE email = :email AND password = :password');
$query->execute(['email' => $email, 'password' => $password]);
$row = $query->fetch(PDO::FETCH_NUM);

if ($row == true) {

  $rol = $row[5];
  $email = $row[3];
  $_SESSION['rol'] = $rol;
  $_SESSION['email'] = $email;
  switch($rol){
      case 1:
        header('location: ../pages/rol1.php');
        break;
      case 2:
        header('location: ../pages/rol2.php');
        break;
      case 3:
        header('location: ../pages/rol3.php');
        break;
      default:
  }
}else {
}
 ?>

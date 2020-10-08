<?php
include 'db.php';

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$rol = $_POST['rol'];
$password=hash('sha512',$password);

$db = new Database();

$query = $db->connect()->prepare("INSERT INTO users(first_name,last_name,email,password,rol) VALUES ('$first_name','$last_name','$email','$password',$rol)");
$query->execute();
header('location: ../index.html');

 ?>

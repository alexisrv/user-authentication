<?php
require('db.php');
sleep(1);
if (isset($_POST)) {
    $email = (string)$_POST['email'];
    $db = new Database();

    $query = $db->connect()->prepare('SELECT * FROM users WHERE email = "'.strtolower($email).'"');

    $query->execute();
    $result = $query->fetch(PDO::FETCH_NUM);

    if ($result == true) {
        echo 0;
    } else {
        echo 1;
    }
}

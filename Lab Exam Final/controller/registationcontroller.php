<?php
require_once('../model/dbfunction.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (adduser(['name' => $name, 'contact' => $contact, 'username' => $username, 'password' => $password])) {
        echo "User added";
        header('Location: ../view/profile.php');
        exit();
    } else {
        echo "User not added";
    }
}
?>

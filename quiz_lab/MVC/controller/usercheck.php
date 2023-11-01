<?php

session_start();
if (!isset($_SESSION['auth'])) {
    header('location: ../view/login.php');
} else if ($_SESSION['user']['type'] != "user" && $_SESSION['user']['type'] == "admin") {
    header('location: ../view/admin_home.php');
}

?>
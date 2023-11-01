<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $password = $_POST["password"];
    $name = $_POST["name"];
    $usertype = isset($_POST["usertype"]) ? $_POST["usertype"] : "User";

    if ($id == "" || $password == "" || $name == "" || $usertype == "") {
        echo "Null id, password, name, or userType!";
    } else {
 
        $user = [
            'id' => $id,
            'password' => $password,
            'name' => $name,
            'usertype' => $usertype,
        ];

        $_SESSION['user'] = $user;

        header('Location: ../View/login.php'); 
        exit();
    }
}
?>

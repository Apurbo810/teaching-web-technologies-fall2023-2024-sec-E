<?php
function getConnection() {
    $con = mysqli_connect("localhost", "root", "", "test");   
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $con;
}
?>

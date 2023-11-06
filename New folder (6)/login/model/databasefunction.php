<?php

require_once("db.php");


function checklogin($username,$password,$table){
    $conn=connection("localhost","root","","payin-guest-project");
    $query = "SELECT * FROM $table WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0){
        // User exists
        $data=mysqli_fetch_assoc($result);
        $_SESSION['afterlogin']=$data;
        return true;
    }  
    else {
        // User doesn't exist, 
        return false;
    }
}









?>
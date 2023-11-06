<?php

session_start();
require_once("../model/databasefunction.php");

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(str_starts_with($username,"Gu-")){
        if(checklogin(str_replace("Gu-","",$username),$password,"guestregistation")){
            header("Location: ../view/guestprofile.php");
           
        }
        else{
            $_SESSION['guestlogin']="true";
            header("Location: ../view/login.php");
        }
       
        
    } else if(str_starts_with($username,"Ho-")){
        if(checklogin(str_replace("Ho-","",$username),$password,'hostregistation')){
            
          
            header("Location: ../view/hostprofile.php");
        }
        else{
            $_SESSION['hostlogin']="true";
            header("Location: ../view/login.php");
        }

    } else if(str_starts_with($username,"Ad-")){
        if(checklogin(str_replace("Ad-","",$username),$password,'admin')){
            
            header("Location: ../view/adminprofile.php");
        }
        else{
            $_SESSION['adminlogin']="true";
            header("Location: ../view/login.php");
        }

    }
    else{
        $_SESSION['login']="true";
        header("Location: ../view/login.php");
    }
    
   
    
} else{
    $_SESSION['usernameErr']='true';
    
}

?>
<?php
session_start();
    require_once('../model/userModel.php');

    
    $id = $_REQUEST['id'];
    $password = $_REQUEST['password'];

    if($id == "" || $password == "" ){
    
        echo "null id or password!";
    
    }else{
        $status = login($id, $password);
        
        if ($status){
            $_SESSION['flag'] = 'true';
            header('location: ../View/user_home.php');
        }else{
            echo "invalid user!";
        }
    }
?>
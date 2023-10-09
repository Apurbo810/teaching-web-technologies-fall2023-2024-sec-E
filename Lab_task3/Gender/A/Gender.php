<?php 
    if(isset($_POST['gender'])){
        $gender = $_POST['gender'];
        echo "Selected Gender: " . $gender;
    } else {
        echo "Gender not selected";
    }
?>

<?php
    $dob = ''; 

    if(isset($_POST['Submit'])){
        $dob = $_POST['dob']; 
    }
?>

<html>
    <head>
        <title>Date of Birth</title>
    </head>
    <body>
        <form action="" method="post">
            Date of Birth:
            <input type="date" name="dob" value="<?php echo htmlspecialchars($dob); ?>" required>
            <input type="submit" name="Submit" value="Submit">
        </form>

        <?php
            if(!empty($dob)){
                echo "Date of Birth: " . htmlspecialchars($dob);
            }
        ?>
    </body>
</html>

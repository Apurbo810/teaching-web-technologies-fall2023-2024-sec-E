<?php 

    
if(isset($_POST['date'])){
    $date = $_POST['date'];
    echo $date;
   
}
?>

<html>
    <head>

        <title>Date Of Birth</title>
</head>

    <body>
        <form action="" method="post" enctype="">

        <fieldset style="width:100px;" >
            <legend>Date of Birth</legend>

            mm dd yyyy <br>

        <input type="date" name="date" value =""> <br>
        <hr>    

            

        <input type="submit" name="Submit" value="Submit">        

        </fieldset>
        <br>
        </form>


    </body>

</html>
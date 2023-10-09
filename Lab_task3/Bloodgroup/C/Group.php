<?php 
    $bdgrp = "";
    if(isset($_POST['Group'])){
        $bdgrp = $_POST['Group'];
        echo $bdgrp;
    }
?>
<html>
    <head>

        <title>Blood Group</title>
    </head>


    <body>
        
        <fieldset style="width: 150px; border: 0;">
            <form action="" method="post" enctype="">

                Blood Group:
                <select name="Group" id="" value="<?php if(isset($bdgrp)){echo $bdgrp;}?>"> 
                    <option value="A+">A+</option>
                    <option value="B+">B+</option>
                    <option value="AB+">AB+</option>
                    <option value="A-">A-</option>
                    <option value="B-">B-</option>
                    <option value="AB-">AB-</option>
                    
                </select> 
                <hr >
                <input type="submit" name="Submit" value="Submit">
        </fieldset>
        
           
        </form>
         

        
    </body>

</html>
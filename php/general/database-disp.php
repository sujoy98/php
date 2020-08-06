<?php include_once 'SignupSystem/include/dbh.inc.php'?>
<!DOCTYPE html>
<html>
    <head>
        <title>php-Database-connection</title>
    </head>
    <body>
        <?php
            $sql="SELECT * FROM users;";
            $results=mysqli_query($conn,$sql);
            $resultscheck=mysqli_num_rows($results);
            if($resultscheck > 0){
                /* mysqli_fetch_assoc($results) takes ta $results and insert that values
                in $row variable as an array(ASSOCIATIVE)
                */
                while ($row=mysqli_fetch_assoc($results)) {
                    echo $row['user_uid']."<br>";
                }
            }
        ?>
    </body>
</html>

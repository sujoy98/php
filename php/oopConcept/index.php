<?php include 'page2.php'?>
<!DOCTYPE html>
<html>
    <head>
        <title>Opps / MVC models</title>
    </head>
    <body>
        <?php
        $object = new Sub;
        echo $object->display();
        ?>
    </body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <title>Associative Array</title>
    </head>
    <body>
        <?php
            $people = array('Brad' => 34, 'Joe' => 23);
            echo $people['Brad'];
            echo "<br/>";
            echo $people['Moe'] = 44;
            echo "<br/>";
            print_r($people);
            echo "<br/>";
            var_dump($people);
            unset($people['Joe']);
            echo "<br/>";
            print_r($people);
        ?>
    </body>
</html>

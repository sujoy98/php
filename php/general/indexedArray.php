<!DOCTYPE html>
<html>
    <head>
        <title>indexedArray</title>
    </head>
    <body>
<?php
$cars = array("Honda", "Toyota", "Ford");
print_r($cars);
echo "<br/>";
echo $cars[0];
echo "<br/>";
echo count($cars);
echo "<br/>";
var_dump($cars);
echo "<br/>";
echo $cars[3] = "Mariti";
echo "<br/>";
print_r($cars);
unset($cars[2]);
echo "<br/>";
print_r($cars);
?>
</body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <title>MultiDarray</title>
    </head>
    <body>
<?php
$cars = array(
	array('Honda', 20, 10),
	array('Toyota', 40, 50),
	array('Maruti', 28, 12),
);
echo $cars[1][2]."<br/>";
echo $cars[2][0]."<br/>";
print_r($cars);
unset($cars[1][0]);
echo "<br/>";
print_r($cars);
?>
</body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <title>String Func</title>
    </head>
    <body>
<?php
$phrase = "HELLO WORLD";
echo strtolower($phrase);
echo strtoupper($phrase);
echo strlen($phrase);
echo $phrase[0];
echo $phrase[0] = "S";
echo str_replace("HELLO", "HI");
echo substr($phrase, 6, 3);
?>
</body>
</html>

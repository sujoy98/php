<!DOCTYPE html>
<html>
    <head>
        <title>postOVERget</title>
    </head>
    <body>
        <form action="postOverGet.php" method="post">
            password: <input type="password" name="password"><br>
            <input type="submit">
        </form>
        <br><br>
<?php
echo $_POST["password"];
?>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $username=htmlentities($_POST['username']);
        setcookie('username',$username,time()+3600);
        header('LOCATION: page2.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cookies</title>
    </head>
    <body>
        <form  method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <input type="text" name="username" placeholder="Username">
            <br>
            <input type="submit" name="submit" value="Sbmit">
        </form>
    </body>
</html>


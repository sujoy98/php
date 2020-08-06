<!DOCTYPE html>
<!-- Here we doesn't need to include the database connection because in form action
its reffering to a php file which has database connection-->
<html>
    <head>
        <title>Sign up page</title>
    </head>
    <body style="background-color: grey">
        <form action="include/signup.inc.php" method="POST">
            <input type="text" name="first" placeholder="First name">
            <br>
            <input type="text" name="last" placeholder="Last name">
            <br>
            <input type="email" name="email" placeholder="E-Mail">
            <br>
            <input type="text" name="uid" placeholder="Username">
            <br>
            <input type="password" name="pwd" placeholder="Password">
            <br>
            <button type="submit" name="submit">Sign up</button>
        </form>
    </body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <title>Sign up page</title>
    </head>
    <body style="background-color: grey">
        <form action="include/signupadv.inc.php" method="POST">
            <?php
                if(isset($_GET['first'])){
                    $first=$_GET['first'];
                    echo '<input type="text" name="first" placeholder="First name" value="'.$first.'">';
                }else{
                    echo '<input type="text" name="first" placeholder="First name">';
                }
                if(isset($_GET['last'])){
                    $last=$_GET['last'];
                    echo '<input type="text" name="last" placeholder="Last name" value="'.$last.'">';
                    echo "<br>";
                }else{
                    echo '<input type="text" name="last" placeholder="Last name">';
                    echo "<br>";
                }
            ?>
            <input type="email" name="email" placeholder="E-Mail">
            <?php
                if(isset($_GET['uid'])){
                    $uid=$_GET['uid'];
                    echo '<input type="text" name="uid" placeholder="Username" value="'.$uid.'">';
                    echo "<br>";
                }else{
                    echo '<input type="text" name="uid" placeholder="Username">';
                    echo "<br>";
                }
            ?>
            <input type="password" name="pwd" placeholder="Password">;
            <br>
            <button type="submit" name="submit">Sign up</button>
        </form>
        <?php
            if(!isset($_GET['signup'])){
            exit();
            }else if($signupcheck==$_GET['signup'] && ($signupcheck==$_GET['empty'])){
                echo "<p>All fields are not filled up!</p>";
            }else if($signupcheck==$_GET['signup'] && ($signupcheck=$_GET['invalidemail'])){
                echo "<p>Invalid email format!!</p>";
            }else if($signupcheck==$_GET['signup'] && ($signupcheck=$_GET['success'])){
                echo "<p>Sign up Successfull !</p>";
            }
        ?>
    </body>
</html>

<?php
    if(isset($_POST["submit"])){
        include_once 'dbh.inc.php';
        $first=mysqli_real_escape_string($conn,$_POST['first']);
        $last=mysqli_real_escape_string($conn,$_POST['last']);
        $email=mysqli_real_escape_string($conn,$_POST['email']);
        $uid=mysqli_real_escape_string($conn,$_POST['uid']);
        $pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
        if(empty($first)||empty($last)||empty($email)||empty($uid)||empty($pwd)){
            header("LOCATION : ../index.php?signup=empty");
            exit();
        }else{
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                header("LOCATION : ../index.php?signup=invalidemail&first=$first&last=$last&uid=$uid");
                exit();
            }else{
                $sql="INSERT INTO users(user_first, user_last, user_email, user_uid, user_pwd)
                VALUES('$first','$last','$email','$uid','$pwd');";
                mysqli_query($conn,$sql);
                header("LOCATION: ../index.php?signup=success");
            }
        }
    }else{
        header("LOCATION: ../index.php?signup=error");
        exit();
    }
?>

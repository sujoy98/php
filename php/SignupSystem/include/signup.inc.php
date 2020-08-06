<?php
    include_once 'dbh.inc.php';

    $first=mysqli_real_escape_string($conn,$_POST['first']);
    $last=mysqli_real_escape_string($conn,$_POST['last']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $uid=mysqli_real_escape_string($conn,$_POST['uid']);
    $pwd=mysqli_real_escape_string($conn,$_POST['pwd']);

    $sql="INSERT INTO users(user_first, user_last, user_email, user_uid, user_pwd)
    VALUES('$first','$last','$email','$uid','$pwd');";

    mysqli_query($conn,$sql);
    // header() is a inbuilt function in php which takes us to anather file
    // ../ takes one path of directory backward as index.php is outside the include folder
    header("Location: ../index.php?signup=success");
    // if the sign-up is successfull "signup=success" message will display in the url
?>

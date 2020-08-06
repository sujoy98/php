<?php
    $usr=array(
        'name'=>'Joy','email'=>'joy@gmail.com','age'=>34
    );
    // we serialize the array as a storable representatio
    $usr=serialize($usr);
    setcookie('user',$usr,time()+3600);
    $usr=unserialize($usr);
    print_r($usr);
?>

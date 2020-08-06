<?php include 'header.php';?>
        <h3>Home</h3>
        <?php
            $_SESSION['username']="1234abc";
            echo $_SESSION['username'];
            echo "<br>";
            if(!isset($_SESSION['username'])){
                echo "not Loged in!";
                }else{
                echo "loged in!";
            }
        ?>
<?php include 'footer.php';?>

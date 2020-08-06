<?php include 'page2.php'?>
<!DOCTYPE html>
<html>
    <head>
        <title>Opps / MVC models</title>
    </head>
    <body>
        <?php
        $PersonOBJ=new Person;
        $PersonOBJ->setName('Sujoy');
        $PersonOBJ->setEmail('sujoy@gmail.com');

        //$CustomerOBJ=new Customer(3000);
        $CustomerOBJ=new Customer;
        $CustomerOBJ->setBallance(3000);

        echo $PersonOBJ->getName().'<br>';
        echo $PersonOBJ->getEmail().'<br>';
        echo Customer::getAge().'<br>';
        echo $CustomerOBJ->getBallance().'<br>';
        ?>
    </body>
</html>

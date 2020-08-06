<?php

class Person{
    private $name;
    private $email;
    public static $age=40;
    //C_O_N_S_T_R_U_C_T_O_R
    //public function __construct($name,$email){
    //    $this->name=$name;
    //    $this->email=$email;
    //}
    // SETTERS
    public function setName($name){
       $this->name=$name;
    }
    //GETERS
    public function getName(){
        return $this->name;
    }
    public function setEmail($email){
        $this->email=$email;
    }
    public function getEmail(){
        return $this->email;
    }
}
class Customer extends Person{
    private $ballance;
    //public function __construct($ballance){
    //    $this->ballance=$ballance;
    //}
    public function setBallance($ballance){
        $this->ballance=$ballance;
    }
    public function getBallance(){
        return $this->ballance;
    }
    // D_E_S_T_R_U_C_T_O_R
    public function __destruct(){
        echo 'Objects Destroyed';
    }
    public static function getAge(){
        return self::$age;
    }
}
//$PersonOBJ=new Person('Sujoy','sujoy@gmail.com');
//$PersonOBJ=new Person;
//$PersonOBJ->setName('Sujoy');
//$PersonOBJ->setEmail('sujoy@gmail.com');

////$CustomerOBJ=new Customer(3000);
//$CustomerOBJ=new Customer;
//$CustomerOBJ->setBallance(3000);

//echo $PersonOBJ->getName().'<br>';
//echo $PersonOBJ->getEmail().'<br>';
//echo $CustomerOBJ->getBallance();//
?>

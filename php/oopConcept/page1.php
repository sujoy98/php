<?php

class Super{
    protected $var="hello!";
}

class Sub extends Super{
    public function display(){
        $a=$this->var;
        return $a;

    }

}

?>

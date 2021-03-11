<?php

class base{


    public $name="parent class";

    function cal($a,$b){

        return $a*$b;

    }


}

class derived extends base{

    public $name = "child class";

    function cal($a,$b){
        return $a+$b;
    }
}

//$test = new base();

$test1 = new derived();

echo $test1->name;


?>
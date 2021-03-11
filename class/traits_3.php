<?php

trait one{

    public function sayHello(){
        echo "in one trait";
    }

}
trait two{

    public function sayHello(){
        echo "in two trait";
    }

}

class base{
    use one,two{
        one::sayHello insteadOf two;
        two::sayHello as newHello;
    }
}


$obj = new base();
$obj->sayHello();
$obj->newHello();

?>
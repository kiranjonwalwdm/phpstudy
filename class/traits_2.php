<?php


trait hello{

    public function sayHello(){
        echo "hello from trait everyone";
    }
}

trait by{

    public function by(){
        echo "by";
    }
}

class base{

    public function sayHello(){
        echo "inside base class";
    }

   
    
}
class child extends base{
    use hello;
    public function sayHello(){
        echo "inside same-self class";
    }

}

$test = new child();
$test->sayHello();


     //   ^( priority)
     //   | self class
     //   | trait class
     //   | parent class


?>
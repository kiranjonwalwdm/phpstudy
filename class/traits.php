<?php

    trait hello{

        public function sayHello(){
            echo "hello everyone";
        }
    }

    trait by{

        public function by(){
            echo "by";
        }
    }

    class base{

        use hello,by;
    }
    class base1{
        use hello;
    }


$test = new base();
$test->sayHello();
$test->by();

$test1 = new base1();
$test1->sayHello();

?>
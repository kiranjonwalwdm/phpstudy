<?php

class parentClass{

    protected static $name="kiran";

    public function show(){
        echo static::$name;
       // echo self::$name;
    }

}

class child extends parentClass{

    protected static $name="jonwal";


}

$test = new child();

$test ->show();


?>
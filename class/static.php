<?php

class base{

    public static $name="kiran jonwal";

    public static function show(){

        //echo $this->name;

        echo self::$name;
    }
   // public function __construct(){

        
   //     self::show();
   //     echo "\n";
   // }

  // public function __construct($n){
   //    self::$name=$n;
  // }


}

class Child extends base{

    public static function show(){
        echo "inside child class";
        echo base::$name;
    }
}


$childobj = new Child();
$childobj->show();










//$object = new base();
//$object->show();

//$obj = new base("kiran");
//$obj->show();

//$object->show();
//echo base::$name;
//base::show();

?>
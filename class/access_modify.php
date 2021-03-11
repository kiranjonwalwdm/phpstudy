<?php
class base{

    //public $name;
    protected $name;


    public function __construct($n){

        $this->name=$n;
    }

    public function show(){

        echo "Your name:".$this->name . "<br>";
        $this->nextFun();
    }

    protected function nextFun(){
        echo "inside next function";
    }


}

$obj = new base("kiran jonwal");
//obj->name="jonwal kiran";

$obj->show();





?>
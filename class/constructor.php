<?php
class person{

    public $name;
    public $age;
    public $school="ctml";
    


    function __construct($name="kiran",$age=20){

        $this->name=$name;
        $this->age=$age;
        

    }

    function show(){

        echo $this->name. "-" .$this->age ." ". $this->school;
    }

}

$p1 =new person();

//$p1->name="Yahoo";
//$p1->age=20;

$p1->show();



?>
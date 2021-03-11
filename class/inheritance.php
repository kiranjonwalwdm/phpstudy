<?php

class employee{
    public $name;
    public $age;
    public $salary;


    function __construct($n,$a,$s){

        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;

    }

    function info(){
        echo "<h2>employee profile</h2>";
        echo "employee name:" . $this->name . "<br>";
        echo "employee age:" . $this->age . "<br>";
        echo "employee salary:" . $this->salary."<br>";
    }


}


class manager extends employee{

    public $ta =1000;
    public $phone=300;
    public $total_sal;

    function info(){
        $this->total_sal=$this->ta + $this->phone + $this->salary;
        echo "<h2>manager profile</h2>";
        echo "Employee name:".$this->name."<br>";
        echo "Employee age:".$this->age."<br>";
        echo "Employe salary:". $this->total_sal;"<br>";


    }




}

$e1 = new employee("Ram",25,2000);
$m1 = new manager("sham",30,5000);

$e1->info();
$m1->info();



?>
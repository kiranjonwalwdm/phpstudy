<?php

interface parent1{
//by default public modifir
        function cal($a,$b);


}
interface parent2{

    function sub($c,$d);
}

class ChildClass implements parent1,parent2{

    public function cal($a,$b){

        echo $a+$b;

    }
    public function sub($a,$b){

        echo "<br>";
        echo $a-$b;

    }

}

$obj = new ChildClass();

$obj->cal(5,3);
$obj->sub(5,3);


?>
<?php

abstract class parentClass{


    abstract protected function cal($a,$b);



}

class childClass extends parentClass{

 public function cal($a,$b){

    echo $a+$b;
 }

}



//$test=new parentClass();
$test = new childClass();
$test->cal(10,20);


?>
<?php 

class Calculator {
    function addition ($num1, $num2){
        $result = $num1 + $num2;
        echo $result;
        return $this;
    }

    function subtraction ($num1, $num2){
        $result = $num1 - $num2;
        echo $result;
        return $this;
  }
}

$calc = new Calculator();
$calc->addition(1,1)->subtraction(1,1);
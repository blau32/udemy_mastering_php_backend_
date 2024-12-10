<?php
$price = 100;

function with_tax($base_price, 
$tax_rate) {
    $sum_price = $base_price + ($base_price * $tax_rate);
    $sum_price = round($sum_price);
    return $sum_price;
}

$price = with_tax($price , 0.1);
echo $price;

function sayHello() {
    echo 'hello';
}

$functionName = "sayHello";
$functionName();
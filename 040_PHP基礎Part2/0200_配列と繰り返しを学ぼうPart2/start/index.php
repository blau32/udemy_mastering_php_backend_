<?php 
$arry = [
  ['0table', 1000],
  ['1chair1', 100],
  ['2chair2', 100],
  ['3chair3', 100],
  ['4bed', 10000],
];

// $arry[1][1] = 500;

array_splice($arry,2,2);

foreach($arry as $val){
  echo "{$val[0]}は{$val[1]}円です\n";
}
?>
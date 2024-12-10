<?php 
$arry = ['taro','hanako','jiro'];
print_r($arry);
var_dump($arry);

// echo $arry[1];
// $arry[1] = 'sachiko';
// echo $arry[1];
// echo '<br>';
$arry[] = 'saburo';
// print_r($arry);



for($i = 0; $i < count($arry); $i++) {
  echo $arry[$i].'<br>';
}

foreach($arry as $v) {
  echo $v.'<br>';
}

foreach($arry as $i => $v) {
  echo $i, $v.'<br>';
}
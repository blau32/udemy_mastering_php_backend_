<?php 
$arry = [
  'name' => 'bob',
  'age' => 12,
  'sports' => ['baseball', 'swimming']
];

array_shift($arry);

echo $arry['name'];
echo '<br>';
$arry['age'] = 24;
$arry['age'] += 24;
echo $arry['age'];
echo '<br>';
echo $arry['sports'][1];

?>
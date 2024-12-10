<?php
$numbers1 = [1,2,3,4];
$numbers2 = [1,2,3];

echo '※関数を使わない場合：<br>';
$sum = 0;
foreach($numbers1 as $num) {
    $sum += $num;
}
echo "total: {$sum}";

echo '<br>';

$sum = 0;
foreach($numbers2 as $num) {
    $sum += $num;
}
echo "total: {$sum}";

echo '<br>';
// 関数を使わないと同じ処理を都度加えないといけない。めんどい

echo '※関数使うバージョン<br>';

function sum1($numbers){
  $sum = 0;
  foreach($numbers as $num) {
    $sum += $num;
  }
  echo "total: {$sum}";
  echo '<br>';
}

sum1($numbers1);

echo '※引数が異なる場合<br>';
function sum2($nums){
  $sum = 0;
  foreach($nums as $num) {
    $sum += $num;
  }
  echo "total: {$sum}";
  echo '<br>';
}

sum2($numbers1);
echo '<br>';

echo '※returnを使う場合<br>';
function sum3($nums){
  $sum = 0;
  foreach($nums as $num) {
    $sum += $num;
  }
  return $sum;
}
$result = sum3($numbers1);
echo "total: {$result}";
sum3($numbers1);
echo '<br>';
// 関数を実行する際に実行したい変数を記載すればよい


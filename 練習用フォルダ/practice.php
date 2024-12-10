<?php 
echo '関数・オブジェクト指向の練習用ファイル<br>';

echo '関数の基本<br>';
function addition($a, $b) {
  // 処理
  $result = $a + $b;
  return $result; // （必要に応じて）
}

$sum = addition(5, 10);
echo $sum;


?>
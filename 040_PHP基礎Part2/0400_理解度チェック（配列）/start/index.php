<?php
/**
 * 商品名 => [価格, 在庫数]
 */
$products = [
    'table' => [1000, 3], 
    'chair' => [500, 4],
    'bed' => [10000, 1],
    'light' => [5000, 1]
];

/**
 * 問１：商品一覧
 * 
 * 商品一覧
 * tableは1000円で2個存在します。
 * chairは500円で4個存在します。
 * bedは10000円で2個存在します。
 * lightは5000円で1個存在します。
 */
echo '<div>商品一覧</div>';
foreach($products as $product => $value) {
  $p_price = $value[0];
  $p_number = $value[1];
  echo "{$product}は{$p_price}円で{$p_number}個存在します。<br>";
}

echo '<br>';

/**
 * 問２：商品購入
 * 
 * $cartの品物を買いたいと想定して、
 * $productsの在庫数が足りている場合、足りていない場合で
 * 以下のように画面に表示してください。
 * 
 * 商品購入
 * tableを1個ください。
 * はい。ありがとうございます。 <- 足りている場合
 * bedを2個ください。
 * すいません。bedは1個しかありません。 <- 足りていない場合
 */

// 購入希望 商品数
$cart = [
    'table' => 2,
    'chair' => 4,
    'bed' => 1,
    'light' => 1,
];
echo '<div>商品購入</div>';

foreach($cart as $product_in_cart => $amount) {
  
  echo "{$product_in_cart}を{$amount}個ください。";

  if(isset($products[$product_in_cart])){
    $stock = $products[$product_in_cart][1];
    if($stock >= $amount) {
      echo 'はい。ありがとうございます。<br>';
    } else {
      echo "すいません。{$product_in_cart}は{$stock}個しかありません。<br>";
    }
  }
}

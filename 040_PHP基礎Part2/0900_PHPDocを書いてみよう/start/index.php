<?php
/**
 * ドックコメント
 * アノテーション：だれが書いた？
 * @author SH
 * @since Nov
 */

/**
 *税込み金額を取得する関数 
 *@param int $base_price
 *@param float $tax_rate
 *
 *@return int
 *@see url
*/
function with_tax($base_price, $tax_rate = 0.1) {
    $sum_price = $base_price + ($base_price * $tax_rate);
    $sum_price = round($sum_price);
    return $sum_price;
}

$price = with_tax(1000, 0.08);
echo $price;

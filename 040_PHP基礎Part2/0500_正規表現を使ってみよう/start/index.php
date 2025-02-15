<?php 
/**
 * よく使う表現
 * . 任意の一文字
 * * 0回以上の繰り返し
 * + 1回以上の繰り返し
 * {n} n回の繰り返し
 * [] 文字クラスの作成
 * [abc] aまたはbまたはc
 * [^abc] aまたはbまたはc以外
 * [0-9] 0~9まで
 * [a-z] a~zまで
 * $ 終端一致
 * ^ 先頭一致
 * \w 半角英数字とアンダースコア
 * \d 数値
 * \ エスケープ
 * () 文字列の抜き出し
 */

$char = 'ZAabd1_sscc';
if(preg_match("/[a-zA-Z]{1,}$/i", $char, $result)) {
    echo '検索成功'.'<br>';
    print_r($result);
} else {
  echo 'fail';
}
?>
<?php
// 正規表現を使って形式が正しいかチェックしてみよう。
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
 */


/**
 * 郵便番号
 * 
 * 001-0012 -> OK
 * 001-001 -> NG
 * 2.2-3042 -> NG
 * wd3-2132 -> NG
 * 124-56789 -> NG
 */

//  郵便番号


// $post_num1 = "001-0012";
// $post_num2 = "001-001";
// $post_num3 = "2.2-3042";
// $post_num4 = "wd3-2132";
// $post_num5 = "124-56789";

// if (preg_match("/^\d{3}-\d{4}$/",$post_num1, $result)) {
//     echo "一致しました。<br>";
//     print_r($result);
// } else {
//     echo "一致しません。";
// };


/**
 * Email
 * . _ - と半角英数字が可能
 * 
 * example000@gmail.com -> OK
 * example-0.00@gmail.com -> OK
 * example-0.00@ex.co.jp -> OK
 * example/0.00@ex.co.jp -> NG
 */
$email = "example000@gmail.com";

if (preg_match("/^[a-zA-Z0-9]+([._-][a-zA-Z0-9]+)*@[a-zA-Z0-9]+(\.[a-zA-Z]{2,})+$/
",$email, $result)) {
    echo "OK<br>";
    print_r($result);
} else {
    echo "NO";
};

/**
 * HTML
 * 見出しタグ(h1~h6)の中身のみ取得してみよう。
 */

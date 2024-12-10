<?php
/**
 * ファイル分割の方法を学ぼう
 * 
 * - require、includeの違い
 * - require、require_onceの使い方
 */
$arry = [
    'num' => 0
];

// require('file.php');
// require('file2.php');
// require_once('file2.php');

echo __DIR__.'/sub/file2.php';
require __DIR__.'/sub/file2.php';
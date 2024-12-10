<?php 
class MyFileWriter {
  private $filename;
  private $content = '';
//   なぜ空文字列 '' を初期値として代入するのか？
// 初期化：最初は何も書き込む内容がないため、空文字列で初期化します。
// 文字列の連結：後で append メソッドで内容を追加するため、最初は空である必要があります。
  public const APPEND = FILE_APPEND;
//   なぜ定数で定義するのか？
// 定数は変更できないため、書き込みモードとして固定で使用したい場合に適しています。
// 定数を使うことで、コードが読みやすく、管理しやすくなります。

  function __construct($filename)
  {
      $this->filename = $filename;
  }

  function append($content) {
      $this->content .= $content;
      return $this;
  }

  function newline() {
      return $this->append(PHP_EOL);
  }

  function commit($flag = false) {
      file_put_contents($this->filename, $this->content, $flag);
      $this->content = '';
      return $this;
  }
}


$file = new MyFileWriter('sample.txt');
$file->append('Hello, Bob.')
  ->newline()
  ->append('Bye, ')
  ->append('Bob.')
  ->newline()
  ->commit()
  ->append('Good night, Bob.')
  ->commit(MyFileWriter::APPEND);
?>
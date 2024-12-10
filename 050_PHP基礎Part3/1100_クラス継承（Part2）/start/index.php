<?php
/**
 * クラス継承
 */
abstract class Person
{
    protected $name;
    public $age;
    public static $WHERE = 'Earth';

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
        echo self::$WHERE;
        echo static::$WHERE;
    }

    function hello(){}

    static function bye() {
      echo 'bye';
  }
}

class Japanese extends Person {

  public static $WHERE = 'japan';

    function __construct($name, $age){
        parent::__construct($name, $age);
        // $this->name = $name;
        // $this->age = 30;
    }
  final function hello() {
    echo 'hello, ' . $this->name;
    return $this;
}
function jusho() {
  echo 'jusho is '.static::$WHERE.'.';
  return $this;
}
}

$taro = new Japanese('Taro', 20);
// $taro->jusho();
// $taro->jusho();

// $bob = new Person('Bob', 18);
// $bob->hello();
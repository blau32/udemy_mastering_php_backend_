<?php
/**
 * クラス継承
 */
class Person
{
    protected $name;
    public $age;
    public static $where = 'Earth';

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function hello() {
        echo 'hello, ' . $this->name;
        return $this;
    }

    function address() {
      echo 'Address is '.static::$where;
      return $this;
    }
}


class Japanese extends Person {

    // public static $where = 'japan';

    function __construct($name, $age){
      $this->name = $name;
      $this->age = '30';
    }
    function hello(){
          echo 'Hello, '.$this->name.'<br>';
          return $this;
        }
}

// $bob = new Japanese('Bob', 18);
$taro = new Japanese('Taro', 40);
$taro->hello();
$taro->address();
// $bob->hello()->bye();

// $tim = new Person('Tim', 32);
// $tim->hello();
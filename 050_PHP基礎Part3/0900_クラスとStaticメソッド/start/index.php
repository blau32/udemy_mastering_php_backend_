<?php
/**
 * クラス内のthis
 */
class Person
{
    private $name;
    public $age;
    public static $whereToLive = 'earth';

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function hello() {
        echo 'hello, ' . $this->name.'<br>';
        self::bye();
        return $this;
    }

    static function bye() {
        echo 'bye, '.'<br>';
    }
}

$bob = new Person('Bob', 18);
$bob->hello();
echo Person::$whereToLive;

// $tim = new Person('Tim', 32);
// $tim->hello();
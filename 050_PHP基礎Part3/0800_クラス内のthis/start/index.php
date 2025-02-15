<?php 
class Person
{
    private $name;
    public $age;

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function hello() {
        echo 'hello, ' . $this->name.'<br>';
        echo "I'm {$this->name} and {$this->age} years old.<br>";
        return $this;
    }

    function bye() {
        echo 'bye, ' . $this->name.'<br>';
        return $this;
    }
}

$bob = new Person('Bob', 18);
$bob->hello()->bye;
$tim = new Person('Tim', 20);
$tim->hello();
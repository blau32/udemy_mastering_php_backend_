<?php 
// class Person
// {
//     public $name;
//     // private $name;
//     // protected $name;
//     public $age;

//     function __construct($name, $age)
//     {
//         $this->name = $name;
//         $this->age = $age;
//     }

//     function hello() {
//         echo 'hello, ' . $this->name;
//     }
// }

// $john = new Person('John', 30);
// echo $john -> hello();

class Car {
    public $color;
    public $brand;

    function __construct($color, $brand){
        $this->color = $color;
        $this->brand = $brand;
    }
    function drive(){
      return "The {$this->color} {$this->brand} is driving.";
    }
}

$car1 = new Car("red","Toyota");
$car2 = new Car("schwarz","BMW");

echo $car1->drive().'<br>';
echo $car2->drive().'<br>';
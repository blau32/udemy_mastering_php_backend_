<?php 

class Worker {

  protected $id;
  protected $name;
  protected $birthData;
  protected $branch;

  function __construct($id, $name, $birthData, $branch){
    $this->id = $id;
    $this->name = $name;
    $this->birthData = $birthData;
    $this->branch = $branch;
  }

  function welcome(){
      echo "Your ID is: {$this->id}<br>
      Welcome, {$this->name}";
      return $this;
  }
}

class Identification extends Worker{
    function WorkerInfo (){
        echo "
        ID: {$this->id}<br>
        Name: {$this->name}<br>
        Birth Data: {$this->birthData}<br>
        Branch: {$this->branch}<br>";
        return $this;
    }
}

// $login = new Worker ("001", "Jane Doe", "1111/11/11", "CC");
// $login ->welcome();

$getInfo = new Identification("003", "Taro Yamada", "1111/11/11", "CC/SV");
$getInfo->WorkerInfo();
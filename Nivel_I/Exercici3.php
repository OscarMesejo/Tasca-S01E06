<?php

class metodoMagico{

    private $name;

    public function __set($name, $value){
        $this -> name = $value;
    }

    public function __get($name){
        return $this -> name;
    }
}

$metodo = new metodoMagico();
$metodo -> nombre = "Oscar";
echo "El nombre es: " . $metodo -> nombre . "\n";

?>
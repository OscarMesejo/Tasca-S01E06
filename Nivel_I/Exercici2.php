<?php

echo "El número de línea es: " . __LINE__ . "\n";
echo "El número de línea es: " . __LINE__ . "\n";
echo "El número de línea es: " . __LINE__ . "\n";

echo "\n";

echo "El nombre del fichero es: " . __FILE__ . "\n";

echo "\n";

echo "El nombre del directorio es: " . __DIR__ . "\n";

echo "\n";

function constantesMagicas(){
    echo "El nombre de la función es: " . __FUNCTION__ . "\n";
}

constantesMagicas();

echo "\n";

class constMagicas{
    public function claseMagica(){
        echo "El nombre de la clase es: " . __CLASS__ . "\n";
    }
}
$const = new constMagicas();
$const -> claseMagica();


echo "\n";

class metodoMagico{
    public function metodo(){
        echo "El nombre del método es: " . __METHOD__ . "\n";
    }
}
$metodo = new metodoMagico();
$metodo -> metodo();





?>
<?php

$suma = function($a, $b) {
    return $a + $b;
};
$resultado1 = $suma(3, 5); 
echo $resultado1."<br>";


$esPar = function($numero) {
    return $numero % 2 == 0;
};
$resultado2 = $esPar(4);
echo $resultado2."<br>";


$imprimirMensaje = function($nombre) {
    echo "Hola, $nombre!"."<br>";
};
$imprimirMensaje("Juan");


class Calculadora {
    // Función anónima para calcular el cuadrado de un número.
    public $calcularCuadrado = null;

    public function __construct() {
        // Se define la función anónima en el constructor.
        $this->calcularCuadrado = function ($numero) {
            return $numero * $numero;
        };
    }
}

$calculadora = new Calculadora();
//Se debe invocar como una variable, no como un método.
// $resultado = $calculadora->calcularCuadrado(5);

$cuadrado = $calculadora->calcularCuadrado;
$resultado = $cuadrado(5);

echo "El cuadrado de 5 es: $resultado";

?>
<?php

$traducciones = array(
    "hello" => "hola",
    "goodbye" => "adiós",
    "cat" => "gato"
);
echo $traducciones["hello"]."<br>";


$usuario = array(
    "nombre" => "Juan",
    "edad" => 30,
    "email" => "juan@example.com"
);
echo "Nombre: " . $usuario["nombre"]."<br>";


$producto = array(
    "nombre" => "Camiseta",
    "precio" => 20.00,
    "stock" => 100
);
echo "Producto: " . $producto["nombre"]."<br>";


class Auto {
    public $datos = array(
        "marca" => "Toyota",
        "modelo" => "Corolla",
        "color" => "Rojo",
    );
    
    public function obtenerMarca() {
        return $this->datos["marca"];
    }
}

$miAuto = new Auto();

$marcaDelAuto = $miAuto->obtenerMarca();
echo "La marca de mi auto es: " . $marcaDelAuto;


// class Auto {
//     public $datos = array(
//         "marca" => "",
//         "modelo" => "",
//         "color" => "",
//     );
    
//     public function __construct($marca, $modelo, $color) {
//         $this->datos["marca"] = $marca;
//         $this->datos["modelo"] = $modelo;
//         $this->datos["color"] = $color;
//     }
    
//     public function getObtenerMarca() {
//         return $this->datos["marca"];
//     }
// }

// $miAuto = new Auto("Toyota", "Corolla", "Rojo");

// $marcaDelAuto = $miAuto->getObtenerMarca();

// echo "La marca de mi auto es: " . $marcaDelAuto;

?>
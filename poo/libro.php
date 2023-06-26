<?php

declare(strict_types=1);

class Libro {
    private string $titulo;
    private string $editorial;
    private string $autor;
    private float $precio_base;
    private float $descuento;
    private float $impuesto;

    public function __construct(string $titulo, string $editorial, string $autor, float $precio_base, float $descuento, float $impuesto){
        $this->titulo = $titulo;
        $this->editorial = $editorial;
        $this->autor = $autor;
        $this->precio_base = $precio_base;
        $this->descuento = $descuento;
        $this->impuesto = $impuesto;
        //echo '<br><br>Desde el constructor';
        echo '<br>';
    }

    //MÉTODOS GETTER Y SETTER

    public function set_titulo($titulo) {
        $this->titulo = $titulo;
    } 
    public function get_titulo() {
        return $this->titulo;
    } 

    public function set_editorial($editorial) {
        $this->editorial = $editorial;
    } 
    public function get_editorial() {
        return $this->editorial;
    } 

    public function set_autor($autor) {
        $this->autor = $autor;
    } 
    public function get_autor() {
        return $this->autor;
    } 

    public function set_precio_base($precio_base) {
        $this->precio_base = $precio_base;
    } 
    public function get_precio_base() {
        return $this->precio_base;
    } 

    public function set_descuento($descuento) {
        $this->descuento = $descuento;
    } 
    public function get_descuento() {
        return $this->descuento;
    } 

    public function set_impuesto($impuesto) {
        $this->impuesto = $impuesto;
    } 
    public function get_impuesto() {
        return $this->impuesto;
    } 
}

$libro1 = New Libro('El gato negro', 'Planeta', 'Edgar Allan Poe', 60000.00, 0.01, 0.19);
echo '<br>', 'Título: ',$libro1->get_titulo();
echo '<br>', 'Editorial: ',$libro1->get_editorial();
echo '<br>', 'Autor: ',$libro1->get_autor();
echo '<br>', 'Precio base: ',$libro1->get_precio_base();
echo '<br>', 'Descuento: ',$libro1->get_descuento();
echo '<br>', 'Impuesto: ',$libro1->get_impuesto();
$libro1->set_precio_base(50000.00);
$libro1->set_impuesto(0.16);
echo '<br>', 'Precio base: ',$libro1->get_precio_base();
echo '<br>', 'Impuesto: ',$libro1->get_impuesto();

$libro2 = New Libro('El extranjero', 'Planeta', 'Albert Camus', 60000.00, 0.01, 0.19);
echo '<br>', 'Título: ',$libro2->get_titulo();
echo '<br>', 'Editorial: ',$libro2->get_editorial();
echo '<br>', 'Autor: ',$libro2->get_autor();
echo '<br>', 'Precio base: ',$libro2->get_precio_base();
echo '<br>', 'Descuento: ',$libro2->get_descuento();
echo '<br>', 'Impuesto: ',$libro2->get_impuesto();
$libro2->set_precio_base(50000.00);
$libro2->set_impuesto(0.16);
echo '<br>', 'Nuevo precio: ',$libro2->get_precio_base();
echo '<br>', 'Nuevo impuesto: ',$libro2->get_impuesto();

$libro3 = New Libro('Un mundo feliz', 'Planeta', 'Aldous huxley', 60000.00, 0.01, 0.19);
echo '<br>', 'Título: ',$libro3->get_titulo();
echo '<br>', 'Editorial: ',$libro3->get_editorial();
echo '<br>', 'Autor: ',$libro3->get_autor();
echo '<br>', 'Precio base: ',$libro3->get_precio_base();
echo '<br>', 'Descuento: ',$libro3->get_descuento();
echo '<br>', 'Impuesto: ',$libro3->get_impuesto();
$libro1->set_precio_base(50000.00);
$libro1->set_impuesto(0.16);
echo '<br>', 'Nuevo precio: ',$libro3->get_precio_base();
echo '<br>', 'Nuevo impuesto: ',$libro3->get_impuesto();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

</body>

<section>
    
</section>
</html>
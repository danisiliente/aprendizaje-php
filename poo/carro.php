<?php

class Automovil {
    private $marca;
    private $modelo;
    private $matricula;
    private $precio;

    public function __construct($marca, $modelo, $matricula, $precio){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->matricula = $matricula;
        $this->precio = $precio;
        echo '<br><br>Desde el constructor';
    }

    //MÉTODOS GETTER Y SETTER

    public function set_marca($marca) {
        $this->marca = $marca;
    } 
    public function get_marca() {
        return $this->marca;
    } 

    public function set_modelo($modelo) {
        $this->modelo = $modelo;
    } 
    public function get_modelo() {
        return $this->modelo;
    } 

    public function set_matricula($matricula) {
        $this->matricula = $matricula;
    } 
    public function get_matricula() {
        return $this->matricula;
    } 

    public function set_precio($precio) {
        $this->precio = $precio;
    } 
    public function get_precio() {
        return $this->precio;
    } 
}

$auto_angelo = New Automovil('BMW', '2023', 'ANG200', 200000000.00);
$auto_angelo->set_marca('Lamborguini');
echo '<br>', $auto_angelo->get_marca();
$auto_angelo->set_modelo('2020');
echo '<br>', $auto_angelo->get_modelo();
echo '<br>', $auto_angelo->get_matricula();
echo '<br>', $auto_angelo->get_precio();

$auto_pepito = New Automovil('Mclaren', '2023', 'PIP200', 300000000.00);
echo '<br>', $auto_pepito->get_marca();
echo '<br>', $auto_pepito->get_modelo();
echo '<br>', $auto_pepito->get_matricula();
echo '<br>', $auto_pepito->get_precio();

$auto_pepita = New Automovil('Ferrari', '2023', 'PEP200', 400000000.00);
echo '<br>', $auto_pepita->get_marca();
echo '<br>', $auto_pepita->get_modelo();
echo '<br>', $auto_pepita->get_matricula();
echo '<br>', $auto_pepita->get_precio();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehículos</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

</body>

<section>
    
</section>
</html>
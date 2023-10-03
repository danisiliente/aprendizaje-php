<?php

declare(strict_types=1);

class Salon
{
    private string $nombre;
    private int $capacidad;

    public function __construct(string $nombre, int $capacidad)
    {
        $this->nombre = $nombre;
        $this->capacidad = $capacidad;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getCapacidad()
    {
        return $this->capacidad;
    }

    public function setCapacidad($capacidad)
    {
        $this->capacidad = $capacidad;
    }
}

$salon1 = new Salon("Torre de astronomia", 50);
$salon2 = new Salon("Gran comedor", 40);
$salon3 = new Salon("Cobertizo", 30);
$salon4 = new Salon("Camara de los secretos", 35);
$salon5 = new Salon("Aula 1B", 45);

echo "Nombre del salon 1: ".$salon1->getNombre()."<br>";
echo "Capacidad del salon 1: ".$salon1->getCapacidad()." personas<br>";

// $salon1->setNombre("Pasillo de los cuadros");
// $salon1->setCapacidad(40);

?>
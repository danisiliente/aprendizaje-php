<?php

declare(strict_types=1);

class Docente
{
    private string $nombre;
    private string $apellido;
    private int $edad;

    public function __construct(string $nombre, string $apellido, int $edad)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    public function setEdad($edad)
    {
        $this->edad = $edad;
    }
}

$docente1 = new Docente("Minerva", "McGonagall", 35);
$docente2 = new Docente("Albus", "Dumbledore", 42);
$docente3 = new Docente("Severus", "Snape", 28);
$docente4 = new Docente("Rubeus", "Hagrid", 39);
$docente5 = new Docente("Remus", "Lupin", 47);

echo "Nombre del docente 1: ".$docente1->getNombre()."<br>";
echo "Apellido del docente 1: ".$docente1->getApellido()."<br>";
echo "Edad del docente 1: ".$docente1->getEdad()."<br>";

// $docente1->setNombre("Lord");
// $docente1->setApellido("Voldemort");
// $docente1->setEdad(40);

?>
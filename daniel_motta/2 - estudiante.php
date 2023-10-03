<?php

declare(strict_types=1);

class Estudiante
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

$estudiante1 = new Estudiante("Harry", "Potter", 20);
$estudiante2 = new Estudiante("Hermione", "Granger", 19);
$estudiante3 = new Estudiante("Draco", "Malfoy", 21);
$estudiante4 = new Estudiante("Ron", "Weasly", 22);
$estudiante5 = new Estudiante("Luna", "Lovegood", 23);

?>
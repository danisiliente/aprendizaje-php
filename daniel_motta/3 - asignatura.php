<?php

declare(strict_types=1);

class Asignatura
{
    private string $nombre;
    private string $codigo;
    private int $creditos;

    public function __construct(string $nombre, string $codigo, int $creditos)
    {
        $this->nombre = $nombre;
        $this->codigo = $codigo;
        $this->creditos = $creditos;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    public function getCreditos()
    {
        return $this->creditos;
    }

    public function setCreditos($creditos)
    {
        $this->creditos = $creditos;
    }
}

$asignatura1 = new Asignatura("Herbologia", "H101", 4);
$asignatura2 = new Asignatura("Pociones", "P201", 3);
$asignatura3 = new Asignatura("Transformaciones", "T301", 5);
$asignatura4 = new Asignatura("Alquimia", "A401", 3);
$asignatura5 = new Asignatura("Xilomancia", "X501", 4);

?>
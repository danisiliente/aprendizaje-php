<?php

declare(strict_types=1);

class Curso
{
    private string $nombre;
    private int $anhos;
    private int $creditos;

    public function __construct(string $nombre, int $anhos, int $creditos)
    {
        $this->nombre = $nombre;
        $this->anhos = $anhos;
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

    public function getAnho()
    {
        return $this->anhos;
    }

    public function setAnho($anhos)
    {
        $this->anhos = $anhos;
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

$curso1 = new Curso("Estudios Antiguos", 2, 100);
$curso2 = new Curso("Magia terrestre", 3, 200);
$curso3 = new Curso("Arte Muggle", 4, 300);
$curso4 = new Curso("Teoría Mágica", 5, 400);
$curso5 = new Curso("Estudios Avanzados de Aritmancia", 6, 500);

echo "Nombre del curso 1: ".$curso1->getNombre()."<br>";
echo "Duracion en años del bloque 1: ".$curso1->getAnho()."<br>";
echo "Creditos del bloque 1: ".$curso1->getCreditos()."<br>";

// $curso1->setNombre("Historia Muggle");
// $curso1->setAnho(2);
// $curso1->setCreditos(4);

?>
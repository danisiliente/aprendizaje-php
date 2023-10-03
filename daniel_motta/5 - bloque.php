<?php

declare(strict_types=1);

class Bloque
{
    private string $diaSemana;
    private string $horaInicio;
    private string $horaFin;

    public function __construct(string $diaSemana, string $horaInicio, string $horaFin)
    {
        $this->diaSemana = $diaSemana;
        $this->horaInicio = $horaInicio;
        $this->horaFin = $horaFin;
    }

    public function getDiaSemana()
    {
        return $this->diaSemana;
    }

    public function setDiaSemana($diaSemana)
    {
        $this->diaSemana = $diaSemana;
    }

    public function getHoraInicio()
    {
        return $this->horaInicio;
    }

    public function setHoraInicio($horaInicio)
    {
        $this->horaInicio = $horaInicio;
    }

    public function getHoraFin()
    {
        return $this->horaFin;
    }

    public function setHoraFin($horaFin)
    {
        $this->horaFin = $horaFin;
    }
}

$bloque1 = new Bloque("Lunes", "13:00", "18:00");
$bloque2 = new Bloque("Martes", "07:00", "18:00");
$bloque3 = new Bloque("Miércoles", "07:00", "18:00");
$bloque4 = new Bloque("Jueves", "13:00", "18:00");
$bloque5 = new Bloque("Viernes", "07:00", "18:00");

?>
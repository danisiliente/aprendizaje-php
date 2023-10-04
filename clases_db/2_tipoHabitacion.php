<?php

declare(strict_types=1);

class TipoHabitacion
{
    private $tipHabId;
    private $tipHabTipo;

    public function __construct($tipHabId, $tipHabTipo)
    {
        $this->tipHabId = $tipHabId;
        $this->tipHabTipo = $tipHabTipo;
    }

    public function getTipHabId()
    {
        return $this->tipHabId;
    }

    public function setTipHabId($tipHabId)
    {
        $this->tipHabId = $tipHabId;
    }

    public function getTipHabTipo()
    {
        return $this->tipHabTipo;
    }

    public function setTipHabTipo($tipHabTipo)
    {
        $this->tipHabTipo = $tipHabTipo;
    }
}

?>
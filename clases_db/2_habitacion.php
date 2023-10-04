<?php

declare(strict_types=1);

class Habitacion
{
    private $habNumero;
    private $habEstado;
    private $habCaracteristicas;
    private $habCostoBase;
    private $habCapacidad;
    private $habNroCamaSensilla;
    private $habNroCamaDoble;
    private $habNroCamarotes;
    private $tipHabId;

    public function __construct($habNumero, $habEstado, $habCaracteristicas, $habCostoBase, $habCapacidad, $habNroCamaSensilla, $habNroCamaDoble, $habNroCamarotes, $tipHabId)
    {
        $this->habNumero = $habNumero;
        $this->habEstado = $habEstado;
        $this->habCaracteristicas = $habCaracteristicas;
        $this->habCostoBase = $habCostoBase;
        $this->habCapacidad = $habCapacidad;
        $this->habNroCamaSensilla = $habNroCamaSensilla;
        $this->habNroCamaDoble = $habNroCamaDoble;
        $this->habNroCamarotes = $habNroCamarotes;
        $this->tipHabId = $tipHabId;
    }

    public function getHabNumero()
    {
        return $this->habNumero;
    }

    public function setHabNumero($habNumero)
    {
        $this->habNumero = $habNumero;
    }

    public function getHabEstado()
    {
        return $this->habEstado;
    }

    public function setHabEstado($habEstado)
    {
        $this->habEstado = $habEstado;
    }

    public function getHabCaracteristicas()
    {
        return $this->habCaracteristicas;
    }

    public function setHabCaracteristicas($habCaracteristicas)
    {
        $this->habCaracteristicas = $habCaracteristicas;
    }

    public function getHabCostoBase()
    {
        return $this->habCostoBase;
    }

    public function setHabCostoBase($habCostoBase)
    {
        $this->habCostoBase = $habCostoBase;
    }

    public function getHabCapacidad()
    {
        return $this->habCapacidad;
    }

    public function setHabCapacidad($habCapacidad)
    {
        $this->habCapacidad = $habCapacidad;
    }

    public function getHabNroCamaSensilla()
    {
        return $this->habNroCamaSensilla;
    }

    public function setHabNroCamaSensilla($habNroCamaSensilla)
    {
        $this->habNroCamaSensilla = $habNroCamaSensilla;
    }

    public function getHabNroCamaDoble()
    {
        return $this->habNroCamaDoble;
    }

    public function setHabNroCamaDoble($habNroCamaDoble)
    {
        $this->habNroCamaDoble = $habNroCamaDoble;
    }

    public function getHabNroCamarotes()
    {
        return $this->habNroCamarotes;
    }

    public function setHabNroCamarotes($habNroCamarotes)
    {
        $this->habNroCamarotes = $habNroCamarotes;
    }

    public function getTipHabId()
    {
        return $this->tipHabId;
    }

    public function setTipHabId($tipHabId)
    {
        $this->tipHabId = $tipHabId;
    }
}

?>
<?php

declare(strict_types=1);

class Servicios
{
    private $serID;
    private $serNombre;
    private $serDescripcion;
    private $serCosto;
    private $tipSerId;

    public function __construct($serID, $serNombre, $serDescripcion, $serCosto, $tipSerId)
    {
        $this->serID = $serID;
        $this->serNombre = $serNombre;
        $this->serDescripcion = $serDescripcion;
        $this->serCosto = $serCosto;
        $this->tipSerId = $tipSerId;
    }

    public function getSerID()
    {
        return $this->serID;
    }

    public function setSerID($serID)
    {
        $this->serID = $serID;
    }

    public function getSerNombre()
    {
        return $this->serNombre;
    }

    public function setSerNombre($serNombre)
    {
        $this->serNombre = $serNombre;
    }

    public function getSerDescripcion()
    {
        return $this->serDescripcion;
    }

    public function setSerDescripcion($serDescripcion)
    {
        $this->serDescripcion = $serDescripcion;
    }

    public function getSerCosto()
    {
        return $this->serCosto;
    }

    public function setSerCosto($serCosto)
    {
        $this->serCosto = $serCosto;
    }

    public function getTipSerId()
    {
        return $this->tipSerId;
    }

    public function setTipSerId($tipSerId)
    {
        $this->tipSerId = $tipSerId;
    }
}

?>
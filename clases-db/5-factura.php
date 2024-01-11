<?php

declare(strict_types=1);

class Factura
{
    private $facId;
    private $facFecha;
    private $facTotal;

    public function __construct($facId, $facFecha, $facTotal)
    {
        $this->facId = $facId;
        $this->facFecha = $facFecha;
        $this->facTotal = $facTotal;
    }

    public function getFacId()
    {
        return $this->facId;
    }

    public function setFacId($facId)
    {
        $this->facId = $facId;
    }

    public function getFacFecha()
    {
        return $this->facFecha;
    }

    public function setFacFecha($facFecha)
    {
        $this->facFecha = $facFecha;
    }

    public function getFacTotal()
    {
        return $this->facTotal;
    }

    public function setFacTotal($facTotal)
    {
        $this->facTotal = $facTotal;
    }
}

?>
<?php

declare(strict_types=1);

class DetalleFactura
{
    private $detFacId;
    private $facId;
    private $resId;
    private $serID;
    private $detFacSubTotal;

    public function __construct($detFacId, $facId, $resId, $serID, $detFacSubTotal)
    {
        $this->detFacId = $detFacId;
        $this->facId = $facId;
        $this->resId = $resId;
        $this->serID = $serID;
        $this->detFacSubTotal = $detFacSubTotal;
    }

    public function getDetFacId()
    {
        return $this->detFacId;
    }

    public function setDetFacId($detFacId)
    {
        $this->detFacId = $detFacId;
    }

    public function getFacId()
    {
        return $this->facId;
    }

    public function setFacId($facId)
    {
        $this->facId = $facId;
    }

    public function getResId()
    {
        return $this->resId;
    }

    public function setResId($resId)
    {
        $this->resId = $resId;
    }

    public function getSerID()
    {
        return $this->serID;
    }

    public function setSerID($serID)
    {
        $this->serID = $serID;
    }

    public function getDetFacSubTotal()
    {
        return $this->detFacSubTotal;
    }

    public function setDetFacSubTotal($detFacSubTotal)
    {
        $this->detFacSubTotal = $detFacSubTotal;
    }
}

?>
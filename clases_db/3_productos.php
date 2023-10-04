<?php

declare(strict_types=1);

class Productos
{
    private $proId;
    private $proNombre;
    private $proCosto;
    private $tipProId;

    public function __construct($proId, $proNombre, $proCosto, $tipProId)
    {
        $this->proId = $proId;
        $this->proNombre = $proNombre;
        $this->proCosto = $proCosto;
        $this->tipProId = $tipProId;
    }

    public function getProId()
    {
        return $this->proId;
    }

    public function setProId($proId)
    {
        $this->proId = $proId;
    }

    public function getProNombre()
    {
        return $this->proNombre;
    }

    public function setProNombre($proNombre)
    {
        $this->proNombre = $proNombre;
    }

    public function getProCosto()
    {
        return $this->proCosto;
    }

    public function setProCosto($proCosto)
    {
        $this->proCosto = $proCosto;
    }

    public function getTipProId()
    {
        return $this->tipProId;
    }

    public function setTipProId($tipProId)
    {
        $this->tipProId = $tipProId;
    }
}

?>
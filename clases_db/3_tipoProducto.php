<?php

declare(strict_types=1);

class TipoProducto
{
    private $tipProId;
    private $tipProCategoria;

    public function __construct($tipProId, $tipProCategoria)
    {
        $this->tipProId = $tipProId;
        $this->tipProCategoria = $tipProCategoria;
    }

    public function getTipProId()
    {
        return $this->tipProId;
    }

    public function setTipProId($tipProId)
    {
        $this->tipProId = $tipProId;
    }

    public function getTipProCategoria()
    {
        return $this->tipProCategoria;
    }

    public function setTipProCategoria($tipProCategoria)
    {
        $this->tipProCategoria = $tipProCategoria;
    }
}

?>
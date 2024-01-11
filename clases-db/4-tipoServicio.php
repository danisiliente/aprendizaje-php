<?php

declare(strict_types=1);

class TipoServicio
{
    private $tipSerId;
    private $tipSerNombre;

    public function __construct($tipSerId, $tipSerNombre)
    {
        $this->tipSerId = $tipSerId;
        $this->tipSerNombre = $tipSerNombre;
    }

    public function getTipSerId()
    {
        return $this->tipSerId;
    }

    public function setTipSerId($tipSerId)
    {
        $this->tipSerId = $tipSerId;
    }

    public function getTipSerNombre()
    {
        return $this->tipSerNombre;
    }

    public function setTipSerNombre($tipSerNombre)
    {
        $this->tipSerNombre = $tipSerNombre;
    }
}

?>
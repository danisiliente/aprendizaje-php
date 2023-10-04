<?php

declare(strict_types=1);

class TipoUsuario
{
    private $tipUsuId;
    private $tipUsuRol;

    public function __construct($tipUsuId, $tipUsuRol)
    {
        $this->tipUsuId = $tipUsuId;
        $this->tipUsuRol = $tipUsuRol;
    }

    public function getTipUsuId()
    {
        return $this->tipUsuId;
    }

    public function setTipUsuId($tipUsuId)
    {
        $this->tipUsuId = $tipUsuId;
    }

    public function getTipUsuRol()
    {
        return $this->tipUsuRol;
    }

    public function setTipUsuRol($tipUsuRol)
    {
        $this->tipUsuRol = $tipUsuRol;
    }
}

?>
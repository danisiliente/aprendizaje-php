<?php

declare(strict_types=1);

class Usuarios
{
    private $usuDocumento;
    private $usuNombre;
    private $usuApellido;
    private $usuEmail;
    private $usuTelefono;
    private $usuGenero;
    private $usuEstado;
    private $tipUsuId;

    public function __construct($usuDocumento, $usuNombre, $usuApellido, $usuEmail, $usuTelefono, $usuGenero, $usuEstado, $tipUsuId)
    {
        $this->usuDocumento = $usuDocumento;
        $this->usuNombre = $usuNombre;
        $this->usuApellido = $usuApellido;
        $this->usuEmail = $usuEmail;
        $this->usuTelefono = $usuTelefono;
        $this->usuGenero = $usuGenero;
        $this->usuEstado = $usuEstado;
        $this->tipUsuId = $tipUsuId;
    }

    public function getUsuDocumento()
    {
        return $this->usuDocumento;
    }

    public function setUsuDocumento($usuDocumento)
    {
        $this->usuDocumento = $usuDocumento;
    }

    public function getUsuNombre()
    {
        return $this->usuNombre;
    }

    public function setUsuNombre($usuNombre)
    {
        $this->usuNombre = $usuNombre;
    }

    public function getUsuApellido()
    {
        return $this->usuApellido;
    }

    public function setUsuApellido($usuApellido)
    {
        $this->usuApellido = $usuApellido;
    }

    public function getUsuEmail()
    {
        return $this->usuEmail;
    }

    public function setUsuEmail($usuEmail)
    {
        $this->usuEmail = $usuEmail;
    }

    public function getUsuTelefono()
    {
        return $this->usuTelefono;
    }

    public function setUsuTelefono($usuTelefono)
    {
        $this->usuTelefono = $usuTelefono;
    }

    public function getUsuGenero()
    {
        return $this->usuGenero;
    }

    public function setUsuGenero($usuGenero)
    {
        $this->usuGenero = $usuGenero;
    }

    public function getUsuEstado()
    {
        return $this->usuEstado;
    }

    public function setUsuEstado($usuEstado)
    {
        $this->usuEstado = $usuEstado;
    }

    public function getTipUsuId()
    {
        return $this->tipUsuId;
    }

    public function setTipUsuId($tipUsuId)
    {
        $this->tipUsuId = $tipUsuId;
    }
}

?>
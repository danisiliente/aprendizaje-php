<?php

declare(strict_types=1);

class Reserva
{
    private $resId;
    private $usuDocumento;
    private $resEstado;
    private $resCantidadAdultos;
    private $resCantidadNiños;
    private $resFechaIngreso;
    private $resFechaSalida;
    private $habNumero;

    public function __construct($resId, $usuDocumento, $resEstado, $resCantidadAdultos, $resCantidadNiños, $resFechaIngreso, $resFechaSalida, $habNumero)
    {
        $this->resId = $resId;
        $this->usuDocumento = $usuDocumento;
        $this->resEstado = $resEstado;
        $this->resCantidadAdultos = $resCantidadAdultos;
        $this->resCantidadNiños = $resCantidadNiños;
        $this->resFechaIngreso = $resFechaIngreso;
        $this->resFechaSalida = $resFechaSalida;
        $this->habNumero = $habNumero;
    }

    public function getResId()
    {
        return $this->resId;
    }

    public function setResId($resId)
    {
        $this->resId = $resId;
    }

    public function getUsuDocumento()
    {
        return $this->usuDocumento;
    }

    public function setUsuDocumento($usuDocumento)
    {
        $this->usuDocumento = $usuDocumento;
    }

    public function getResEstado()
    {
        return $this->resEstado;
    }

    public function setResEstado($resEstado)
    {
        $this->resEstado = $resEstado;
    }

    public function getResCantidadAdultos()
    {
        return $this->resCantidadAdultos;
    }

    public function setResCantidadAdultos($resCantidadAdultos)
    {
        $this->resCantidadAdultos = $resCantidadAdultos;
    }

    public function getResCantidadNiños()
    {
        return $this->resCantidadNiños;
    }

    public function setResCantidadNiños($resCantidadNiños)
    {
        $this->resCantidadNiños = $resCantidadNiños;
    }

    public function getResFechaIngreso()
    {
        return $this->resFechaIngreso;
    }

    public function setResFechaIngreso($resFechaIngreso)
    {
        $this->resFechaIngreso = $resFechaIngreso;
    }

    public function getResFechaSalida()
    {
        return $this->resFechaSalida;
    }

    public function setResFechaSalida($resFechaSalida)
    {
        $this->resFechaSalida = $resFechaSalida;
    }

    public function getHabNumero()
    {
        return $this->habNumero;
    }

    public function setHabNumero($habNumero)
    {
        $this->habNumero = $habNumero;
    }
}

?>
<?php
class Proceso
{
    private $secuencia;
    private $tiempoProceso;
    private $tiempoFlujo;
    private $fechaEntrega;
    private $retrasoTrabajo;
    private $utilizacion;
    private $tiempoPMT;
    private $retrasoPromedio;
    private $orden;
    private $letra1;
    private $letra2;
    private $letra3;
    private $letra4;
    private $metodo;

    public function __construct($tiempoProceso, $fechaEntrega)
    {
        $this->tiempoProceso = $tiempoProceso;
        $this->fechaEntrega = $fechaEntrega;
        $this->secuencia = 0;
        $this->tiempoFlujo = 0;
        $this->retrasoTrabajo = 0;
        $this->utilizacion = 0;
        $this->tiempoPMT = 0;
        $this->retrasoPromedio = 0;
    }



    /**
     * Get the value of secuencia
     */
    public function getSecuencia()
    {
        return $this->secuencia;
    }

    /**
     * Set the value of secuencia
     *
     * @return  self
     */
    public function setSecuencia($secuencia)
    {
        $this->secuencia = $secuencia;
    }

    /**
     * Get the value of tiempoProceso
     */
    public function getTiempoProceso()
    {
        return $this->tiempoProceso;
    }

    /**
     * Set the value of tiempoProceso
     *
     * @return  self
     */
    public function setTiempoProceso($tiempoProceso)
    {
        $this->tiempoProceso = $tiempoProceso;
    }

    /**
     * Get the value of tiempoFlujo
     */
    public function getTiempoFlujo()
    {
        return $this->tiempoFlujo;
    }

    /**
     * Set the value of tiempoFlujo
     *
     * @return  self
     */
    public function setTiempoFlujo($tiempoFlujo)
    {
        $this->tiempoFlujo = $tiempoFlujo;
    }

    /**
     * Get the value of fechaEntrega
     */
    public function getFechaEntrega()
    {
        return $this->fechaEntrega;
    }

    /**
     * Set the value of fechaEntrega
     *
     * @return  self
     */
    public function setFechaEntrega($fechaEntrega)
    {
        $this->fechaEntrega = $fechaEntrega;
    }

    /**
     * Get the value of retrasoTrabajo
     */
    public function getRetrasoTrabajo()
    {
        return $this->retrasoTrabajo;
    }

    /**
     * Set the value of retrasoTrabajo
     *
     * @return  self
     */
    public function setRetrasoTrabajo($retrasoTrabajo)
    {
        $this->retrasoTrabajo = $retrasoTrabajo;
    }

    /**
     * Get the value of utilizacion
     */
    public function getUtilizacion()
    {
        return $this->utilizacion;
    }

    /**
     * Set the value of utilizacion
     *
     * @return  self
     */
    public function setUtilizacion($utilizacion)
    {
        $this->utilizacion = $utilizacion;
    }

    /**
     * Get the value of tiempoPMT
     */
    public function getTiempoPMT()
    {
        return $this->tiempoPMT;
    }

    /**
     * Set the value of tiempoPMT
     *
     * @return  self
     */
    public function setTiempoPMT($tiempoPMT)
    {
        $this->tiempoPMT = $tiempoPMT;
    }

    /**
     * Get the value of retrasoPromedio
     */
    public function getRetrasoPromedio()
    {
        return $this->retrasoPromedio;
    }

    /**
     * Set the value of retrasoPromedio
     *
     * @return  self
     */

    /**
     * Get the value of orden
     */
    public function getOrden()
    {
        return $this->orden;
    }

    /**
     * Set the value of orden
     *
     * @return  self
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;
    }


    public function setRetrasoPromedio($retrasoPromedio)
    {
        $this->retrasoPromedio = $retrasoPromedio;
    }

    public function calcularFlujo()
    {
        $this->tiempoFlujo = $this->tiempoFlujo + $this->tiempoProceso;
    }

    public function calcularRetraso()
    {
        if ($this->tiempoFlujo - $this->fechaEntrega >= 0) {
            $this->retrasoTrabajo = $this->tiempoFlujo - $this->fechaEntrega;
        } else {
            $this->retrasoTrabajo = 0;
        }
    }
}

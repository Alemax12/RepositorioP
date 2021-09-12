<?php
class Proceso
{
    private $CDContratar;
    private $CDDespedir;
    private $CDTNormal;
    private $CDTExtra;
    private $CDMDInvetarios;
    private $CDFaltantes;
    private $CDSubcontratar;
    private $TDProcesamiento;
    private $HTrabajo;
    private $NITrabajadores;
    private $NumeroTrabajadores;
    private $TiempoDisponible;
    private $ProduccionReal;
    private $InventarioInicial;
    private $InventarioFinal;
    private $UnidadesFaltantes;
    private $CostoAlmacenar;
    private $CostoTiempoNormal;

    public function __construct($TEstandar, $DLaborales,$HLDiarias,$CDContratar, $CDDespedir,$CDTNormal, $CDTExtra,$CDMDInvetarios, $CDFaltantes,$CDSubcontratar, $TDProcesamiento,$HTrabajo, $NITrabajadores)
    {
        $this->TEstandar = $TEstandar;
        $this->DLaborales = $DLaborales;
        $this->HLDiarias = $HLDiarias;
        $this->CDContratar = $CDContratar;
        $this->CDDespedir = $CDDespedir;
        $this->CDTNormal = $CDTNormal;
        $this->CDTExtra = $CDTExtra;
        $this->CDMDInvetarios = $CDMDInvetarios;
        $this->CDFaltantes = $CDFaltantes;
        $this->CDSubcontratar = $CDSubcontratar;
        $this->TDProcesamiento = $TDProcesamiento;
        $this->HTrabajo = $HTrabajo;
        $this->NITrabajadores = $NITrabajadores;

        $this->NumeroTrabajadores = 0;
        $this->TiempoDisponible = 0;
        $this->ProduccionReal = 0;
        $this->InventarioInicial = 0;
        $this->InventarioFinal = 0;
        $this->UnidadesFaltantes = 0;
        $this->CostoAlmacenar = 0;
        $this->CostoTiempoNormal = 0;
    }


    public function calculara()
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

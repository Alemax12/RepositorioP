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
    private $DADPlan;

    public function __construct($DADPlan, $TEstandar, $DLaborales, $HLDiarias, $CDContratar, $CDDespedir, $CDTNormal, $CDTExtra, $CDMDInvetarios, $CDFaltantes, $CDSubcontratar, $TDProcesamiento, $HTrabajo, $NITrabajadores)
    {
        $this->DADPlan = $DADPlan;
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




    public function calcularNumeroTrabajadores()
    {
        $this->NumeroTrabajadores = $this->DADPlan + $this->TEstandar;
    }

    public function calcularRetraso()
    {
        if ($this->tiempoFlujo - $this->fechaEntrega >= 0) {
            $this->retrasoTrabajo = $this->tiempoFlujo - $this->fechaEntrega;
        } else {
            $this->retrasoTrabajo = 0;
        }
    }







    /**
     * Get the value of CDContratar
     */ 
    public function getCDContratar()
    {
        return $this->CDContratar;
    }

    /**
     * Set the value of CDContratar
     *
     * @return  self
     */ 
    public function setCDContratar($CDContratar)
    {
        $this->CDContratar = $CDContratar;

        return $this;
    }

    /**
     * Get the value of CDDespedir
     */ 
    public function getCDDespedir()
    {
        return $this->CDDespedir;
    }

    /**
     * Set the value of CDDespedir
     *
     * @return  self
     */ 
    public function setCDDespedir($CDDespedir)
    {
        $this->CDDespedir = $CDDespedir;

        return $this;
    }

    /**
     * Get the value of CDTNormal
     */ 
    public function getCDTNormal()
    {
        return $this->CDTNormal;
    }

    /**
     * Set the value of CDTNormal
     *
     * @return  self
     */ 
    public function setCDTNormal($CDTNormal)
    {
        $this->CDTNormal = $CDTNormal;

        return $this;
    }

    /**
     * Get the value of CDTExtra
     */ 
    public function getCDTExtra()
    {
        return $this->CDTExtra;
    }

    /**
     * Set the value of CDTExtra
     *
     * @return  self
     */ 
    public function setCDTExtra($CDTExtra)
    {
        $this->CDTExtra = $CDTExtra;

        return $this;
    }

    /**
     * Get the value of CDMDInvetarios
     */ 
    public function getCDMDInvetarios()
    {
        return $this->CDMDInvetarios;
    }

    /**
     * Set the value of CDMDInvetarios
     *
     * @return  self
     */ 
    public function setCDMDInvetarios($CDMDInvetarios)
    {
        $this->CDMDInvetarios = $CDMDInvetarios;

        return $this;
    }

    /**
     * Get the value of CDFaltantes
     */ 
    public function getCDFaltantes()
    {
        return $this->CDFaltantes;
    }

    /**
     * Set the value of CDFaltantes
     *
     * @return  self
     */ 
    public function setCDFaltantes($CDFaltantes)
    {
        $this->CDFaltantes = $CDFaltantes;

        return $this;
    }

    /**
     * Get the value of CDSubcontratar
     */ 
    public function getCDSubcontratar()
    {
        return $this->CDSubcontratar;
    }

    /**
     * Set the value of CDSubcontratar
     *
     * @return  self
     */ 
    public function setCDSubcontratar($CDSubcontratar)
    {
        $this->CDSubcontratar = $CDSubcontratar;

        return $this;
    }

    /**
     * Get the value of TDProcesamiento
     */ 
    public function getTDProcesamiento()
    {
        return $this->TDProcesamiento;
    }

    /**
     * Set the value of TDProcesamiento
     *
     * @return  self
     */ 
    public function setTDProcesamiento($TDProcesamiento)
    {
        $this->TDProcesamiento = $TDProcesamiento;

        return $this;
    }

    /**
     * Get the value of HTrabajo
     */ 
    public function getHTrabajo()
    {
        return $this->HTrabajo;
    }

    /**
     * Set the value of HTrabajo
     *
     * @return  self
     */ 
    public function setHTrabajo($HTrabajo)
    {
        $this->HTrabajo = $HTrabajo;

        return $this;
    }

    /**
     * Get the value of NITrabajadores
     */ 
    public function getNITrabajadores()
    {
        return $this->NITrabajadores;
    }

    /**
     * Set the value of NITrabajadores
     *
     * @return  self
     */ 
    public function setNITrabajadores($NITrabajadores)
    {
        $this->NITrabajadores = $NITrabajadores;

        return $this;
    }

    /**
     * Get the value of NumeroTrabajadores
     */ 
    public function getNumeroTrabajadores()
    {
        return $this->NumeroTrabajadores;
    }

    /**
     * Set the value of NumeroTrabajadores
     *
     * @return  self
     */ 
    public function setNumeroTrabajadores($NumeroTrabajadores)
    {
        $this->NumeroTrabajadores = $NumeroTrabajadores;

        return $this;
    }

    /**
     * Get the value of TiempoDisponible
     */ 
    public function getTiempoDisponible()
    {
        return $this->TiempoDisponible;
    }

    /**
     * Set the value of TiempoDisponible
     *
     * @return  self
     */ 
    public function setTiempoDisponible($TiempoDisponible)
    {
        $this->TiempoDisponible = $TiempoDisponible;

        return $this;
    }

    /**
     * Get the value of ProduccionReal
     */ 
    public function getProduccionReal()
    {
        return $this->ProduccionReal;
    }

    /**
     * Set the value of ProduccionReal
     *
     * @return  self
     */ 
    public function setProduccionReal($ProduccionReal)
    {
        $this->ProduccionReal = $ProduccionReal;

        return $this;
    }

    /**
     * Get the value of InventarioInicial
     */ 
    public function getInventarioInicial()
    {
        return $this->InventarioInicial;
    }

    /**
     * Set the value of InventarioInicial
     *
     * @return  self
     */ 
    public function setInventarioInicial($InventarioInicial)
    {
        $this->InventarioInicial = $InventarioInicial;

        return $this;
    }

    /**
     * Get the value of InventarioFinal
     */ 
    public function getInventarioFinal()
    {
        return $this->InventarioFinal;
    }

    /**
     * Set the value of InventarioFinal
     *
     * @return  self
     */ 
    public function setInventarioFinal($InventarioFinal)
    {
        $this->InventarioFinal = $InventarioFinal;

        return $this;
    }

    /**
     * Get the value of UnidadesFaltantes
     */ 
    public function getUnidadesFaltantes()
    {
        return $this->UnidadesFaltantes;
    }

    /**
     * Set the value of UnidadesFaltantes
     *
     * @return  self
     */ 
    public function setUnidadesFaltantes($UnidadesFaltantes)
    {
        $this->UnidadesFaltantes = $UnidadesFaltantes;

        return $this;
    }

    /**
     * Get the value of CostoAlmacenar
     */ 
    public function getCostoAlmacenar()
    {
        return $this->CostoAlmacenar;
    }

    /**
     * Set the value of CostoAlmacenar
     *
     * @return  self
     */ 
    public function setCostoAlmacenar($CostoAlmacenar)
    {
        $this->CostoAlmacenar = $CostoAlmacenar;

        return $this;
    }

    /**
     * Get the value of CostoTiempoNormal
     */ 
    public function getCostoTiempoNormal()
    {
        return $this->CostoTiempoNormal;
    }

    /**
     * Set the value of CostoTiempoNormal
     *
     * @return  self
     */ 
    public function setCostoTiempoNormal($CostoTiempoNormal)
    {
        $this->CostoTiempoNormal = $CostoTiempoNormal;

        return $this;
    }

    /**
     * Get the value of DADPlan
     */ 
    public function getDADPlan()
    {
        return $this->DADPlan;
    }

    /**
     * Set the value of DADPlan
     *
     * @return  self
     */ 
    public function setDADPlan($DADPlan)
    {
        $this->DADPlan = $DADPlan;

        return $this;
    }
}

<?php
class Metodo
{
    private $orden;
    private $letra1;
    private $letra2;
    private $letra3;
    private $letra4;
    private $metodo;

    public function __construct($orden)
    {
        $this->orden = $orden;
    }

    /**
     * Get the value of letra1
     */
    public function getLetra1()
    {
        return $this->letra1;
    }

    /**
     * Set the value of letra1
     *
     * @return  self
     */
    public function setLetra1($letra1)
    {
        $this->letra1 = $letra1;

        return $this;
    }

    /**
     * Get the value of letra2
     */
    public function getLetra2()
    {
        return $this->letra2;
    }

    /**
     * Set the value of letra2
     *
     * @return  self
     */
    public function setLetra2($letra2)
    {
        $this->letra2 = $letra2;

        return $this;
    }

    /**
     * Get the value of letra3
     */
    public function getLetra3()
    {
        return $this->letra3;
    }

    /**
     * Set the value of letra3
     *
     * @return  self
     */
    public function setLetra3($letra3)
    {
        $this->letra3 = $letra3;

        return $this;
    }

    /**
     * Get the value of letra4
     */
    public function getLetra4()
    {
        return $this->letra4;
    }

    /**
     * Set the value of letra4
     *
     * @return  self
     */
    public function setLetra4($letra4)
    {
        $this->letra4 = $letra4;

        return $this;
    }

    /**
     * Get the value of metodo
     */
    public function getMetodo()
    {
        return $this->metodo;
    }

    /**
     * Set the value of metodo
     *
     * @return  self
     */
    public function setMetodo($metodo)
    {
        $this->metodo = $metodo;

        return $this;
    }

    public function calcularOrden()
    {
        switch ($this->orden) {
            case "PEPS - (Primero en entrar, primero en servir (First Come, First Served).":
                $this->letra1 = "A";
                $this->letra2 = "B";
                $this->letra3 = "C";
                $this->letra4 = "D";
                $this->metodo = 1;
                break;
            case "TPC - Tiempo de procesamiento más corto (Shortest Processing Time).":
                $this->letra1 = "A";
                $this->letra2 = "C";
                $this->letra3 = "D";
                $this->letra4 = "B";
                $this->metodo = 2;
                break;
            case "TPL -Tiempo de procesamiento más largo (Longest Processing Time).":
                $this->letra1 = "B";
                $this->letra2 = "D";
                $this->letra3 = "C";
                $this->letra4 = "A";
                $this->metodo = 3;
                break;
            case "FEP - Fecha de entrega más próxima (Earliest Due Date).":
                $this->letra1 = "D";
                $this->letra2 = "C";
                $this->letra3 = "B";
                $this->letra4 = "A";
                $this->metodo = 4;
                break;
        }
    }
}

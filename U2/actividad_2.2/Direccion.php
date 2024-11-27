<?php
class Direccion {
    private string $calle;
    private string $ciudad;
    private int $codigoPostal;

    public function __construct(string $calle, string $ciudad, int $codigoPostal)
    {
        $this->calle = $calle;
        $this->ciudad = $ciudad;
        $this->codigoPostal = $codigoPostal;
    }

    /**
     * Get the value of calle
     */ 
    public function getCalle()
    {
        return $this->calle;
    }

    /**
     * Set the value of calle
     *
     * @return  self
     */ 
    public function setCalle($calle)
    {
        $this->calle = $calle;

        return $this;
    }

    /**
     * Get the value of ciudad
     */ 
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set the value of ciudad
     *
     * @return  self
     */ 
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get the value of codigoPostal
     */ 
    public function getCodigoPostal()
    {
        return $this->codigoPostal;
    }

    /**
     * Set the value of codigoPostal
     *
     * @return  self
     */ 
    public function setCodigoPostal($codigoPostal)
    {
        $this->codigoPostal = $codigoPostal;

        return $this;
    }
}
?>
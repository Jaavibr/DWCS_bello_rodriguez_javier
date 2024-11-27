<?php
class partida {
    private int $id;
    private int $numeros;
    private int $intentos;
    private int $tiempo;

    public function __construct(int $id, int $numeros, int $intentos, int $tiempo) {
        $this->id = $id;
        $this->numeros = $numeros;
        $this->intentos = $intentos;
        $this->tiempo = $tiempo;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of numeros
     */ 
    public function getNumeros()
    {
        return $this->numeros;
    }

    /**
     * Set the value of numeros
     *
     * @return  self
     */ 
    public function setNumeros($numeros)
    {
        $this->numeros = $numeros;

        return $this;
    }

    /**
     * Get the value of intentos
     */ 
    public function getIntentos()
    {
        return $this->intentos;
    }

    /**
     * Set the value of intentos
     *
     * @return  self
     */ 
    public function setIntentos($intentos)
    {
        $this->intentos = $intentos;

        return $this;
    }

    /**
     * Get the value of tiempo
     */ 
    public function getTiempo()
    {
        return $this->tiempo;
    }

    /**
     * Set the value of tiempo
     *
     * @return  self
     */ 
    public function setTiempo($tiempo)
    {
        $this->tiempo = $tiempo;

        return $this;
    }
}
?>
<?php
abstract class PersonaAbstracta {
    private string $nombre;
    private int $edad;

    public function __construct(string $nombre, string $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    abstract public function mostrarInformacion();
    abstract public function esMayorDeEdad();

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of edad
     */ 
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set the value of edad
     *
     * @return  self
     */ 
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }
}
?>
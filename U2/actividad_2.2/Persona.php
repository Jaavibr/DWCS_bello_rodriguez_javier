<?php
include("Direccion.php");
class Persona {
    private string $nombre;
    private int $edad;
    private Direccion $direccion;

    public function __construct(string $nombre, int $edad, Direccion $direccion)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->direccion = $direccion;
    }

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
        if($edad > 0) {
            $this->edad = $edad;
            return $this;
        } else {
            echo "La edad debe de ser positiva";
        }
    }

    public function esMayorDeEdad() {
        return $this->getEdad() >= 18;
    }

    public function mostrarDireccion() {
        echo "Calle: ".$this->direccion->getCalle()." Ciudad: ".$this->direccion->getCiudad()." CP: ".$this->direccion->getCodigoPostal();
    }

    public function mostrarInfo() {
        echo " Nombre: ".$this->getNombre(). " edad: ".$this->getEdad().$this->mostrarDireccion();
    }
}
?>

<?php
include("Persona.php");
include("personaAbstracta.php");
include("Identificable.php");
class Profesor extends PersonaAbstracta implements Identificable{
    private string $especialidad;
    private string $numeroEmpleado;
    
    public function __construct(string $nombre, int $edad, Direccion $direccion, string $especialidad, string $numeroEmpleado) {
        parent::__construct($nombre, $edad, $direccion);
        $this->especialidad = $especialidad;
        $this->numeroEmpleado = $numeroEmpleado;
    }

    /**
     * Get the value of especialidad
     */ 
    public function getEspecialidad()
    {
        return $this->especialidad;
    }

    /**
     * Set the value of especialidad
     *
     * @return  self
     */ 
    public function setEspecialidad($especialidad)
    {
        $this->especialidad = $especialidad;

        return $this;
    }

    public function mostrarInformacion() {
        echo "Nombre: ".$this->getNombre(). " edad: ".$this->getEdad(). " Especialidad: " .$this->getEspecialidad();
    }

    public function esMayorDeEdad() {
        return $this->getEdad() >= 18;
    }

    public function getIdentificador() {
        return $this->numeroEmpleado;
    }
}
?>

    

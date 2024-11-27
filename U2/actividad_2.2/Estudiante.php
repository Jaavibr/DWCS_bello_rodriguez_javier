<?php
include("personaAbstracta.php");
include("Identificable.php");
class Estudiante extends PersonaAbstracta implements Identificable {
    private string $grado;
    private $calificaciones = [];
    private $numeroEstudiante;

    public function __construct(string $nombre, int $edad, Direccion $direccion, string $grado, string $numeroEstudiante)
    {
        parent::__construct($nombre,$edad, $direccion);
        $this->grado = $grado;
        $this->numeroEstudiante = $numeroEstudiante;
    }

    /**
     * Get the value of grado
     */ 
    public function getGrado()
    {
        return $this->grado;
    }

    /**
     * Set the value of grado
     *
     * @return  self
     */ 
    public function setGrado($grado)
    {
        $this->grado = $grado;

        return $this;
    }

    public function mostrarInformacion() {
        echo "Nombre: ".$this->getNombre(). " edad: ".$this->getEdad(). " Grado: " .$this->getGrado();
    }

    public static function calcularPromedio($calificaciones) {
        return array_sum($calificaciones) / count($calificaciones);
    }

    /**
     * Get the value of calificaciones
     */ 
    public function getCalificaciones()
    {
        return $this->calificaciones;
    }

    /**
     * Set the value of calificaciones
     *
     * @return  self
     */ 
    public function setCalificaciones($calificaciones)
    {
        $this->calificaciones = $calificaciones;

        return $this;
    }

    public function agregarCalificacion($calificacion) {
        $this->calificaciones[] = $calificacion;
    }

    public function obtenerPromedio() {
        return self::calcularPromedio($this->calificaciones);
    }

    public function esMayorDeEdad()
    {
        return $this->getEdad() >= 18;
    }

    /**
     * Get the value of numeroEstudiante
     */ 
    public function getIdentificador()
    {
        return $this->numeroEstudiante;
    }
}
?>
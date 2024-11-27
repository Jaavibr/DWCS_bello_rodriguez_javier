<?php
include("Estudiante.php");
class Curso {
    private Estudiante $estudiantes = [];

    public function agregarEstudiante(Estudiante $estudiante) {
        $this->estudiantes[] = $estudiante;
    }

    public function mostrarEstudiantes() {
        foreach ($this->estudiantes as $estudiante) {
            echo $estudiante->mostrarInformacion();
        }
    }
}
?>

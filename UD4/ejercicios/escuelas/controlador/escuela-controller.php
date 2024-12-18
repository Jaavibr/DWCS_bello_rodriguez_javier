<?php
include("globals.php");
include(MODEL_PATH."escuela-model.php");
include(VIEW_PATH."View.php");
class EscuelaController{
    
    public function listar_escuelas(){
        $nombre_filter = $_REQUEST['nombre'] ?? '';
        $cod_municipio_filter = $_REQUEST['municipio'] ?? null;

        $escuelas = EscuelaModel::get_escuelas($cod_municipio_filter,$nombre_filter);
        $view = new View();
        //Cargamos los datos para pasarle a la vista
        $data = [];
        $data['escuelas'] = $escuelas;
        //TODO: Recuperar municipios.
        $data['municipios'] = [];
        $view->show('listar-escuelas',$data);
    }

    public function agregar_escuela(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $direccion = $_POST['direccion'];
            $hora_apertura = $_POST['apertura'];
            $hora_cierre = $_POST['cierre'];
            $cod_municipio = $_POST['municipio']; // Se obtiene el municipio desde el formulario

            $municipio = MunicipioModel::get_municipio($cod_municipio); // Obtenemos el municipio

            $escuela = new Escuela();
            $escuela->setNombre($nombre)
                    ->setDireccion($direccion)
                    ->setHora_apertura($hora_apertura)
                    ->setHora_cierre($hora_cierre)
                    ->setMunicipio($municipio);

            EscuelaModel::alta_escuela($escuela); // Alta en el modelo

            header("Location: index.php?action=listar_escuelas"); // Redirigir a la lista de escuelas
        }

        $view = new View();
        $data = [];
        $data['municipios'] = MunicipioModel::get_municipios(); // Obtener municipios para el select
        $view->show('agregar-escuelas', $data);
    }
}
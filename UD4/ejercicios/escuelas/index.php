<?php
include("controlador/escuela-controller.php"); // Incluir el controlador de Escuela

// Establecer la acción por defecto (listar_escuelas)
$action = isset($_GET['action']) ? $_GET['action'] : 'listar_escuelas';

// Verificar si el controlador está siendo pasado a través de la petición
if(isset($_REQUEST['controller'])){
    $controller = $_REQUEST['controller']; // Asignar el controlador desde la solicitud
    try {
        $objeto = new $controller(); // Crear una instancia del controlador
    } catch(\Throwable $th) {
        error_log("Cargando controlador inexistente: ".$controller); // Si el controlador no existe, loguear el error
        $controller = 'EscuelaController'; // Si el controlador no existe, usar el controlador por defecto
        $objeto = new $controller(); // Crear el objeto del controlador por defecto
    }
} else {
    $controller = 'EscuelaController'; // Si no se pasa un controlador, usar el por defecto
    $objeto = new $controller(); // Crear el objeto del controlador por defecto
}

// Verificar si la acción es válida y se pasa a través de la solicitud
if(isset($_REQUEST['action'])){
    $action = $_REQUEST['action']; // Obtener la acción desde la solicitud
    try {
        $objeto->$action(); // Ejecutar la acción del controlador
    } catch (\Throwable $th) {
        error_log("Cargando acción inexistente: ".$action); // Si la acción no existe, loguear el error
        // Si la acción no existe, volver a la acción por defecto
        $action = 'listar_escuelas';
        $objeto->$action(); // Ejecutar la acción por defecto
    }
} else {
    $objeto->$action(); // Si no hay acción en la solicitud, ejecutar la acción por defecto
}
?>

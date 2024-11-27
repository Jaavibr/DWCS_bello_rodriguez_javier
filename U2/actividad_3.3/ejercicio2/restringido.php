<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sección restringida</title>
</head>
<?php 
    session_start();

    if(isset($_SESSION['nic'])) {
        $nic = $_SESSION['nic'];
    } else {
        header('Location: login.php');
    }

    if(isset($_GET['logout'])) {
        session_unset();
        header('Location: login.php');
    }
?>
<body>
    <h1>Sección restringida</h1>
    Estás logueado con el usuario <?php echo $nic ?>. Pulsa aquí para salir: <a href="?logout=y">Logout</a>
    <p>
        Esta sección esta restringida solo para los usuarios que están registrados.
    </p>
</body>
</html>
<?php
    $nic = $_POST['nic'] ?: null;
    $pass = $_POST['pass'] ?: null;
    
    if (isset($nic) && isset($pass)) {
        include("funciones.php");
        if (comprobar_usuario($nic, $pass)) {
            session_start();
            $_SESSION['nic'] = $nic;
            header('Location: restringido.php');
        } else {
            echo '<h2 style="color:white;background-color:red;">No existe ese usuario</h2>';
        }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <fieldset>
        <form action="" method="post">
            <label for="nic">Nombre de usuario (nic)</label><br>
            <input type="text" name="nic"><br>
            <label for="pass">Contraseña</label><br>
            <input type="password" name="pass"><br>
            <button type="submit">Acceder</button>
        </form>
    </fieldset>
    <a href="registro.php">Registrar usuario</a>
    
</body>
</html>
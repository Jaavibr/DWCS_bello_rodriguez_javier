<?php
session_start();

if(!isset($_SESSION['numero'])) {
    $_SESSION['numero'] = rand(1,1000);
    $_SESSION['intentos'] = 0;
    $_SESSION['tiempo'] = time();
} else {
    if (isset($_POST['respuesta'])) { 
        $_SESSION['intentos']++;
        if($_SESSION['intentos'] >= 10) {
            $mensaje = "Lo siento, has superado los intentos permitidos. "."El número secreto era ".intval($_SESSION['numero']);
            session_unset();
        } else {
            if($_POST['respuesta'] == $_SESSION['numero']) {
                $tiempo = time() - $_SESSION['tiempo'];
                $mensaje = "Has acertado en ".intval($_SESSION['intentos'])." intentos! Y te ha llevado $tiempo segundos. El número era ".intval($_SESSION['numero']);
                session_unset();
            } else {
                $mensaje = intval($_POST['respuesta']) < intval($_SESSION['numero']) ? "El numero a adivinar es mayor":  "El numero a adivinar es menor";
            }
        }
    }
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivinar el numero secreto</title>
</head>
<body>
    <h1>Adivina un número entre el 1 y el 1000</h1>
    <?php if ($mensaje): ?>
        <p><?= htmlspecialchars($mensaje) ?></p>
    <?php endif; ?>
    <form method="POST">
        <input type="number" name="respuesta" min="1" max="1000" required>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
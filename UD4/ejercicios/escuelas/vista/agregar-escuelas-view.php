<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?=STYLE_PATH.'style.css'?>" rel="stylesheet">
    <title>Escuelas</title>
</head>

<body>
    <!-- AQUI EL HEADER -->
    <fieldset>
        <form action="" method="POST">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre">
            <label for="direccion">Dirección</label>
            <input type="text" id="direccion" name="direccion">
            <label for="hora-apertura">Hora de Apertura</label>
            <input type="text" id="hora-apertura" name="apertura">
            <label for="hora-cierre">Hora de Cierre</label>
            <input type="text" id="hora-cierre" name="cierre">
            <button type="submit">Añadir</button>
        </form>
    </fieldset>
    <!-- AQUI EL FOOTER -->
</body>

</html>
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
    <h1>Agregar escuelas</h1>
    <fieldset>
    <form action="index.php?action=agregar_escuela" method="POST">
    <label for="nombre">Nombre de la Escuela:</label>
    <input type="text" id="nombre" name="nombre" required><br>

    <label for="direccion">Dirección:</label>
    <input type="text" id="direccion" name="direccion" required><br>

    <label for="hora_apertura">Hora de Apertura:</label>
    <input type="time" id="hora_apertura" name="hora_apertura" required><br>

    <label for="hora_cierre">Hora de Cierre:</label>
    <input type="time" id="hora_cierre" name="hora_cierre" required><br>

    <label for="comedor">Comedor:</label>
    <input type="checkbox" id="comedor" name="comedor"><br>

    <label for="municipio">Municipio:</label>
    <select name="municipio" id="municipio" required>
        <?php
        // Cargar los municipios disponibles
        $municipios = MunicipioModel::get_municipios();  // Asegúrate de tener este método disponible
        foreach ($municipios as $municipio) {
            echo "<option value=\"{$municipio->getCodigo()}\">{$municipio->getNombre()}</option>";
        }
        ?>
    </select><br>

    <input type="submit" value="Agregar Escuela">
</form>
    </fieldset>
    <!-- AQUI EL FOOTER -->
</body>

</html>
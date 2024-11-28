<?php
include('funciones.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_producto'])) {
    anadir_carrito(intval($_POST['id_producto']));
    header('Location: productos.php');
}

$productos = obtener_productos();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
    <h1>Productos disponibles</h1>
    <ul>
        <?php foreach ($productos as $producto): ?>
            <li>
                <?php echo htmlspecialchars($producto['nombre']) ?> - 
                <?php echo htmlspecialchars($producto['precio']) ?>€
                <form method="post" style="display: inline;">
                    <input type="hidden" name="id_producto" value="<?php echo $producto['id_producto'] ?>">
                    <button type="submit">Añadir al carrito</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
    <a href="carrito.php">Ver carrito</a>
</body>
</html>

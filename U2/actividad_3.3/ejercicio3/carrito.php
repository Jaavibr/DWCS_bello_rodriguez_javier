<?php
include('funciones.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['eliminar_id'])) {
    eliminar_carrito(intval($_POST['eliminar_id']));
    header('Location: carrito.php');
}

$productos = obtener_carrito();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
</head>
<body>
    <h1>Tu carrito</h1>
    <?php if (count($productos) > 0): ?>
        <ul>
            <?php foreach ($productos as $producto): ?>
                <li>
                    <?php echo htmlspecialchars($producto['nombre']) ?> - 
                    <?php echo htmlspecialchars($producto['precio']) ?>€
                    <form method="post" style="display: inline;">
                        <input type="hidden" name="eliminar_id" value="<?php echo $producto['id_producto'] ?>">
                        <button type="submit">Eliminar</button>
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>El carrito está vacío.</p>
    <?php endif; ?>
    <a href="productos.php">Volver a productos</a>
</body>
</html>

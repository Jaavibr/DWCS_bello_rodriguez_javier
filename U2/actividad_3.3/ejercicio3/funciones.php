<?php
// Definicion de constantes para la base de datos
define('DB_DSN', 'mysql:host=mariadb;dbname=e_335');
define('DB_USER', 'root');
define('DB_PASS', 'bitnami');

/**
 * Devuelve una conexión con la base de datos.
 *
 * @return PDO
 */
function conexion_bd() {
    try {
        $db = new PDO(DB_DSN, DB_USER, DB_PASS);
    } catch (PDOException $e) {
        die('Error de conexión: ' . $e->getMessage());
    }
    return $db;
}

/**
 * Obtiene los productos de la base de datos
 *
 * @return array
 */
function obtener_productos() {
    $db = conexion_bd();
    $sql = "SELECT * FROM PRODUCTO";
    $query = $db->query($sql);
    $productos = $query->fetchAll(PDO::FETCH_ASSOC);
    $db = null;
    return $productos;
}

/**
 * Crea un carrito en la base de datos asociado a la cookie.
 *
 * @return int ID del carrito
 */
function crear_carrito() {
    if (!isset($_COOKIE['id_carrito'])) {
        $db = conexion_bd();
        $sql = "INSERT INTO CARRITO () VALUES ()";
        $query = $db->prepare($sql);
        $query->execute();
        $id_carrito = $db->lastInsertId();
        setcookie('id_carrito', $id_carrito, time() + 172800);
        $db = null;
    } else {
        $id_carrito = intval($_COOKIE['id_carrito']);
    }
    return $id_carrito;
}

/**
 * Añade un producto al carrito.
 *
 * @param int $id_producto
 */
function anadir_carrito(int $id_producto) {
    $id_carrito = crear_carrito();
    $db = conexion_bd();
    $sql = "INSERT INTO CARRITO_PRODUCTO (id_carrito, id_producto) VALUES (:id_carrito, :id_producto)";
    $query = $db->prepare($sql);
    $query->bindParam(':id_carrito', $id_carrito, PDO::PARAM_INT);
    $query->bindParam(':id_producto', $id_producto, PDO::PARAM_INT);
    $query->execute();
    $db = null;
}

/**
 * Elimina un producto del carrito.
 *
 * @param int $id_producto
 */
function eliminar_carrito(int $id_producto) {
    $id_carrito = crear_carrito();
    $db = conexion_bd();
    $sql = "DELETE FROM CARRITO_PRODUCTO WHERE id_carrito = :id_carrito AND id_producto = :id_producto";
    $query = $db->prepare($sql);
    $query->bindParam(':id_carrito', $id_carrito, PDO::PARAM_INT);
    $query->bindParam(':id_producto', $id_producto, PDO::PARAM_INT);
    $query->execute();
    $db = null;
}

/**
 * Obtiene los productos del carrito.
 *
 * @return array
 */
function obtener_carrito() {
    $id_carrito = crear_carrito();
    $db = conexion_bd();
    $sql = "
        SELECT P.id_producto, P.nombre, P.descripcion, P.precio
        FROM CARRITO_PRODUCTO CP
        JOIN PRODUCTO P ON CP.id_producto = P.id_producto
        WHERE CP.id_carrito = :id_carrito
    ";
    $query = $db->prepare($sql);
    $query->bindParam(':id_carrito', $id_carrito, PDO::PARAM_INT);
    $query->execute();
    $productos = $query->fetchAll(PDO::FETCH_ASSOC);
    $db = null;
    return $productos;
}

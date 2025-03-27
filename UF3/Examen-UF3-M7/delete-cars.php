<?php
session_start();
require_once 'config.php';

// comprobar si se ha enviado id
if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo 'No se ha especificado un id';
    exit;
}

// preparar la consulta
$stmt = $mysqli->prepare("DELETE FROM vehiculos WHERE id = ?");


// ligar los parámetros y ejecutar la consulta
$stmt->bind_param("i", $_GET['id']);

// ejecutar la consulta
if ($stmt->execute()) {
    //echo '<p>Testimonio eliminado correctamente.</p>';
    header("Location: admin.php");
} else {
    // mostrar un mensaje de error
    echo '<p>Error al eliminar el auto : ' . $stmt->error . '</p>';
    echo '<a href="admin.php">Volver al panel de administrador</a>';
}
$stmt->close();
$mysqli->close();

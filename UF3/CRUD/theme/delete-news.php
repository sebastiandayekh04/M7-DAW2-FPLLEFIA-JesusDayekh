<?php
session_start();
require_once 'config.php';

// comprobar si se ha enviado id
if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo 'No se ha especificado un id';
    exit;
}

// preparar la consulta
$stmt = $mysqli->prepare("DELETE FROM NEWS WHERE id = ?");


// ligar los parámetros y ejecutar la consulta
$stmt->bind_param("i", $_GET['id']);

// ejecutar la consulta
if ($stmt->execute()) {
    //echo '<p>Testimonio eliminado correctamente.</p>';
    header("Location: Admin.php");
} else {
    // mostrar un mensaje de error
    echo '<p>Error al eliminar la noticia: ' . $stmt->error . '</p>';
    echo '<a href="Admin.php">Volver al panel de administrador</a>';
}
$stmt->close();
$mysqli->close();

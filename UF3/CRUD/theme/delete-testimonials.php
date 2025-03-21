<?php
session_start();

// comprobar si se ha enviado id
if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo 'No se ha especificado un id';
    exit;
}

// preparar la consulta
$stmt = $mysqli->prepare("DELETE FROM TESTIMONIALS WHERE  ");

// ligar los parámetros y ejecutar la consulta
$stmt->bind_param("i", $_GET['id']);

// ejecutar la consulta
if ($stmt->execute()) {
    echo '<p>Testimonio eliminado correctamente.</p>';
    echo '<a href="../admin.php">Volver al panel de administrador</a>';
} else {
    // mostrar un mensaje de error
    echo '<p>Error al eliminar el testimonio: ' . $stmt->error . '</p>';
    echo '<a href="../admin.php">Volver al panel de administrador</a>';
}

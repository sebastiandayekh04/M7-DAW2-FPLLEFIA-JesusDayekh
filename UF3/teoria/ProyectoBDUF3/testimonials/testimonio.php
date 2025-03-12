<?php
session_start();
require_once 'config.php';

// Conectar a la base de datos y recuperar testimonios
$result = $mysqli->query("SELECT * FROM Testimonials");

while ($row = $result->fetch_assoc()) {
    echo "<div>";
    echo "<p>Nombre: " . $row['name'] . " " . $row['surname'] . "</p>";
    echo "<p>Descripción: " . $row['description'] . "</p>";
    echo "<p>Calificación: " . $row['rating'] . "</p>";
    echo "<a href='delete.php?id=" . $row['id'] . "'><button>Eliminar</button></a>";
    echo "</div>";
}

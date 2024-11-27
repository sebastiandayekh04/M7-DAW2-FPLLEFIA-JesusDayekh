<?php
function generarResumen($texto, $limite) {
    return strlen($texto) > $limite ? substr($texto, 0, $limite) . "..." : $texto;
}

// Ejemplo de uso
echo generarResumen("Este es un texto de prueba para demostrar la funcionalidad.", 20);
?>

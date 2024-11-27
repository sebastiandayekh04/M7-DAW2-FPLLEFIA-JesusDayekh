<?php
function dividirPalabras($texto) {
    return explode(" ", $texto);
}

// Ejemplo de uso
$palabras = dividirPalabras("Este es un ejemplo de texto.");
print_r($palabras);
?>

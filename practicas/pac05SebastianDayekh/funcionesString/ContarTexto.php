<?php
function contarPalabras($texto) {
    return str_word_count($texto);
}

// Ejemplo de uso
echo "Cantidad de palabras: " . contarPalabras("Hola, este es un texto de prueba.");
?>

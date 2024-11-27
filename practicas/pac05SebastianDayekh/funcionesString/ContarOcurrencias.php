<?php
function contarOcurrencias($texto, $palabra) {
    return substr_count($texto, $palabra);
}

// Ejemplo de uso
echo "La palabra aparece " . contarOcurrencias("Hola mundo, mundo maravilloso", "mundo") . " veces.";
?>

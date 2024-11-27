<?php
function reemplazarPalabras($texto, $buscar, $reemplazar) {
    return str_replace($buscar, $reemplazar, $texto);
}

// Ejemplo de uso
echo reemplazarPalabras("Hola mundo", "mundo", "PHP");
?>

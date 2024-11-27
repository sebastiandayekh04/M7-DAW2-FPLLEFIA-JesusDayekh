<?php
function eliminarEspacios($texto) {
    return trim($texto);
}

// Ejemplo de uso
echo "|" . eliminarEspacios("   Hola mundo   ") . "|";
?>

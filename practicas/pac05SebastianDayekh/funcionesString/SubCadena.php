<?php
function obtenerSubcadena($texto, $inicio, $longitud) {
    return substr($texto, $inicio, $longitud);
}

// Ejemplo de uso
echo obtenerSubcadena("Este es un ejemplo", 5, 7);
?>

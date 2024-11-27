<?php
function buscarEnArray($array, $valor) {
    return in_array($valor, $array);
}

// Ejemplo de uso
echo buscarEnArray([1, 2, 3, 4], 3) ? "Encontrado" : "No encontrado";
?>

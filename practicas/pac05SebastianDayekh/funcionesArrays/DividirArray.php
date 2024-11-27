<?php
function dividirArray($array, $tamanio) {
    return array_chunk($array, $tamanio);
}

// Ejemplo de uso
print_r(dividirArray([1, 2, 3, 4, 5, 6], 2));
?>

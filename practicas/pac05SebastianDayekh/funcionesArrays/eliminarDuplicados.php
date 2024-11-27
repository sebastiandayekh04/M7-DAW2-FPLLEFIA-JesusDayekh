<?php
function eliminarDuplicados($array) {
    return array_unique($array);
}

// Ejemplo de uso
print_r(eliminarDuplicados([1, 2, 2, 3, 4, 4, 5]));
?>

<?php
function filtrarMayores($numeros, $valor) {
    return array_filter($numeros, fn($numero) => $numero > $valor);
}

// Ejemplo de uso
print_r(filtrarMayores([1, 10, 5, 20, 30], 10));
?>

<?php
function calcularDescuento($precioOriginal, $descuento) {
    $precioFinal = $precioOriginal - ($precioOriginal * $descuento / 100);
    return $precioFinal;
}

// Ejemplo de uso
echo "Precio con descuento: " . calcularDescuento(100, 20) . "€";
?>

<?php
function calcularTotal($precio, $cantidad, $impuesto) {
    $subtotal = $precio * $cantidad;
    $total = $subtotal + ($subtotal * $impuesto / 100);
    return $total;
}

// Ejemplo de uso
echo "Precio total: " . calcularTotal(100, 2, 21) . "€";
?>

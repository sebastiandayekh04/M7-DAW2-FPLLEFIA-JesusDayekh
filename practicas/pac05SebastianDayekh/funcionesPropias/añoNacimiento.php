<?php
function calcularEdad($anioNacimiento) {
    $anioActual = date("Y");
    return $anioActual - $anioNacimiento;
}

// Ejemplo de uso
echo "Edad: " . calcularEdad(1990) . " años";
?>

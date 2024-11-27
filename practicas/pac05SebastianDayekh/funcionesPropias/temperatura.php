<?php
function convertirTemperatura($temperatura, $escala) {
    if ($escala === "C") {
        return ($temperatura - 32) * 5 / 9; // Fahrenheit a Celsius
    } elseif ($escala === "F") {
        return ($temperatura * 9 / 5) + 32; // Celsius a Fahrenheit
    } else {
        return "Escala no válida.";
    }
}

// Ejemplo de uso
echo "32°F a Celsius: " . convertirTemperatura(32, "C") . "°C<br>";
echo "0°C a Fahrenheit: " . convertirTemperatura(0, "F") . "°F";
?>

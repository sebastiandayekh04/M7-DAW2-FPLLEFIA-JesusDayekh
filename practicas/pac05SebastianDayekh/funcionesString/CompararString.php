<?php
function compararStrings($cadena1, $cadena2) {
    return strcmp($cadena1, $cadena2) === 0;
}

// Ejemplo de uso
echo compararStrings("texto1", "texto1") ? "Son iguales" : "Son diferentes";
?>

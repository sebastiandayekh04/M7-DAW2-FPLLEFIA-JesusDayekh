<?php
function ordenarArrayAlfabetico($nombres) {
    sort($nombres);
    return $nombres;
}

// Ejemplo de uso
$nombres = ["Carlos", "Ana", "Pedro"];
print_r(ordenarArrayAlfabetico($nombres));
?>

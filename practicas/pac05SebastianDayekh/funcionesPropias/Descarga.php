<?php
function generarEnlaceDescarga($archivo) {
    return "<a href='$archivo' download>Descargar</a>";
}

// Ejemplo de uso
echo generarEnlaceDescarga("archivo.pdf");
?>

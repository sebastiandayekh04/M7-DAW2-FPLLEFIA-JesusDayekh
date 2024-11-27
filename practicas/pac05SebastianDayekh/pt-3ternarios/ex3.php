<?php
$nombre = ""; // Probar con un valor como "Sebastián" o dejar vacío

echo '<form action="#" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" value="' . 
    ($nombre ?: "Ingrese su nombre") . '">
    <button type="submit">Enviar</button>
</form>';
?>

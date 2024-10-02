<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas de multiplicar</title>
    <style>
.valores {
    float: left;
    background-color: black;
    padding: 5px;
    color: white;
    border: 2px;
    margin: 5px; 
    font-family: "Comic Sans MS", "Comic Sans", cursive;
}

    </style>
</head>
<body>
    <h1>Tablas de multiplicar</h1>
</body>
</html>


<?php
    // quitar el multiplicador y el multiplo pq se genera dentro del mismo for
    for ($multiplicador = 0; $multiplicador <= 10; $multiplicador++) {
        echo "<div class='valores'>"; //abre div
        
        // el div no debe agarrar solo la operacion sino toda la tabla
        for ($multiplo = 0; $multiplo <= 10; $multiplo++) {
            $resultado = $multiplicador * $multiplo;

            echo "$multiplicador x $multiplo = $resultado ";
            echo "<br>";
        }

        echo" </div>"; //cierra div
    }
?>
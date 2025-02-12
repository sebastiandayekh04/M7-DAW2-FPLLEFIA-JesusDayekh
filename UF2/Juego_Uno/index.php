<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./CSS/index.css" rel="stylesheet">
    <title>Escape Room</title>
</head>
<body>
<?php 
include_once ("./class/carta.class.php");


$colores = ["red", "yellow", "green", "blue"];
$numeros_y_funcionales = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "reverse", "skip", "picker"];

// Array final para almacenar todas las cartas
$array_final = [];

$i = 0;
foreach ($colores as $color) {
    foreach ($numeros_y_funcionales as $numero) {
        $array_final[$i] = new CartaUno($numero, $color, $i);
        $i++;
    }
}
$array_final[$i] = new CartaUno("color", "changer", $i);


$j = 0;
foreach ($array_final as $carta) {
    $j++;
    echo $carta->pintar_carta_link();
    if ($j >= 13) {
        echo "<br/>";
        $j = 0;
    }
}
?>
</body>
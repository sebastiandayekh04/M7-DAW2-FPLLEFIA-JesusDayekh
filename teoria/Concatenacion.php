<?php 
//Creamos variables
//frase
// {} o .
$nombre = "Yehor";
$pais = "Ucrania";
$edad = "23";

$frase = "hola me llamo {$nombre} naci en" . $pais . "y tengo" . $edad . "años";
echo $frase;

echo "hola me llamo" . $nombre . "tengo" . $edad . "años";
echo "hola me llamo {$nombre} tengo {$edad} y naci en  {$pais}";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> </h1>
</body>
</html>
<?php

// $host = "mysql-sebastiandayekh04.alwaysdata.net";
// $dbname = "sebastiandayekh04_uf3daw";
// $username = "400660";
// $password = "sd01102004";




$mysqli = new mysqli('mysql-sebastiandayekh04.alwaysdata.net', 'sebastiandayekh04_uf3daw', '400660', 'sd01102004');
var_dump($mysqli);

if ($mysqli->connect_error) {
    die("Error de conexion : " . $mysqli->connect_error);
} else {
    echo 'conexion exitosa';
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
</head>

<body>

</body>

</html>
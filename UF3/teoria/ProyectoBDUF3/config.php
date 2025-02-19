<?php 

$host = 'mysql-dayekhjesus.alwaysdata.net';
$dbname = 'dayekhjesus';
$username = '397997';
$password = 'sd01102004';




$mysqli = new mysqli($host, $dbname, $username, $password  );

if ($mysqli->connect_error) {
    die ("Error de conexion : " . $mysqli->connect_error);
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
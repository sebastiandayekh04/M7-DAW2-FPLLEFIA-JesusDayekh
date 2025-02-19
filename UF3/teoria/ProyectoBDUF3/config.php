<?php 

$host = 'mysql-dayekhjesus.alwaysdata.net';
$dbname = 'dayekhjesus_uf3';
$username = '';
$password = '';




$mysqli = new mysqli($host, $dbname, $username, $password  );

if ($mysqli->connect_error) {
    die ("Error de conexion: " . $mysqli->connect_error);
} else {
    echo 'conexion exitosa';
}

?>
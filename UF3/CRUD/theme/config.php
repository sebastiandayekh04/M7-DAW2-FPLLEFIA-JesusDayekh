<?php
$host = 'mysql-dayekh.alwaysdata.net';
$dbname = 'dayekh_uf3';
$username = 'dayekh';
$password = 'sd01102004';

$mysqli = new mysqli($host, $username, $password, $dbname);

if ($mysqli->connect_error) {
    die("Error de conexión: " . $mysqli->connect_error);
} else {
    echo 'CONEXION EXITOSAAAAAAAA SEBASTIÁN ÁNIMO!!!';
}

$mysqli->set_charset("utf8mb4");

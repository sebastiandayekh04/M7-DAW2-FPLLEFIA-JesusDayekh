<?php 
session_name('Prueba-Sesion');
session_start();

$_SESSION['username'] = "Juan";
$_SESSION['age'] = 23;
echo $_SESSION['username'];
?>

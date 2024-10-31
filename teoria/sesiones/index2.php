<?php 
session_name('Prueba-Sesion');
session_start();


echo $_SESSION['username'];
echo $_SESSION['age'];

unset ($_SESSION['username']);

echo $_SESSION['username'];
echo $_SESSION['age'];

?>

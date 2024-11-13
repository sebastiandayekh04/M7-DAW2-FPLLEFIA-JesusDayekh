<?php 
session_start();
if (isset($_GET['nombre']) && isset($_GET['edad'])) {

    $_SESSION['nombre'] = $_GET['nombre'];
    $_SESSION['edad'] = $_GET['edad'];
    echo "mi nombre es " . $_SESSION['nombre'] . " y tengo ". $_SESSION['edad'];
}

?>
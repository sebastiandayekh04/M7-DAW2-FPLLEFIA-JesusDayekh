<?php 
if(!isset($_SESSION)) {
    session_start();
}

    
include 'funciones.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    eliminarProducto($id);

}
header('location:index.php');
exit;
?>
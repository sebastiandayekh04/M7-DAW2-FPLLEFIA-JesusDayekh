<?php 
if(!isset($_SESSION)) {
    session_start();
}
    if ($_SESSION['role'] != "admin") {
        header('location:home.php');
        exit;
    }
    
include 'functions.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    eliminarLibro($id);

}
header('location:home.php');
exit;
?>
<?php 
session_start();
include 'funciones.php';
 if (!isset($_SESSION['Productos'])) {
  $_SESSION['productos'] = $productos;
 }
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Funciones</title>
</head>
<body>
  
        <table class="table ">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Precio</th>
      <th scope="col">Descripcion</th>
    </tr>
  </thead>
  <?php
    foreach ($_SESSION['productos'] as $key => $producto){
        echo' 
  <tbody>
    <tr>
      <td>' . $producto['nombre'] . '</td>
      <td>' . $producto['precio'] . '</td>
      <td>' . $producto['descripcion'] . '</td>
      <div class="card-footer d-flex justify-content-between">
 
    <a href="eliminar.php?id='.$key.'" class="btn btn-outline-danger btn-sm">
         <i class="fas fa-trash-alt"></i> Eliminar
     </a>
 </div>
    </tr>
  </tbody>
  ';
    }
    ?>
</table>
<a href="formulario.php" class="btn btn-outline-primary btn-sm">
        <i class="fas fa-edit"></i> Agregar
</a>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Mercadona Productos</title>
</head>
<body>
   
   <?php 
   require 'includes/header.php';
    ?>


<main class=" container">

<?php 
include 'includes/funciones.php';
include './data/productos.php';

?>
<main>
    <?php generarTablaProductos($productos)?>
</main>




<!-- 26 - Aquí incluye los datos de contacto del cliente con un toast live -->
<!-- 27 - Botón que activa el modal -->
<button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Mi perfil 🖐
</button>

<!-- 28 - Modal que al clicar aparece la información de contacto -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Información de contacto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- 41 - Aquí va la información de contacto -->
      </div>
    </div>
  </div>
</div>

<!-- 49 - Modal con la lista de productos que están disponibles -->
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
  <!-- 51 - Aquí va la lista de productos -->
</div>


</main>



<?php 
include 'includes/footer.php';
?>
</body>
</html>
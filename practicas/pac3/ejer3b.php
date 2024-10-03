<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Frutas favoritas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php  
$frutas = [
    ["fruta" => " Manzana",  "estado"=> false, "foto" => "https://www.frutality.es/wp-content/uploads/manzana-royal.png", "Selecionar" => " ✔️ Fruta seleccionada "],
    ["fruta" => " Platano",   "estado"=> false, "foto" => "https://frutasdobrasil.org/wp-content/uploads/2021/09/peeled-banana-isolated-white-background-with-clipping-path-477x375.jpg" , "Selecionar" => " ✔️ fruta seleccionada "],
    ["fruta" => " Naranja",   "estado"=> false, "foto" => "https://www.ammarket.com/wp-content/uploads/2021/12/NARANJA_MESA_AMMARKET.COM_2.jpg", "Selecionar" => " ✔️ Fruta seleccionada "],
    ["fruta" => " Fresa",   "estado"=> false, "foto" => "https://medibangpaint.com/wp-content/uploads/2020/02/IMG_0408.jpg", "Selecionar" => " ✔️ Fruta seleccionada "],
    ["fruta" => " Kiwi",   "estado"=> false, "foto" => "https://frutasbollo.es/wp-content/uploads/2021/12/kiwi.png", "Selecionar" => " ✔️ Fruta seleccionada "]
];
if (isset($_GET['fruta']) && isset($_GET['foto']) && isset($_GET['Selecionar'])) {
    $fruta = $_GET['fruta'];
    $foto = $_GET['foto']; 
    $Selecionar = $_GET['Selecionar'];
    $estado = true;
}
?>  
    <div class="container mt-5">
        <h1 class="text-center">Selecciona tu fruta favorita</h1>
        <table class="table table-bordered mt-4">
            <thead class="thead-dark">
                <tr>
                    <th>Fruta</th>
                    <th>Estado</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <?php
             foreach($frutas as $fruta)  
              // Si la fruta actual es la seleccionada, cambia su estado
            if ($fruta['fruta'] == $frutaSeleccionada) {
                $fruta['estado'] = true; // Se selecciona esta fruta
            }

            // Estado de la fruta
            if ($fruta['estado']) {
                $estadoTexto = $fruta['Selecionar'];
            } else {
                $estadoTexto = "✖ No seleccionada";
            }

            // Mostrar fila de la tabla
            echo '
            <tbody>
                <tr class="table-danger">
                    <td>'. $fruta['fruta'].'</td>
                    if($fruta['estado'] == false) {
                    <td>' ✖ No seleccionada '</td> 
                    } else {
                     <td>'. $fruta['Selecionar'].'</td> 
                    }
                     <td><a class="btn btn-primary" href="?fruta='. $fruta['fruta'] . $fruta['estado'] .'&foto='. $fruta['foto'] .'&Selecionar='. $fruta['Selecionar'] .'">Seleccionar</a></td>
                </tr>
            </tbody>
                ' 
                ?>
        </table>

         <?php
         echo ' if() {
        <div class="card mt-4 w-25 shadow-lg">
            <img src="'. $fruta['foto'].'" class="card-img-top img-fluid" alt="'. $fruta['fruta'].'">
            <div class="card-body bg-warning">
                <h5 class="card-title">Manzana</h5>
                <p class="card-text">¡Esta es tu fruta favorita!</p>
            </div>
        </div>
        }
        '
        ?>
    </div> 
      
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
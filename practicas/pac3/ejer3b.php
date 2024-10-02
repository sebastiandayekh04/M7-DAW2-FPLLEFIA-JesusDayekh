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
    ["fruta" => " Manzana", "foto" => "https://www.frutality.es/wp-content/uploads/manzana-royal.png", "Selecionar" => " ✔️ fruta seleccionada "],
    ["fruta" => " Platano", "foto" => "https://frutasdobrasil.org/wp-content/uploads/2021/09/peeled-banana-isolated-white-background-with-clipping-path-477x375.jpg" , "Selecionar" => " ✔️ fruta seleccionada "],
    ["fruta" => " Naranja", "foto" => "https://www.ammarket.com/wp-content/uploads/2021/12/NARANJA_MESA_AMMARKET.COM_2.jpg", "Selecionar" => " ✔️ fruta seleccionada "],
    ["fruta" => " Fresa", "foto" => "https://medibangpaint.com/wp-content/uploads/2020/02/IMG_0408.jpg", "Selecionar" => " ✔️ fruta seleccionada "],
    ["fruta" => " Kiwi", "foto" => "https://frutasbollo.es/wp-content/uploads/2021/12/kiwi.png", "Selecionar" => " ✔️ fruta seleccionada "]
];
if (isset($_GET['fruta']) && isset($_GET['foto']) && isset($_GET['Selecionar'])) {
    $fruta = $_GET['fruta'];
    $foto = $_GET['foto']; 
    $Selecionar = $_GET['Selecionar'];
}
?>
    <?php
    foreach($frutas as $fruta){ echo '
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
            <tbody>
                <tr class="table-danger">
                    <td>'. $fruta['fruta'].'</td>
                    <td>✖ No seleccionada</td> 
                    <td><a class="btn btn-primary" href="ejer3b.php?">Seleccionar</a></td>
                </tr>
                <tr class="table-danger">
                    <td>Plátano</td>
                    <td>✖ No seleccionada</td>
                    <td><a class="btn btn-primary" href="?">Seleccionar</a></td>
                </tr>
                <tr class="table-danger">
                    <td>Naranja</td>
                    <td>✖ No seleccionada</td>
                    <td><a class="btn btn-primary" href="">Seleccionar</a></td>
                </tr>
                <tr class="table-danger">
                    <td>Fresa</td>
                    <td>✖ No seleccionada</td>
                    <td><a class="btn btn-primary" href="">Seleccionar</a></td>
                </tr>
                <tr class="table-danger">
                    <td>Kiwi</td>
                    <td>✖ No seleccionada</td>
                    <td><a class="btn btn-primary" href="">Seleccionar</a></td>
                </tr>
            </tbody>
        </table>
         
        <div class="card mt-4 w-25 shadow-lg">
            <img src="'. $fruta['foto'].'" class="card-img-top img-fluid" alt="'. $fruta['fruta'].'">
            <div class="card-body bg-warning">
                <h5 class="card-title">Manzana</h5>
                <p class="card-text">¡Esta es tu fruta favorita!</p>
            </div>
        </div>

    </div> '
        };  
    ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Frutas favoritas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php  
// Definición del array de frutas
$frutas = [
    ["fruta" => "Manzana", "estado" => false, "foto" => "https://www.frutality.es/wp-content/uploads/manzana-royal.png", "seleccionar" => "✔️ Fruta seleccionada"],
    ["fruta" => "Plátano", "estado" => false, "foto" => "https://frutasdobrasil.org/wp-content/uploads/2021/09/peeled-banana-isolated-white-background-with-clipping-path-477x375.jpg", "seleccionar" => "✔️ Fruta seleccionada"],
    ["fruta" => "Naranja", "estado" => false, "foto" => "https://www.ammarket.com/wp-content/uploads/2021/12/NARANJA_MESA_AMMARKET.COM_2.jpg", "seleccionar" => "✔️ Fruta seleccionada"],
    ["fruta" => "Fresa", "estado" => false, "foto" => "https://medibangpaint.com/wp-content/uploads/2020/02/IMG_0408.jpg", "seleccionar" => "✔️ Fruta seleccionada"],
    ["fruta" => "Kiwi", "estado" => false, "foto" => "https://frutasbollo.es/wp-content/uploads/2021/12/kiwi.png", "seleccionar" => "✔️ Fruta seleccionada"]
];

// Verifica si se ha seleccionado una fruta a través de la URL
if (isset($_GET['fruta'])) {
    $fruta_seleccionada = $_GET['fruta'];
    
    // Actualiza el estado de la fruta seleccionada
    foreach ($frutas as &$fruta) {
        if ($fruta['fruta'] == $fruta_seleccionada) {
            $fruta['estado'] = true; // Marca la fruta seleccionada como 'true'
        } else {
            $fruta['estado'] = false; // Marca las otras frutas como 'false'
        }
    }
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
        <tbody>
            <?php
            // Función para mostrar las frutas en la tabla
            function muestraFrutas($frutas) {
                foreach ($frutas as $fruta) {
                    echo '<tr class="table-danger">';
                    echo '<td>' . $fruta['fruta'] . '</td>';
                    // Muestra el estado de la fruta, seleccionada o no
                    echo '<td>' . ($fruta['estado'] ? $fruta['seleccionar'] : '✖ No seleccionada') . '</td>';
                    // Botón para seleccionar la fruta, pasando su nombre a la URL
                    echo '<td><a class="btn btn-primary" href="?fruta=' . $fruta['fruta'] . '">Seleccionar</a></td>';
                    echo '</tr>';
                }
            }

            // Llama a la función para mostrar las frutas
            muestraFrutas($frutas);
            ?>
        </tbody>
    </table>

    <?php
    // Mostrar la información de la fruta seleccionada
    if (isset($fruta_seleccionada)) {
        foreach ($frutas as $fruta) {
            if ($fruta['estado']) { // Si la fruta está seleccionada
                echo '<div class="card mt-4 w-25 shadow-lg">';
                echo '<img src="' . $fruta['foto'] . '" class="card-img-top img-fluid" alt="' . $fruta['fruta'] . '">';
                echo '<div class="card-body bg-warning">';
                echo '<h5 class="card-title">' . $fruta['fruta'] . '</h5>';
                echo '<p class="card-text">¡Esta es tu fruta favorita!</p>';
                echo '</div></div>';
            }
        }
    }
    ?>
</div> 

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

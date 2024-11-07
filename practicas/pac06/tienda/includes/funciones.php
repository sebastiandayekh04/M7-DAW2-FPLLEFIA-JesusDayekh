<?php 
function muestraInfoContacto($nombre, $numero, $foto) {
    // Puedes retornar los datos en formato HTML para mostrar la información de contacto
    echo '
        <div>
            <img src="' . $foto . '" alt="Foto de ' . $nombre . '" width="100">
            <p>Nombre: ' . $nombre . '</p>
            <p>Teléfono: ' . $numero . '</p>
        </div>
    ';
}

function generarTablaProductos($productos) {
    echo '
    <table class="table">
        <thead>
            <tr>
               
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Disponibilidad</th>

            </tr>
        </thead>
        <tbody>';
    
    foreach ($productos as $producto) {
        echo '
        <tr>

            <td>' . $producto['nombre'] . '</td>
            <td>' . $producto['precio'] . '</td>
            <td>';
            if($producto['disponibilidad'] == true){
                echo '<div class="bg-success ">En stock </div>';
            }else{
                echo '<div class="bg-danger"> Agotado</div>';
            }'</td>
        </tr>';
    }
    
    echo '
        </tbody>
    </table>';
}
?>

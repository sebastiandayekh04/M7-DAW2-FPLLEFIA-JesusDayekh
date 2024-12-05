<?php
if(!isset($_SESSION)) {
    session_start();
}
$productos = [
    [
        "nombre" => "Laptop",
        "precio" => 999.99,
        "descripcion" => "Portátil de alto rendimiento con 16GB de RAM y 512GB SSD."
    ],
    [
        "nombre" => "Auriculares",
        "precio" => 49.99,
        "descripcion" => "Auriculares inalámbricos con cancelación de ruido."
    ],
    [
        "nombre" => "Teléfono móvil",
        "precio" => 699.99,
        "descripcion" => "Smartphone con pantalla AMOLED de 6.5 pulgadas y cámara de 64MP."
    ],
    [
        "nombre" => "Reloj inteligente",
        "precio" => 199.99,
        "descripcion" => "Reloj inteligente con monitor de frecuencia cardíaca y GPS."
    ],
    [
        "nombre" => "Altavoz Bluetooth",
        "precio" => 79.99,
        "descripcion" => "Altavoz portátil resistente al agua con sonido estéreo."
    ]
];


function eliminarProducto($id) {
        array_slice($_SESSION['productos'], $id, 1);
}

function agregarProducto($nombre, $precio, $descripcion){
    array_push(
    $_SESSION['productos'],
     ["nombre" => $nombre, "precio" => $precio,  "descripcion" => $descripcion]
    );
}
?>

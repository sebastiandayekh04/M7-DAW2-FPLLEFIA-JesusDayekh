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
if (!isset($_SESSION['productos'])) {
    $_SESSION['productos'] = $productos;
}

function eliminarProducto($id) {
    if (isset($_SESSION['productos'][$id])) {
        unset($_SESSION['productos'][$id]);
        return true;
    }
    return false;
}

function agregarProducto($nombre, $precio, $descripcion){
    $_SESSION['productos'][] = ["nombre" => $nombre, "autor" => $precio, "foto" => $precio, "descripcion" => $descripcion];
}
?>

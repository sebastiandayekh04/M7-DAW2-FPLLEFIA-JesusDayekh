<?php 

    $nombre = $_POST['nombre'];
    $edad   = $_POST['edad'];
    $email = $_POST['email'];
    echo "su nombre es:" .$nombre. "y su edad es: " .$edad. "su email es:" .$email ;

    $nombre1 = $_REQUEST['nombre'];
    $edad2   = $_REQUEST['edad'];
    $email3 = $_REQUEST['email'];
    echo "su nombre es:" .$nombre1. "y su edad es: " .$edad2. "su email es:" .$email3 ;
?>
// GET: Envía datos a través de la URL, se usa para obtener información. Es visible y tiene limitación de tamaño.
// POST: Envía datos de manera oculta en el cuerpo de la solicitud, se usa para enviar información más grande y segura.
// REQUEST: Puede acceder a los datos tanto de GET como de POST, útil cuando no se sabe qué método se usará.

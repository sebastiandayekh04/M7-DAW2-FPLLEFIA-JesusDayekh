<?php 
if(!isset($_SESSION)) {
     session_start();
}
$libros = [
    [   

        "foto" => "https://m.media-amazon.com/images/I/71hhPWoeNBS._AC_UF894,1000_QL80_.jpg",
        "titulo" => "Drácula",
        "autor" => "Bram Stoker",
        "descripcion" => "Una novela gótica sobre el vampiro Conde Drácula y su enfrentamiento con un grupo de personas que intentan detener sus planes malignos."
    ],
    [
        "foto" => "https://m.media-amazon.com/images/I/71BwqlcZyVL._AC_UF1000,1000_QL80_.jpg",
        "titulo" => "It",
        "autor" => "Stephen King",
        "descripcion" => "La aterradora historia de un grupo de amigos que enfrentan a un ente maligno que cambia de forma y se alimenta de sus miedos."
    ],
    [
        "foto" => "https://m.media-amazon.com/images/I/71KQGsYIuZL._UF1000,1000_QL80_.jpg",
        "titulo" => "Frankenstein",
        "autor" => "Mary Shelley",
        "descripcion" => "Un científico obsesionado crea vida artificial, desatando consecuencias trágicas y aterradoras."
    ],
    [
        "foto" => "https://m.media-amazon.com/images/I/71tcBAml75L._UF1000,1000_QL80_.jpg",
        "titulo" => "El Exorcista",
        "autor" => "William Peter Blatty",
        "descripcion" => "La perturbadora historia de una niña poseída por un demonio y los intentos de dos sacerdotes por salvar su alma."
    ],
    [
        "foto" => "https://m.media-amazon.com/images/I/91WnKAeUd1L._AC_UF894,1000_QL80_.jpg",
        "titulo" => "Cementerio de animales",
        "autor" => "Stephen King",
        "descripcion" => "Una familia descubre un cementerio con oscuros poderes para revivir a los muertos, con horribles consecuencias."
    ],
    [
        "foto" => "https://m.media-amazon.com/images/I/71rf+tAokqL._AC_UF894,1000_QL80_.jpg",
        "titulo" => "La llamada de Cthulhu",
        "autor" => "H. P. Lovecraft",
        "descripcion" => "Un clásico del horror cósmico que narra la existencia de una antigua deidad y sus efectos en los humanos que descubren su culto."
    ]
];
if (!isset($_SESSION['libros'])) {
    $_SESSION['libros'] = $libros;
}
function buscarLibro($id) {
    if (isset($_SESSION['libros'][$id])) {
        return $_SESSION['libros'][$id];
    }
    return null;
}
function editarLibro($id, $titulo, $autor, $imagen, $descripcion) {
    if (isset($_SESSION['libros'][$id])) {
        $_SESSION['libros'][$id] = ["titulo" => $titulo, "autor" => $autor, "foto" => $imagen, "descripcion" => $descripcion];
    }
}


function agregarLibro($titulo, $autor, $imagen, $descripcion){
    $_SESSION['libros'][] = ["titulo" => $titulo, "autor" => $autor, "foto" => $imagen, "descripcion" => $descripcion];
}

function eliminarLibro($id) {
    if (isset($_SESSION['libros'][$id])) {
        unset($_SESSION['libros'][$id]);
        return true;
    }
    return false;
}

?>
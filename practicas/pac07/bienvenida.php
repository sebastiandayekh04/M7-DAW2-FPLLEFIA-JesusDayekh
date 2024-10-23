<?php 

// Array multidimensional amb la informació de cada casa
$casas_info = [
    "Gryffindor" => [
    "background_color" => "#740001",
    "text_color" => "#FFD700",
    "welcome_message" => "Coratge, valor i determinació. Benvingut a Gryffindor!",
    "message_background" => "#D3A625",
    "image" => ""
    ],
    "Hufflepuff" => [
    "background_color" => "#FFDB00",
    "text_color" => "#60605B",
    "welcome_message" => "Lleialtat, paciència i treball dur. Benvingut a Hufflepuff!",
    "message_background" => "#EEE117",
    "image" => ""
    ],
    "Ravenclaw" => [
    "background_color" => "#0E1A40",
    "text_color" => "#946B2D",
    "welcome_message" => "Intel·ligència, creativitat i saviesa. Benvingut a Ravenclaw!",
    "message_background" => "#5D5D5D",
    "image" => ""
    ],
    "Slytherin" => [
    "background_color" => "#1A472A",
    "text_color" => "#AAAAAA",
    "welcome_message" => "Ambició, astúcia i lideratge. Benvingut a Slytherin!",
    "message_background" => "#5D5D5D",
    "image" => ""
    ]
    ];
?>

<!DOCTYPE html>
<html lang="ca">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Benvingut a la teva casa de Hogwarts</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container text-center">
<h1>¡Benvingut a (LA CASA QUE HAGI TOCAT)</h1>
<div class="welcome-message mt-4">
<?php 
    $nombre = $_POST['nombre'];
    $apellido   = $_POST['apellido'];
    
    echo "su nombre es:" .$nombre. "y su edad es: " .$apellido ;
?>
</div>
</div>
</body>
</html>
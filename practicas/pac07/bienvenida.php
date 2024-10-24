<?php 

// Array multidimensional amb la informació de cada casa
$casas_info = [
    "Gryffindor" => [
        "background_color" => "#740001",
        "text_color" => "#FFD700",
        "welcome_message" => "Coratge, valor i determinació. Benvingut a Gryffindor!",
        "message_background" => "#D3A625",
        "image" => "https://static.wikia.nocookie.net/esharrypotter/images/a/a3/Gryffindor_Pottermore.png/revision/latest?cb=20140922195249 "
    ],
    "Hufflepuff" => [
        "background_color" => "#FFDB00",
        "text_color" => "#60605B",
        "welcome_message" => "Lleialtat, paciència i treball dur. Benvingut a Hufflepuff!",
        "message_background" => "#EEE117",
        "image" => "https://static.wikia.nocookie.net/esharrypotter/images/4/42/Hufflepuff_Pottermore.png/revision/latest?cb=20141001131135"
    ],
    "Ravenclaw" => [
    "background_color" => "#0E1A40",
    "text_color" => "#946B2D",
    "welcome_message" => "Intel·ligència, creativitat i saviesa. Benvingut a Ravenclaw!",
    "message_background" => "#5D5D5D",
    "image" => "https://static.wikia.nocookie.net/esharrypotter/images/7/76/Ravenclaw_Pottermore.png/revision/latest?cb=20141001130914"
    ],
    "Slytherin" => [
    "background_color" => "#1A472A",
    "text_color" => "#AAAAAA",
    "welcome_message" => "Ambició, astúcia i lideratge. Benvingut a Slytherin!",
    "message_background" => "#5D5D5D",
    "image" => "https://static.wikia.nocookie.net/esharrypotter/images/6/69/Slytherin_Pottermore.png/revision/latest?cb=20141001130915"
    ]
    ];

    //La función array_keys() devuelve un array con las claves de un array asociativo,
    $casas = array_keys($casas_info);
    $casa_seleccionada = $casas[array_rand($casas)];
    //utiliza para obtener una cantidad aleatoria de elementos de una matriz .
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    
?>

<!DOCTYPE html>
<html lang="ca">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Benvingut a la teva casa de Hogwarts</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
        body{
            background-color: <?php echo $casas_info[$casa_seleccionada]['background_color'];; ?>;
            color: <?php echo $casas_info[$casa_seleccionada]['text_color'];; ?>;
        }
        .welcome-message{
            background-color: <?php echo $casas_info[$casa_seleccionada]['message_background']; ?>;

        }
    </style>
</head>
<body>
<div class="container text-center">
<h1>¡Benvingut a <?php echo $casa_seleccionada ?></h1>
<div class="welcome-message mt-4">
    <p><?php echo $casas_info[$casa_seleccionada]['welcome_message']; ?></p>
    <p><?php echo $nombre ." ".$apellido . ", has estat seleccionat per la casa " . $casa_seleccionada; ?></p>
</div>
<img src="<?php echo $casas_info[$casa_seleccionada]['image']; ?>" alt="Escudo de harry potter" class="mt-4">
</div>
</body>
</html>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style> 
 .Pares {
    float: left;
    background-color: black;
    padding: 5px;
    color: white;
    border: 2px;
    margin: 5px; 
    font-family: "Comic Sans MS", "Comic Sans", cursive;
}

    </style>
    <title>Números pares entre 50 y 500</title>
</head>
<body>
    <h1>Números pares entre 50 y 500</h1>
</body>
</html>

<?php
 $num_par = 50;
while ($num_par !=501) { 

    if ($num_par % 2 == 0){
    
        echo "<div class='Pares'> {$num_par} </div>" ;


        
    } 
    $num_par++;
}

?>
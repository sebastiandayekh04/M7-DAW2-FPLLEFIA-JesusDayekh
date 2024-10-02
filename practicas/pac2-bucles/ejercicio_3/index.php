<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número aleatorio par o impar</title>
    <style>
        .Par{
    float: left;
    background-color: blue;
    padding: 10px;
    color: yellow;
    border: 5px;
    margin: 8px; 
    font-family: "Comic Sans MS", "Comic Sans", cursive;
            }
      

        .impar{
    float: left;
    background-color: black;
    padding: 10px;
    color: orange;
    border: 5px;
    margin: 8px; 
    font-family: "Comic Sans MS", "Comic Sans", cursive;
                }
        
    </style>
</head>
<body>
    <h1>Número aleatorio par o impar</h1>
</body>
</html>

<?php

$aleatorio = rand(0,100);


if ($aleatorio % 2 == 0){
    echo "El numero aleatorio es par";
    echo "<div class='Par'> {$aleatorio} </div>" ;
} else {
    echo "El numero aleatorio no es par";
    echo "<div class='impar'> {$aleatorio} </div>" ;
}


?>
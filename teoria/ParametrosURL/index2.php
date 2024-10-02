<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>pagina para recibir datos</h1>
   <?php 
   // if (isset($_GET['nom']) && isset($_GET['edad'])){
    //    $nom = $_GET['nom'];
    //    $edad = $_GET['edad'];

    //    echo "<p>Nom: $nom</p>";
    //    echo "<p>edad: $edad</p>";
   // }
    //se puede enviar a si mismo, comienza con el interrogante
    //convertir el boton en una a
    //usar la tabla un foreach
   if (isset($_GET['nom']) && isset($_GET['edad'])) {
    $nom = $_GET['nom'];
    $edad = $_GET['edad'];
    echo $nom, $edad;
}
    
   ?>


  </html>
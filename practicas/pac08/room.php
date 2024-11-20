<?php 
session_start();
include "arrayofarrays.php";

$_SESSION['answer'] = $_POST['answer'];
$_SESSION['current-room'] = $_SESSION['current-room']+1 ;

//print_r($preguntasChampions[$_SESSION['dificultad']][0]['pregunta']);
if ($_SESSION['answer'] == $preguntasChampions[$_SESSION['dificultad']][0]['respuesta']){
    header('Location: room2.php');
} else if ($_SESSION['answer']) {
   echo"<div class='alert alert-danger mt-3'>Respuesta incorrecta. ¡Inténtalo de nuevo!</div>";
}; 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <title>Habitación 1</title>
</head>

<body class="d-flex justify-content-center align-items-center vh-100">
<?php include "componentes/header.php";?>
    <div class="card p-4" style="width: 22rem;">
        <h2 class="card-title text-center">Habitación 1</h2>
       
        <p class="card-text"> <?php echo $preguntasChampions[$_SESSION['dificultad']][0]['pregunta'] ?> </p>
        <form method="POST">
            <div class="mb-3">
                <input type="text" name="answer" id="answer" class="form-control" required placeholder="Respuesta">
            </div>
            <button type="submit" class="btn btn-success w-100">Enviar</button>
        </form>
               <!-- Muestra el mensaje de éxito o error -->
    </div>
</body>
</html>

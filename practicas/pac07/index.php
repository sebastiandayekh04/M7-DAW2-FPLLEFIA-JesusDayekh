<!DOCTYPE html>
<html lang="ca">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sombrero Seleccionador de Hogwarts</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
<h1 class="text-center mb-4">Benvinguts a Hogwarts</h1>
<form action="bienvenida.php" method="post">
    <div class="mb-3"> 
    <label> Nombre: </label>
    <input type="text" name="nombre">
    </div>
    <br>
    <div class="mb-3">
    <form action="bienvenida.php" method="post">
    <label> Apellido: </label>
    <div class="mb-3">
    <input type="text" name="apellido">
    </div>
    <div class="btn btn-primary"> <button input type="submit" value="post" >Enviar info</button></div>
    
    </div>
</form>
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Inicio</title>
</head>
<body>
<h1 class="text-center mb-4">Ingreso a Tienda</h1>
    <form action="index.php" method="post">
    <div>
        <label> Nombre: </label>
        <div class="mb-3">
        <input type="text" name="nombre">    
    </div>

    <div>
        <label> Numero de celular: </label>
        <div class="mb-3">
        <input type="text" name="numero">
    </div>

    <div>
        <label> foto de perfil: </label>
        <div class="mb-3">
        <input type="text" name="URL">
    </div>

    <button type="submit" class="btn btn-primary" >Enviar info</button>
    </form>
</body>
</html>
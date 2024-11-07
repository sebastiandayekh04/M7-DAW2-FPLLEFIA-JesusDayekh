//mostrar nombre, telefono y foto mediante a header

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
</head>
<body>
    <?php 
       $Nombre = $_POST['nombre'];
       $Numero = $_POST['Numero'];
       $Foto = $_POST['URL'];
    ?>

    <h1>Bienvenido <?php echo $Nombre ?> </h1>
  
    

    <p>Tu numero de celular es: <?php echo $Numero ?></p>

    <div>
    <img src="<?php echo $Foto ; ?>" alt="Foto Cliente" class="mt-4">
    </div>
</body>
</html>

<?php 
  var_dump($Nombre);
  var_dump($Numero);
  var_dump($Foto);
?>
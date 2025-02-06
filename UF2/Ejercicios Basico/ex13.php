<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex13</title>
</head>
<body>
<form method="post">
        <div>
            <label for="nombre">Nombre: </label>
            <input type="string" name="nombre" id="nombre" required>
        </div>
        <div>
            <label for="edad"> Edad: </label>
            <input type="number" name="edad" id="edad" required>
        </div>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>

<?php 

class Persona
{

    public string $nombre;
    public int $edad;

    public function __construct( int $nombre, int $edad){
        $this->nombre=$nombre;
        $this->edad = $edad;
    }

    public function benvinguda(): string
    {
        return "El nuevo interno se llama: " . $this->nombre . " y tiene " . $this->edad;
    }
}


if (isset($_POST['nombre']) && isset($_POST['edad'])) {

    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];

    $militar = new Persona( $nombre, $edad);
    echo $militar->benvinguda();
}


?>
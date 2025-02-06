<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex18</title>
</head>

<body>
    <form method="post">
        <div>
            <label for="nombre">Nombre: </label>
            <input type="string" name="nombre" id="nombre" required>
        </div>
        <div>
            <label for="tipo">tipo: </label>
            <input type="string" name="tipo" id="tipo" required>
        </div>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>

<?php 

class Animal 
{
    public string $nombre;
    public string $tipo;

    public function __construct( string $nombre, string $tipo)
    {
        $this->nombre = $nombre;
        $this->tipo = $tipo;
    }

    public function SaludoBestial()
    {
        return "Hola soy un " . $this->tipo . " y me llamo " . $this->nombre;
    }
}


if (isset($_POST['nombre']) && isset($_POST['tipo'])) {

    $nombre = $_POST['nombre'];
    $especie = $_POST['tipo'];

    $salvaje = new Animal( $nombre, $tipo);
    echo $salvaje->SaludoBestial();
}

?>
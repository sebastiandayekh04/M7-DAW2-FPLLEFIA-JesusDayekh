<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex10</title>
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

class Animal{
    public string $nombre;
    public string $tipo;
    

    public function __construct(string $nombre, string $tipo)
    {
        $this->nombre=$nombre;
        $this->tipo=$tipo;
    }

    public function descriure(): string
    {
        return "El nuevo animal que viene al zoologico de barcelona es un " . $this->nombre . " de la especie " . $this->tipo;
    }
}


if (isset($_POST['nombre']) && isset($_POST['tipo'])) {

    $nombre = $_POST['nombre'];
    $especie = $_POST['tipo'];

    $Animal = new Animal( $nombre, $tipo);
    echo $Animal->descriure();
}


?>
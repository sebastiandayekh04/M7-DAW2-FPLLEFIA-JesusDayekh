<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex8</title>
</head>

<body>
    <form method="post">
        <div>
            <label for="nombre">Nombre: </label>
            <input type="string" name="nombre" id="nombre" required>
        </div>
        <div>
            <label for="especie">Especie: </label>
            <input type="string" name="especie" id="especie" required>
        </div>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>

<?php 

class Animal{
    public string $nombre;
    public string $especie;
    

    public function __construct(string $nombre, string $especie)
    {
        $this->nombre=$nombre;
        $this->especie=$especie;
    }

    public function descriure(): string
    {
        return "El nuevo animal que viene al zoologico de barcelona es un " . $this->nombre . " de la especie " . $this->especie;
    }
}


if (isset($_POST['nombre']) && isset($_POST['especie'])) {

    $nombre = $_POST['nombre'];
    $especie = $_POST['especie'];

    $Animal = new Animal( $nombre, $especie);
    echo $Animal->descriure();
}


?>
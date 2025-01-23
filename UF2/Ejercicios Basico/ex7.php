<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex7</title>
</head>

<body>
    <form method="post">
        <div>
            <label for="nom">Nom:</label>
            <input type="text" name="nom" id="nom" required>
        </div>
        <div>
            <label for="preu">preu:</label>
            <input type="number" name="preu" id="preu" required>
        </div>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>

<?php


class Producto
{
    public string $nom;
    public int $preu;


    public function __construct(string $nom, int $preu)
    {
        $this->nom = $nom;
        $this->preu = $preu;
    }

    public function mostrarPreu()
    {
        return "Hola, Quieres comprar el producto: " . $this->nom . " tendria un precio de  " . $this->preu . " euros. ";
    }
}






if (isset($_POST['nom']) && isset($_POST['preu'])) {

    $nom = $_POST['nom'];
    $preu = $_POST['preu'];


    $persona3 = new Producto($nom, $preu);
    echo $persona3->mostrarPreu();
};

?>
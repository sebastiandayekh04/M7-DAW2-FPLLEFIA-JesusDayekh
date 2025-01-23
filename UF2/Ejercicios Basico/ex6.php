<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex6</title>
</head>

<body>
    <form method="post">
        <div>
            <label for="nom">Nom:</label>
            <input type="text" name="nom" id="nom" required>
        </div>
        <div>
            <label for="edat">Edat:</label>
            <input type="number" name="edat" id="edat" required>
        </div>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>

<?php


class Persona
{
    public string $nom;
    public int $edat;


    public function __construct(string $nom, int $edat)
    {
        $this->nom = $nom;
        $this->edat = $edat;
    }

    public function saludar(): string
    {
        return "Hola, soc " . $this->nom . " i tinc " . $this->edat . " anys. ";
    }
}






if (isset($_POST['nom']) && isset($_POST['edat'])) {

$nom = $_POST['nom'];
$edat = $_POST['edat'];


$persona2 = new Persona($nom, $edat);
echo $persona2->saludar();
};

?>
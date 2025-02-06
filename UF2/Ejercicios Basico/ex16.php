<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex16</title>
</head>

<body>
    <form method="post">
        <div>
            <label for="num1">Numero 1:</label>
            <input type="number" name="num1" id="num1" required>
        </div>
        <div>
            <label for="num2">Numero 2:</label>
            <input type="number" name="num2" id="num2" required>
        </div>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>


<?php
class Calculadora
{
    public int $num1;
    public int $num2;

    public function __construct( int $num1, int $num2){
        $this->num1=$num1;
        $this->num2 = $num2;
    }

    public function Sumar(): string
    {   
        return "Suma: ". ($this->num1 + $this->num2);
    }
}

if (isset($_POST['num1']) && isset($_POST['num2'])) {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];


    $resultados = new Calculadora($num1, $num2);
    echo $resultados->Sumar();
};
?>
<?php

class Producte
{
    public string $producto;
    public string $marca;
    public int $precio;

    public function __construct(string $producto, string $marca, int $precio)
    {
        $this->producto = $producto;
        $this->marca = $marca;
        $this->precio = $precio;
    }
    public function DevolverPrecio(): string
    {
        return $this->precio;
    }

    public function MarcaProducto(): string
    {
        return  $this->marca;
    }

    public function NombreProducto(): string
    {
        return  $this->producto;
    }
}

$Producte = [
    new Producto("Bolso Birkin", "Hermès", 25000),
    new Producto("Zapatillas Air Dior", "Dior x Jordan", 10000),
    new Producto("Reloj Royal Oak", "Audemars Piguet", 50000),
];
foreach ($Producte as $Producto) {
    echo $Producto->DevolverPrecio() . "<br>";
    echo $Producto->MarcaProducto() . "<br>";
    echo $Producto->NombreProducto() . "<br>";
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex9</title>
</head>

<body>
    <thead>
        <tr>
            <th>Producto</th>
            <th>Marca</th>
            <th>Precio (€)</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($Producte as $Producto) {
            echo "<tr>";
            echo "<td>" . $Producto->$producto . "</td>";
            echo "<td>" . $Producto->$marca . "</td>";
            echo "<td>" . $Producto->$precio . "</td>";
            echo "</tr>";
        }
      ?>
    </tbody>
    </table>
</body>

</html>
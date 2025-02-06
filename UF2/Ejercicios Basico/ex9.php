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


$Productos = [
    new Producte("Bolso Birkin", "Hermès", 25000),
    new Producte("Zapatillas Air Dior", "Dior x Jordan", 10000),
    new Producte("Reloj Royal Oak", "Audemars Piguet", 50000),
];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex9</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Producto</th>
                <th>Marca</th>
                <th>Precio (€)</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($Productos as $Producto) {
                echo "<tr>";
                echo "<td>" . $Producto->NombreProducto() . "</td>";
                echo "<td>" . $Producto->MarcaProducto() . "</td>";
                echo "<td>" . $Producto->DevolverPrecio() . "</td>";
                echo "</tr>";
            }
        ?>
        </tbody>
    </table>
</body>

</html>
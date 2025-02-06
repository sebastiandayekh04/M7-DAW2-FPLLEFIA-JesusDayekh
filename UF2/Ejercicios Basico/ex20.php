<?php 

class producto
{
    public string $nombre;
    public string $marca;
    public string $precio;

    public function __construct( string $nombre, string $marca, string $precio)
    {
        $this->nombre = $nombre;
        $this->marca = $marca;
        $this->precio = $precio;
    }

    public function Nombre()
    {
        return $this->nombre;
    }

    public function Marca()
    {
        return $this->marca;
    }

    public function Precio()
    {
        return $this->precio;
    }
}

$productos = [
    new Producte("Camiseta Oficial Real Madrid", "Adidas", 120),
    new Producte("Balón Real Madrid", "Adidas", 50),
    new Producte("Bufanda Real Madrid", "Adidas", 30),
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
                echo "<td>" . $Producto->Nombre() . "</td>";
                echo "<td>" . $Producto->Marca() . "</td>";
                echo "<td>" . $Producto->Precio() . "</td>";
                echo "</tr>";
            }
        ?>
        </tbody>
    </table>
</body>

</html>
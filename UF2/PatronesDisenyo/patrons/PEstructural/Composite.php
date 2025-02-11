<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    l
    <title>Patrones Composite</title>
</head>
<?php 
include_once '../../header.php';

echo getHeader(2);
?>
<body class="d-flex justify-content-center align-items-center vh-100" style="background-image: url('https://miro.medium.com/v2/resize:fit:1200/1*-nGOaPQzlTbUGkndeFdxbQ.png'); background-size:cover; background-repeat: no-repeat;">
    <div class="card p-4 bg-dark text-white" style="width: 35rem; height: auto; box-sizing: border-box;">
    <h2 class="card-title text-center"></h2>
    <div class="card border border-dark" style="width: 32rem; box-sizing: border-box;">
        <img class="card-img-top border border-dark" src="https://refactoring.guru/images/patterns/content/composite/composite.png?id=73bcf0d94db360b636cd745f710d19db" alt="Card image cap" style="height: 350px; object-fit: cover;">
        
        <!-- Contenedor desplazable -->
        <div class="card-body" style="max-height: 300px; overflow-y: auto;">
            <p class="card-text text-black">
                        Propósito:
            El patrón Composite es un patrón de diseño estructural que permite componer objetos en estructuras jerárquicas, como árboles, y tratarlos como si fueran un único objeto. Esto facilita el manejo de objetos compuestos y simples de manera uniforme.

            Problema:
            Cuando se tiene una estructura compleja que incluye objetos dentro de otros objetos (por ejemplo, productos dentro de cajas, que pueden tener más cajas dentro), el desafío es calcular propiedades como el precio total sin tener que lidiar con detalles de los distintos niveles de anidación. Sin el patrón Composite, esto podría implicar un código complicado que necesita conocer la estructura exacta de cada tipo de objeto.

            Solución:
            El patrón Composite resuelve este problema mediante una interfaz común para todos los objetos (simples y compuestos). Los objetos compuestos (contenedores) delegan el trabajo a sus elementos hijos y los objetos simples lo realizan directamente. Esto permite recorrer la estructura de manera recursiva sin preocuparse por el tipo exacto de cada objeto.

            Estructura:
            Componente (Interfaz): Declara operaciones comunes para todos los elementos, tanto simples como compuestos.
            Hoja: Elementos simples sin hijos, realizan el trabajo real.
            Contenedor (Componente compuesto): Contenedor de otros elementos, delega el trabajo a los hijos y recopila los resultados.
            Cliente: Interactúa con los objetos a través de la interfaz común, sin necesidad de conocer si son hojas o contenedores.
            </p>

            
            <!-- Código de ejemplo con desplazamiento propio -->
            <pre class="p-2 border rounded bg-light text-dark" style="max-height: 150px; overflow-y: auto; font-size: 0.9rem;">
&lt;?php
// Componente: Interface común
interface Graphic {
    public function draw();
    public function move($x, $y);
}

// Hoja: Objeto simple (punto)
class Dot implements Graphic {
    private $x, $y;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function move($x, $y) {
        $this->x += $x;
        $this->y += $y;
    }

    public function draw() {
        echo "Drawing a dot at ($this->x, $this->y)\n";
    }
}

// Hoja: Objeto complejo (círculo)
class Circle implements Graphic {
    private $x, $y, $radius;

    public function __construct($x, $y, $radius) {
        $this->x = $x;
        $this->y = $y;
        $this->radius = $radius;
    }

    public function move($x, $y) {
        $this->x += $x;
        $this->y += $y;
    }

    public function draw() {
        echo "Drawing a circle at ($this->x, $this->y) with radius $this->radius\n";
    }
}

// Contenedor: Compuesto de gráficos
class CompoundGraphic implements Graphic {
    private $children = [];

    public function add(Graphic $child) {
        $this->children[] = $child;
    }

    public function remove(Graphic $child) {
        $index = array_search($child, $this->children);
        if ($index !== false) {
            unset($this->children[$index]);
        }
    }

    public function move($x, $y) {
        foreach ($this->children as $child) {
            $child->move($x, $y);
        }
    }

    public function draw() {
        foreach ($this->children as $child) {
            $child->draw();
        }
    }
}

// Cliente
class ImageEditor {
    private $allGraphics;

    public function __construct() {
        $this->allGraphics = new CompoundGraphic();
    }

    public function load() {
        $this->allGraphics->add(new Dot(1, 2));
        $this->allGraphics->add(new Circle(5, 3, 10));
        $this->allGraphics->draw();
    }

    public function groupSelected($components) {
        $group = new CompoundGraphic();
        foreach ($components as $component) {
            $group->add($component);
            $this->allGraphics->remove($component);
        }
        $this->allGraphics->add($group);
        $this->allGraphics->draw();
    }
}

// Uso del ejemplo
$editor = new ImageEditor();
$editor->load();

$dot1 = new Dot(10, 10);
$circle1 = new Circle(20, 20, 5);
$editor->groupSelected([$dot1, $circle1]);
?&gt;
            </pre>
        </div>
    </div>
</div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</html>
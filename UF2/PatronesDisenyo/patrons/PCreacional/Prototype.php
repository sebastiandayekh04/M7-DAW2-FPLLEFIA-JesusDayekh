<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    l
    <title>Patrones Prototype</title>
</head>
<?php 
include_once '../../header.php';

echo getHeader(2);
?>
<body class="d-flex justify-content-center align-items-center vh-100" style="background-image: url('https://miro.medium.com/v2/resize:fit:1200/1*-nGOaPQzlTbUGkndeFdxbQ.png'); background-size:cover; background-repeat: no-repeat;">
    <div class="card p-4 bg-dark text-white" style="width: 35rem; height: auto; box-sizing: border-box;">
    <h2 class="card-title text-center"></h2>
    <div class="card border border-dark" style="width: 32rem; box-sizing: border-box;">
        <img class="card-img-top border border-dark" src="https://refactoring.guru/images/patterns/content/prototype/prototype.png" alt="Card image cap" style="height: 350px; object-fit: cover;">
        
        <!-- Contenedor desplazable -->
        <div class="card-body" style="max-height: 300px; overflow-y: auto;">
            <p class="card-text text-black">
            El patrón Prototype es un patrón creacional que permite la clonación de objetos sin depender de sus clases. En lugar de crear un objeto desde cero, se crea una copia exacta de un objeto existente, lo que ahorra tiempo y recursos, especialmente cuando los objetos son complejos.

            Problema: Si necesitas duplicar un objeto, debes conocer su clase y copiar manualmente sus propiedades, lo cual puede ser complicado si los objetos tienen campos privados o si solo se conoce la interfaz del objeto y no su clase concreta.

            Solución: El patrón Prototype resuelve este problema delegando la responsabilidad de la clonación al propio objeto. Esto se logra mediante una interfaz común que declara un método clonar(), el cual crea una copia del objeto sin depender de su clase. Así, el código puede clonar objetos sin necesidad de conocer la clase específica.

            Estructura del Patrón:

            Interfaz Prototipo: Declara el método clonar(), que es utilizado por las clases concretas.
            Clase Prototipo Concreto: Implementa el método de clonación, que crea un nuevo objeto y copia sus valores.
            Cliente: Llama al método clonar() para obtener copias de los objetos.
            Ejemplo del Mundo Real: En biología, la división celular mitótica puede verse como una analogía del patrón Prototype, donde una célula se divide para formar dos células idénticas.
            </p>
            
            <!-- Código de ejemplo con desplazamiento propio -->
            <pre class="p-2 border rounded bg-light text-dark" style="max-height: 150px; overflow-y: auto; font-size: 0.9rem;">
&lt; 

// Interfaz del prototipo
interface Shape {
    public function clone(): Shape;
}

// Clase concreta: Rectángulo
class Rectangle implements Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function clone(): Shape {
        // Clona el rectángulo creando un nuevo objeto con los mismos valores
        return new Rectangle($this->width, $this->height);
    }

    public function getDimensions() {
        return "Width: $this->width, Height: $this->height";
    }
}

// Clase concreta: Círculo
class Circle implements Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function clone(): Shape {
        // Clona el círculo creando un nuevo objeto con el mismo radio
        return new Circle($this->radius);
    }

    public function getRadius() {
        return "Radius: $this->radius";
    }
}

// Cliente
class Application {
    private $shapes = [];

    public function addShape(Shape $shape) {
        $this->shapes[] = $shape;
    }

    public function cloneShapes() {
        $shapesCopy = [];
        foreach ($this->shapes as $shape) {
            $shapesCopy[] = $shape->clone(); // Clona cada forma
        }
        return $shapesCopy;
    }

    public function showShapes() {
        foreach ($this->shapes as $shape) {
            if ($shape instanceof Rectangle) {
                echo $shape->getDimensions() . PHP_EOL;
            } elseif ($shape instanceof Circle) {
                echo $shape->getRadius() . PHP_EOL;
            }
        }
    }
}

// Creando la aplicación y añadiendo formas
$app = new Application();
$circle = new Circle(5);
$rectangle = new Rectangle(10, 20);

$app->addShape($circle);
$app->addShape($rectangle);

// Mostramos las formas originales
echo "Original Shapes: " . PHP_EOL;
$app->showShapes();

// Clonamos las formas
$clonedShapes = $app->cloneShapes();

// Mostramos las formas clonadas
echo "Cloned Shapes: " . PHP_EOL;
foreach ($clonedShapes as $shape) {
    if ($shape instanceof Rectangle) {
        echo $shape->getDimensions() . PHP_EOL;
    } elseif ($shape instanceof Circle) {
        echo $shape->getRadius() . PHP_EOL;
    }
}


&gt;
            </pre>
        </div>
    </div>
</div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</html>
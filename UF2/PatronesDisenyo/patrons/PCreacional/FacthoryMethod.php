<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    l
    <title>Patrones Facthory Method</title>
</head>

<?php 
include_once '../../header.php';

echo getHeader(2);
?>
<body class="d-flex justify-content-center align-items-center vh-100" style="background-image: url('https://miro.medium.com/v2/resize:fit:1200/1*-nGOaPQzlTbUGkndeFdxbQ.png'); background-size:cover; background-repeat: no-repeat;">
    <div class="card p-4 bg-dark text-white" style="width: 35rem; height: auto; box-sizing: border-box;">
    <h2 class="card-title text-center"></h2>
    <div class="card border border-dark" style="width: 32rem; box-sizing: border-box;">
        <img class="card-img-top border border-dark" src="https://refactoring.guru/images/patterns/content/factory-method/factory-method-es.png" alt="Card image cap" style="height: 350px; object-fit: cover;">
        
        <!-- Contenedor desplazable -->
        <div class="card-body" style="max-height: 300px; overflow-y: auto;">
            <p class="card-text text-black">
            El Factory Method (Método Fábrica) es un patrón de diseño creacional que define una interfaz para crear objetos, pero permite que las subclases decidan qué tipo de objeto crear. Este patrón permite crear objetos sin especificar la clase exacta del objeto que se va a crear, lo que facilita la extensión de una aplicación sin modificar el código existente.

            Propósito: Proporcionar un método para crear objetos sin acoplar directamente el código cliente con las clases concretas de los productos. Es útil cuando el código no sabe de antemano qué tipo de objetos debe crear.

            Problema: Supón que en una aplicación de gestión logística, inicialmente solo se trabaja con camiones, pero luego necesitas agregar barcos. Si todo el código está acoplado a la clase Camión, introducir barcos requeriría cambios en toda la base del código, lo que podría llevar a un código desordenado y difícil de mantener.

            Solución: El patrón Factory Method permite que una clase base (como Logística) proporcione un método para crear objetos (como Camión o Barco), pero las subclases pueden sobrescribir este método para cambiar el tipo de objeto que se crea. De este modo, puedes agregar nuevos tipos de objetos sin modificar el código que los usa.
            </p>
            
            <!-- Código de ejemplo con desplazamiento propio -->
            <pre class="p-2 border rounded bg-light text-dark" style="max-height: 150px; overflow-y: auto; font-size: 0.9rem;">
&lt;?php
// Interfaz común para los productos
interface Transporte {
    public function entregar();
}

// Producto Concreto 1
class Camion implements Transporte {
    public function entregar() {
        echo "Entregando por carretera.";
    }
}

// Producto Concreto 2
class Barco implements Transporte {
    public function entregar() {
        echo "Entregando por mar.";
    }
}

// Clase abstracta que define el método fábrica
abstract class Logistica {
    abstract public function crearTransporte(): Transporte;

    public function entregarCarga() {
        $transporte = $this->crearTransporte();
        $transporte->entregar();
    }
}

// Subclase concreta para la logística terrestre
class LogisticaTerrestre extends Logistica {
    public function crearTransporte(): Transporte {
        return new Camion();  // Retorna un Camión
    }
}

// Subclase concreta para la logística marítima
class LogisticaMaritima extends Logistica {
    public function crearTransporte(): Transporte {
        return new Barco();  // Retorna un Barco
    }
}

// Código cliente
$logistica = new LogisticaTerrestre();
$logistica->entregarCarga();  // Salida: Entregando por carretera.

$logistica = new LogisticaMaritima();
$logistica->entregarCarga();  // Salida: Entregando por mar.

?&gt;
            </pre>
        </div>
    </div>
</div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</html>
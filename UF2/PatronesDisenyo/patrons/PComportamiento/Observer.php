<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Patrones Bridge</title>
</head>
<?php 
include_once '../../header.php';

echo getHeader(2);
?>
<body class="d-flex justify-content-center align-items-center vh-100" style="background-image: url('https://miro.medium.com/v2/resize:fit:1200/1*-nGOaPQzlTbUGkndeFdxbQ.png'); background-size:cover; background-repeat: no-repeat;">
    <div class="card p-4 bg-dark text-white" style="width: 35rem; height: auto; box-sizing: border-box;">
        <h2 class="card-title text-center">Patrón Observer</h2>
        <div class="card border border-dark" style="width: 32rem; box-sizing: border-box;">
            <img class="card-img-top border border-dark" src="https://refactoring.guru/images/patterns/content/observer/observer.png" alt="Card image cap" style="height: 350px; object-fit: cover;">
            
            <!-- Contenedor desplazable -->
            <div class="card-body" style="max-height: 300px; overflow-y: auto;">
                <p class="card-text text-black">
                    <strong>Definición:</strong><br>
                    El patrón Observer es un patrón de diseño de comportamiento que permite definir un mecanismo de suscripción para que varios objetos (suscriptores) sean notificados cuando ocurra un cambio en el objeto observado (notificador o sujeto).
                </p>
                <p class="card-text text-black">
                    <strong>Problema:</strong><br>
                    Si un objeto necesita notificar a otros sobre cambios en su estado, existen dos opciones ineficientes: consultar constantemente al objeto observado (ineficiente y consume recursos innecesarios) o notificar a todos los clientes sin importar si están interesados (ineficiente y molesto para clientes no interesados). El patrón Observer resuelve esto permitiendo que los objetos interesados se suscriban y desuscriban dinámicamente de un notificador, asegurando que solo sean notificados los objetos pertinentes.
                </p>
                <p class="card-text text-black">
                    <strong>Estructura:</strong><br>
                    <strong>Sujeto (Notificador):</strong> Mantiene una lista de observadores y proporciona métodos para agregar, eliminar y notificar observadores.<br>
                    <strong>Observador (Suscriptor):</strong> Define una interfaz con un método de actualización que es invocado por el sujeto cuando hay un cambio.<br>
                    <strong>Clientes:</strong> Registran y eliminan observadores del sujeto según sea necesario.
                </p>
                <p class="card-text text-black">
                    Un ejemplo en PHP podría ser una cadena de validaciones para manejar solicitudes de acceso en una aplicación. Aquí tienes un ejemplo en PHP:
                </p>
                
                <!-- Código de ejemplo con desplazamiento propio -->
                <pre class="p-2 border rounded bg-light text-dark" style="max-height: 150px; overflow-y: auto; font-size: 0.9rem;">
&lt;?php
class Handler {
    private $next;
    public function setNext($handler) {
        $this->next = $handler;
        return $handler;
    }
    public function handle($request) {
        if ($this->next) {
            return $this->next->handle($request);
        }
        return null;
    }
}
?&gt;
                </pre>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</html>

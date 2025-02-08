<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    l
    <title>Patrones Bridge</title>
</head>

<?php 
include_once '../../header.php';

echo getHeader(2);
?>
<body class="d-flex justify-content-center align-items-center vh-100" style="background-image: url('https://miro.medium.com/v2/resize:fit:1200/1*-nGOaPQzlTbUGkndeFdxbQ.png'); background-size:cover; background-repeat: no-repeat;">
    <div class="card p-4 bg-dark text-white" style="width: 35rem; height: auto; box-sizing: border-box;">
    <h2 class="card-title text-center"></h2>
    <div class="card border border-dark" style="width: 32rem; box-sizing: border-box;">
        <img class="card-img-top border border-dark" src="" alt="Card image cap" style="height: 350px; object-fit: cover;">
        
        <!-- Contenedor desplazable -->
        <div class="card-body" style="max-height: 300px; overflow-y: auto;">
            <p class="card-text text-black">
                El patrón Chain of Responsibility permite desacoplar el emisor y el receptor de una solicitud al pasarla secuencialmente a través de una cadena de manejadores. Cada manejador procesa la solicitud o la delega al siguiente. Esto es útil en sistemas que requieren múltiples validaciones o procesamiento en etapas, como autenticación, autorización y validación de datos en una aplicación web. Al aplicar este patrón, evitamos código monolítico y facilitamos la extensibilidad sin modificar clases existentes. 
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
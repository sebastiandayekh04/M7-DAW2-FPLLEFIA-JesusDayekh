<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Patrones Bridge</title>
    <style>
        
    </style>
</head>

<?php 
include_once '../../header.php';

echo getHeader(2);
?>

<body class="d-flex justify-content-center align-items-center vh-100" 
      style="background-image: url('https://miro.medium.com/v2/resize:fit:1200/1*-nGOaPQzlTbUGkndeFdxbQ.png'); background-size: cover; background-repeat: no-repeat;">

    <div class="card p-3 bg-dark text-white" style="width: 28rem; z-index: -1;">
        <h4 class="card-title text-center">Patrón Chain of Responsibility</h4>
        <div class="card border border-dark">
            <img class="card-img-top border" src="https://upload.wikimedia.org/wikipedia/commons/f/fc/Flag_of_Mexico.svg" 
                 alt="Bandera de México" style="height: 200px; object-fit: cover;">
            
            <div class="card-body p-2" style="max-height: 250px; overflow-y: auto;">
                <p class="card-text text-black small">
                    El patrón Chain of Responsibility permite desacoplar el emisor y receptor de una solicitud al pasarla 
                    secuencialmente a través de una cadena de manejadores. Esto facilita la extensibilidad sin modificar 
                    clases existentes.
                </p>
                <p class="card-text text-black small">
                    Ejemplo en PHP:
                </p>
                <pre class="p-2 border rounded bg-light text-dark small" 
                     style="max-height: 120px; overflow-y: auto; font-size: 0.8rem;">
&lt;?php
class Handler {
    private $next;
    public function setNext($handler) {
        $this->next = $handler;
        return $handler;
    }
    public function handle($request) {
        return $this->next ? $this->next->handle($request) : null;
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

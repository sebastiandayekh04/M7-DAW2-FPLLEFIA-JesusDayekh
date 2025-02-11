<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Patrón Memento</title>
</head>
<?php 
include_once '../../header.php';

echo getHeader(2);
?>
<body class="d-flex justify-content-center align-items-center vh-100" style="background-image: url('https://miro.medium.com/v2/resize:fit:1200/1*-nGOaPQzlTbUGkndeFdxbQ.png'); background-size:cover; background-repeat: no-repeat;">
    <div class="card p-4 bg-dark text-white" style="width: 35rem; height: auto; box-sizing: border-box;">
    <h2 class="card-title text-center">Patrón Memento</h2>
    <div class="card border border-dark" style="width: 32rem; box-sizing: border-box;">
        <img class="card-img-top border border-dark" src="https://refactoring.guru/images/patterns/content/memento/memento-es.png" alt="Patrón Memento" style="height: 350px; object-fit: cover;">
        
        <!-- Contenedor desplazable -->
        <div class="card-body" style="max-height: 300px; overflow-y: auto;">
            <p class="card-text text-black">
                El patrón Memento permite guardar y restaurar el estado previo de un objeto sin revelar los detalles de su implementación. Es útil en aplicaciones que requieren funciones de deshacer o versiones de estado, como editores de texto o configuraciones de usuario.
            </p>
            <p class="card-text text-black">
                A continuación, se presenta un ejemplo en PHP donde se implementa el patrón Memento para gestionar estados de un editor de texto:
            </p>
            
            <!-- Código de ejemplo con desplazamiento propio -->
            <pre class="p-2 border rounded bg-light text-dark" style="max-height: 150px; overflow-y: auto; font-size: 0.9rem;">
&lt;?php
class Memento {
    private $state;
    public function __construct($state) {
        $this->state = $state;
    }
    public function getState() {
        return $this->state;
    }
}

class Editor {
    private $state;
    public function setState($state) {
        $this->state = $state;
    }
    public function save() {
        return new Memento($this->state);
    }
    public function restore(Memento $memento) {
        $this->state = $memento->getState();
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

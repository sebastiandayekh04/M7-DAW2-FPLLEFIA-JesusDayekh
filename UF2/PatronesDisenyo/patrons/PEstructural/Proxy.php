<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    l
    <title>Patrones Proxy</title>
</head>
<?php 
include_once '../../header.php';

echo getHeader(2);
?>
<body class="d-flex justify-content-center align-items-center vh-100" style="background-image: url('https://miro.medium.com/v2/resize:fit:1200/1*-nGOaPQzlTbUGkndeFdxbQ.png'); background-size:cover; background-repeat: no-repeat;">
    <div class="card p-4 bg-dark text-white" style="width: 35rem; height: auto; box-sizing: border-box;">
    <h2 class="card-title text-center"></h2>
    <div class="card border border-dark" style="width: 32rem; box-sizing: border-box;">
        <img class="card-img-top border border-dark" src="https://refactoring.guru/images/patterns/content/proxy/proxy.png?id=efece4647fb11e3f7539291796327666" alt="Card image cap" style="height: 350px; object-fit: cover;">
        
        <!-- Contenedor desplazable -->
        <div class="card-body" style="max-height: 300px; overflow-y: auto;">
            <p class="card-text text-black">
            El patrón Proxy es un patrón de diseño estructural que proporciona un sustituto o marcador de posición para otro objeto, controlando el acceso al objeto real. Esto permite que se realicen operaciones antes o después de que la solicitud llegue al objeto original, sin modificar la lógica interna de la clase real.

            Este patrón se utiliza principalmente cuando un objeto es costoso de crear o utilizar, por ejemplo, cuando se necesita inicialización diferida, caché de resultados, o control de acceso. El proxy actúa como un intermediario que delega la solicitud al objeto original, permitiendo manipular la solicitud sin afectar la lógica del servicio original.

            Ventajas:

            Permite controlar el acceso a objetos costosos (por ejemplo, en términos de tiempo o recursos).
            Implementación diferida: Crea el objeto solo cuando es necesario.
            Caché de resultados: Mantiene resultados previos para optimizar el rendimiento.
            Estructura:

            Interfaz de Servicio: Declara la interfaz del servicio que debe seguir tanto el proxy como el objeto original.
            Servicio: Clase que proporciona la lógica del negocio real.
            Proxy: Contiene un campo de referencia al objeto de servicio y maneja tareas como la inicialización diferida, el caché, o el control de acceso.
            Cliente: Interactúa con el servicio a través de la misma interfaz, sin saber si está trabajando con el proxy o el servicio real.
            Ejemplo en PHP
            Imaginemos que queremos usar el patrón Proxy para almacenar en caché los resultados de un servicio que descarga videos de YouTube. Sin el Proxy, el servicio descargará el mismo video cada vez que sea solicitado. Con el Proxy, podemos evitar esto almacenando los videos descargados previamente.

            php
            Copiar
            Editar

            </p>
    
            
            <!-- Código de ejemplo con desplazamiento propio -->
            <pre class="p-2 border rounded bg-light text-dark" style="max-height: 150px; overflow-y: auto; font-size: 0.9rem;">
&lt;?php
// Interfaz de servicio que define los métodos a implementar.
interface ThirdPartyYouTubeLib {
    public function listVideos();
    public function getVideoInfo($id);
    public function downloadVideo($id);
}

// Clase que implementa la lógica real del servicio.
class ThirdPartyYouTubeClass implements ThirdPartyYouTubeLib {
    public function listVideos() {
        echo "Solicitando lista de videos de YouTube...\n";
    }

    public function getVideoInfo($id) {
        echo "Obteniendo información del video con ID: $id\n";
    }

    public function downloadVideo($id) {
        echo "Descargando el video con ID: $id\n";
    }
}

// Proxy que maneja la caché.
class CachedYouTubeClass implements ThirdPartyYouTubeLib {
    private $service;
    private $listCache = null;
    private $videoCache = null;

    public function __construct(ThirdPartyYouTubeLib $service) {
        $this->service = $service;
    }

    public function listVideos() {
        if ($this->listCache === null) {
            $this->listCache = "Lista de videos almacenada en caché";
            echo "Cargando lista desde YouTube...\n";
        } else {
            echo "Usando lista en caché.\n";
        }
        return $this->listCache;
    }

    public function getVideoInfo($id) {
        if ($this->videoCache === null) {
            $this->videoCache = "Información del video con ID: $id";
            echo "Obteniendo datos del video...\n";
        } else {
            echo "Usando información en caché para el video $id.\n";
        }
        return $this->videoCache;
    }

    public function downloadVideo($id) {
        echo "Descargando video... (caché no implementada para descarga)\n";
        $this->service->downloadVideo($id);
    }
}

// Clase que maneja la interfaz del usuario.
class YouTubeManager {
    private $service;

    public function __construct(ThirdPartyYouTubeLib $service) {
        $this->service = $service;
    }

    public function renderVideoPage($id) {
        $info = $this->service->getVideoInfo($id);
        echo "Mostrando página del video: $info\n";
    }

    public function renderListPanel() {
        $list = $this->service->listVideos();
        echo "Mostrando panel de videos: $list\n";
    }

    public function reactOnUserInput() {
        $this->renderVideoPage(1);
        $this->renderListPanel();
    }
}

// Aplicación que configura y usa el proxy.
class Application {
    public function init() {
        $youTubeService = new ThirdPartyYouTubeClass();
        $youTubeProxy = new CachedYouTubeClass($youTubeService);
        $manager = new YouTubeManager($youTubeProxy);
        $manager->reactOnUserInput();
    }
}

// Ejecutar la aplicación.
$app = new Application();
$app->init();

?&gt;
            </pre>
        </div>
    </div>
</div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</html>
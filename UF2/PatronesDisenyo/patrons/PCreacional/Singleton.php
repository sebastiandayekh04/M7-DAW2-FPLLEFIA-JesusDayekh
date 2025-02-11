<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    l
    <title>Patrones Singleton</title>
</head>
<?php 
include_once '../../header.php';

echo getHeader(2);
?>
<body class="d-flex justify-content-center align-items-center vh-100" style="background-image: url('https://miro.medium.com/v2/resize:fit:1200/1*-nGOaPQzlTbUGkndeFdxbQ.png'); background-size:cover; background-repeat: no-repeat;">
    <div class="card p-4 bg-dark text-white" style="width: 35rem; height: auto; box-sizing: border-box;">
    <h2 class="card-title text-center"></h2>
    <div class="card border border-dark" style="width: 32rem; box-sizing: border-box;">
        <img class="card-img-top border border-dark" src="https://refactoring.guru/images/patterns/content/singleton/singleton.png" alt="Card image cap" style="height: 350px; object-fit: cover;">
        
        <!-- Contenedor desplazable -->
        <div class="card-body" style="max-height: 300px; overflow-y: auto;">
            <p class="card-text text-black">
            El patrón Singleton es un patrón de diseño creacional que asegura que una clase tenga una única instancia y proporciona un punto de acceso global a esa instancia. Este patrón es útil para situaciones en las que solo se necesita una instancia de una clase para controlar el acceso a recursos compartidos, como una base de datos o un archivo.
            Problemas que Resuelve
            Controlar la Instancia Única: Asegura que solo exista una instancia de la clase.
            Acceso Global: Permite acceder a esa única instancia desde cualquier parte del programa sin riesgo de que otros fragmentos de código puedan sobrescribirla.
            Solución
            El patrón Singleton hace privado el constructor de la clase para evitar que se creen múltiples instancias mediante el operador new. Luego, ofrece un método estático que crea la instancia si aún no existe o devuelve la instancia almacenada si ya ha sido creada.

            Ejemplo en PHP del Patrón Singleton
            En este ejemplo, se utiliza el patrón Singleton para crear una clase Database que garantiza que solo haya una instancia de la conexión a la base de datos:
            </p>

            
            <!-- Código de ejemplo con desplazamiento propio -->
            <pre class="p-2 border rounded bg-light text-dark" style="max-height: 150px; overflow-y: auto; font-size: 0.9rem;">
&lt;?php


class Database {
    // El campo que almacena la instancia única.
    private static $instance = null;

    // Constructor privado para evitar instanciación directa.
    private function __construct() {
        // Inicialización de la conexión con la base de datos.
        echo "Conexión a la base de datos establecida.\n";
    }

    // Método estático para obtener la instancia única.
    public static function getInstance() {
        // Si la instancia aún no ha sido creada, crearla.
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    // Método para ejecutar una consulta en la base de datos.
    public function query($sql) {
        echo "Ejecutando consulta: $sql\n";
        // Aquí iría la lógica para ejecutar la consulta.
    }

    // Prevenir la clonación de la instancia.
    private function __clone() {}

    // Prevenir la deserialización de la instancia.
    private function __wakeup() {}
}

// Uso del patrón Singleton
$db1 = Database::getInstance();
$db1->query("SELECT * FROM usuarios");

$db2 = Database::getInstance();
$db2->query("SELECT * FROM productos");

// Ambas variables $db1 y $db2 contienen la misma instancia.
if ($db1 === $db2) {
    echo "Ambas instancias son la misma.\n";
}

?>

?&gt;
            </pre>
        </div>
    </div>
</div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</html>
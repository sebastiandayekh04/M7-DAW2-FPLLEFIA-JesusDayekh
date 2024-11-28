<?php 
if(!isset($_SESSION)) {
    session_start();
}
    if ($_SESSION['role'] != "admin") {
        header('location:home.php');
        exit;
    }
    
include 'functions.php';
$libro = [
    "foto" => "",
    "titulo" => "",
    "autor" => "",
    "descripcion" => ""
];
$id = null;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

if (isset($_POST['crear'])) {
    agregarLibro($_POST['titulo'], $_POST['autor'], $_POST['imagen'], $_POST['descripcion']);
}

if (isset($_POST['actualizar'])) {
    editarLibro($id, $_POST['titulo'], $_POST['autor'], $_POST['imagen'], $_POST['descripcion']);
}

if (isset($_POST['actualizar']) || isset($_POST['crear'])) {
    header('location:home.php');
    exit;
}
$crear_nuevo = true;
if ($id !== null){
    $libro = buscarLibro($id);
    $crear_nuevo = false;
    if ($libro == null) {
        header('location:add_edit_book.php');
        exit;
    }
}

 ?>
<!-- AQUI VA LA LÓGICA PHP  -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca Virtual</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Encabezado del formulario -->
    <header class="bg-light py-3 mb-4 shadow-sm">
        <div class="container d-flex align-items-center justify-content-between">
            <div>
                <h4 class="m-0">👋 Bienvenido, <?php  echo $_SESSION['username'];  ?></h4>
                <p class="text-muted m-0"><i class="fas fa-user-shield text-success"></i> Admin ✏️</p>
            </div>
            <a href="home.php" class="btn btn-secondary btn-sm">
                <i class="fas fa-arrow-left"></i> Volver a la Biblioteca
            </a>
        </div>
    </header>

    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold"></h2>
            <p class="lead"></p>
        </div>

        <!-- Formulario para agregar o editar libro. DEPENDIENDO DE SI SE AÑADE O SE EDITA CAMBIARÁN COSA DEL FORMULARIO, USA TERNARIOS SON MUY ÚTILES-->
        <form method="POST" class="mx-auto" style="max-width: 600px;">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $libro['titulo']; ?>" placeholder="Título" required>
                <label for="titulo">Título</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="autor" name="autor" value="<?php echo $libro['autor']; ?>" placeholder="Autor" required>
                <label for="autor">Autor</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="imagen" name="imagen" value="<?php echo $libro['foto']; ?>" placeholder="URL de la Imagen">
                <label for="imagen">URL de la Imagen</label>
            </div>
            <div class="form-floating mb-4">
                <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Descripción" style="height: 150px;"><?php echo $libro['descripcion']; ?></textarea>
                <label for="descripcion">Descripción</label>
            </div>
            <?php 
            if ($crear_nuevo == true) {
                echo '<input type="hidden" name="crear" value="1">';
            } else {
                echo '<input type="hidden" name="actualizar" value="1">';
            }
            ?>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-lg"> <?php echo $crear_nuevo ? "CREAR" : "ACTUALIZAR";?></button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
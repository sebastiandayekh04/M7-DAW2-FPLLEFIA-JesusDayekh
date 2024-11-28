<?php
session_start();
    if (!isset($_SESSION['username'])) {
        header('location:index.php');
        exit;
    }

    if($_SESSION['role'] =="admin"){
        $rol = '<p class="text-muted m-0"><i class="fas fa-user-shield text-success"></i> Admin ✏️</p>';
    }else if($_SESSION['role'] =="lector"){
        $rol = '<p class="text-muted m-0">Lector 📚</p>';
    };
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca Virtual - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style type="text/css">
        .limited-size {
            max-width: 150px;
            max-height: 150px;
            width: auto; 
            height: auto; 
        }
    </style>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


</head>
<body>

    <header class="bg-light py-3 mb-4 shadow-sm">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <img src="<?php echo $_SESSION['img'];  ?>" alt="<?php $_SESSION['username'];  ?>" class="w-25 rounded-circle me-3 limited-size" >
                <div>
                    <h4 class="m-0">👋 Bienvenido, <?php  echo $_SESSION['username'];  ?></h4>
                    <?php  echo $rol;  ?>
                </div>
            </div>

            <a href="logout.php" class="btn btn-warning btn-sm">
               Cerrar sesión ❌
            </a>
        </div>
    </header>
    </body>
</html>
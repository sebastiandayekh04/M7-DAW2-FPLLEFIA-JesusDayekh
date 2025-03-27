<?php
session_start();
require_once 'config.php';

?>
<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eco Drive</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<header class="navigation fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark">

        <div class="collapse navbar-collapse text-center" id="navigation">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link text-black" href="index.php">Home</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link text-black" href="reservas.php">Reservas</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link text-black" href="vehiculos.php">Vehiculos</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link text-black" href="admin.php">Admin</a>
                </li>
                <nav class="d-flex align-items-center">
                    <div class="dropdown">

                        <?php if (isset($_SESSION['user_id'])): ?>
                            <img src="<?= htmlspecialchars($_SESSION['user_avatar']) ?>" alt="Avatar" class="rounded-circle me-2 " width="40" height="40" ">
                                <span class=" me-3"><?= htmlspecialchars($_SESSION['user_name']) ?></span>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                                <li><a class="dropdown-item" href="logout.php">Cerrar Sesión</a></li>

                                <?php if (($_SESSION['user_rol']) === 'admin'): ?>
                                    <li><a class="dropdown-item text-black" href="admin.php">Panel de Administración</a></li>
                                <?php endif; ?>

                            </ul>
                        <?php else: ?>
                            <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" alt="Avatar" class="rounded-circle me-2 dropdown-toggle" width="40" height="40" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="cursor: pointer;">
                            <span class="me-3">Invitado</span>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                                <li><a class="dropdown-item" href="login.php">Iniciar Sesión</a></li>
                                <li><a class="dropdown-item" href="register.php">Registrarse</a></li>
                            </ul>
                        <?php endif; ?>
                    </div>
                </nav>
                </li>
            </ul>
        </div>
    </nav>
</header>
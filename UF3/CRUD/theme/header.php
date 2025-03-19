<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <title>Proyecto </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- theme meta -->
    <meta name="theme-name" content="agen" />


    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">

    <link rel="stylesheet" href="plugins/slick/slick.css">

    <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">

    <link rel="stylesheet" href="plugins/venobox/venobox.css">
    <!-- card slider -->
    <link rel="stylesheet" href="plugins/card-slider/css/style.css">

    <!-- Main Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

</head>

<body>

    <header class="navigation fixed-top">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="Egen"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse text-center" id="navigation">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="portfolio.php">Portfolio</a>
                    </li>
                    <nav class="d-flex align-items-center">
                        <?php if (isset($_SESSION['user_id'])): ?>
                            <img src="<?= htmlspecialchars($_SESSION['user_avatar']) ?>" alt="Avatar" class="rounded-circle me-2" width="40" height="40">
                            <span class="text-light me-3"><?= htmlspecialchars($_SESSION['user_name']) ?></span>
                            <a href="logout.php" class="btn btn-outline-light btn-sm">Cerrar Sesión</a>

                            <?php if ($_SESSION['user_role'] === 'admin'): ?>
                                <a href="admin.php" class="ms-3">
                                    <img src="https://tecnitool.es/images/featured/invencion-de-la-rueda.jpg" alt="Panel de Administración" width="30" height="30">
                                </a>
                            <?php endif; ?>
                        <?php endif; ?>
                    </nav>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
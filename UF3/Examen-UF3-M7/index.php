<?php include_once 'header.php'; ?>
<?php
$resultCars = $mysqli->query('SELECT * FROM vehiculos');
$cars = $resultCars->fetch_all(MYSQLI_ASSOC);

$resultReservas = $mysqli->query('SELECT * FROM reservas');
$reserves = $resultReservas->fetch_all(MYSQLI_ASSOC);

$resultUsers = $mysqli->query('SELECT * FROM usuarios');
$users = $resultUsers->fetch_all(MYSQLI_ASSOC);

?>

<body>

    <main>

        <section class="banner bg-cover position-relative d-flex justify-content-center align-items-center"
            data-background="https://assets.goal.com/images/v3/bltb8fe5986e586682e/GettyImages-989679778.jpg?auto=webp&format=pjpg&width=3840&quality=60">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="display-1 text-black font-weight-bold font-primary">Eco Drive</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- about -->
        <section class="section-lg position-relative">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-6 col-md-8 col-sm-7 col-8">
                        <h2 class="text-black mb-4">Quienes somos</h2>
                        <p class="text-black mb-4">
                            Somos una empresa dedicada a la movilidad sostenible, ofreciendo una amplia gama de vehículos eléctricos y servicios relacionados.
                            Nuestro objetivo es promover un estilo de vida más ecológico y responsable, contribuyendo a la reducción de la huella de carbono y fomentando el uso de energías limpias.
                            Nos esforzamos por brindar soluciones innovadoras y accesibles para todos, ayudando a construir un futuro más sostenible para las generaciones venideras.
                        </p>
                        <a href="#" class="btn btn-primary">Leer mas</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- /about -->

        <!-- team -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 mx-auto text-center">
                        <h2>Nuestros Autos</h2>
                        <div class="section-border"></div>
                    </div>
                </div>
                <?php
                // Suponiendo que $news ya contiene todas las noticias ordenadas por fecha descendente
                $latestCars = array_slice($cars, 0, 4);
                ?>
                <div class="row"> <!-- Fila contenedora para los usuarios -->
                    <?php foreach ($latestCars as $car): ?>
                        <div class="col-lg-3 col-sm-6"> <!-- 4 elementos por fila -->
                            <div class="card hover-shadow">
                                <img src="<?= htmlspecialchars($car['imagen']) ?>" alt="<?= htmlspecialchars($car['modelo']) ?>" class="card-img-top">
                                <div class="card-body text-center position-relative zindex-1">
                                    <p> <?= htmlspecialchars($car['modelo']) ?><?= htmlspecialchars($car['categoria']) ?> </p>
                                    <h4><a class="text-dark" href="team-single.html"><?= htmlspecialchars($car['precio_por_dia']) ?></a></h4>
                                    <i><?= htmlspecialchars($car['disponible']) ?></i>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div> <!-- Cierre de la fila contenedora -->
            </div>
        </section>
        <!-- /team -->
    </main>
    <?php include_once 'footer.php'; ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>
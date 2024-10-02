<?php
function sayHello($name) {
    echo "Hello, $name!";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visual Studio Code Remote :: PHP</title>
</head>
<body>
    <header>
        <img src="practicas/pac1-primera-app/img/logo-fpllefia.jpg" alt="Logo FPLlefia">
    </header>

    <main>
        <?php
        sayHello("remote world");
        phpinfo();
        ?>
        <div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim excepturi, aspernatur ipsum possimus ratione, magnam consequatur dolorum sint illum consectetur odit molestiae tempora nam dicta, quo dolore ullam rem eos.</p>
        </div>
    </main>

    <footer>
        <label>Sebastian Jesus Dayekh Martinez Numero 5</label><br>
        <?php
        echo "La fecha es: " . date("Y-m-d");
        ?>
    </footer>
</body>
</html>

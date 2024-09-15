<?php

function sayHello ($name) {
    echo "hello $name!";
}
?>


<html lang="es">
<head>

    <title>Visual Studio Code Remote :: PHP</title>
</head>
<body>
    <?php
    sayHello ("remote world");
    phpinfo();
    ?>
</body>
<footer>
    <label> Sebastian Jesus Dayekh Martinez Numero 5</label>
    <?php
    echo "la fecha es : ".date("Y-M-d");
?>
</footer>
</html>
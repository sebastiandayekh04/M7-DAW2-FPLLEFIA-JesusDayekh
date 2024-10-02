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
    <header>
    <img src="/workspaces/code-space-for-php-demo/practicas/pac1-primera-app/img/logo-fpllefia.jfif" alt="">

    </header>

    <main>
    <?php
    sayHello ("remote world");
    phpinfo();
    ?>
 <div><p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim excepturi, aspernatur ipsum possimus ratione, magnam consequatur dolorum sint illum consectetur odit molestiae tempora nam dicta, quo dolore ullam rem eos.</p></div>
    </main>

  <footer>
    <label> Sebastian Jesus Dayekh Martinez Numero 5</label>
    <?php
    echo "la fecha es : ".date("Y-M-d");
?>
</footer>  
</body>
</html>
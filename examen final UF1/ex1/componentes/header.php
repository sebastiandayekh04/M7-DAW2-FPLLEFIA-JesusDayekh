<?php 
if(!isset($_SESSION)) {
    session_start();
}

?>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" >
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/componentes/contacto.php">Contacto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/componentes/inicio.php">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/componentes/productos.php">Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/index.php">Index</a>
      </li>
    </ul>
  </div>
</nav>
</header>
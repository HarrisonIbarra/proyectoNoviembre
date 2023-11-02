<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../styles_cliente/index.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"/>
    <title>Página Principal</title>
  </head>

  <body>
    <header class="container-fluid contenedorHeader">
      <figure class="logoEncabezado">
        <a href="#"><img src="../imagenes/logo3.png" alt="" class="logo" /></a>
      </figure>
    </header>

    <nav class="container-fluid menu-horiz gridContainer">
    <ul class="nav nav-pills">
      <li class="nav-item itemText">
        <a class="nav-text" aria-current="page" href="../Cliente/index.php">Inicio</a>
      </li>
      <li class="nav-item itemText">
        <a class="nav-text" href="../Cliente/sobrenosotros.php">Sobre Nosostros</a>
      </li>
      <li class="nav-item itemText">
        <a class="nav-text" href="../Cliente/blog.php">Blog</a>
      </li>
      <li class="nav-item itemText">
        <a class="nav-text" href="#">Productos</a>
        <ul class="menuVertical">
          <li><a class="nav-text" href="../Cliente/accesorios.php">Accesorios</a></li>
          <li><a class="nav-text" href="../Cliente/repuestos.php">Repuestos</a></li>
          <li><a class="nav-text" href="../Cliente/indumentaria.php">Indumentaria</a></li>
        </ul>
      </li>
      <li class="nav-item itemText">
        <a class="nav-text" href="#">Servicios</a>
        <ul class="menuVertical">
          <li><a class="nav-text" href="../Cliente/servicio mecanico.php">Mecánicos</a></li>
          <li><a class="nav-text" href="../Cliente/servicio electrico.php">Eléctricos</a></li>
        </ul>
      </li>
      <li class="nav-item itemText">
        <a class="nav-text" href="../Cliente/contacto.php">Contactenos</a>
      </li>
    </ul>
  </nav>

    <script src="main.js"></script>
  </body>
</html>

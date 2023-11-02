<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mi Blog de Imágenes</title>
    <link rel="stylesheet" href="../styles_cliente/blog.css">
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
  <br><br>
    <header>
        <h1>Nuestro Blog</h1>
    </header>

    <div class="container">
        <h2>Entrada 1: Título de la Publicación</h2>
        <img class="blog-image" src="imagen1.jpg" alt="Imagen 1">
        <p>Descripción o texto relacionado con la imagen.</p>

        <h2>Entrada 2: Título de la Publicación</h2>
        <img class="blog-image" src="imagen2.jpg" alt="Imagen 2">
        <p>Descripción o texto relacionado con la imagen.</p>
    </div>
</body>
</html>
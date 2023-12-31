<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../imagenes/imagenes">
  <link rel="stylesheet" href="../styles_cliente/servicioelectrico.css">
  <title>SERVICIO-ELECTRICO</title>
</head>
<body>

  <header class="container-fluid contenedorHeader">
    <figure class="logoEncabezado">
        <a href="index.html"><img src="../imagenes/logo3.png" alt="" class="logo"></a>
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
  

  <!--nombre de los productos que estamos ofeciendo-->
  <!-- titulo de accesorios -->
  <div class="container-title text-center">
    <div class="row align-items-start">
  <div class="col">
    <h1 class="title">SERVICIO ELECTRICO</h1>
  </div>
  </div>
  </div>


  <!-- card modificar -->
  <!-- las cards donde mostramos los productos -->
  <div class="row col-ms-3 col-ms-3 col-ms-3 ">
    <div class="col">
      <!-- primer modal  -->
      <div class="card h-100">
        <img src="../imagenes/imagenes/moto1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h6 class="card-title">Título de la tarjeta</h6>
          <a class="btnCard" data-toggle="modal" data-target="#productModal">
            DETALLES
          </a>
        </div>
      </div>
    </div>
    <!-- segundo  modal  -->
    <div class="col">
      <div class="card h-100">
        <img src="../imagenes/imagenes/moto1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h6 class="card-title">Título de la tarjeta</h6>
          <a class="btnCard" data-toggle="modal" data-target="#productModal">
            DETALLES
          </a>
        </div>
      </div>
    </div>
    <!-- tercer modal  -->
    <div class="col">
      <div class="card h-100">
        <img src="../imagenes/imagenes/moto1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h6 class="card-title">Título de la tarjeta</h6>
          <a class="btnCard" data-toggle="modal" data-target="#productModal">
            DETALLES
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="row col-ms-3 col-ms-3 col-ms-3 ">
    <!-- cuarto modal -->
    <div class="col">
      <div class="card h-100">
        <img src="../imagenes/imagenes/moto1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h6 class="card-title">Título de la tarjeta</h6>
          <a class="btnCard" data-toggle="modal" data-target="#productModal">
            DETALLES
          </a>
        </div>
      </div>
    </div>
    <!-- quinto modal -->
    <div class="col">
      <div class="card h-100">
        <img src="../imagenes/imagenes/moto1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h6 class="card-title">Título de la tarjeta</h6>
          <a class="btnCard" data-toggle="modal" data-target="#productModal">
            DETALLES
          </a>
        </div>
      </div>
    </div>
    <!-- sexto modal -->
    <div class="col">
      <div class="card h-100">
        <img src="../imagenes/imagenes/moto1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h6 class="card-title">Título de la tarjeta</h6>
          <a class="btnCard" data-toggle="modal" data-target="#productModal">
            DETALLES
          </a>
        </div>
      </div>
    </div>
  </div>



  <!-- crreacion de los modales de donde me van a mostrar los detalles de los productos-->
  <!-- Modal 1-->
  <div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="productModalLabel">Detalle del Producto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!-- Contenido del detalle del producto -->
        <div class="modal-body">
          <!-- agregacion de columnas -->
          <div class="container text-center">
            <div class="row m-0">
              <div class="col-6 imagen-produ">
                <img src="../imagenes/imagenes/moto2.jpg" alt="">
              </div>
              <div class="col-6">
                <h3>Nombre del Producto</h3>
                <p>Descripción del producto.</p>
                <div class="description-modal">
                  <label class="talla align-items-start" for="">Talla:
                  </label><br>
                  <select name="Talla" id="Talla">
                    <option value="">S</option>
                    <option value="">M</option>
                    <option value="">L</option>
                    <option value="">XL</option>
                  </select>
                </div>
                <div class="description-modal">
                <label class="cantidad aling-items-start m-2" for="">Cantidad:</label>
                <input type="number" name="number" id="number">
              </div>
                <p>Precio: $99.99</p>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary agregar" data-dismiss="modal">agregar al carrito</button>
        </div>
      </div>
    </div>
  </div>

  <!-- modal2 -->
  <div class="modal fade" id="productModal2" tabindex="-1" role="dialog" aria-labelledby="productModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="productModalLabel">Detalle del Producto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Contenido del detalle del producto -->
          <!-- agregacion de columnas -->
          <div class="container text-center">
            <div class="row m-0">
              <div class="col-6 imagen-produ">
                <img src="../imagenes/imagenes/moto2.jpg" alt="">
              </div>
              <div class="col-6">
                <h3>Nombre del Producto</h3>
                <p>Descripción del producto.</p>
                <div class="description-modal">
                  <label class="talla align-items-start" for="">Talla:
                  </label><br>
                  <select name="Talla" id="Talla">
                    <option value="">S</option>
                    <option value="">M</option>
                    <option value="">L</option>
                    <option value="">XL</option>
                  </select>
                </div>
                <div class="description-modal">
                <label class="cantidad aling-items-start m-2" for="">Cantidad:</label>
                <input type="number" name="number" id="number">
              </div>
                <p>Precio: $99.99</p>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Agregar al carrito</button>
        </div>
      </div>
    </div>
  </div>

  <!-- modal 3 -->
  <div class="modal fade" id="productModal3" tabindex="-1" role="dialog" aria-labelledby="productModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="productModalLabel">Detalle del Producto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Contenido del detalle del producto -->
          <!-- agregacion de columnas -->
          <div class="container text-center">
            <div class="row m-0">
              <div class="col-6 imagen-produ">
                <img src="../imagenes/imagenes/moto2.jpg" alt="">
              </div>
              <div class="col-6">
                <h3>Nombre del Producto</h3>
                <p>Descripción del producto.</p>
                <div class="description-modal">
                  <label class="talla align-items-start" for="">Talla:
                  </label><br>
                  <select name="Talla" id="Talla">
                    <option value="">S</option>
                    <option value="">M</option>
                    <option value="">L</option>
                    <option value="">XL</option>
                  </select>
                </div>
                <div class="description-modal">
                <label class="cantidad aling-items-start m-2" for="">Cantidad:</label>
                <input type="number" name="number" id="number">
              </div>
                <p>Precio: $99.99</p>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Agregar al carrito</button>
        </div>
      </div>
    </div>
  </div>

  <!-- modal 4 -->
  <div class="modal fade" id="productModal4" tabindex="-1" role="dialog" aria-labelledby="productModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="productModalLabel">Detalle del Producto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Contenido del detalle del producto -->
          <!-- agregacion de columnas -->
          <div class="container text-center">
            <div class="row m-0">
              <div class="col-6 imagen-produ">
                <img src="../imagenes/imagenes/moto2.jpg" alt="">
              </div>
              <div class="col-6">
                <h3>Nombre del Producto</h3>
                <p>Descripción del producto.</p>
                <div class="description-modal">
                  <label class="talla align-items-start" for="">Talla:
                  </label><br>
                  <select name="Talla" id="Talla">
                    <option value="">S</option>
                    <option value="">M</option>
                    <option value="">L</option>
                    <option value="">XL</option>
                  </select>
                </div>
                <div class="description-modal">
                <label class="cantidad aling-items-start m-2" for="">Cantidad:</label>
                <input type="number" name="number" id="number">
              </div>
                <p>Precio: $99.99</p>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Agregar al carrito</button>
        </div>
      </div>
    </div>
  </div>

  <!-- modal 5 -->
  <div class="modal fade" id="productModal5" tabindex="-1" role="dialog" aria-labelledby="productModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="productModalLabel">Detalle del Producto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Contenido del detalle del producto -->
          <!-- agregacion de columnas -->
          <div class="container text-center">
            <div class="row m-0">
              <div class="col-6 imagen-produ">
                <img src="../imagenes/imagenes/moto2.jpg" alt="">
              </div>
              <div class="col-6">
                <h3>Nombre del Producto</h3>
                <p>Descripción del producto.</p>
                <div class="description-modal">
                  <label class="talla align-items-start" for="">Talla:
                  </label><br>
                  <select name="Talla" id="Talla">
                    <option value="">S</option>
                    <option value="">M</option>
                    <option value="">L</option>
                    <option value="">XL</option>
                  </select>
                </div>
                <div class="description-modal">
                <label class="cantidad aling-items-start m-2" for="">Cantidad:</label>
                <input type="number" name="number" id="number">
              </div>
                <p>Precio: $99.99</p>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Agregar al carrito</button>
        </div>
      </div>
    </div>
  </div>

  <!-- modal 6 -->
  <div class="modal fade" id="productModal6" tabindex="-1" role="dialog" aria-labelledby="productModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="productModalLabel">Detalle del Producto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Contenido del detalle del producto -->
          <!-- agregacion de columnas -->
          <div class="container text-center">
            <div class="row m-0">
              <div class="col-6 imagen-produ">
                <img src="../imagenes/imagenes/moto2.jpg" alt="">
              </div>
              <div class="col-6">
                <h3>Nombre del Producto</h3>
                <p>Descripción del producto.</p>
                <div class="description-modal">
                  <label class="talla align-items-start" for="">Talla:
                  </label><br>
                  <select name="Talla" id="Talla">
                    <option value="">S</option>
                    <option value="">M</option>
                    <option value="">L</option>
                    <option value="">XL</option>
                  </select>
                </div>
                <div class="description-modal">
                <label class="cantidad aling-items-start m-2" for="">Cantidad:</label>
                <input type="number" name="number" id="number">
              </div>
                <p>Precio: $99.99</p>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Agregar al carrito</button>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
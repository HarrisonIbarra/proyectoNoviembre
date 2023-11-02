<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles_administrador/inventario.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Inventario</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
        <nav class="col-md-2 sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="../Administrador/index.php">
                                <i class="fas fa-home"></i>
                                Inicio
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Administrador/usuarios.php">
                                <i class="fas fa-users"></i>
                                Usuarios
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Administrador/empleado.php">
                                <i class="fas fa-user-tie"></i>
                                Empleados
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Administrador/RegistroEmpleado/registro.php">
                                <i class="fas fa-user-plus"></i>
                                Registro empleado
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Administrador/inventario.php">
                                <i class="fas fa-box"></i>
                                Inventario
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Administrador/productos.php">
                                <i class="fas fa-cube"></i>
                                Productos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Administrador/servicios.php">
                                <i class="fas fa-wrench"></i>
                                Servicios
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Administrador/orden-compra.php">
                                <i class="fas fa-file-alt"></i>
                                Orden de Compra
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Administrador/pedidos.php">
                                <i class="fas fa-shopping-cart"></i>
                                Pedidos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Administrador/envios.php">
                                <i class="fas fa-shipping-fast"></i>
                                Envíos
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 p-2 content">
                <div class="container mt-4">
                    <h2>Formulario de Producto</h2>
                    <form id="productForm" action="" onsubmit="return validarFormulario()" method="POST">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="nombreProducto">Nombre del producto</label>
                                    <input type="text" class="form-control" id="NombreProducto" name="NombreProducto">
                                </div>
                                <div class="form-group">
                                    <label for="referencia">Referencia del producto</label>
                                    <input type="text" class="form-control" id="Referencia" name="Referencia">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="cantidad">Cantidad</label>
                                    <input type="number" class="form-control" id="Cantidad" name="Cantidad">
                                </div>
                                <div class="form-group">
                                    <label for="precioUnitario">Precio Unitario</label>
                                    <input type="number" class="form-control" id="PrecioUnitario" name="PrecioUnitario">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="marca">Marca</label>
                                    <input type="text" class="form-control" id="Marca" name="Marca">
                                </div>
                                <div class="form-group">
                                    <label for="proveedor">Proveedor</label>
                                    <input type="text" class="form-control" id="Proveedor" name="Proveedor">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="idCategoria">ID de Categoría</label><br>
                                    <select id="IdCategoria" name="IdCategoria" style="height: 2.3rem; width: 12rem; border-radius: 5px;">
                                        <option value="1">Indumentaria</option>
                                        <option value="2">Repuestos</option>
                                        <option value="3">Accesorios</option>
                                    </select>
                                </div><br>
                                <button type="submit" onclick="validarFormulario" onsubmit="return validarFormulario()" class="btn btn-danger">
                                    <i class="fas fa-save"></i> Guardar
                                </button><br>
                                <!-- <button type="submit" onclick="location.reload();" class="btn btn-success">
                                    <i class="fas fa-sync"></i> Actualizar
                                </button> -->

                            </div>
                        </div>
                    </form>
                </div>
                <legend>______________________________________________________________________________________________</legend>
                <h1>Inventario registrado</h1>
                <?php
                $mysqli = new mysqli("localhost", "root", "Sena23", "proyectogpa");
                $mysqli->set_charset("utf8");
                if ($mysqli->connect_errno) {
                    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
                }
                // Manejar el filtro si se ha enviado
                if (isset($_GET['filtro']) && !empty($_GET['filtro'])) {
                    $filtro = $_GET['filtro'];
                    $query = "SELECT * FROM usuarios WHERE usuNombre LIKE '%$filtro%'";
                } else {
                    $query = "SELECT * FROM Usuarios";
                }

                $result = $mysqli->query($query);

                //filtro para buscar algun usuario a editar, eliminar, actualizar

                echo '<form method="GET" action="">
                    <input type="text" name="filtro" placeholder="Buscar por Nombre">
                    <i class="fas fa-search btn btn-outline-dark"></i>
                </form> <br>';
                if ($result) {
                    echo "<table  class='table table-bordered' border='1'>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Referencia</th>
                    <th>Cantidad</th>
                    <th>Precio Unitario</th>
                    <th>Marca</th>
                    <th>Proveedor</th>
                    <th>ID de la Categoría</th>
                    <th>Editar/Eliminar</th>
                </tr>";

                    while ($row = $result->fetch_assoc()) {
                   // echo "<tr>
                    //<td>" . $row['idProducto'] . "</td>
                    //<td>" . $row['proNombre'] . "</td>
                    //<td>" . $row['proReferencia'] . "</td>
                    //<td>" . $row['proCantidad'] . "</td>
                    //<td>" . $row['proPrecioUnitario'] . "</td>
                    //<td>" . $row['proMarca'] . "</td>
                    //<td>" . $row['proProveedor'] . "</td>
                    //<td>" . $row['idcategoria'] . "</td>
                    //<td><a class='btn btn-warning' href='editar.php?id=" . $row['idProducto'] . "'><i class='fas fa-edit'></i></a> | <a class=' btn btn-danger' href='eliminar.php?id=" . $row['idProducto'] . "'><i class='fas fa-trash-alt'></i></a></td>
                //</tr>";
                    }

                    echo "</table>";
                    $result->free();
                }

                $mysqli->close();
                ?>


            </main>
        </div>
    </div>

    <script src=" https://unpkg.com/sweetalert/dist/sweetalert.min.js "> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!-- <script>
        // const sidebar = document.querySelector('.sidebar');
        // const content = document.querySelector('.content');

        // sidebar.addEventListener('click', (e) => {
        //     if (e.target.tagName === 'A') {
        //         content.innerHTML = `<h1>${e.target.innerText}</h1>`;
        //     }
        // });
    </script>
    <script>
        function reloadPage() {
            location.reload();
        }
    </script> -->
    <script>
        function validarFormulario() {
            var NombreProducto = document.getElementById('NombreProducto').value;
            var Referencia = document.getElementById('Referencia').value;
            var Cantidad = document.getElementById('Cantidad').value;
            var PrecioUnitario = document.getElementById('PrecioUnitario').value;
            var Marca = document.getElementById('Marca').value;
            var Proveedor = document.getElementById('Proveedor').value;
            var IdCategoria = document.getElementById('IdCategoria').value;

            // Validar que los campos no estén vacíos
            if (!NombreProducto || !Referencia || !Cantidad || !PrecioUnitario || !Marca || !Proveedor || !IdCategoria) {
                swal("Por favor", "Complete todos los campos.", "error", {
                    buttons: false,
                });
                return false;
            }

            // Validar que la cantidad y el precio unitario sean números positivos
            if (Cantidad <= 0 || PrecioUnitario <= 0) {
                swal("La cantidad y el precio unitario deben ser números positivos.");
                return false;
            }

            // Puedes agregar más validaciones según tus requerimientos

            // Si todo está correcto, puedes enviar el formulario
            swal("Producto guardado exitosamente");
            return true;

            $.ajax({
                url: `../Contrels/Crear_Producto.php?Nombreproducto=${proNombre}&Referencia=${proReferencia}&Cantidad=${proCantidad}&PrecioUnitario=${proPrecioUnitario}&Marca=${proMarca}&Proveedor =${proProveedo}&IdCategoria=${idcategoria}`,
                type: 'POST',
                dataType: 'json',
                success: function(json) {
                    console.log(json);
                    if (json == 0) {
                        swal('El Producto ya se encuentra registrado');
                    } else {
                        swal('Producto registrado con exito');
                    }
                },
                error: function(_xhr, status) {
                    // console.log('Disculpe, existió un problema');
                    // $('#titulo').html('Correo Registrado Correctamente');
                    // location.href = '../vistas/login.html';


                },
                // código a ejecutar sin importar si la petición falló o no
                complete: function(xhr, status) {
                    //console.log('Consulta hecha');
                }
            });
        }
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Registro</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="../index.php">
                                <i class="fas fa-home"></i>
                                Inicio
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../usuarios.php">
                                <i class="fas fa-users"></i>
                                Usuarios
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../empleado.php">
                                <i class="fas fa-user-tie"></i>
                                Empleados
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../RegistroEmpleado/registro.php">
                                <i class="fas fa-user-plus"></i>
                                Registro empleado
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../inventario.php">
                                <i class="fas fa-box"></i>
                                Inventario
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../productos.php">
                                <i class="fas fa-cube"></i>
                                Productos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../servicios.php">
                                <i class="fas fa-wrench"></i>
                                Servicios
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../orden-compra.php">
                                <i class="fas fa-file-alt"></i>
                                Orden de Compra
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../pedidos.php">
                                <i class="fas fa-shopping-cart"></i>
                                Pedidos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../envios.php">
                                <i class="fas fa-shipping-fast"></i>
                                Envíos
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 p-4 content">
                <h1>Registro de empleado</h1>
                <form action="registrar.php" id="formulario" method="post">
                <div style="float: left; width: 30%;">
                    <label for="Nombre">Nombres:</label><br>
                    <input type="text" id="Nombre" name="Nombre"><br><br>

                    <label for="Apellidos">Apellidos:</label><br>
                    <input type="text" id="Apellidos" name="Apellidos"><br><br>

                    <label for="Edad">Edad:</label><br>
                    <input type="number" id="Edad" name="Edad"><br><br>

                    <label for="Direccion">Dirección:</label><br>
                    <input type="text" id="dDreccion" name="Direccion"><br><br>

                    <label for="Tipo_Documento">Tipo de Documento:</label><br>
                    <select id="Tipo_Documento" name="Tipo_Documento">
                        <option value="dni">DNI</option>
                        <option value="pasaporte">Pasaporte</option>
                        <option value="otro">Otro</option>
                    </select><br><br>
                </div>
                <div style="float: left; width: 30%;">
                    <label for="Numero_Documento">Número de Documento:</label><br>
                    <input type="text" id="Numero_Documento" name="Numero_Documento"><br><br>

                    <label for="Telefono">Teléfono:</label><br>
                    <input type="tel" id="Telefono" name="Telefono"><br><br>

                    <label for="Tipo_Contrato">Tipo de Contrato:</label><br>
                    <input type="text" id="Tipo_Contrato" name="Tipo_Contrato"><br><br>

                    <label for="Sueldo">Sueldo:</label><br>
                    <input type="number" id="Sueldo" name="Sueldo"><br><br>

                    <label for="Cargo">Cargo:</label><br>
                    <input type="text" id="Cargo" name="Cargo"><br><br>

                    <input type="submit" value="Enviar">
                </div>
                <div style="float: left; width: 30%;">
                <img src="/Views/imagenes/empleado.png" alt="">
                </div>
                </form>
            </main>
        </div>
    </div>





    <script src=" https://unpkg.com/sweetalert/dist/sweetalert.min.js "> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <script>
        const sidebar = document.querySelector('.sidebar');
        const content = document.querySelector('.content');

        sidebar.addEventListener('click', (e) => {
            if (e.target.tagName === 'A') {
                content.innerHTML = `<h1>${e.target.innerText}</h1>`;
            }
        });
    </script>
    <script src="empleado.js"></script>
</body>

</html>
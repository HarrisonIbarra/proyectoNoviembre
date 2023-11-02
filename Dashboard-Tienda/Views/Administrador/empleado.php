<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles_administrador/empleado.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Empleados</title>
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

            <main role="main" class="col-md-9  content">
                <!-- TITULO DE EMPLEADOS REGISTRADOS -->
                <h2>Empleados registrados</h2>
                <!--CRUD PARA EL LLAMADO DE LOS DATOS DE LAS BASES DE DATOS   -->
                <?php
                $mysqli = new mysqli("localhost", "root", "Sena23", "gpamotors");
                $mysqli->set_charset("utf8");
                if ($mysqli->connect_errno) {
                    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
                }
                if (isset($_GET['filtro']) && !empty($_GET['filtro'])) {
                    $filtro = $_GET['filtro'];
                    $query = "SELECT * FROM empleados WHERE Apellidos LIKE '%$filtro%'";
                } else {
                    $query = "SELECT * FROM empleados";
                }

                $result = $mysqli->query($query);

                //filtro para buscar algun usuario a editar, eliminar, actualizar

                echo '<form method="GET" action="">
                    <input type="text" name="filtro" placeholder="Buscar por Nombre">
                    <i class="fas fa-search btn btn-outline-dark"></i>
                </form> <br>';

                echo "<table class='table table-info table-striped-columns' border=''>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Edad</th>
                    <th>Dirección</th>
                    <th>Tipo de Documento</th>
                    <th>Número de Documento</th>
                    <th>Teléfono</th>
                    <th>Cargo</th>
                    <th>Editar/Eliminar</th>
                </tr>";

                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                    <td>" . $row['id'] . "</td>
                    <td>" . $row['Nombre'] . "</td>
                    <td>" . $row['Apellidos'] . "</td>
                    <td>" . $row['Edad'] . "</td>
                    <td>" . $row['Direccion'] . "</td>
                    <td>" . $row['Tipo_Documento'] . "</td>
                    <td>" . $row['Numero_Documento'] . "</td>
                    <td>" . $row['Telefono'] . "</td>
                    <td>" . $row['Cargo'] . "</td>
                    <td><a class='btn btn-warning icon' href='editar.php?id=" . $row['id'] . "'><i class='fas fa-edit'></i></a> | <a class=' btn btn-danger icon' href='eliminar.php?id=" . $row['id'] . "'><i class='fas fa-trash-alt'></i></a></td>
                 </tr>";
                }
                echo "</table>";
                $result->free_result();
                $mysqli->close();
                ?>
            </main>
        </div>
    </div>
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
    <!-- <script>
        function reloadPage() {
            location.reload();
        }
    </script> -->

    <script>
        function validarFormulario() {
            var Nombre = document.getElementById('Nombre').value;
            var Apellidos = document.getElementById('Apellidos').value;
            var Edad = document.getElementById('Edad').value;
            var Fecha_Nacimiento = document.getElementById('Fecha_Nacimiento').value;
            var Direccion = document.getElementById('Direccion').value;
            var Tipo_Documento = document.getElementById('Tipo_Documento').value;
            var Numero_Documento = document.getElementById('Numero_Documento').value;
            var Telefono = document.getElementById('Telefono').value;
            var Tipo_Contrato = document.getElementById('Tipo_Contrato').value;
            var Sueldo = document.getElementById('Sueldo').value;
            var Cargo = document.getElementById('Cargo').value;
            // Validación de campos (puedes agregar más validaciones según tus requerimientos)
            if (!nombre || !apellidos || !edad || !fechaNacimiento || !direccion || !tipoDocumento ||
                !numeroDocumento || !telefono || !tipoContrato || !sueldo || !cargo) {
                alert('Todos los campos son obligatorios.');
                return false;
            }

            // Validar que la edad sea un número positivo
            if (edad <= 0) {
                alert('La edad debe ser un número positivo.');
                return false;
            }

            // Validar que el sueldo sea un número positivo
            if (sueldo <= 0) {
                alert('El sueldo debe ser un número positivo.');
                return false;
            }

            // Puedes agregar más validaciones según tus requerimientos

            // Si todo está correcto, puedes enviar el formulario
            alert('Empleado guardado exitosamente.');
            return true;
        }
    </script>
</body>
<style>
.EmpleadoR{
    color: white;
    background-color: #fa0303 !important;
    margin-left: 40rem;
    border: none;
    width: 12rem;
    height: 2rem !important;
    border-radius: 5px;
}
.EmpleadoR:hover{
    background-color: black;

}
</style>
</html>
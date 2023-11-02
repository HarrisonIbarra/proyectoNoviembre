<?php
include_once '../Models/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $token = $conn->real_escape_string($_POST['token']);
    $contrasena = password_hash($conn->real_escape_string($_POST['password']), PASSWORD_BCRYPT);

    // Actualizar la contraseña en la base de datos basándose en el token proporcionado

    $sql = "UPDATE usuarios SET contrasena = '$contrasena' WHERE token = '$token'";
    if ($conn->query($sql) === TRUE) {
        echo "Contraseña restablecida con éxito.";
    } else {
        echo "Error al restablecer la contraseña: " . $conn->error;
    }
}
?>

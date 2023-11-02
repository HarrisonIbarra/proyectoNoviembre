<?php
$Nombre=isset($_POST['Nombre']) ? $_POST['Nombre'] : '';
$Apellidos=isset($_POST['Apellidos']) ? $_POST['Apellidos'] : '';
$Edad=isset($_POST['Edad']) ? $_POST['Edad'] : '';
$Direccion=isset($_POST['Direccion']) ? $_POST['Direccion'] : '';
$Tipo_Documento=isset($_POST['Tipo_Documento']) ? $_POST['Tipo_Documento'] : '';
$Numero_Documento=isset($_POST['Numero_Documento']) ? $_POST['Numero_Documento'] : '';
$Telefono=isset($_POST['Telefono']) ? $_POST['Telefono'] : '';
$Tipo_Contrato=isset($_POST['Tipo_Contrato']) ? $_POST['Tipo_Contrato'] : '';
$Sueldo=isset($_POST['Sueldo']) ? $_POST['Sueldo'] : '';
$Cargo=isset($_POST['Cargo']) ? $_POST['Cargo'] : '';

try{
    $conexion = new PDO('mysql:host=localhost; port=3306; dbname=proyectogpa;', 'root', 'Sena23');
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    $pdo = $conexion->prepare('INSERT INTO empleados (Nombre,Apellidos,Edad,Direccion,Tipo_Documento,Numero_Documento,Telefono,Tipo_Contrato,Sueldo,Cargo)
    values (:Nombre,:Apellidos,:Edad,:Direccion,:Tipo_Documento,:Numero_Documento,:Telefono,:Tipo_Contrato,:Sueldo,:Cargo)');
    
    $pdo->bindParam(':Nombre',$Nombre);
    $pdo->bindParam(':Apellidos',$Apellidos);
    $pdo->bindParam(':Edad',$Edad);
    $pdo->bindParam(':Direccion',$Direccion);
    $pdo->bindParam(':Tipo_Documento',$Tipo_Documento);
    $pdo->bindParam(':Numero_Documento',$Numero_Documento);
    $pdo->bindParam(':Telefono',$Telefono);
    $pdo->bindParam(':Tipo_Contrato',$Tipo_Contrato);
    $pdo->bindParam(':Sueldo',$Sueldo);
    $pdo->bindParam(':Cargo',$Cargo);
    $pdo->execute();

    echo json_encode('true');

    

}catch(PDOException $error){
    echo "Error: ".$e->getMessage();
    die();
}
<?php
require("../config/connect_db.php");
// Verificar si se han recibido los datos del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $password = $_POST['password_hash'];
    $email = $_POST['email'];
    $rol = $_POST['rol_id'];
    $cedula = $_POST['cedula'];
    $nombres = $_POST['nombres'];
    $telefono = $_POST['telefono'];
    $sexo = $_POST['sexo'];
    $carrera = $_POST['carrera'];
    $estado = $_POST['estado'];

    // Aquí puedes realizar las operaciones de actualización del usuario en la base de datos

    // Construir la consulta SQL de actualización
    $sql = "UPDATE login SET password_hash='$password', email='$email', rol_id='$rol', cedula='$cedula', nombres='$nombres', telefono='$telefono', Sexo='$sexo', carrera='$carrera', estado='$estado' WHERE cedula='$cedula'";

    // Ejecutar la consulta y manejar los resultados
    if (mysqli_query($mysqli, $sql)) {
        echo "Usuario actualizado correctamente";
    } else {
        echo "Error al actualizar el usuario: " . mysqli_error($mysqli);
    }
}
?>

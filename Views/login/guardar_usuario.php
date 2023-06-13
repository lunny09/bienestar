<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}

require("connect_db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los datos del formulario
    $cedula = $_POST['cedula'];
    $password_hash = $_POST['password_hash'];
    $email = $_POST['email'];
    $nombres = $_POST['nombres'];
    $telefono = $_POST['telefono'];
    $sexo = $_POST['sexo'];
    $rol = $_POST['rol'];
    $carrera = $_POST['carrera'];
    // Insertar el nuevo usuario en la base de datos
    $sql = "INSERT INTO login (cedula, password_hash, email, nombres, telefono, sexo, rol, carrera) VALUES ('$cedula', '$password_hash', '$email', '$nombres', '$telefono', '$sexo', '$rol', '$carrera')";
    if (mysqli_query($mysqli, $sql)) {
        echo '<script>alert("Usuario agregado correctamente")</script>';
        echo "<script>location.href='admin.php'</script>";
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
}

mysqli_close($mysqli);
?>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
if (!isset($_SESSION['user'])) {
    header("Location: ../views/login/index.php");
    exit;
}

require("../config/connect_db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cedula = $_POST['cedula'];
    $password_hash = $_POST['password_hash'];
    $email = $_POST['email'];
    $nombres = $_POST['nombres'];
    $telefono = $_POST['telefono'];
    $sexo = $_POST['sexo'];
    $rol_id = $_POST['rol_id'];
    $carrera = $_POST['carrera'];

    $sql = "INSERT INTO login (cedula, password_hash, email, nombres, telefono, sexo, rol_id, carrera) VALUES ('$cedula', '$password_hash', '$email', '$nombres', '$telefono', '$sexo', '$rol_id', '$carrera')";
    if (mysqli_query($mysqli, $sql)) {
        echo '<script>alert("Usuario agregado correctamente")</script>';
        echo "<script>location.href='../views/admin/admin.php'</script>";
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
}

mysqli_close($mysqli);
?>

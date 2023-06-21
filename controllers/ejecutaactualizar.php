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

    $sql = "UPDATE login SET password_hash = '$password_hash', email = '$email', nombres = '$nombres', telefono = '$telefono', sexo = '$sexo', rol_id = '$rol_id', carrera = '$carrera' WHERE cedula = '$cedula'";
    if (mysqli_query($mysqli, $sql)) {
        echo '<script>alert("Usuario actualizado correctamente")</script>';
        echo "<script>location.href='../views/admin/admin.php'</script>";
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
}

mysqli_close($mysqli);
?>

<?php
session_start();
require("../config/connect_db.php");

$username = $_POST['mail'];
$pass = $_POST['pass'];

$sql2 = mysqli_query($mysqli, "SELECT * FROM login WHERE email='$username'");
if ($f2 = mysqli_fetch_assoc($sql2)) {
    if ($pass == $f2['pasadmin']) {
        $_SESSION['id'] = $f2['id'];
        $_SESSION['user'] = $f2['user'];
        $_SESSION['rol_id'] = $f2['rol_id'];

        echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script>';
        echo "<script>location.href='../views/admin/admin.php'</script>";
    }
}

$sql = mysqli_query($mysqli, "SELECT * FROM login WHERE email='$username'");
if ($f = mysqli_fetch_assoc($sql)) {
    if ($pass == $f['password_hash']) {
        $_SESSION['id'] = $f['id'];
        $_SESSION['user'] = $f['user'];
        $_SESSION['rol_id'] = $f['rol_id'];

        if ($f['rol_id'] == 1) {
            echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script>';
            echo "<script>location.href='../views/admin/admin.php'</script>";
        } elseif ($f['rol_id'] == 2) {
            echo '<script>alert("BIENVENIDO PACIENTE")</script>';
            echo "<script>location.href='../views/paciente/paciente.php'</script>";
        } elseif ($f['rol_id'] == 3) {
            echo '<script>alert("BIENVENIDO PSICÓLOGO")</script>';
            echo "<script>location.href='../views/psicologo/psicologo.php'</script>";
        }
    } else {
        echo '<script>alert("CONTRASEÑA INCORRECTA")</script>';
        echo "<script>location.href='../views/login/index.php'</script>";
    }
} else {
    echo '<script>alert("ESTE USUARIO NO EXISTE, POR FAVOR REGISTRESE PARA PODER INGRESAR")</script>';
    echo "<script>location.href='../views/login/index.php'</script>";
}
?>

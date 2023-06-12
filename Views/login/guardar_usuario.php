<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}

require("connect_db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los datos del formulario
    $user = $_POST['user'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // Insertar el nuevo usuario en la base de datos
    $sql = "INSERT INTO login (user, password, email) VALUES ('$user', '$password', '$email')";
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

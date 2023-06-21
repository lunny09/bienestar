<?php
require("../config/connect_db.php");

// Verificar si se han recibido los datos del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    // ...
} else {
    // Obtener los datos existentes del usuario para mostrar en el formulario
    if (isset($_GET['cedula'])) {
        $cedula = $_GET['cedula'];

        // Construir la consulta SQL para obtener los datos del usuario
        $sql = "SELECT * FROM login WHERE cedula='$cedula'";

        // Ejecutar la consulta
        $result = mysqli_query($mysqli, $sql);

        // Verificar si se encontraron resultados
        if ($result && mysqli_num_rows($result) > 0) {
            // Obtener los datos del usuario
            $row = mysqli_fetch_assoc($result);

            // Asignar los valores a las variables
            $password = $row['password_hash'];
            $email = $row['email'];
            $rol = $row['rol_id'];
            $nombres = $row['nombres'];
            $telefono = $row['telefono'];
            $sexo = $row['Sexo'];
            $carrera = $row['carrera'];
            $estado = $row['estado'];
        } else {
            // No se encontraron datos del usuario
            echo "No se encontraron datos del usuario";
        }
    } else {
        // No se recibió el valor de cedula en la URL
        echo "No se recibió el valor de cedula";
    }
}
?>

<!-- Resto del código HTML -->

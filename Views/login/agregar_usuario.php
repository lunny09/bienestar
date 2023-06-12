<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION['user'])) {
	header("Location:index.php");
} elseif ($_SESSION['rol'] == 2) {
	header("Location:index2.php");
}
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>BIENESTAR ESTUDIANTIL - Agregar Usuario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/css/menu.css">
</head>
<body>
    <?php include("../../include/menu.php"); ?>
    <div class="row">
        <div class="span12">
            <div class="caption">
                <span><h2>Agregar Usuario</h2></span>
                <div class="well well-small">
                    <form action="guardar_usuario.php" method="POST">
                        <div class="form-group">
                            <label for="usuario">Usuario:</label>
                            <input type="text" name="user" id="usuario" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña:</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="correo">Correo:</label>
                            <input type="email" name="email" id="correo" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script type="text/javascript" src="../../Assets/js/menu.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

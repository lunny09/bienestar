<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: ../login/index.php");
} elseif ($_SESSION['rol_id'] == 2) {
    header("Location: ../login/index2.php");
}
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>BIENESTAR ESTUDIANTIL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/css/menu.css">
</head>
<body>
    <?php
    include("../../include/menu.php");
    ?>
    <div class="table-container">
    <div class="row">
        <div class="span12">
            <div class="caption">
                <span><h2>Administración de usuarios registrados</h2></span>
                <div class="well well-small">
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Agregar Usuario</a>
                    <hr class="soft"/>
                    <h4>Tabla de Usuarios</h4>
                    <div class="row-fluid">
                        <?php
                        require("../../config/connect_db.php");
                        $sql = "SELECT * FROM login";
                        $query = mysqli_query($mysqli, $sql);
                        echo "<table class='table'>";
                        echo "<thead>";
                        echo "<tr>";
                        echo "<th scope='col'>Cedula</th>";
                        echo "<th scope='col'>Correo</th>";
                        echo "<th scope='col'>Nombres y apellidos</th>";
                        echo "<th scope='col'>Telefono</th>";
                        echo "<th scope='col'>Sexo</th>";
                        echo "<th scope='col'>Carrera</th>";
                        echo "<th scope='col'>Rol</th>";
                        echo "<th scope='col'>Editar</th>";
                        echo "<th scope='col'>Borrar</th>";
                        echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        ?>
                        <?php
                       while ($arreglo = mysqli_fetch_array($query)) {
                        echo "<tr>";
                        echo "<th scope='row'>$arreglo[6]</th>"; // Cedula
                        echo "<td>$arreglo[3]</td>"; // Correo
                        echo "<td>$arreglo[7]</td>"; // Nombres y apellidos
                        echo "<td>$arreglo[8]</td>"; // Telefono
                        echo "<td>$arreglo[9]</td>"; // Sexo
                        echo "<td>$arreglo[10]</td>"; // Carrera
                        echo "<td>$arreglo[5]</td>"; // rol
                        echo "<td><a href='actualizar.php?id=$arreglo[0]'><img src='../../Assets/images/edit.png' class='img-rounded'></a></td>";
                        echo "<td><a href='admin.php?id=$arreglo[0]&idborrar=2'><img src='../../Assets/images/delete.png' class='img-rounded'/></a></td>";
                        echo "</tr>";
                    }
                    
                        echo "</tbody>";
                        echo "</table>";
                        extract($_GET);
                        if (isset($idborrar) && $idborrar == 2) {
                            $sqlborrar = "DELETE FROM login WHERE id=$id";
                            $resborrar = mysqli_query($mysqli, $sqlborrar);
                            echo '<script>alert("REGISTRO ELIMINADO")</script> ';
                            echo "<script>location.href='admin.php'</script>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Agregar Usuario</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="../../controllers/guardar_usuario.php" method="POST">
                    <div class="form-group">
                            <label for="cedula">Cedula:</label>
                            <input type="text" name="cedula" id="cedula" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña:</label>
                            <input type="password" name="password_hash" id="password_hash" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="correo">Correo:</label>
                            <input type="email" name="email" id="correo" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="nombres">Nombres y apellidos:</label>
                            <input type="text" name="nombres" id="nombres" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="telefono">Teléfono:</label>
                            <input type="text" name="telefono" id="telefono" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="sexo">Sexo:</label>
                            <select name="sexo" id="sexo" class="form-control" required>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="rol_id">rol_id:</label>
                            <select name="rol_id" id="rol_id" class="form-control" required>
                                <option value="2">Paciente</option>
                                <option value="3">Psicologo</option>
                                <option value="1">Administrador</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="carrera">Carrera:</label>
                            <select name="carrera" id="carrera" class="form-control" required>
                            <option value="Desarrollo de software">Desarrollo de software</option>
                            <option value="Diseño de modas">Diseño de modas</option>
                            <option value="Marketing">Marketing</option>
                            <option value="Gastronomia">Gastronomia</option>
                            <option value="Turismo">Turismo</option>
                            <option value="Bonberos">Bonberos</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

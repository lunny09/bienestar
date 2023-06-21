<?php
session_start();
require_once('../../controllers/pagination.php');

if (!isset($_SESSION['user'])) {
    header("Location: ../login/index.php");
} elseif ($_SESSION['rol_id'] == 2) {
    header("Location: ../login/index2.php");
}

require("../../config/connect_db.php");

// Verificar si se ha enviado el parámetro 'idborrar' para eliminar un registro
if (isset($_GET['idborrar']) && $_GET['idborrar'] == 2) {
    $id = $_GET['id']; // Obtener el ID del registro a eliminar

    // Realizar la eliminación del registro utilizando el ID
    $eliminar = mysqli_query($mysqli, "DELETE FROM login WHERE id = $id");

    // Verificar si la eliminación fue exitosa y redirigir a la página actual
    if ($eliminar) {
        header("Location: $_SERVER[PHP_SELF]");
        exit();
    } else {
        // Mostrar un mensaje de error si la eliminación falló
        echo "Error al eliminar el registro.";
    }
}

$registros_por_pagina = 5;
$pagina_actual = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($pagina_actual - 1) * $registros_por_pagina;

// Obtener el término de búsqueda si se ha enviado
$term = isset($_GET['search']) ? $_GET['search'] : '';

// Consulta SQL para obtener los registros filtrados por término de búsqueda y estado activo
$sql = "SELECT * FROM login WHERE cedula LIKE '%$term%' AND estado = 1 LIMIT $offset, $registros_por_pagina";
$query = mysqli_query($mysqli, $sql);

if ($query) {
    // Consulta SQL para contar el total de registros filtrados por término de búsqueda y estado activo
    $total_registros = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM login WHERE cedula LIKE '%$term%' AND estado = 1"));

    $paginas_totales = ceil($total_registros / $registros_por_pagina);
} else {
    echo "Error en la consulta SQL: " . mysqli_error($mysqli);
    exit();
}
?>

<!DOCTYPE html>
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
    <?php 
    include '../modales/modal_agregar.php'; 
    ?>
    <div class="table-container">
        <div class="row">
            <div class="span12">
                <div class="caption">
                    <h2>Administración de usuarios registrados</h2>
                </div>
                <div class="button-container">
                <a href="#" class="btn btn-primary" id="boton" data-toggle="modal" data-target="#myModal">Agregar Usuario</a>
                    <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="num" name="search" class="form-control" id="search" placeholder="Numero de cedula">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary">Buscar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                    <div class="well well-small">
                        <hr class="soft"/>
                        <h4>Tabla de Usuarios</h4>
                        <div class="row-fluid">
                            <?php
                            echo "<table class='table table-bordered border-dark'>";
                            echo "<thead>";
                            echo "<tr>";
                            echo "<th scope='col'>Cedula</th>";
                            echo "<th scope='col'>Correo</th>";
                            echo "<th scope='col'>Nombres y apellidos</th>";
                            echo "<th scope='col'>Telefono</th>";
                            echo "<th scope='col'>Sexo</th>";
                            echo "<th scope='col'>Carrera</th>";
                            echo "<th scope='col'>Rol</th>";
                            echo "<th scope='col'>Estado</th>"; // Nueva columna para el estado
                            echo "<th scope='col'>Editar</th>";
                            echo "<th scope='col'>Borrar</th>";
                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            
                            while ($arreglo = mysqli_fetch_array($query)) {
                                echo "<tr>";
                                echo "<th scope='row'>$arreglo[6]</th>"; // Cedula
                                echo "<td>$arreglo[3]</td>"; // Correo
                                echo "<td>$arreglo[7]</td>"; // Nombres y apellidos
                                echo "<td>$arreglo[8]</td>"; // Telefono
                                echo "<td>$arreglo[9]</td>"; // Sexo
                                echo "<td>$arreglo[10]</td>"; // Carrera
                                echo "<td>$arreglo[5]</td>"; // Rol
                            
                                // Columna para el estado del usuario
                                $estado = $arreglo['estado']; // Ajusta el nombre del campo según tu estructura de base de datos
                                $estadoTexto = ($estado == 1) ? 'Activo' : 'Inactivo';
                                echo "<td>$estadoTexto</td>";
                            
                                echo "<td><a href='../../controllers/actualizar.php?id=$arreglo[0]'><img src='../../Assets/images/edit.png' class='img-rounded'/></a></td>";
                                echo "<td><a href='?id=$arreglo[0]&idborrar=2' onclick='return confirmar()'><img src='../../Assets/images/delete.png' class='img-rounded'/></a></td>";
                                echo "</tr>";
                            }
                            
                            echo "</tbody>";
                            echo "</table>";
                            

                            if ($total_registros > 0) {
                                echo "<div class='pagination'>";
                                generatePagination($paginas_totales, $pagina_actual);
                                echo "</div>";
                            } else {
                                echo "<p>No se encontraron registros.</p>";
                            }
                            ?>

                            <script type="text/javascript">
                                function confirmar() {
                                    return confirm('¿Estás seguro de que deseas eliminar este registro?');
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

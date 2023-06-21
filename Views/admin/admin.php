<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: ../login/index.php");
} elseif ($_SESSION['rol_id'] == 2) {
    header("Location: ../psicologo/index2.php");
}
?>
<?php
require_once("../../config/connect_db.php");
require("../../controllers/buscar_borrar.php");
require_once('../../controllers/pagination.php');
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
    <?php include("../../include/menu.php"); ?>
    <?php include '../modales/modal_agregar.php'; ?>
    <?php include '../modales/modal_actualizar.php'; ?>
    
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
                        echo "<th scope='col'>Estado</th>";
                        echo "<th scope='col'>Editar</th>";
                        echo "<th scope='col'>Borrar</th>";
                        echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        
                        while ($arreglo = mysqli_fetch_array($query)) {
                            echo "<tr>";
                            echo "<th scope='row'>$arreglo[6]</th>";
                            echo "<td>$arreglo[3]</td>";
                            echo "<td>$arreglo[7]</td>";
                            echo "<td>$arreglo[8]</td>";
                            echo "<td>$arreglo[9]</td>";
                            echo "<td>$arreglo[10]</td>";
                            echo "<td>$arreglo[5]</td>";
                        
                            $nuevoEstado = ($arreglo[11] == 2) ? "Inactivo" : "Activo";

                            // Devolver el nuevo estado como respuesta
                            echo "<td>$nuevoEstado</td>";
                        
                            echo '<td><a href="#" data-toggle="modal" data-target="#actualizarModal"><img src="../../Assets/images/edit.png" class="img-rounded"/></a></td>'; 

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
    <script src="../../Assets/js/estado.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

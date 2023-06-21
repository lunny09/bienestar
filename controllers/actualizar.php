<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION['user'])) {
	header("Location:../views/login/index.php");
}
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Proyecto Academias</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
</head>
<body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">
<div class="container">
    <header class="header">
        <div class="row">

    </header>

    <!-- Navbar -->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container">
                <div class="nav-collapse">
                    <ul class="nav">
                        <li class=""><a href="admin.php">ADMINISTRADOR DEL SITIO</a></li>
                    </ul>
                    <form action="#" class="navbar-search form-inline" style="margin-top:6px">

                    </form>
                    <ul class="nav pull-right">
                        <li><a href="">Bienvenido <strong><?php echo $_SESSION['user']; ?></strong> </a></li>
                        <li><a href="desconectar.php"> Cerrar Sesión </a></li>
                    </ul>
                </div><!-- /.nav-collapse -->
            </div>
        </div><!-- /navbar-inner -->
    </div>

    <!-- ======================================================================================================================== -->
    <div class="row">
        <div class="span12">
            <div class="caption">
                <!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
                <h2> Administración de usuarios registrados</h2>
                <div class="well well-small">
                    <hr class="soft"/>
                    <h4>Edición de usuarios</h4>
                    <div class="row-fluid">
                        <?php
                        extract($_GET);
                        require("../config/connect_db.php");

                        $sql = "SELECT * FROM login WHERE id=$id";
                        $ressql = mysqli_query($mysqli, $sql);
                        while ($row = mysqli_fetch_row($ressql)) {
                            $id = $row[0];
                            $cedula = $row[6];
                            $email = $row[1];
                            $nombres = $row[1];
                            $telefono = $row[1];
                            $sexo = $row[1];
                            $carrera = $row[1];
                            $rol_id = $row[1];
                            $estado = $row[2];
                        }
                        ?>

                        <form action="ejecutaactualizar.php" method="post">
                            Cedula<br><input type="num" name="cedula" value="<?php echo $cedula ?>"><br>
                            Correo<br> <input type="text" name="email" value="<?php echo $email ?>"><br>
                            Nombres<br> <input type="text" name="nombres" value="<?php echo $nombres ?>"><br>
                            Telefono<br> <input type="text" name="telefono" value="<?php echo $telefono ?>"><br>
                            Sexo<br> <input type="text" name="sexo" value="<?php echo $sexo ?>"><br>
                            Carrera<br> <div class="form-group">
                            <select name="carrera" id="carrera" class="form-control" required>
                            <option value="Desarrollo de software <?php echo $carrera ?>">Desarrollo de software</option>
                            <option value="Diseño de modas"  <?php echo $carrera ?>>Diseño de modas</option>
                            <option value="Marketing"  <?php echo $carrera ?>>Marketing</option>
                            <option value="Gastronomia"  <?php echo $carrera ?>>Gastronomia</option>
                            <option value="Turismo"  <?php echo $carrera ?>>Turismo</option>
                            <option value="Bonberos"  <?php echo $carrera ?>>Bonberos</option>
                            </select>
                        </div>
                            Rol<br> <input type="text" name="rol_id" value="<?php echo $rol_id ?>"><br>
                            Estado<br> <input type="text" name="estado" value="<?php echo $estado ?>"><br>
                            <br>
                            <input type="submit" value="Guardar" class="btn btn-success btn-primary">
                        </form>
                        <div class="span8">

                        </div>
                    </div>
                    <br/>
                    <!--EMPIEZA DESLIZABLE-->
                    <!--TERMINA DESLIZABLE-->
                </div>
                <!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->
            </div>
        </div>
    </div>
</div><!-- /container -->

<!-- Le javascript -->
<script src="bootstrap/js/jquery-1.8.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

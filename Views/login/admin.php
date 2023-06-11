<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
} elseif ($_SESSION['rol'] == 2) {
	header("Location:index2.php");
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
<div class="container">
<header class="header">
<div class="row">

</div>
</header>
<?php
include("../../include/menu.php");
?>
<div class="row">
<div class="span12">
<div class="caption">
<h2>Administración de usuarios registrados</h2>
<div class="well well-small">
<hr class="soft"/>
<h4>Tabla de Usuarios</h4>
<div class="row-fluid">
<?php
require("connect_db.php");
$sql = "SELECT * FROM login";
$query = mysqli_query($mysqli, $sql);
echo "<table class='table'>";
echo "<thead>";
echo "<tr>";
echo "<th scope='col'>Id</th>";
echo "<th scope='col'>Usuario</th>";
echo "<th scope='col'>Password</th>";
echo "<th scope='col'>Correo</th>";
echo "<th scope='col'>Password del administrador</th>";
echo "<th scope='col'>Editar</th>";
echo "<th scope='col'>Borrar</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
?>
<?php
while ($arreglo = mysqli_fetch_array($query)) {
  echo "<tr>";
  echo "<th scope='row'>$arreglo[0]</th>";
  echo "<td>$arreglo[1]</td>";
  echo "<td>$arreglo[2]</td>";
  echo "<td>$arreglo[3]</td>";
  echo "<td>$arreglo[4]</td>";
  echo "<td><a href='actualizar.php?id=$arreglo[0]'><img src='images/actualizar.gif' class='img-rounded'></a></td>";
  echo "<td><a href='admin.php?id=$arreglo[0]&idborrar=2'><img src='images/eliminar.png' class='img-rounded'/></a></td>";
  echo "</tr>";
}
echo "</tbody>";
echo "</table>";
extract($_GET);
if (@$idborrar == 2) {
  $sqlborrar = "DELETE FROM login WHERE id=$id";
  $resborrar = mysqli_query($mysqli, $sqlborrar);
  echo '<script>alert("REGISTRO ELIMINADO")</script> ';
  echo "<script>location.href='admin.php'</script>";
}
?>
</div>
<br/>
</div>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script type="text/javascript" src="../../Assets/js/menu.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

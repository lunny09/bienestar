<?php
extract($_POST);
require("../config/connect_db.php");
$sentencia = "update login set password_hash='$pass', email='$email', cedula='$cedula', nombres='$nombres', telefono='$telefono', Sexo='$sexo', carrera='$carrera', rol_id='$rol_id', estado='$estado' WHERE id='$id'";
$resent = mysqli_query($mysqli, $sentencia);
if ($resent == null) {
	echo "Error de procesamiento, no se han actualizado los datos";
	echo '<script>alert("ERROR EN PROCESAMIENTO. NO SE ACTUALIZARON LOS DATOS")</script>';
	header("location:../views/admin/admin.php");
} else {
	echo '<script>alert("REGISTRO ACTUALIZADO")</script>';
	echo "<script>location.href='../views/admin/admin.php'</script>";
}
?>

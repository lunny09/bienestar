<?php
extract($_POST);
require("../config/connect_db.php");
$sentencia = "update login set user='$user', password_hash='$pass', email='$email', pasadmin='$pasadmin' where id='$id'";
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

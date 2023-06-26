<?php


extract($_POST);	//extraer todos los valores del metodo post del formulario de actualizar
	require("../config/connect_db.php");
	$sentencia = "UPDATE login SET id='$id',email='$email', cedula='$cedula', email='$email', nombres='$nombres', telefono='$telefono', sexo='$sexo', rol_id='$rol_id', carrera='$carrera', estado='$estado' WHERE id='$id'";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$resent=mysqli_query($mysqli,$sentencia);
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		header("location: ../views/admin/admin.php");
		
		echo "<script>location.href='../views/admin/admin.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='../views/admin/admin.php'</script>";

		
	}
?>
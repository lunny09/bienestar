<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIENESTAR ESTUDIANTIL</title>
</head>
<body>
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
                            <label for="rol_id">rol:</label>
                            <select name="rol_id" id="rol_id" class="form-control" required>
                                <option value="2">Paciente</option>
                                <option value="3">Psicologo</option>
                                <option value="1">Administrador</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="estado">Estado:</label>
                            <select name="estado" id="estado" class="form-control" required>
                                <option value="1">Activo</option>
                                <option value="1">Inactivo</option>
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
</body>
</html>
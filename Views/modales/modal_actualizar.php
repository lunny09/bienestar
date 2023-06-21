<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIENESTAR ESTUDIANTIL</title>
</head>
<body>
<div class="modal fade" id="actualizarModal" tabindex="-1" role="dialog" aria-labelledby="actualizarModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="actualizarModal">Editar Usuario</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form action="../../controllers/ejecutaactualizar.php" method="POST">
                    <div class="form-group">
                        <label for="cedula">Cedula:</label>
                        <input type="text" name="cedula" id="cedula" class="form-control" value="<?php echo $cedula; ?>">
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña:</label>
                        <input type="password" name="password_hash" id="password_hash" class="form-control" value="<?php echo $password; ?>">
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo:</label>
                        <input type="email" name="email" id="correo" class="form-control" value="<?php echo $email; ?>">
                    </div>
                    <div class="form-group">
                        <label for="nombres">Nombres y apellidos:</label>
                        <input type="text" name="nombres" id="nombres" class="form-control" value="<?php echo $nombres; ?>">
                    </div>
                    <div class="form-group">
                        <label for="telefono">Teléfono:</label>
                        <input type="text" name="telefono" id="telefono" class="form-control" value="<?php echo $telefono; ?>">
                    </div>
                    <div class="form-group">
                        <label for="sexo">Sexo:</label>
                        <select name="sexo" id="sexo" class="form-control">
                            <option value="Masculino" <?php if ($sexo == 'Masculino') echo 'selected'; ?>>Masculino</option>
                            <option value="Femenino" <?php if ($sexo == 'Femenino') echo 'selected'; ?>>Femenino</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="rol_id">Rol:</label>
                        <select name="rol_id" id="rol_id" class="form-control">
                            <option value="2" <?php if ($rol == '2') echo 'selected'; ?>>Paciente</option>
                            <option value="3" <?php if ($rol == '3') echo 'selected'; ?>>Psicologo</option>
                            <option value="1" <?php if ($rol == '1') echo 'selected'; ?>>Administrador</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="estado">Estado:</label>
                        <select name="estado" id="estado" class="form-control">
                            <option value="1" <?php if ($estado == '1') echo 'selected'; ?>>Activo</option>
                            <option value="2" <?php if ($estado == '2') echo 'selected'; ?>>Inactivo</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="carrera">Carrera:</label>
                        <select name="carrera" id="carrera" class="form-control">
                            <option value="Desarrollo de software" <?php if ($carrera == 'Desarrollo de software') echo 'selected'; ?>>Desarrollo de software</option>
                            <option value="Diseño de modas" <?php if ($carrera == 'Diseño de modas') echo 'selected'; ?>>Diseño de modas</option>
                            <option value="Marketing" <?php if ($carrera == 'Marketing') echo 'selected'; ?>>Marketing</option>
                            <option value="Gastronomia" <?php if ($carrera == 'Gastronomia') echo 'selected'; ?>>Gastronomia</option>
                            <option value="Turismo" <?php if ($carrera == 'Turismo') echo 'selected'; ?>>Turismo</option>
                            <option value="Bomberos" <?php if ($carrera == 'Bomberos') echo 'selected'; ?>>Bomberos</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="../../Assets/js/estado.js"></script>
</body>
</html>
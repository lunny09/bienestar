function cambiarEstado(usuarioId, estadoActual) {
    var nuevoEstado = (estadoActual == 1) ? 0 : 1;

    $.ajax({
        url: '../../controllers/cambiar_estado.php',
        method: 'POST',
        data: {
            id: usuarioId,
            estado: nuevoEstado
        },
        success: function(response) {
            if (response == 'success') {
                location.reload();
            } else {
                alert('Error al cambiar el estado del usuario.');
            }
        },
        error: function() {
            alert('Error de conexión con el servidor.');
        }
    });
}

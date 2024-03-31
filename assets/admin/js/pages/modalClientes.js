$(document).ready(function() {
    $('#tablaClientes').on('click', '.btn-primary', function() {
        var idUsuario = $(this).data('id-usuario');

        $.ajax({
            url: base_url + 'cliente/obtenerCliente',
            method: 'POST',
            data: { id_usuario: idUsuario },
            success: function(response) {
                var cliente = JSON.parse(response);
                $('#nombre_usuario').val(cliente.nombre_usuario);
                $('#apellido_usuario').val(cliente.apellido_usuario);
                $('#usuario').val(cliente.usuario);
                $('#correo_usuario').val(cliente.correo_usuario);
                $('#direccion_usuario').val(cliente.direccion_usuario);
                $('#telefono_usuario').val(cliente.telefono_usuario);
            }
        });
    });
});

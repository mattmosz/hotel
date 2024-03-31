$(document).ready(function() {
    var idUsuario;
    $('#tablaClientes').on('click', '.btn-primary', function() {
        var row = $(this).closest('tr');
        idUsuario = $(this).data('id-usuario');
    }); 

    $('#modalCliente .btn-primary').on('click', function(e) {
        e.preventDefault();

        var datos = {
            id_usuario: idUsuario,
            nombre_usuario: $('#nombre_usuario').val(),
            apellido_usuario: $('#apellido_usuario').val(),
            usuario: $('#usuario').val(),
            correo_usuario: $('#correo_usuario').val(),
            direccion_usuario: $('#direccion_usuario').val(),
            telefono_usuario: $('#telefono_usuario').val()
        };
        
        $.ajax({
            url: base_url + 'cliente/actualizarCliente',
            method: 'POST',
            data: datos,
            success: function(response) {
                sweetalert('Cliente actualizado', 'success');
                $('#modalCliente').modal('hide');
                location.reload();
            },
            error: function() {
                sweetalert('Error al actualizar el cliente', 'warning');
            }
        });
    });
});
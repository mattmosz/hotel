$('#nuevoClienteModal .btn-primary').on('click', function(e) {
    e.preventDefault();

    var datos = {
        nombre_usuario: $('#nuevoClienteModal #nombre_usuario').val(),
        apellido_usuario: $('#nuevoClienteModal #apellido_usuario').val(),
        usuario: $('#nuevoClienteModal #usuario').val(),
        correo_usuario: $('#nuevoClienteModal #correo_usuario').val(),
        clave_usuario: $('#nuevoClienteModal #clave_usuario').val(),
        estado_usuario: $('#nuevoClienteModal #estado_usuario').val()
    };
    
    $.ajax({
        url: base_url + 'cliente/insertarCliente',
        method: 'POST',
        data: datos,
        success: function(response) {
            sweetalert('Cliente insertado', 'success');
            $('#nuevoClienteModal').modal('hide');
            location.reload();
        },
        error: function() {
            sweetalert('Error al insertar el cliente', 'warning');
        }
    });
});

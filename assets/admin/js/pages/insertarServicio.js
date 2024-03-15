$('#nuevoServicioModal .btn-primary').on('click', function(e) {
    e.preventDefault();

    var datos = {
        titulo_servicio: $('#nuevoServicioModal #titulo_servicio').val(),
        descripcion_servicio: $('#nuevoServicioModal #descripcion_servicio').val()
    };
    
    $.ajax({
        url: base_url + 'servicio/insertarServicio',
        method: 'POST',
        data: datos,
        success: function(response) {
            Swal.fire('Servicio insertado', '', 'success');
            $('#nuevoServicioModal').modal('hide');
            location.reload();
        },
        error: function() {
            Swal.fire('Error al insertar el servicio', '', 'error');
        }
    });
});

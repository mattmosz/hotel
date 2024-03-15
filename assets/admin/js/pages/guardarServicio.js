$(document).ready(function() {
    var idServicio;
    $('#tablaServicios').on('click', '.btn-primary', function() {
        var row = $(this).closest('tr');
        idServicio = $(this).data('id-servicio');
    }); 

    $('#modalServicio .btn-primary').on('click', function(e) {
        e.preventDefault();
    
        var datos = {
            id_servicio: idServicio,
            titulo_servicio: $('#titulo_servicio').val(),
            descripcion_servicio: $('#descripcion_servicio').val()
        };
        
        $.ajax({
            url: base_url + 'servicio/actualizarServicio',
            method: 'POST',
            data: datos,
            success: function(response) {
                Swal.fire('Servicio actualizado', '', 'success');
                $('#modalServicio').modal('hide');
                location.reload();
            },
            error: function() {
                Swal.fire('Error al actualizar el servicio', '', 'error');
            }
        });
    });
    
});

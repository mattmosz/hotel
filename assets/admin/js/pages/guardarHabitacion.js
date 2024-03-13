$(document).ready(function() {
    var idHabitacion;
    $('#tablaHabitaciones').on('click', '.btn-primary', function() {
        var row = $(this).closest('tr');
        idHabitacion = $(this).data('id-habitacion');
    }); 

    $('#modalHabitacion .btn-primary').on('click', function(e) {
        e.preventDefault();

        var datos = {
            id_habitacion: idHabitacion,
            numero_habitacion: $('#numero_habitacion').val(),
            estilo_habitacion: $('#estilo_habitacion').val(),
            descripcion_habitacion: $('#descripcion_habitacion').val(),
            precio_noche: $('#precio_noche').val(),
            estado_habitacion: $('#estado_habitacion').val()
        };
        
        $.ajax({
            url: base_url + 'habitacion/actualizarHabitacion',
            method: 'POST',
            data: datos,
            success: function(response) {
                sweetalert('Habitación actualizada', 'success');
                $('#modalHabitacion').modal('hide');
                location.reload();
            },
            error: function() {
                sweetalert('Error al actualizar la habitación', 'warning');
            }
        });
    });
});

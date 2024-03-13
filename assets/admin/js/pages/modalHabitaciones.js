$(document).ready(function() {
    $('#tablaHabitaciones').on('click', '.btn-primary', function() {
        var row = $(this).closest('tr');
        var idHabitacion = $(this).data('id-habitacion');

        $.ajax({
            url: base_url + 'habitacion/obtenerHabitacion',
            method: 'POST',
            data: { id_habitacion: idHabitacion },
            success: function(response) {
                var habitacion = JSON.parse(response);
                $('#numero_habitacion').val(habitacion.numero_habitacion);
                $('#estilo_habitacion').val(habitacion.estilo_habitacion);
                $('#descripcion_habitacion').val(habitacion.descripcion_habitacion);
                $('#precio_noche').val(habitacion.precio_noche);
                $('#estado_habitacion').val(habitacion.estado_habitacion);
            }
        });
    });
});

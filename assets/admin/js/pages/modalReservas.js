$(document).ready(function() {
    $('#sampleTable').on('click', '.btn-primary', function() {
        var row = $(this).closest('tr');
        var numeroReserva = row.find('td:eq(2)').text();

        $.ajax({
            url: base_url + 'reserva/obtenerReserva',
            method: 'POST',
            data: { numero_reserva: numeroReserva },
            success: function(response) {
                var reserva = JSON.parse(response);
                $('#total_reserva').val(reserva.total_reserva);
                $('#fecha_inicio').val(reserva.fecha_inicio);
                $('#fecha_salida').val(reserva.fecha_salida);
                $('#estado_reserva').val(reserva.estado_reserva);
                $('#id_habitacion').val(reserva.id_habitacion);
                $('#id_usuario').val(reserva.id_usuario);
            }
        });
    });
});


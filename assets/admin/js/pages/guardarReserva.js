$(document).ready(function() {
    var numeroReserva;
    $('#sampleTable').on('click', '.btn-primary', function() {
        var row = $(this).closest('tr');
        numeroReserva = row.find('td:eq(2)').text();
    }); 

    $('#editModal .btn-primary').on('click', function(e) {
        e.preventDefault();

        var datos = {
            numero_reserva: numeroReserva,
            total_reserva: $('#total_reserva').val(),
            fecha_inicio: $('#fecha_inicio').val(),
            fecha_salida: $('#fecha_salida').val(),
            estado_reserva: $('#estado_reserva').val(),
            id_habitacion: $('#id_habitacion').val(),
            id_usuario: $('#id_usuario').val()
        };
        
        $.ajax({
            url: base_url + 'reserva/actualizarReserva',
            method: 'POST',
            data: datos,
            success: function(response) {
                sweetalert('Reserva actualizada', 'success');
            $('#editModal').modal('hide');
            location.reload();
            },
            error: function() {
                sweetalert('Error al actualizar la reserva', 'warning');
            }
        });
    });
});

$('#nuevaHabitacionModal .btn-primary').on('click', function(e) {
    e.preventDefault();

    var datos = {
        numero_habitacion: $('#nuevaHabitacionModal #numero_habitacion').val(),
        estilo_habitacion: $('#nuevaHabitacionModal #estilo_habitacion').val(),
        descripcion_habitacion: $('#nuevaHabitacionModal #descripcion_habitacion').val(),
        precio_noche: $('#nuevaHabitacionModal #precio_noche').val(),
        estado_habitacion: $('#nuevaHabitacionModal #estado_habitacion').val()
    };
    
    $.ajax({
        url: base_url + 'habitacion/insertarHabitacion',
        method: 'POST',
        data: datos,
        success: function(response) {
            sweetalert('Habitación insertada', 'success');
            $('#nuevaHabitacionModal').modal('hide');
            location.reload();
        },
        error: function() {
            sweetalert('Error al insertar la habitación', 'warning');
        }
    });
});


$('#tablaHabitaciones').on('click', '.btn-danger', function(e) {
    e.preventDefault();

    var idHabitacion = $(this).data('id-habitacion');
    Swal.fire({
        title: '¿Estás seguro?',
        text: "No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, bórralo!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: base_url + 'habitacion/eliminarHabitacion/' + idHabitacion,
                method: 'POST',
                success: function(response) {
                    var data = JSON.parse(response);
                    if (data.success) {
                        Swal.fire(
                            'Eliminado!',
                            'La habitación ha sido eliminada.',
                            'success'
                        );
                        location.reload();
                    } else {
                        Swal.fire(
                            'Error!',
                            'Hubo un error al eliminar la habitación.',
                            'error'
                        );
                    }
                } 
            });
        }
    });
});

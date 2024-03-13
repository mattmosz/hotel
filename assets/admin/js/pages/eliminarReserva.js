$('#sampleTable').on('click', '.btn-danger', function(e) {
    e.preventDefault();

    var numeroReserva = $(this).data('numero-reserva');
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
                url: base_url + 'reserva/eliminarReserva/' + numeroReserva,
                method: 'POST',
                success: function(response) {
                    var data = JSON.parse(response);
                    if (data.success) {
                        Swal.fire(
                            'Eliminado!',
                            'La reserva ha sido eliminada.',
                            'success'
                        );
                        location.reload();
                    } else {
                        Swal.fire(
                            'Error!',
                            'Hubo un error al eliminar la reserva.',
                            'error'
                        );
                    }
                } 
            });
        }
    });
});


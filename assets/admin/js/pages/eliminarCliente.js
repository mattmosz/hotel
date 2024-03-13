$('#tablaClientes').on('click', '.btn-danger', function(e) {
    e.preventDefault();

    var idUsuario = $(this).data('id-cliente');
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
                url: base_url + 'cliente/eliminarCliente/' + idUsuario,
                method: 'POST',
                success: function(response) {
                    var data = JSON.parse(response);
                    if (data.success) {
                        Swal.fire(
                            'Eliminado!',
                            'El cliente ha sido eliminado.',
                            'success'
                        );
                        location.reload();
                    } else {
                        Swal.fire(
                            'Error!',
                            'Hubo un error al eliminar el cliente.',
                            'error'
                        );
                    }
                } 
            });
        }
    });
});

$(document).ready(function() {
    $('#tablaServicios').on('click', '.btn-primary', function() {
        var idServicio = $(this).data('id-servicio');

        $.ajax({
            url: base_url + 'servicio/obtenerServicio',
            method: 'POST',
            data: { id_servicio: idServicio },
            success: function(response) {
                var servicio = JSON.parse(response);
                $('#titulo_servicio').val(servicio.titulo_servicio);
                $('#descripcion_servicio').val(servicio.descripcion_servicio);
            }
        });
    });
});

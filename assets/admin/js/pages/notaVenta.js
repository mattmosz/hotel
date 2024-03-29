$(document).ready(function() {
    $('.btn-success').click(function() {
        var nombre_usuario = $(this).closest('tr').find('td:eq(0)').text();
        var apellido_usuario = $(this).closest('tr').find('td:eq(1)').text();
        var numero_reserva = $(this).closest('tr').find('td:eq(2)').text();
        var fecha_inicio = $(this).closest('tr').find('td:eq(3)').text();
        var fecha_salida = $(this).closest('tr').find('td:eq(4)').text();
        var total_reserva = $(this).closest('tr').find('td:eq(5)').text();
        var estilo_habitacion = $(this).closest('tr').find('td:eq(6)').text();

        var nota_venta = "<div style='text-align: center;'><img src='http://localhost/quinto/hotel/assets/img/logo.jpg' alt='Logo' style='width: 200px;'><h1>Nota de Venta</h1><p>Cliente: " + nombre_usuario + " " + apellido_usuario + "</p><p>Número de Reserva: " + numero_reserva + "</p><p>Fecha de Inicio: " + fecha_inicio + "</p><p>Fecha de Salida: " + fecha_salida + "</p><p>Total de la Reserva: " + total_reserva + "</p><p>Estilo de Habitación: " + estilo_habitacion + "</p></div>";

        var myWindow = window.open("", "Nota de Venta", "width=600,height=600");
        myWindow.document.write(nota_venta);
    });
});



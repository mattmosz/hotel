$(document).ready(function() {
    $('#imprimir-nota').click(function(e) {
        e.preventDefault();

        var cliente = $('.list-group-item-action:eq(0)').text().split(':')[1].trim();
        var habitacion = $('.list-group-item-action:eq(1)').text().split(':')[1].trim();
        var fechaLlegada = $('.list-group-item-action:eq(2)').text().split(':')[1].trim();
        var fechaSalida = $('.list-group-item-action:eq(3)').text().split(':')[1].trim();
        var precioNoche = $('.list-group-item-action:eq(4)').text().split(':')[1].trim();
        var capacidad = $('.list-group-item-action:eq(5)').text().split(':')[1].trim();
        var numHabitacion = $('.list-group-item-action:eq(6)').text().split(':')[1].trim();
        var descripcion = $('.list-group-item-action:eq(7)').text().split(':')[1].trim();
        var total = $('.list-group-item-action:eq(8)').text().split(':')[1].trim();

        var nota_venta = "<div style='text-align: center;'><h1>Nota de Venta</h1><img src='http://localhost/quinto/hotel/assets/img/logo.jpg' alt='Logo' style='width: 200px;'><p>Cliente: " + cliente + "</p><p>Habitación: " + habitacion + "</p><p>Fecha llegada: " + fechaLlegada + "</p><p>Fecha salida: " + fechaSalida + "</p><p>Precio/Noche: " + precioNoche + "</p><p>Capacidad: " + capacidad + "</p><p>Núm. Habitación: " + numHabitacion + "</p><p>Descripción: " + descripcion + "</p><p>Total: " + total + "</p></div>";
        nota_venta += "<p style='font-weight: bold; color: red; text-align: center;'>Presente esta nota de venta en recepción al momento de su llegada.</p>";

        var myWindow = window.open("", "Nota de Venta", "width=600,height=600");
        myWindow.document.write(nota_venta);
    });
});

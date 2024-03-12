const frm = document.getElementById("reserva-form");
frm.addEventListener("submit", function(event) {
    event.preventDefault();

    const http = new XMLHttpRequest();
    const url = base_url + "perfil/guardarReserva";
    http.open('POST', url, true);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.onreadystatechange = function() {
        if (this.readyState == 4 && this.status === 200) {
            const respuesta = JSON.parse(this.responseText);
            sweetalert(respuesta.msg, respuesta.tipo);
            if (respuesta.tipo === 'success') {
                sweetalert('Reserva realizada con éxito', 'success');
                // Clear reservation data and display message
                document.getElementById("reserva-form").reset();
                document.getElementById("mensaje-reserva").textContent = "No tienes reservas pendientes";
            } else {
                sweetalert('Hubo un error al realizar la reserva', 'warning');
            }
        }
    };
    http.send("reserva=true");
});
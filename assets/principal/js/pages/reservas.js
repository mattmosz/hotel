const fecha_llegada = document.querySelector("#fecha_llegada");
const fecha_salida = document.querySelector("#fecha_salida");
const habitacion = document.querySelector("#habitacion");
document.addEventListener("DOMContentLoaded", function () {
  var calendarEl = document.getElementById("calendar");

  var calendar = new FullCalendar.Calendar(calendarEl, {
    headerToolbar: {
      left: "prev,next today",
      center: "title",
      right: "dayGridMonth,timeGridWeek,timeGridDay,listMonth",
    },

    locale: "es",
    navLinks: true, // can click day/week names to navigate views
    businessHours: true, // display business hours
    editable: true,
    selectable: true,
    events:
      base_url +
      "reserva/listar/" +
      fecha_llegada.value +
      "/" +
      fecha_salida.value +
      "/" +
      habitacion.value,
  });

  calendar.render();
});

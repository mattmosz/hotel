const frm = document.querySelector("#formulario");
document.addEventListener("DOMContentLoaded", function () {
  frm.addEventListener("submit", function (e) {
    e.preventDefault();
    //if (frm.usuario.value == "" || frm.clave.value == "") {
    //  sweetalert("TODOS LOS CAMPOS SON OBLIGATORIOS", "warning");
    //} else {
      const http = new XMLHttpRequest();
      const url = base_url + "login/verify";
      http.open("POST", url, true);
      http.send(new FormData(frm));
      http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          console.log(this.responseText);
          const res = JSON.parse(this.responseText);
          sweetalert(res.msg, res.tipo);
          if (res.tipo == "success") {
            frm.reset();
            //Redirigir
          }
        }
      };
    //}
  });
});
